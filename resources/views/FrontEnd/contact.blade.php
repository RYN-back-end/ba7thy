@extends('FrontEnd.layout.inc.app')
@section('content')
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="index.html"> الرئيسية </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page"> تواصل معنا </li>
                        </ul>
                        <h1 class="title"> كن علي اتصال </h1>
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
    <!-- Start Contact Area  -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30 justify-content-between">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">نحن نرغب بالاستماع منك.</h3>
                            <p>
                                .اذا كان لديك الموهبه والقدره على الترجمه وانشاء الابحاث والمحتوى لا تتردد فى
                                التواصل معنا
                            </p>
                            <form id="contact-form" method="POST" action="mail.php" class="axil-contact-form">
                                <div class="row row--10">
                                    <div class="col-lg-4">
                                        <div class="form-group"> <label for="contact-name">الاسم
                                                <span>*</span></label> <input type="text" name="contact-name"
                                                                              id="contact-name"> </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"> <label for="contact-phone">الهاتف
                                                <span>*</span></label> <input type="text" name="contact-phone"
                                                                              id="contact-phone"> </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group"> <label for="contact-email">البريد الإلكتروني
                                                <span>*</span></label> <input type="email" name="contact-email"
                                                                              id="contact-email"> </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group"> <label for="contact-message">رسالتك</label>
                                            <textarea name="contact-message" id="contact-message" cols="1"
                                                      rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="sendform" type="submit">
                                                <i class="fa-sharp fa-light fa-paper-plane-top"></i> إرسال
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-location mb--40">
                            <h4 class="title mb--20">معلومات التواصل</h4>
                            <span class="address">
                                    القاهرة - مدينة نصر
                                </span>
                            <span class="phone">الهاتف: <a href="tel:+201097984798">201097984798+</a></span>
                            <span class="email">البريد
                                    الإلكتروني:
                                    <a href="mailto:ahmed.alhemaly@icloud.com">ahmed.alhemaly@icloud.com</a>
                                </span>
                        </div>
                        <div class="opening-hour">
                            <h4 class="title mb--20">ساعات العمل:</h4>
                            <p>من السبت إلى الخميس : 9 صباحًا - 10 مساءً <br>الجمعة : 10 صباحًا - 6 مساءً </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.0487586632057!2d31.410387301385096!3d30.02865824206324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583dd9f831b247%3A0xa7848c6a8c566be8!2z2YPYp9mK2LHZiCDZgdiz2KrZitmB2KfZhCDYs9mK2KrZiiDZhdmI2YQ!5e0!3m2!1sar!2seg!4v1690371096027!5m2!1sar!2seg"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>
    <!-- End Contact Area  -->
@endsection
