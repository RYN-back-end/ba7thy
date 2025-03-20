@extends('FrontEnd.layout.inc.app')
@section('special_meta')
    <link rel="canonical" href="{{url()->current()}}" />
@endsection
@section('title')
    {{$obj['meta_title_'.get_lang()]}}
@endsection
@section('desc_of_page')
    {{$obj['meta_desc_'.get_lang()]}}
@endsection
@section('content')
    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="axil-single-post post-formate post-standard">
            <div class="container">
                <div class="content-block">
                    <div class="inner">
                        <div class="post-thumbnail">
                            <img src="{{get_file($obj->image)}}" alt="blog Images">
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                </div>
                <!-- End .content-blog -->
            </div>
        </div>
        <!-- End .single-post -->
        <div class="post-single-wrapper position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top">
                                <div class="post-details__social-share">
                                    <span class="share-on-text"> {{helperTrans('web.sharing')}} :</span>
                                    <div class="social-share">
                                        <a href="https://twitter.com/intent/tweet?text={{route('frontend.article',$obj->url_title)}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://api.whatsapp.com/send?text={{route('frontend.article',$obj->url_title)}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://t.me/share/url?url={{route('frontend.article',$obj->url_title)}}" target="_blank"><i class="fab fa-telegram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 axil-post-wrapper">
                        <div class="post-heading">
                            <h2 class="title">
                                {{$obj->title}}
                            </h2>
                        </div>
                        {!! $obj->text !!}
                    </div>
                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <aside class="axil-sidebar-area">
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title fw-bold"> {{helperTrans('web.Other articles')}} </h6>
                                @foreach($another as $row)
                                    <!-- Start Single Post List  -->
                                    <a href="{{route('frontend.article',$row->url_title)}}">
                                        <div class="content-blog post-list-view mb--20">
                                            <div class="thumbnail">
                                                <a href="{{route('frontend.article',$row->url_title)}}">
                                                    <img class="small-thumb-image"
                                                         src="{{get_file($row->image)}}"
                                                         alt="Blog Images">
                                                </a>
                                            </div>
                                            <div style="height: 150px;"
                                                 class="content d-flex justify-content-center flex-column">
                                                <a href="{{route('frontend.article',$row->url_title)}}"><h5 class="mb-2"> {{$row->title}}</h5></a>
                                            </div>
                                        </div>
                                        <!-- End Single Post List  -->
                                @endforeach

                            </div>
                            <!-- End Single Widget  -->
                        </aside>
                        <!-- End Sidebar Area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->
@endsection
