<!-- Start Expolre Product Area  -->
<div class="axil-product-area bg-color-white axil-section-gap">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> {{helperTrans('web.services')}} </span>
            <h2 class="title">{{trans('web.explore_our_services')}}</h2>
        </div>
        <div
            class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout">
                <div class="row row--15">
                    @foreach($services as $service)
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12 mb--30">
                            <div class="content-blog blog-grid axil-product product-style-one">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="{{route('frontend.service',$service->url_title)}}">
                                            <img src="{{get_file($service->image)}}" alt="{{$service->title}}">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="fw-bold mb-4 text-center">{{$service->title}}
                                        </h5>
                                    </div>
                                    <div class="product-hover-action" style="position: initial;visibility: visible;opacity: 1;">
                                        <ul class="cart-action">
                                            <li class="wishlist"><a id="whatsapp_clicks" class="cta socialClick" href="https://wa.me/+966583899659"><img src="{{url('assets/frontend')}}/img/whatsappbrand.svg" alt=""></a></li>
                                            <li class="select-option"><a href="{{route('frontend.contact')}}">{{trans('web.order_now')}}</a></li>
                                            <li class="quickview"><a class="cta socialClick" id="telegram_clicks" href="https://t.me/Bahthi_1"><img src="{{url('assets/frontend')}}/img/Telegram_logo.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Single Product  -->
                    @endforeach
                </div>
            </div>
            <!-- End .slick-single-layout -->
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt--20 mt_sm--0">
                <a href="{{route('frontend.services')}}" class="axil-btn btn-bg-lighter btn-load-more">{{helperTrans('web.services')}}</a>
            </div>
        </div>

    </div>
</div>
<!-- End Expolre Product Area  -->
