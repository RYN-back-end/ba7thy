<form class="row g-3" action="{{route('majors.update',$obj->id)}}" id="form" enctype="multipart/form-data"
      method="POST">
    @csrf
    @method('PUT')
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
                   value="{{$obj->getTranslation('title',$localeCode)}}"/>
        </div>
    @endforeach

</form>
