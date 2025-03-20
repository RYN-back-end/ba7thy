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
                                        href="{{route('frontend.index')}}"> {{helperTrans('web.Home')}}  </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active"
                                aria-current="page">{{helperTrans('web.returnPolicy')}} </li>
                        </ul>
                        <h2 class="title"> {{helperTrans('web.We are committed to providing an enjoyable and transparent shopping experience.')}}</h2>
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
    <div class="axil-about-area about-style-3">
        <div class="container">
            <div class="row">

                @php
                    $locale = app()->getLocale();
                @endphp

                {!! $setting->{'return_policy_'.$locale} !!}


            </div>
        </div>
    </div>
@endsection
