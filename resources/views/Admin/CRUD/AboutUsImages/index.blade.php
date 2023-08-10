@extends('Admin.layout.inc.app')
@section('styles')
    <link rel="stylesheet" href="{{url('assets/default')}}/multiFiles/main.css">

@endsection
@section('routes')
    <li class="breadcrumb-item active" aria-current="page"> {{helperTrans('admin.About us images')}}</li>
@endsection

@section('content')

    <div class="card">
        {!! indexButtons(helperTrans('admin.About us images')) !!}
        <div class="card-body" id="form-load">
            <form class="row g-3" action="{{route('about-us-images.store')}}" id="form" enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="d-flex flex-column mb-7 fv-row col-sm-12">
                    <div class="upload__box">
                        <div class="upload__btn-box">
                            <label class="upload__btn">
                                <p>{{helperTrans('admin.Upload Images')}}</p>
                                <input type="file" multiple="" name="images[]"  data-max_length="20" accept="image/*"
                                       class="upload__inputfile">
                            </label>
                        </div>
                        <div class="upload__img-wrap">
                            @foreach($images as $image)
                                <div class="upload__img-box">
                                    <div class="img-bg" style="background-image: url('{{get_file($image->image)}}')">
                                        <div class="upload__img-close removeImageFromDb"
                                             data-url="{{route('about-us-images.show',$image->id)}}"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" id="submit" form="form"
                            class="btn btn-lg btn-block btn-dark lift text-uppercase">
                        {{helperTrans('admin.submit')}}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{url('assets/default')}}/multiFiles/main.js"></script>

    <script>
        ImgUpload();
        $(document).on('submit', "#form-load > #form", function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            var url = $('#form-load > form').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {


                    $('#submit').html('<span style="margin-left: 4px;">{{helperTrans('admin.working')}}</span>').attr('disabled', true);
                },
                complete: function () {
                },
                success: function (data) {

                    window.setTimeout(function () {
                        $('#submit').html('{{helperTrans('admin.submit')}}').attr('disabled', false);

                        if (data.code == 200) {
                            my_toaster(data.message, 'success')
                        } else {
                            my_toaster(data.message, 'error')
                        }
                    }, 1000);


                },
                error: function (data) {
                    $('#submit').html('{{helperTrans('admin.submit')}}').attr('disabled', false);
                    if (data.status === 500) {
                        my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
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
                        my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                    }

                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });

    </script>
@endsection
