@extends('Admin.layout.inc.app')
@section('styles')
    <link href="{{url('assets/default/dropify/dropify.min.css')}}" rel="stylesheet">
    <style>
        .cke_notifications_area{
            display: none;
        }
    </style>
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.setting')}}</li>
@endsection
@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.setting')) !!}
        <div class="card-body">
            <form class="row g-3" action="{{route('setting.store')}}" id="form" enctype="multipart/form-data"
                  method="POST">
                @csrf

{{--                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                    <div class="d-flex flex-column mb-7 fv-row col-sm-3">--}}
{{--                        <!--begin::Label-->--}}
{{--                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                            <span--}}
{{--                                class="required mr-1">{{helperTrans('admin.site Title')}} ({{$properties['native']}})</span>--}}
{{--                        </label>--}}
{{--                        <!--end::Label-->--}}
{{--                        <input required type="text" class="form-control form-control-solid"--}}
{{--                               placeholder="{{helperTrans('admin.title')}}" name="title[{{$localeCode}}]"--}}
{{--                               value="{{$obj->getTranslation('title',$localeCode)}}"/>--}}
{{--                    </div>--}}
{{--                @endforeach--}}


                <div class="col-6">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.address') }} (العربية)</label>
                        <textarea required type="text" class="form-control form-control-solid"
                                  placeholder="{{helperTrans('admin.address')}}" name="address_ar">{{$obj->address_ar}}</textarea>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.address') }} (English)</label>
                        <textarea required type="text" class="form-control form-control-solid"
                                  placeholder="{{helperTrans('admin.address')}}" name="address_en">{{$obj->address_en}}</textarea>
                    </div>
                </div>


                <div class="col-6">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.work_time') }} (العربية)</label>
                        <textarea required type="text" class="form-control form-control-solid"
                                  placeholder="{{helperTrans('admin.work_time')}}" name="work_time_ar">{{$obj->work_time_ar}}</textarea>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.work_time') }} (English)</label>
                        <textarea required type="text" class="form-control form-control-solid"
                                  placeholder="{{helperTrans('admin.work_time')}}" name="work_time_en">{{$obj->work_time_en}}</textarea>
                    </div>
                </div>


{{--                <div class="d-flex flex-column mb-7 fv-row col-sm-6">--}}
{{--                    <!--begin::Label-->--}}
{{--                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                        <span class="required mr-1">{{helperTrans('admin.address')}}</span>--}}
{{--                    </label>--}}
{{--                    <!--end::Label-->--}}
{{--                    <textarea required type="text" class="form-control form-control-solid"--}}
{{--                           placeholder="{{helperTrans('admin.address')}}" name="address">{{$obj->address}}</textarea>--}}
{{--                </div>--}}

                <div class="d-flex flex-column mb-7 fv-row col-sm-3">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required mr-1">{{helperTrans('admin.email')}}</span>
                    </label>
                    <!--end::Label-->
                    <input required type="email" class="form-control form-control-solid"
                           placeholder="{{helperTrans('admin.email')}}" name="email"
                           value="{{$obj->email}}"/>
                </div>


                <div class="d-flex flex-column mb-7 fv-row col-sm-3">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required mr-1">{{helperTrans('admin.phone')}}</span>
                    </label>
                    <!--end::Label-->
                    <input required type="number" class="form-control form-control-solid"
                           placeholder="{{helperTrans('admin.phone')}}" name="phone"
                           value="{{$obj->phone}}"/>
                </div>
                <div class="d-flex flex-column mb-7 fv-row col-sm-3">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required mr-1">{{helperTrans('admin.whatsapp')}}</span>
                    </label>
                    <!--end::Label-->
                    <input required type="text" class="form-control form-control-solid"
                           placeholder="{{helperTrans('admin.whatsapp')}}" name="whatsapp"
                           value="{{$obj->whatsapp}}"/>
                </div>

                <div class="d-flex flex-column mb-7 fv-row col-sm-3">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required mr-1">{{helperTrans('admin.telegram')}}</span>
                    </label>
                    <!--end::Label-->
                    <input required type="text" class="form-control form-control-solid"
                           placeholder="{{helperTrans('admin.telegram')}}" name="telegram"
                           value="{{$obj->telegram}}"/>
                </div>


