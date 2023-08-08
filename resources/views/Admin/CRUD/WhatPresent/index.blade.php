@extends('Admin.layout.inc.app')
@section('styles')
    <link href="{{url('assets/default/dropify/dropify.min.css')}}" rel="stylesheet">
    <script src="{{url('assets/default/dropify/dropify.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.slider')}}</li>
@endsection

@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.What do we offer')) !!}
        <div class="card-body" id="form-load">
            <form class="row g-3" action="{{route('whatPresent.store')}}" id="form" enctype="multipart/form-data"
                  method="POST">
                @csrf
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required mr-1">{{helperTrans('admin.text')}} ({{$properties['native']}})</span>
                        </label>
                        <!--end::Label-->
                        <textarea required type="text" class="form-control form-control-solid"
                                  placeholder="{{helperTrans('admin.text')}}"
                                  name="text[{{$localeCode}}]">{{$obj->getTranslation('text',$localeCode)}}</textarea>
                    </div>
                    <script>
                        CKEDITOR.replace('text[{{$localeCode}}]');
                    </script>
                @endforeach

                <div class="col-6">
                    <div class="mb-2">
                        <div class="form-label">{{helperTrans('admin.image')}}</div>
                        <input type="file" class="dropify" name="image" data-default-file="{{get_file($obj->image)}}"
                               accept="image/*"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-2">
                        <div class="form-label">{{helperTrans('admin.video')}}</div>
                        <input type="file" class="dropify" name="video" data-default-file="{{get_file($obj->video)}}"
                               accept="video/*"/>
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" id="submit" form="form"
                            class="btn btn-lg btn-block btn-dark lift text-uppercase">
                        {{helperTrans('admin.submit')}}
                    </button>
                </div>

            </form>
            <script>
                $('.dropify').dropify(<?php echo json_encode(dropify_message()); ?>);

            </script>

        </div>
    </div>

@endsection

@section('scripts')
    <script>
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
                },
                complete: function () {
                },
                success: function (data) {

                    window.setTimeout(function () {
                        $('#submit').html('{{helperTrans('admin.submit')}}').attr('disabled', false);

                        if (data.code == 200) {
                            my_toaster(data.message, 'success')
                        } else {
                            my_toaster(data.message, 'error')
                        }
                    }, 1000);


                },
                error: function (data) {
                    $('#submit').html('{{helperTrans('admin.submit')}}').attr('disabled', false);
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

    </script>
@endsection
