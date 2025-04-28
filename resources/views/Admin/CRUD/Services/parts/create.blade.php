@extends('Admin.layout.inc.app')
@section('styles')
    <link href="{{url('assets/default/dropify/dropify.min.css')}}" rel="stylesheet">
@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.our articles')}}</li>
@endsection
@section('content')
    <div class="card">
        @if($errors->any())
            <span class="text-danger" style="padding: 5px">
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
            </span>
        @endif
        <form class="row g-3" style="padding: 20px" action="{{route('services.store')}}" id="form"
              enctype="multipart/form-data"
              method="POST">
            @csrf
            <div class="mb-2 col-8">
                <label class="form-label">اسم الرابط</label>
                <input type="text" class="form-control form-control-lg" name="url_title" required>
            </div>
            <div class="mt-5 fs-5 col-4">{{route('frontend.index')}}</div>

            <div class="col-6">
                <div class="mb-2">
                    <label class="form-label">عنوان الصفحة بالعربي</label>
                    <input type="text" class="form-control form-control-lg" name="meta_title_ar" required>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-2">
                    <label class="form-label">عنوان الصفحة بالانجليزي</label>
                    <input type="text" class="form-control form-control-lg" name="meta_title_en" required>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-2">
                    <label class="form-label"> وصف meta بالعربي</label>
                    <textarea rows="4" class="form-control form-control-lg" name="meta_desc_ar" required></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-2">
                    <label class="form-label"> وصف meta بالانجليزي</label>
                    <textarea rows="4" class="form-control form-control-lg" name="meta_desc_en" required></textarea>
                </div>
            </div>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required mr-1">{{helperTrans('admin.title')}} ({{$properties['native']}})</span>
                    </label>
                    <!--end::Label-->
                    <input required type="text" class="form-control form-control-solid"
                           placeholder="{{helperTrans('admin.title')}}"
                           name="title[{{$localeCode}}]"
                           value=""/>
                </div>
            @endforeach
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required mr-1">{{helperTrans('admin.text')}} ({{$properties['native']}})</span>
                    </label>
                    <!--end::Label-->
                    <textarea required type="text" class="form-control form-control-solid"
                              placeholder="{{helperTrans('admin.text')}}"
                              name="text[{{$localeCode}}]"></textarea>
                </div>
                <script>
                    CKEDITOR.replace('text[{{$localeCode}}]');
                </script>
            @endforeach

            <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required mr-1">وصف عربي يعرض في صفحة الاعلانات</span>
                </label>
                <textarea rows="4" class="form-control form-control-lg" name="other_text[ar]" required></textarea>
                <script>
                    CKEDITOR.replace("other_text[ar]");
                </script>
            </div>
            <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                    <span class="required mr-1">وصف انجليزي يعرض في صفحة الاعلانات</span>
                </label>
                <textarea rows="4" class="form-control form-control-lg" name="other_text[en]" required></textarea>
                <script>
                    CKEDITOR.replace("other_text[en]");
                </script>
            </div>
            <div class="col-12">
                <div class="mb-2">
                    <div class="form-label">{{helperTrans('admin.image')}}</div>
                    <input type="file" class="dropify" name="image" data-default-file="" accept="image/*"/>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary " type="submit">اضافة</button>
                <a class="btn btn-secondary " href="{{route('services.index')}}">تراجع</a>
            </div>
        </form>

    </div>

@endsection
<script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>

@section('scripts')
    <script src="{{url('assets/default/dropify/dropify.min.js')}}"></script>
    <script>
        $('.dropify').dropify(<?php echo json_encode(dropify_message()); ?>);
    </script>
@endsection

