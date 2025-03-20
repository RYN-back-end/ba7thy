<form class="row g-3" action="{{route('counters.store')}}" id="form" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-12">
        <div class="mb-2">
            <div class="form-label">{{helperTrans('admin.image')}}</div>
            <input type="file" class="dropify" name="image" data-default-file="" accept="image/*"/>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.title')}}</label>
            <input type="text" class="form-control form-control-lg" name="title_ar" required
                   placeholder="اكتب العنوان عربي">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.title')}}</label>
            <input type="text" class="form-control form-control-lg" name="title_en" required
                   placeholder="اكتب العنوان انجليزي">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.number')}}</label>
            <input type="number" min="0" class="form-control form-control-lg" name="number" required
                   value="1">
        </div>
    </div>
</form>

<script>
    $('.dropify').dropify(<?php echo json_encode(dropify_message()); ?>);
</script>
