<form class="row g-3" action="{{route('questions.update',$obj->id)}}" id="form" enctype="multipart/form-data"
      method="POST">
    @csrf
    @method('PUT')



    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.title')}}</label>
            <input type="text" class="form-control form-control-lg" name="title_ar" required
                   placeholder="اكتب رأس السؤال" value="{{$obj->title_ar}}">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.title')}}</label>
            <input type="text" class="form-control form-control-lg" name="title_en" required
                   placeholder="اكتب رأس السؤال" value="{{$obj->title_en}}">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label"> {{helperTrans('admin.text')}}</label>
            <textarea rows="4" class="form-control form-control-lg" name="desc_ar" required
                      placeholder="اجابة تفصيلية للسؤال">{{$obj->desc_ar}}</textarea>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label"> {{helperTrans('admin.text')}}</label>
            <textarea rows="4" class="form-control form-control-lg" name="desc_en" required
                      placeholder="اجابة تفصيلية للسؤال">{{$obj->desc_en}}</textarea>
        </div>
    </div>

</form>
