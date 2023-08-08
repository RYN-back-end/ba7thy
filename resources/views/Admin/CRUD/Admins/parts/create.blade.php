<form class="row g-3" action="{{route('admins.store')}}" id="form" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-4">
        <div class="mb-2">
            <label class="form-label">{{helperTrans('admin.name')}}</label>
            <input type="text" class="form-control form-control-lg" name="name" required
                   placeholder="{{helperTrans('admin.example')}} : Mohamed mahmoud">
        </div>
    </div>
    <div class="col-4">
        <div class="mb-2">
            <label class="form-label"> {{helperTrans('admin.email')}}</label>
            <input type="email" class="form-control form-control-lg" name="email" required
                   placeholder="name@example.com">
        </div>
    </div>
    <div class="col-4">
        <div class="mb-2">
            <div class="form-label"> {{helperTrans('admin.password')}}</div>
            <input id="password" class="form-control form-control-lg" type="password" required name="password"
                   placeholder="{{helperTrans('admin.enter password')}}">
        </div>
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
