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
                            <li class="axil-breadcrumb-item active" aria-current="page"> {{helperTrans('web.Services')}} </li>
                        </ul>
                        <h1 class="title"> {{helperTrans('web.Our services')}} </h1>
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
                                    <a href="{{route('frontend.service',$service->id)}}">
                                        <img src="{{get_file($service->image)}}" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="fw-bold mb-4">{{$service->title}}</h5>
                                    <div class="read-more-btn">
                                        <a class="axil-btn right-icon" href="{{route('frontend.service',$service->id)}}"> {{helperTrans('web.Read more')}} <i
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
        <!-- End .container -->
    </div>
    <!-- End Blog Area  -->
@endsection
