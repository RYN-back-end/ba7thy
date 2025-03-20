<footer class="axil-footer-area footer-style-1 bg-color-white">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-12">
                    <div class="axil-footer-widget">
                        <div class="logo mb--30">
                            <a href="{{route('frontend.index')}}">
                                <img class="light-logo" src="{{url('assets/frontend')}}/img/3.svg" alt="Logo Images">
                            </a>
                        </div>
                        <div class="inner">
                            <p>{{trans('web.footer_desc')}}</p>
                            <div class="social-media-nav">
                                <ul>
                                    <li title="whatsapp">
                                        <a href="https://wa.me/+966583899659" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                                    </li>
                                    <li title="twitter">
                                        <a href="https://twitter.com/bahthi_1" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li title="telegram">
                                        <a href="https://t.me/Bahthi_1" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                                    </li>
                                    <li title="snapchat">
                                        <a href="https://t.snapchat.com/z0ULJgHt" target="_blank"><i class="fa-brands fa-snapchat"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-2 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title"> {{helperTrans('web.Quick links')}} </h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{route('frontend.about-us')}}"> {{helperTrans('web.who we are')}} </a></li>
                                <li><a href="{{route('frontend.research')}}"> {{helperTrans('web.Research')}} </a></li>
                                <li><a href="{{route('frontend.services')}}"> {{helperTrans('web.services')}} </a></li>
                                <li><a href="{{route('privacy')}}"> {{helperTrans('web.privacy')}} </a></li>
                                <li><a href="{{route('termsConditions')}}"> {{helperTrans('web.termsConditions')}} </a></li>
                                <li><a href="{{route('returnPolicy')}}"> {{helperTrans('web.returnPolicy')}} </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-2 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title"> {{helperTrans('web.the support')}} </h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{route('frontend.ask-service')}}"> {{helperTrans('web.Service Request')}}</a></li>
                                <li><a href="{{route('frontend.contact')}}"> {{helperTrans('web.Connect us')}} </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="payment-container">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title"> {{helperTrans('web.we_accept_the_following_payment_methods')}} </h5>
                        <div class="inner">
                                    <img src="{{url('assets/frontend')}}/img/ahly.png" alt="الاهلي" class="pay-image mt-3 mt-3">
                                    <img src="{{url('assets/frontend')}}/img/snb.png" alt="اس ان بي" class="pay-image mt-3">
                                    <img src="{{url('assets/frontend')}}/img/kpay.jpg" alt="كي باي" class="pay-image mt-3">
                                    <img src="{{url('assets/frontend')}}/img/rag.png" alt="مصرف الراجحي" class="pay-image mt-3">
                                    <img src="{{url('assets/frontend')}}/img/paypal.png" alt="بايبال" class="pay-image mt-3">
                                    <img src="{{url('assets/frontend')}}/img/visa.webp" alt="فيزا" class="pay-image mt-3">
                                    <img src="{{url('assets/frontend')}}/img/Mastercard.png" alt="ماستركارد" class="pay-image mt-3">
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="copyright-left d-flex flex-wrap justify-content-xl-start justify-content-center">
                        <p class="copy-right-p">
                            {{helperTrans('web.All rights reserved')}}
                            <a target="_blank" href="https://bahthi.org/ar">
                             {{trans('web.bahthy')}}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
