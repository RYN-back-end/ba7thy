<form class="row g-3" action="{{route('reviews.store')}}" id="form" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-12">
        <div class="mb-2">
            <div class="form-label">{{helperTrans('admin.image')}}</div>
            <input type="file" class="dropify" name="image" data-default-file="" accept="image/*"/>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.name')}}</label>
            <input type="text" class="form-control form-control-lg" name="name_ar" required
                   placeholder="اكتب الاسم عربي">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.name')}}</label>
            <input type="text" class="form-control form-control-lg" name="name_en" required
                   placeholder="اكتب الاسم انجليزي">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.comment')}}</label>
            <textarea rows="3" class="form-control form-control-lg" name="comment_ar" required
                      placeholder="اكتب التعليق عربي"></textarea>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.comment')}}</label>
            <textarea rows="3" class="form-control form-control-lg" name="comment_en" required
                      placeholder="اكتب التعليق انجليزي"></textarea>
        </div>
    </div>
</form>

<script>
    $('.dropify').dropify(<?php echo json_encode(dropify_message()); ?>);
</script>