{{--                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                    <div class="d-flex flex-column mb-7 fv-row col-sm-6">--}}
{{--                        <!--begin::Label-->--}}
{{--                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                            <span class="required mr-1">{{helperTrans('admin.description')}} ({{$properties['native']}})</span>--}}
{{--                        </label>--}}
{{--                        <!--end::Label-->--}}
{{--                        <textarea required type="text" class="form-control form-control-solid" placeholder="{{helperTrans('admin.description')}}"--}}
{{--                                  name="desc[{{$localeCode}}]">{{$obj->getTranslation('desc',$localeCode)}}</textarea>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <div class="d-flex flex-column mb-7 fv-row col-sm-3">--}}
{{--                    <!--begin::Label-->--}}
{{--                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                        <span class="required mr-1">{{helperTrans('admin.twitter')}}</span>--}}
{{--                    </label>--}}
{{--                    <!--end::Label-->--}}
{{--                    <input required type="url" class="form-control form-control-solid"--}}
{{--                           placeholder="{{helperTrans('admin.twitter')}}" name="twitter"--}}
{{--                           value="{{$obj->twitter}}"/>--}}
{{--                </div>--}}
{{--                <div class="d-flex flex-column mb-7 fv-row col-sm-3">--}}
{{--                    <!--begin::Label-->--}}
{{--                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                        <span class="required mr-1">{{helperTrans('admin.facebook')}}</span>--}}
{{--                    </label>--}}
{{--                    <!--end::Label-->--}}
{{--                    <input required type="url" class="form-control form-control-solid"--}}
{{--                           placeholder="{{helperTrans('admin.facebook')}}" name="facebook"--}}
{{--                           value="{{$obj->facebook}}"/>--}}
{{--                </div>--}}
{{--                <div class="d-flex flex-column mb-7 fv-row col-sm-3">--}}
{{--                    <!--begin::Label-->--}}
{{--                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                        <span class="required mr-1">{{helperTrans('admin.snapchat')}}</span>--}}
{{--                    </label>--}}
{{--                    <!--end::Label-->--}}
{{--                    <input required type="url" class="form-control form-control-solid"--}}
{{--                           placeholder="{{helperTrans('admin.snapchat')}}" name="snapchat"--}}
{{--                           value="{{$obj->snapchat}}"/>--}}
{{--                </div>--}}
{{--                <div class="d-flex flex-column mb-7 fv-row col-sm-3">--}}
{{--                    <!--begin::Label-->--}}
{{--                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">--}}
{{--                        <span class="required mr-1">{{helperTrans('admin.instagram')}}</span>--}}
{{--                    </label>--}}
{{--                    <!--end::Label-->--}}
{{--                    <input required type="url" class="form-control form-control-solid"--}}
{{--                           placeholder="{{helperTrans('admin.instagram')}}" name="instagram"--}}
{{--                           value="{{$obj->instagram}}"/>--}}
{{--                </div>--}}
                <div class="col-12">
                    <div class="mb-2">
                        <div class="form-label">{{helperTrans('admin.site Logo')}}</div>
                        <input type="file" class="dropify" name="logo" data-default-file="{{get_file($obj->logo)}}" accept="image/*"/>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.terms_conditions') }} (العربية)</label>
                        <textarea rows="4" class="form-control form-control-lg"
                                  name="terms_conditions_ar" required> {{$obj->terms_conditions_ar}}</textarea>
{{--                                  placeholder="">{{$obj->getTranslation('terms_conditions', 'ar')}}</textarea>--}}
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.terms_conditions') }} (English)</label>
                        <textarea rows="4" class="form-control form-control-lg"
                                  name="terms_conditions_en" required>{{$obj->terms_conditions_en}}</textarea>
{{--                                  placeholder="{{ helperTrans('admin.terms_conditions') }}">{{$obj->getTranslation('terms_conditions', 'en')}}</textarea>--}}
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.privacy_policy') }} (العربية)</label>
                        <textarea rows="4" class="form-control form-control-lg"
                                  name="privacy_ar" required>{{$obj->privacy_ar}}</textarea>
{{--                                  placeholder="{{ helperTrans('admin.privacy_policy') }}">{{$obj->getTranslation('privacy', 'ar')}}</textarea>--}}
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.privacy_policy') }} (English)</label>
                        <textarea rows="4" class="form-control form-control-lg"
                                  name="privacy_en" required>{{$obj->privacy_en}}</textarea>
{{--                                  placeholder="{{ helperTrans('admin.privacy_policy') }}">{{$obj->getTranslation('privacy', 'en')}}</textarea>--}}
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.return_policy') }} (العربية)</label>
                        <textarea rows="4" class="form-control form-control-lg"
                                  name="return_policy_ar" required>{{$obj->return_policy_ar}}</textarea>
{{--                                  placeholder="{{ helperTrans('admin.return_policy') }}">{{$obj->getTranslation('return_policy', 'ar')}}</textarea>--}}
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-2">
                        <label class="form-label">{{ helperTrans('admin.return_policy') }} (English)</label>
                        <textarea rows="4" class="form-control form-control-lg"
                                  name="return_policy_en" required>{{$obj->return_policy_en}}</textarea>
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
        // CKEDITOR.replace('terms');
        // CKEDITOR.replace('privacy');
        // CKEDITOR.replace('about_us');


        CKEDITOR.replace('terms_conditions_ar');
        CKEDITOR.replace('terms_conditions_en');
        CKEDITOR.replace('privacy_ar');
        CKEDITOR.replace('privacy_en');
        CKEDITOR.replace('return_policy_ar');
        CKEDITOR.replace('return_policy_en');


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
