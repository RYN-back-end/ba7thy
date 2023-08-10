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
                            <li class="axil-breadcrumb-item active" aria-current="page"> الخدمات </li>
                        </ul>
                        <h1 class="title"> خدماتنا </h1>
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
                <div class="col-md-4">
                    <div class="content-blog blog-grid">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href=service.html>
                                    <img src="{{url('assets')}}/frontend/img/doctoral.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fw-bold mb-4">رسائل ماجيستير ودكتوراه</h5>
                                <h5 class="title">
                                    <a href="service.html">
                                        تعدّ رسائل الماجستير والدكتوراه من أهم الركائز الأكاديمية التي تحدد مستقبل
                                        الطلاب وتؤثر بشكل كبير على حياتهم المهنية....
                                    </a>
                                </h5>
                                <div class="read-more-btn">
                                    <a class="axil-btn right-icon" href="service.html"> قراءة المزيد <i
                                            class="fal fa-long-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-blog blog-grid">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href=service.html>
                                    <img src="{{url('assets')}}/frontend/img/medical.png" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fw-bold mb-4">ترجمه طبيه </h5>
                                <h5 class="title">
                                    <a href="service.html">
                                        تعتبر الترجمة الطبية من الخدمات الحيوية التي تساهم في تبادل المعرفة
                                        والمعلومات الطبية بين الثقافات واللغات....
                                    </a>
                                </h5>
                                <div class="read-more-btn">
                                    <a class="axil-btn right-icon" href="service.html"> قراءة المزيد <i
                                            class="fal fa-long-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-blog blog-grid">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href=service.html>
                                    <img src="{{url('assets')}}/frontend/img/law.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fw-bold mb-4"> ترجمه قانونيه </h5>
                                <h5 class="title">
                                    <a href="service.html">
                                        تعد الترجمة القانونية أحد الجوانب الحيوية للتواصل الفعال وتبادل المعلومات
                                        القانونية بين مختلف اللغات. يلعب....
                                    </a>
                                </h5>
                                <div class="read-more-btn">
                                    <a class="axil-btn right-icon" href="service.html"> قراءة المزيد <i
                                            class="fal fa-long-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-blog blog-grid">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href=service.html>
                                    <img src="{{url('assets')}}/frontend/img/scientific.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fw-bold mb-4"> ترجمه علميه </h5>
                                <h5 class="title">
                                    <a href="service.html">
                                        تلعب الترجمة العلمية دورًا حيويًا في تبادل المعرفة والاطلاع على الأبحاث
                                        والدراسات العلمية في مختلف المجالات....
                                    </a>
                                </h5>
                                <div class="read-more-btn">
                                    <a class="axil-btn right-icon" href="service.html"> قراءة المزيد <i
                                            class="fal fa-long-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-blog blog-grid">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href=service.html>
                                    <img src="{{url('assets')}}/frontend/img/grammmer.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fw-bold mb-4"> تدقيق لغوى ونحوى </h5>
                                <h5 class="title">
                                    <a href="service.html">
                                        هل ترغب في تحسين جودة محتواك اللغوي والنحوي؟ احصل على خدمة التدقيق النحوي
                                        واللغوي الاحترافية معنا الآن!
                                    </a>
                                </h5>
                                <div class="read-more-btn">
                                    <a class="axil-btn right-icon" href="service.html"> قراءة المزيد <i
                                            class="fal fa-long-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End post-pagination -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End Blog Area  -->
@endsection
