@extends('FrontEnd.layout.inc.app')
@section('special_meta')
    <link rel="canonical" href="{{url()->current()}}" />
@endsection
@section('title')
    {{$meta['title_'.get_lang()]}}
@endsection
@section('desc_of_page')
    {{$meta['desc_'.get_lang()]}}
@endsection
@section('content')

    @include('FrontEnd.parts.slider')
    @include('FrontEnd.parts.whatPresent')
    <!-- ***************************** -->
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
    <!-- ***************************** -->
    @include('FrontEnd.parts.aboutUs')
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
                                <img src="{{get_file($step->image)}}" alt="{{$step['title_'.\Illuminate\Support\Facades\App::getLocale()]}}">
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
    @include('FrontEnd.parts.services')


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
                                                        alt="{{$review['name_'.\Illuminate\Support\Facades\App::getLocale()]}}"></div>
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
