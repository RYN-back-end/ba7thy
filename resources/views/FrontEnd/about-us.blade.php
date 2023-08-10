@extends('FrontEnd.layout.inc.app')
@section('content')
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="{{route('frontend.index')}}"> {{helperTrans('web.home')}} </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page"> {{helperTrans('web.who we are')}} </li>
                        </ul>
                        <h1 class="title">تعرف علينا </h1>
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
    <div class="axil-about-area about-style-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-primary2"><i class="fal fa-star"></i> {{helperTrans('web.about us')}}
                            </span>
                        <h2 class="title">{{helperTrans('web.who we are')}} </h2>
                    </div>
                    <div class="row">
                        @foreach($aboutUs as $key=>$row)
                            <div class="col-sm-6">
                                <div class="about-features">
                                    <div class="spam sl-number">{{$key+1}}.</div>
                                    <h4 class="title"> {{$row->title}} </h4>
                                    <p>
                                        {{$row->text}}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-gallery">
                        <div class="row row--10">
                            <div class="col-6">
                                @foreach($aboutUsImages as $key=>$image)
                                    @if(($key+1) % 2 == 1)
                                        <div class="thumbnail thumbnail-1">
                                            <img src="{{get_file($image->image)}}" alt="About">
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-6">
                                @foreach($aboutUsImages as $key2=>$image)

                                    @if(($key2+1) % 2 != 1)
                                        <div class="thumbnail thumbnail-1">
                                            <img src="{{get_file($image->image)}}" alt="About">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->
    <!-- Start About Area  -->
    <div class="about-info-area">
        <div class="container">
            <div class="row row--20">
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb"> <img src="{{url('assets')}}/frontend/img/about/shape-01.png" alt="Shape"> </div>
                        <div class="content">
                            <h6 class="title">أكثر من 40,000 عميل سعيد</h6>
                            <p>قم بتمكين فرق المبيعات الخاصة بك باستخدام حلول مصممة خصيصًا لصناعتك والتي تدعمها.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb"> <img src="{{url('assets')}}/frontend/img/about/shape-02.png" alt="Shape"> </div>
                        <div class="content">
                            <h6 class="title">16 عامًا من الخبرة</h6>
                            <p>قم بتمكين فرق المبيعات الخاصة بك باستخدام حلول مصممة خصيصًا لصناعتك والتي تدعمها.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb"> <img src="{{url('assets')}}/frontend/img/about/shape-03.png" alt="Shape"> </div>
                        <div class="content">
                            <h6 class="title">12 جائزة حصلنا عليها</h6>
                            <p>قم بتمكين فرق المبيعات الخاصة بك باستخدام حلول مصممة خصيصًا لصناعتك والتي تدعمها.</p>
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
                    class="title-highlighter highlighter-secondary"><i class="fal fa-thumbs-up"></i> لماذا نحن
                    </span>
                <h2 class="title"> لماذا يختارنا الناس </h2>
            </div>
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                <div class="col p-3">
                    <div class="service-box">
                        <div class="icon"> <img src="{{url('assets')}}/frontend/img/about/Experience and professionalism.svg" alt="Service"> </div>
                        <h6 class="title">الخبرة والاحترافية</h6>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="service-box">
                        <div class="icon"> <img src="{{url('assets')}}/frontend/img/about/Competitive cost.svg" alt="Service"> </div>
                        <h6 class="title">التكلفة التنافسية</h6>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="service-box">
                        <div class="icon"> <img src="{{url('assets')}}/frontend/img/about/Accuracy and punctuality.svg" alt="Service"> </div>
                        <h6 class="title">الدقة والالتزام بالمواعيد</h6>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="service-box">
                        <div class="icon"> <img src="{{url('assets')}}/frontend/img/about/Confidentiality and security.svg" alt="Service"> </div>
                        <h6 class="title">السرية والأمان</h6>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="service-box">
                        <div class="icon"> <img src="{{url('assets')}}/frontend/img/about/Support and consulting.svg" alt="Service"> </div>
                        <h6 class="title"> الدعم والاستشارات </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
