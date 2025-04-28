@extends('FrontEnd.layout.inc.app')
@section('title')
    {{$meta['title_'.get_lang()]}}
@endsection
@section('special_meta')
    <link rel="canonical" href="https://bahthi.org/ar/about-us">
@endsection
@section('desc_of_page')
    {{$meta['desc_'.get_lang()]}}
@endsection
@section('content')
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a
                                    href="{{route('frontend.index')}}"> {{helperTrans('web.home')}} </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active"
                                aria-current="page"> {{helperTrans('web.who we are')}} </li>
                        </ul>
                        <h2 class="title"> {{trans('web.know_about')}} </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="{{url('assets')}}/frontend/img/3.svg" alt="{{trans('web.know_about')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start About Area  -->
    <div class="axil-about-area about-style-1 axil-section-gap">
        <div class="container">
            <div class="row align-items-center">
                @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
                    <div class="col-xl-4 col-lg-6">
                        <div class="about-thumbnail">
                            <div class="thumbnail">
                                <img src="{{get_file($aboutRow['image_'.get_lang()])}}" alt="about us image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6">
                        <div class="about-content content-left">
                            <div class="about-content content-left">
                                <span class="title-highlighter highlighter-primary2 subtitle fs-2"> <i
                                        class="far fa-shopping-basket"></i>{{helperTrans('web.who we are')}}</span>
                                <span class="text-heading">
                            {!!  $aboutRow['text_'.get_lang()] !!}
                        </span>
                            </div>
                        </div>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                    <div class="col-xl-8 col-lg-6">
                        <div class="about-content content-right">
                            <div class="about-content content-right">
                                <span class="title-highlighter highlighter-primary2 subtitle fs-2"> <i
                                        class="far fa-shopping-basket"></i>{{helperTrans('web.who we are')}}</span>
                                <span class="text-heading">
                            {!!  $aboutRow['text_'.get_lang()] !!}
                        </span>
                            </div>
                        </div>
                    </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="about-thumbnail">
                                <div class="thumbnail">
                                    <img src="{{get_file($aboutRow['image_'.get_lang()])}}" alt="{{helperTrans('web.who we are')}}">
                                </div>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
        <!-- End About Area  -->

        <!-- Start About Area  -->
        <div class="about-info-area">
            <div class="container">
                <div class="row row--20">
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb"><img src="{{url('assets')}}/frontend/img/about/shape-01.png" alt="{{helperTrans('web.Over 40,000 happy customers')}}">
                            </div>
                            <div class="content">
                                <h6 class="title">{{helperTrans('web.Over 40,000 happy customers')}}</h6>
                                <p>{{helperTrans('web.Empower your sales teams with solutions tailored to your industry that support it.')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb"><img src="{{url('assets')}}/frontend/img/about/shape-02.png" alt="{{helperTrans('web.16 years of experience')}}">
                            </div>
                            <div class="content">
                                <h6 class="title">{{helperTrans('web.16 years of experience')}}</h6>
                                <p>{{helperTrans('web.exper_desc.')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-info-box">
                            <div class="thumb"><img src="{{url('assets')}}/frontend/img/about/shape-03.png" alt="{{helperTrans('web.12 awards we got')}}">
                            </div>
                            <div class="content">
                                <h6 class="title">{{helperTrans('web.12 awards we got')}}</h6>
                                <p>{{helperTrans('web.happy_to.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->
        <div class="axil-why-choose-area axil-section-gap ">
            <div class="container ">
                <div class="section-title-wrapper section-title-center"> <span
                        class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i>{{helperTrans('web.Why us')}}
                    </span>
                    <h2 class="title">{{helperTrans('web.Why do people choose us')}} </h2>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col p-3">
                        <div class="service-box">
                            <div class="icon"><img
                                    src="{{url('assets')}}/frontend/img/about/Experience and professionalism.svg"
                                    alt="{{helperTrans('web.Experience and professionalism')}}"></div>
                            <h6 class="title">{{helperTrans('web.Experience and professionalism')}}</h6>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="service-box">
                            <div class="icon"><img src="{{url('assets')}}/frontend/img/about/Competitive cost.svg"
                                                   alt="{{helperTrans('web.Competitive cost')}}"></div>
                            <h6 class="title">{{helperTrans('web.Competitive cost')}}</h6>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="service-box">
                            <div class="icon"><img
                                    src="{{url('assets')}}/frontend/img/about/Accuracy and punctuality.svg"
                                    alt="{{helperTrans('web.Accuracy and punctuality')}}"></div>
                            <h6 class="title">{{helperTrans('web.Accuracy and punctuality')}}</h6>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="service-box">
                            <div class="icon"><img
                                    src="{{url('assets')}}/frontend/img/about/Confidentiality and security.svg"
                                    alt="{{helperTrans('web.Confidentiality and security')}}"></div>
                            <h6 class="title">{{helperTrans('web.Confidentiality and security')}}</h6>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="service-box">
                            <div class="icon"><img src="{{url('assets')}}/frontend/img/about/Support and consulting.svg"
                                                   alt="{{helperTrans('web.Support and consulting')}}"></div>
                            <h6 class="title"> {{helperTrans('web.Support and consulting')}} </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
