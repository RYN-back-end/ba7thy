<form class="row g-3" action="{{route('meta.update',$obj->id)}}" id="form" enctype="multipart/form-data"
      method="POST">
    @csrf
    @method('PUT')
    <div class="col-6">
        <div class="mb-2">
            <label class="form-label">عنوان الصفحة بالعربي</label>
            <input type="text" class="form-control form-control-lg" name="title_ar" required value="{{$obj->title_ar}}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-2">
            <label class="form-label">عنوان الصفحة بالانجليزي</label>
            <input type="text" class="form-control form-control-lg" name="title_en" required value="{{$obj->title_en}}">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label"> الوصف بالعربي</label>
            <textarea rows="4" class="form-control form-control-lg" name="desc_ar" required>{{$obj->desc_ar}}</textarea>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label"> الوصف بالانجليزي</label>
            <textarea rows="4" class="form-control form-control-lg" name="desc_en" required>{{$obj->desc_en}}</textarea>
        </div>
    </div>

</form>
