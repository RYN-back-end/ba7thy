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
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a
                                    href="{{route('frontend.index')}}"> {{helperTrans('web.Home')}} </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active"
                                aria-current="page"> {{helperTrans('web.Services')}} </li>
                        </ul>
                        <h2 class="title"> {{helperTrans('web.Our services')}} </h2>
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
    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="container">
            <div class="row g-5">
                @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="content-blog blog-grid">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="{{route('frontend.service',($service->url_title) ?? '2')}}">
                                        <img src="{{get_file($service->image)}}" alt="{{$service->title}}">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="fw-bold mb-4">{{$service->title}}</h5>
                                    <div class="read-more-btn">
                                        <a class="axil-btn right-icon"
                                           href="{{route('frontend.service',($service->url_title) ?? '2')}}"> {{helperTrans('web.Read more')}}
                                            <i
                                                class="fal fa-long-arrow-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <!-- End post-pagination -->
        </div>
        <div class="axil-breadcrumb-area mt--50">
            <div class="container">
                <div class="axil-privacy-policy">
                        <span class="policy-published fw-bolder">
                            {{trans('web.Got Questions')}}
                        </span>
                    @if(isset($questions) && $questions->count() != 0)

                        @foreach($questions as $question)
                            <div class="faq-section">
                                <div class="faq-item">
                                    <h5 class="faq-question"> {{$question['title_'.get_lang()]}} <i class="fa fa-arrow-down fs-4"></i></h5>
                                    <p class="faq-answer">{{$question['desc_'.get_lang()]}}</p>
                                </div>
                            </div>
                        @endforeach

                </div>
                @else
                    <div class="text-center">
                        <p>لا يوجد اسئلة بعد</p>
                        <img src="{{asset('assets/frontend/img/faq.webp')}}" alt="no FAQ Added" width="45%" height="45%">
                    </div>
                @endif

            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Blog Area  -->
@endsection
@section('web.scripts')
    <script>
        $(document).ready(function () {
            $('.faq-question').click(function () {
                $(this).next('.faq-answer').slideToggle(200);
                $(this).toggleClass('active');
            });
        });
    </script>
@endsection
