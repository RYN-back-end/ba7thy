<style>
    .dataTables_processing {
        text-align: center;
    }
    .dataTables_empty {
        text-align: center;
    }

    .infy-loader {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #outline {
        stroke-dasharray: 2.427766571px, 242.7766571045px;
        stroke-dashoffset: 0;
        animation: anim 1.6s linear infinite;
    }

    @keyframes anim {
        12.5% {
            stroke-dasharray: 33.9887319946px, 242.7766571045px;
            stroke-dashoffset: -26.7054322815px;
            stroke: #455662;
        }
        43.75% {
            stroke-dasharray: 84.9718299866px, 242.7766571045px;
            stroke-dashoffset: -84.9718299866px;
            stroke: #f5981c;
        }
        50% {
            stroke-dasharray: 94.9718299866px, 242.7766571045px;
            stroke-dashoffset: -94.9718299866px;
            stroke: red;
        }
        to {
            stroke-dasharray: 2.427766571px, 242.7766571045px;
            stroke-dashoffset: -240.3488905334px;
            stroke: #00c6ff;
        }
    }
</style>

<div class="modal fade " id="Modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-{{$modalSize??'lg'}}">
        <div class="modal-content ">
            <!-- header -->
            <div class="modal-header">
                <h6 class="modal-title fw-bold header-text"></h6>
                <button type="button" class="btn-close ms-auto me-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body" id="form-load">
            </div>
            <div class="col-12 text-center mt-4">
                <button type="submit" id="submit" form="form" class="btn btn-lg btn-block btn-dark lift text-uppercase">
                    {{helperTrans('admin.submit')}}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="showModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content ">
            <!-- header -->
            <div class="modal-header">
                <h6 class="modal-title fw-bold header-text"></h6>
                <button type="button" class="btn-close ms-auto me-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body" id="show-form-load">
            </div>
        </div>
    </div>
</div>
<script src="{{url('assets/dashboard')}}/js/bundle/dataTables.bundle.js"></script>


<script src="//fastly.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var newUrl = location.href;

    var loader_form = `{!! loaderInf() !!}`;
    $('#dataTable').DataTable({
        responsive: true,
        processing: true,
        searching: true,
        paging: true,
        ordering: false,
        info: false,
        serverSide: true,
        ajax: newUrl,
        columns: columns,
        "language":<?php echo json_encode(datatable_lang());?>,
        destroy: true,
    });

    $(document).on('click', '#addBtn', function () {
        $('#form-load').html(loader_form)
        $('#Modal .header-text').text('{{helperTrans('admin.add')}} {{$oneObjectTitle}}');

        $('#submit').show()
        $('#Modal').modal('show')

        setTimeout(function () {
            $('#form-load').load("{{route("$url.create")}}"+location.search)
        }, 1000)
    });

    $(document).on('click', '.showBtn', function () {
        var id = $(this).data('id');
        $('#showModal .header-text').text('{{helperTrans('admin.show')}} {{$oneObjectTitle}}');
        $('#show-form-load').html(loader_form)
        $('#showModal').modal('show')

        var url = "{{route("$url.show",':id')}}"+location.search;
        url = url.replace(':id', id)

        setTimeout(function () {
            $('#show-form-load').load(url)
        }, 1000)
    });
    $(document).on('click', '.editBtn', function () {
        var id = $(this).data('id');
        $('#Modal .header-text').text('{{helperTrans('admin.edit')}} {{$oneObjectTitle}}');
        $('#form-load').html(loader_form)
        $('#Modal').modal('show')

        var url = "{{route("$url.edit",':id')}}"+location.search;
        url = url.replace(':id', id)

        setTimeout(function () {
            $('#form-load').load(url)
        }, 1000)


    });
    $(document).on('submit', "#form-load > #form", function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        var url = $('#form-load > form').attr('action');
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            beforeSend: function () {


                $('#submit').html('<span style="margin-left: 4px;">{{helperTrans('admin.working')}}</span>').attr('disabled', true);
                $('#form-load').append(loader_form)
                $('#form-load > form').hide()
            },
            complete: function () {
            },
            success: function (data) {

                window.setTimeout(function () {
                    $('#submit').html('{{helperTrans('admin.submit')}}').attr('disabled', false);

                    if (data.code == 200) {
                        my_toaster(data.message, 'success')
                        $('#Modal').modal('hide')
                        $('#form-load > form').remove()
                        $('#dataTable').DataTable().ajax.reload(null, false);
                    }
                    {{--else if (data.code == 402) {--}}
                    {{--    my_toaster("يرجي تسجيل الدخول مجددا", 'info')--}}
                    {{--    window.location.href = "{{route('admin.login')}}";--}}
                    {{--}--}}

                    else {
                        $('#form-load > .infy-loader').hide(loader_form)
                        $('#form-load > form').show()
                        my_toaster(data.message, 'error')
                    }
                }, 1000);


            },
            error: function (data) {
                $('#form-load > .infy-loader').remove()
                $('#submit').html('{{helperTrans('admin.submit')}}').attr('disabled', false);
                $('#form-load > form').show()
                if (data.status === 500) {
                    my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                }
                if (data.status === 422) {
                    var errors = $.parseJSON(data.responseText);

                    $.each(errors, function (key, value) {
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                my_toaster(value, 'error')
                            });

                        } else {

                        }
                    });
                }
                if (data.status == 421) {
                    my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                }

            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });
    $(document).on('click', '.delete', function () {

        var id = $(this).data('id');
        swal.fire({
            title: "{{helperTrans('admin.Confirm deletion')}}",
            text: "{{helperTrans('admin.Are you sure to delete')}}",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "{{helperTrans('admin.submit')}}",
            cancelButtonText: "{{helperTrans('admin.cancel')}}",
            okButtonText: "{{helperTrans('admin.ok')}}",
            closeOnConfirm: false
        }).then((result) => {
            if (!result.isConfirmed) {
                return true;
            }
            var url = '{{ route("$url.destroy",":id") }}';
            url = url.replace(':id', id)
            $.ajax({
                url: url,
                type: 'DELETE',
                beforeSend: function () {
                    $('.loader-ajax').show()

                },
                success: function (data) {

                    window.setTimeout(function () {
                        $('.loader-ajax').hide()
                        if (data.code == 200) {
                            my_toaster(data.message)
                            $('#dataTable').DataTable().ajax.reload(null, false);
                        } else {
                            my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                        }

                    }, 1000);
                }, error: function (data) {

                    if (data.status === 500) {
                        my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                    }


                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);

                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    my_toaster(value, 'error')
                                });

                            } else {
                                my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                            }
                        });
                    }
                }

            });
        });
    });

    $(document).on('keyup','.numbersOnly',function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });
</script>
