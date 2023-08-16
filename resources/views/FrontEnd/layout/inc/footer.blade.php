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
                            <p>{{trans('web.Welcome to our research platform for academic services. We are a team of researchers, educators, and academics who are dedicated to helping students and researchers achieve their academic goals. We offer a variety of services, including academic advising, research guidance, and educational workshops. We believe in the power of education and research to transform society, and we are committed to helping our community succeed. Join us today and see how we can help you reach your academic goals.')}}</p>
                            <div class="social-media-nav">
                                <ul>
                                    <li title="twitter">
                                        <a href="https://twitter.com/bahthi_1" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li title="telegram">
                                        <a href="https://t.me/Bahthi_1" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                                    </li>
                                    <li title="snapchat">
                                        <a href="https://t.snapchat.com/z0ULJgHt" target="_blank"><i class="fa-brands fa-snapchat-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title"> {{helperTrans('web.Quick links')}} </h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{route('frontend.about-us')}}"> {{helperTrans('web.who we are')}} </a></li>
                                <li><a href="{{route('frontend.research')}}"> {{helperTrans('web.Research content')}} </a></li>
                                <li><a href="{{route('frontend.services')}}"> {{helperTrans('web.services')}} </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-4 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title"> {{helperTrans('web.the support')}} </h5>
                        <div class="inner">
                            <ul>
                                <li><a href="{{route('frontend.ask-service')}}"> {{helperTrans('web.Service Request')}}</a></li>
                                <li><a href="{{route('frontend.contact')}}"> {{helperTrans('web.Contact us')}} </a></li>
                            </ul>
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
                            {{helperTrans('web.All rights reserved')}}<a target="_blank" href="https://rynprogramming.com/">
                                <img src="{{url('assets')}}/frontend/img/logo-new.png" alt="nami">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
