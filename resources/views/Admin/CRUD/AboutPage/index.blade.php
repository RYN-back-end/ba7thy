@extends('Admin.layout.inc.app')
@section('styles')
    <link href="{{url('assets/default/dropify/dropify.min.css')}}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.setting')}}</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.About Us')) !!}
        <div class="card-body">
            <form class="row g-3" action="{{route('aboutPage.store')}}" id="form" enctype="multipart/form-data"
                  method="POST">
                @csrf

                    <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span
                                class="required mr-1">الوصف عربي</span>
                        </label>
                        <!--end::Label-->
                        <textarea rows="4" required class="form-control form-control-solid"
                               placeholder="" name="text_ar">{{$obj->text_ar}}</textarea>
                        <script>
                            CKEDITOR.replace('text_ar');
                        </script>
                    </div>
                <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span
                                class="required mr-1">الوصف انجليزي</span>
                    </label>
                    <!--end::Label-->
                    <textarea rows="4" required class="form-control form-control-solid"
                              placeholder="" name="text_en">{{$obj->text_en}}</textarea>
                    <script>
                        CKEDITOR.replace('text_en');
                    </script>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <div class="form-label">الصورة عربي</div>
                        <input type="file" class="dropify" name="image_ar" data-default-file="{{get_file($obj->image_ar)}}" accept="image/*"/>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <div class="form-label">الصورة انجليزي</div>
                        <input type="file" class="dropify" name="image_en" data-default-file="{{get_file($obj->image_en)}}" accept="image/*"/>
                    </div>
                </div>

                <div class="col-12 text-center mt-4">
                    <button type="submit" id="submit" form="form"
                            class="btn btn-lg btn-block btn-dark lift text-uppercase">
                        {{helperTrans('admin.save')}}
                    </button>
                </div>

            </form>

            <!-- data table -->
        </div>
        <!-- modal -->
    </div>

@endsection
@section('scripts')
    <script src="{{url('assets/default/dropify/dropify.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('terms');
        CKEDITOR.replace('privacy');
        CKEDITOR.replace('about_us');

        $('.dropify').dropify(<?php echo json_encode(dropify_message()); ?>);
        $(document).on('submit', "#form", function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            var url = $('#form').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {


                    $('#submit').html('<span style="margin-left: 4px;">جارى العمل</span>').attr('disabled', true);
                },
                complete: function () {
                },
                success: function (data) {

                    window.setTimeout(function () {
                        $('#submit').html('تأكيد').attr('disabled', false);

                        if (data.code == 200) {
                            my_toaster(data.message, 'success')
                        } else {
                            my_toaster(data.message, 'error')
                        }
                    }, 1000);


                },
                error: function (data) {
                    $('#submit').html('تأكيد').attr('disabled', false);
                    if (data.status === 500) {
                        my_toaster('هناك خطأ ما', 'error')
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
                        my_toaster('data.message', 'error')
                    }

                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });

    </script>

@endsection
