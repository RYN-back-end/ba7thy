@extends('FrontEnd.layout.inc.app')
@section('content')

    @include('FrontEnd.parts.slider')
    @include('FrontEnd.parts.whatPresent')
    @include('FrontEnd.parts.aboutUs')

    <!-- Start Testimonila Area  -->
    <div class="axil-testimoial-area axil-section-gap ">
        <div class="container">
            <div class="section-title-wrapper"> <span class="title-highlighter highlighter-secondary"> <i
                        class="fal fa-quote-left"></i>الآراء</span>
                <h2 class="title">آراء العملاء</h2>
            </div> <!-- End .section-title -->
            <div
                class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"من أفضل المواقع التي توفر منتجات ذات جودة عالية وأسعار مناسبة، وتتميز بسرعة التوصيل
                            والخدمة الممتازة. شكراً لفريق العمل على الجهود الرائعة."</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/testimonial/image-1.png"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">أحمد الشمري</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"لقد استخدمت هذا الموقع لشراء عدة منتجات وكانت التجربة ممتازة. تم توصيل الطلبات في الوقت
                            المحدد وكانت البضائع مثلما هي موضحة في الموقع. أنصح الجميع باستخدامه!"</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/testimonial/image-2.png"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">نورة الغامدي</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"موقع رائع، يتميز بتوفير منتجات عالية الجودة وتقديم خدمة سريعة وفعالة. كما أن فريق الدعم
                            الفني متاح على مدار الساعة للإجابة على أي استفسارات. تجربة تسوق ممتعة ومريحة!"</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/testimonial/image-3.png"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">عبدالله الصالح</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"أنا عميل جديد ولكني استطيع القول بأن تجربتي كانت رائعة. كانت البضائع مثلما هي موضحة في
                            الموقع وتم توصيلها في الوقت المحدد. أنصح الجميع باستخدام هذا الموقع!"</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/testimonial/image-1.png"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">محمد العويس</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
    <!-- End Testimonila Area  -->
@endsection
