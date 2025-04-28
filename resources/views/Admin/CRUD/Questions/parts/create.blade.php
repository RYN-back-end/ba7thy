<form class="row g-3" action="{{route('questions.store')}}" id="form" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.title')}}</label>
            <input type="text" class="form-control form-control-lg" name="title_ar" required
                   placeholder="اكتب رأس السؤال">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.title')}}</label>
            <input type="text" class="form-control form-control-lg" name="title_en" required
                   placeholder="The Question">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label"> {{helperTrans('admin.text')}}</label>
            <textarea rows="4" class="form-control form-control-lg" name="desc_ar" required
                      placeholder="اجابة تفصيلية للسؤال"></textarea>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label"> {{helperTrans('admin.text')}}</label>
            <textarea rows="4" class="form-control form-control-lg" name="desc_en" required
                      placeholder="Answer of the question"></textarea>
        </div>
    </div>
</form>
