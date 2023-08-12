@extends('FrontEnd.layout.inc.app')
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
                            <li class="axil-breadcrumb-item active" aria-current="page"> {{helperTrans('web.contact us')}} </li>
                        </ul>
                        <h1 class="title"> {{helperTrans('web.Get in touch')}} </h1>
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
    <!-- Start Contact Area  -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30 justify-content-between">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">{{helperTrans("web.We'd love to hear from you")}}.</h3>
                            <p>{{helperTrans('web.If you have the talent and ability to translate and create research and content, do not hesitate to Contact us')}}</p>
                            <form id="contactForm" method="POST" action="{{route('postContact')}}" class="axil-contact-form">
                                @csrf
                                <div class="row row--10">
                                    <div class="col-lg-4">
                                        <div class="form-group"> <label for="contact-name">{{helperTrans('web.name')}}
                                                <span>*</span></label> <input type="text" name="name"
                                                                              id="contact-name"> </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"> <label for="contact-phone">{{helperTrans('web.phone')}}
                                                <span>*</span></label> <input type="text" name="phone"
                                                                              id="contact-phone"> </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"> <label for="contact-email">{{helperTrans('web.email')}}
                                                <span>*</span></label> <input type="email" name="email"
                                                                              id="contact-email"> </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group"> <label for="contact-message">{{helperTrans('web.your message')}}</label>
                                            <textarea name="message" id="message" cols="1"
                                                      rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="sendform" id="sendBtn" type="submit">
                                                <i class="fa-sharp fa-light fa-paper-plane-top"></i> {{helperTrans('web.send')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-location mb--40">
                            <h4 class="title mb--20">{{helperTrans('web.Contact Information')}}</h4>
                            <span class="address">
                                    {{helperTrans('web.Cairo - Nasr City')}}
                                </span>
                            <span class="phone">{{helperTrans('web.the phone')}}: <a href="tel:+201097984798">201097984798+</a></span>
                            <span class="email">{{helperTrans('web.E-mail')}}:
                                    <a href="mailto:ahmed.alhemaly@icloud.com">ahmed.alhemaly@icloud.com</a>
                                </span>
                        </div>
                        <div class="opening-hour">
                            <h4 class="title mb--20">{{helperTrans('web.work hours')}}:</h4>
                            <p>{{helperTrans('web.From Saturday to Thursday: 9 am - 10 pm')}} <br>{{helperTrans('web.Friday: 10 am - 6 pm')}}ً </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.0487586632057!2d31.410387301385096!3d30.02865824206324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583dd9f831b247%3A0xa7848c6a8c566be8!2z2YPYp9mK2LHZiCDZgdiz2KrZitmB2KfZhCDYs9mK2KrZiiDZhdmI2YQ!5e0!3m2!1sar!2seg!4v1690371096027!5m2!1sar!2seg"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>

    <!-- End Contact Area  -->
@endsection
@section('web.scripts')
    <script>
        $("form#contactForm").submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#contactForm').attr('action');
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
                        $('#contactForm')[0].reset();
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


