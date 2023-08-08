<form class="row g-3" action="{{route('slider.store')}}" id="form" enctype="multipart/form-data" method="POST">
    @csrf
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
    @endforeach
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <div class="d-flex flex-column mb-7 fv-row col-sm-4">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{helperTrans('admin.button text')}} ({{$properties['native']}})</span>
            </label>
            <!--end::Label-->
            <input required type="text" class="form-control form-control-solid"
                   placeholder="{{helperTrans('admin.button text')}}"
                   name="button_text[{{$localeCode}}]"
                   value=""/>
        </div>
    @endforeach
    <div class="d-flex flex-column mb-7 fv-row col-sm-4">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
            <span class="required mr-1">{{helperTrans('admin.button link')}} </span>
        </label>
        <!--end::Label-->
        <input required type="text" class="form-control form-control-solid"
               placeholder="{{helperTrans('admin.button text')}}"
               name="button_link"
               value=""/>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <div class="form-label">{{helperTrans('admin.image')}}</div>
            <input type="file" class="dropify" name="image" data-default-file="" accept="image/*"/>
        </div>
    </div>

</form>
<script>
    $('.dropify').dropify(<?php echo json_encode(dropify_message()); ?>);

</script>
