<header class="header axil-header header-style-5">
    <!-- Start Mainmenu Area  -->
    <div class="axil-mainmenu">
        <div class="container">
            <div class="header-navbar">
                <div class="header-brand">
                    <a href="{{route('frontend.index')}}" class="logo logo-dark">
                        <img src="{{url('assets/frontend')}}/img/3.svg" alt="Site Logo">
                    </a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav">
                        <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                        <div class="mobile-nav-brand">
                            <a href="{{route('frontend.index')}}" class="logo">
                                <img src="{{url('assets/frontend')}}/img/3.svg" alt="Site Logo">
                            </a>
                        </div>
                        <ul class="mainmenu">
                            <li><a href="{{route('frontend.index')}}">{{helperTrans('web.home')}}</a></li>
                            <li><a href="{{route('frontend.about-us')}}">{{helperTrans('web.who we are')}}</a></li>
                            <li><a href="{{route('frontend.research')}}"> {{helperTrans('web.Research content')}} </a></li>
                            <li><a href="{{route('frontend.services')}}"> {{helperTrans('web.Our services')}} </a></li>
                            <li><a href="{{route('frontend.ask-service')}}"> {{helperTrans('web.Service Request')}}</a></li>
                            <li><a href="{{route('frontend.contact')}}"> {{helperTrans('web.Contact us')}} </a></li>
                            <li class="menu-item-has-children language">
                                <a href="#">{{helperTrans('web.language')}}</a>
                                <ul class="axil-submenu">
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                            <img src="{{url('assets/frontend')}}/img/flag-egypt.png" alt=""> عربي
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                            <img src="{{url('assets/frontend')}}/img/Flag_of_the_United_States.png"
                                                 alt="">
                                            English
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
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
                <div class="header-action">
                    <ul class="action-list">
                        <li class="axil-mobile-toggle">
                            <button class="menu-btn mobile-nav-toggler">
                                <i class="flaticon-menu-2"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
