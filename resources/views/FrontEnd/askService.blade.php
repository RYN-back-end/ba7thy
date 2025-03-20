@extends('FrontEnd.layout.inc.app')
@section('title')
    بحثى | Bahthi
@endsection
@section('content')
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{route('frontend.index')}}"> {{helperTrans('web.Home')}} </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">{{helperTrans('web.Service Request')}} </li>
                        </ul>
                        <h1 class="title"> {{helperTrans('web.Submit your application and wait for the impressive results')}} </h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{url('assets')}}/frontend/img/3.svg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->
    <!-- Start About Area  -->
    <div class="axil-askservice-area about-style-3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 col-12">
                        <form action="{{route('store.request')}}" id="form" method="POST">
                            @csrf
                        <div class="row justify-content-between">
                            <div class="form-group col-lg-6 col-12">
                                <label for="name"> {{helperTrans('web.full name')}}* </label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="email"> {{helperTrans('web.E-mail')}}* </label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="major"> {{helperTrans('web.Specialization')}}* </label>
                                <select name="major_id" id="major">
                                    <option selected disabled value="">{{helperTrans('web.Choose a specialty')}}</option>
                                    @foreach($majors as $major)
                                        <option value="{{$major->id}}">{{$major->title}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="service-type"> {{helperTrans('web.service type')}}* </label>
                                <select name="services_type_id" id="service-type">
                                        <option selected disabled value="">{{helperTrans('web.Choose a service type')}}</option>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="recieve-date"> {{helperTrans('web.Date')}}* </label>
                                <input type="date" name="date" value="{{date('Y-m-d')}}" id="recieve-date">
                            </div>
                            <div class="form-group col-12">
                                <label for="service-description"> {{helperTrans('web.Service details')}}* </label>
                                <textarea name="text" id="service-description"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button class="sendform" type="submit">
                                    <i class="fa-sharp fa-light fa-paper-plane-top"></i> {{helperTrans('web.send')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->
@endsection
@section('web.scripts')
    <script>
        $("form#form").submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#form').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#sendBtn').html('<span style="margin-right: 4px;color: white"> {{trans('web.wait')}} </span><span class="spinner-border spinner-border-sm text-light" ' + ' ></span>');
                },
                success: function (data) {
                    if (data.status == 200) {
                        my_toaster("{{trans('web.we_received')}}","success");
                        $('#form')[0].reset();
                        $('#sendBtn').html("{{trans('web.send')}}").attr('disabled', false);
                    } else {
                        my_toaster('Oops There is an error','error');
                    }
                },
                error: function (data) {
                    if (data.status == 500) {
                        $('#sendBtn').html("{{trans('web.send')}}").attr('disabled', false);
                        my_toaster('Oops There is an error','error');
                    } else if (data.status == 422) {
                        $('#sendBtn').html("{{trans('web.send')}}").attr('disabled', false);
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    my_toaster(value,'error');
                                });
                            }
                        });
                    }
                },//end error method
                cache: false,
                contentType: false,
                processData: false
            });
        });

    </script>

@endsection
