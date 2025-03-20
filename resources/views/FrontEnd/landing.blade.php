@extends('FrontEnd.layout.inc.app')
@section('special_meta')
    <link rel="canonical" href="{{url()->current()}}"/>
@endsection
@section('title')
    {{$meta['title_'.get_lang()]}}
@endsection
@section('desc_of_page')
    {{$meta['desc_'.get_lang()]}}
@endsection
@section('content')

    @include('FrontEnd.parts.slider')
    <!-- Start Steps -->
    <section class="AE-steps axil-about-area about-style-3" style="padding-top: 30px ;">
        <div class="container">
            <div class="section-title-wrapper"> <span class="title-highlighter highlighter-secondary"> <i
                        class="fal fa-quote-left"></i> {{trans('web.Our_way')}} </span>
                <h2 class="title"> {{trans('web.Action_Steps')}} </h2>
            </div>
            <!-- End .section-title -->
            <div class="row">
                @foreach($steps as $step)
                    <!-- {{$loop->iteration}} -->
                    <div class="col-lg-2 col-md-4">
                        <div class="AE-box">
                            <div class="stepsNum">
                                <p class="num">{{$loop->iteration}}</p>
                            </div>
                            <div class="AE-icon">
                                <img src="{{get_file($step->image)}}"
                                     alt="{{$step['title_'.\Illuminate\Support\Facades\App::getLocale()]}}">
                            </div>
                            <div class="AE-body">
                                <h5 class="AE-num "> {{$step['title_'.\Illuminate\Support\Facades\App::getLocale()]}} </h5>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Steps -->

    {{--    <!-- Start Expolre Product Area  -->--}}
    {{--    <div class="axil-product-area bg-color-white axil-section-gap">--}}
    {{--        <div class="container">--}}
    {{--            <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">--}}
    {{--                <div class="slick-single-layout">--}}
    {{--                    <div class="row row--15">--}}
    {{--                        @foreach($services as $service)--}}
    {{--                            <div class="col-xl-4 col-lg-4 col-sm-6 col-12 mb--30">--}}
    {{--                                <div class="content-blog blog-grid axil-product product-style-one">--}}
    {{--                                    <div class="inner">--}}
    {{--                                        <div class="thumbnail">--}}
    {{--                                            <a href="{{route('frontend.service',$service->url_title)}}">--}}
    {{--                                                <img src="{{get_file($service->image)}}" alt="{{$service->title}}">--}}
    {{--                                            </a>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="content">--}}
    {{--                                            <h5 class="fw-bold mb-4 text-center">{{$service->title}}--}}
    {{--                                            </h5>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="product-hover-action" style="position: initial;visibility: visible;opacity: 1;">--}}
    {{--                                            <ul class="cart-action">--}}
    {{--                                                <li class="wishlist"><a id="whatsapp_clicks" class="cta socialClick" href="https://wa.me/+966583899659"><img src="{{url('assets/frontend')}}/img/whatsappbrand.svg" alt=""></a></li>--}}
    {{--                                                <li class="select-option"><a href="{{route('frontend.contact')}}">{{trans('web.order_now')}}</a></li>--}}
    {{--                                                <li class="quickview"><a class="cta socialClick" id="telegram_clicks" href="https://t.me/Bahthi_1"><img src="{{url('assets/frontend')}}/img/Telegram_logo.png" alt=""></a></li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                            <!-- End Single Product  -->--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- End .slick-single-layout -->--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12 text-center mt--20 mt_sm--0">--}}
    {{--                    <a href="{{route('frontend.services')}}" class="axil-btn btn-bg-lighter btn-load-more">{{helperTrans('web.services')}}</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- End Expolre Product Area  -->--}}

    <div class="axil-about-area about-style-2">
        <div class="container">
            <div class="row align-items-center mb--80 mb_sm--60">
                @foreach($services as $service)
                    @if($loop->even)
                        <div class="col-lg-6 mb-5">
                            <div class="about-content content-right">
                                <h4 class="title mb-0">{{$service->title}}</h4>
                                <p>
{{--                                    {!!  \Illuminate\Support\Str::limit( $service->other_text,500) !!}--}}
                                    {!!  $service->other_text !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="about-thumbnail">
                                <div class="thumbnail">
                                    <a href="{{route('frontend.service',$service->url_title)}}">
                                        <img src="{{get_file($service->image)}}" style="height: 280px" alt="{{$service->title}}">
                                    </a>
                                    <div class="axil-product product-hover-action"
                                         style="position: initial;visibility: visible;opacity: 1;">
                                        <ul class="cart-action mt-3">
                                            <li class="wishlist"><a id="whatsapp_clicks" class="cta socialClick"
                                                                    href="https://wa.me/+966583899659"><img
                                                        src="{{url('assets/frontend')}}/img/whatsappbrand.svg"
                                                        alt=""></a></li>
                                            <li class="select-option"><a class="custom-btn"
                                                                         href="{{route('frontend.contact')}}">{{trans('web.order_now')}}</a>
                                            </li>
                                            <li class="quickview"><a class="cta socialClick" id="telegram_clicks"
                                                                     href="https://t.me/Bahthi_1"><img
                                                        src="{{url('assets/frontend')}}/img/Telegram_logo.png"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 mb-5">
                            <div class="about-thumbnail">
                                <div class="thumbnail">
                                    <a href="{{route('frontend.service',$service->url_title)}}">
                                        <img src="{{get_file($service->image)}}" style="height: 280px" alt="{{$service->title}}">
                                    </a>
                                    <div class="axil-product product-hover-action"
                                         style="position: initial;visibility: visible;opacity: 1;">
                                        <ul class="cart-action mt-3">
                                            <li class="wishlist"><a id="whatsapp_clicks" class="cta socialClick"
                                                                    href="https://wa.me/+966583899659"><img
                                                        src="{{url('assets/frontend')}}/img/whatsappbrand.svg"
                                                        alt=""></a></li>
                                            <li class="select-option"><a class="custom-btn"
                                                                         href="{{route('frontend.contact')}}">{{trans('web.order_now')}}</a>
                                            </li>
                                            <li class="quickview"><a class="cta socialClick" id="telegram_clicks"
                                                                     href="https://t.me/Bahthi_1"><img
                                                        src="{{url('assets/frontend')}}/img/Telegram_logo.png"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="about-content content-right">
                                <h4 class="title mb-0">{{$service->title}}</h4>
                                <p>
                                    {!!  $service->other_text !!}

                                    {{--                                    {!!  \Illuminate\Support\Str::limit( $service->text,400) !!}--}}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <style>
        .custom-btn {
            font-size: 18px !important;
            height: 45px !important;
            line-height: 44px !important;
        }
    </style>
    <!-- Start Counter -->
    <section class="AE-counter axil-about-area about-style-3" style="padding-bottom: 0;">
        <div class="container">
            <div class="section-title-wrapper"> <span class="title-highlighter highlighter-secondary"> <i
                        class="fal fa-quote-left"></i> {{trans('web.numbers')}} </span>
                <h2 class="title"> {{trans('web.our_achievement')}} </h2>
            </div>
            <!-- End .section-title -->
            <div class="row">
                @foreach($counters as $counter)
                    <div class="col-lg-3 col-md-6">
                        <div class="AE-box">
                            <div class="AE-icon">

                                <img src="{{get_file($counter->image)}}"
                                     alt="{{$counter['title_'.\Illuminate\Support\Facades\App::getLocale()]}}">
                            </div>
                            <div class="AE-body">
                                <h5 class="AE-num " data-finalcount="{{$counter['number']}}"
                                    style="margin-bottom: 1.5vh;">{{$counter['number']}}</h5>
                                <h6 class="AE-title"
                                    style="margin-bottom: 0;">  {{$counter['title_'.\Illuminate\Support\Facades\App::getLocale()]}}  </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Counter -->


    <!-- Start Testimonila Area  -->
    <div class="axil-testimoial-area axil-section-gap ">
        <div class="container">
            <div class="section-title-wrapper"> <span class="title-highlighter highlighter-secondary"> <i
                        class="fal fa-quote-left"></i>{{trans('web.reviews')}}</span>
                <h2 class="title">{{trans('web.customer reviews')}}</h2>
            </div> <!-- End .section-title -->
            <div
                class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                @foreach($reviews as $review)
                    <div class="slick-single-layout testimonial-style-one">
                        <div class="review-speech">
                            <p>
                                {{$review['comment_'.\Illuminate\Support\Facades\App::getLocale()]}}
                            </p>
                        </div>
                        <div class="media">
                            <div class="thumbnail"><img src="{{get_file($review->image)}}"
                                                        alt="{{$review['name_'.\Illuminate\Support\Facades\App::getLocale()]}}">
                            </div>
                            <div class="media-body">
                                <h6 class="title">{{$review['name_'.\Illuminate\Support\Facades\App::getLocale()]}}</h6>
                            </div>
                        </div> <!-- End .thumbnail -->
                    </div> <!-- End .slick-single-layout -->

                @endforeach
            </div>
        </div>
    </div>
    <!-- End Testimonila Area  -->
@endsection
@section('web.scripts')
    <script>
        $(document).ready(function () {
            $('.AE-num').each(function () {
                var finalCount = parseInt($(this).data('finalcount'));
                if ($.isNumeric(finalCount)) {
                    var duration = 4000; // Animation duration in milliseconds

                    $(this).prop('Counter', 0).animate({
                        Counter: finalCount
                    }, {
                        duration: duration,
                        easing: 'linear',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                }
            });
        });
    </script>

@endsection
