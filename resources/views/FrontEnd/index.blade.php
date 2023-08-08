@extends('FrontEnd.layout.inc.app')
@section('content')

    @include('FrontEnd.parts.slider')
    @include('FrontEnd.parts.whatPresent')

    <div class="axil-about-area about-style-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-primary2"><i class="fal fa-star"></i> عننا
                            </span>
                        <h2 class="title">تعرف علينا </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-features">
                                <div class="spam sl-number">1.</div>
                                <h4 class="title"> من نحن </h4>
                                <p>
                                    نحرص دائمًا على تقديم الدعم والإرشاد الأكاديمي بأعلى مستوى من الجودة، ونسعى
                                    جاهدين لمساعدة الطلاب في تحقيق أهدافهم البحثية والأكاديمية بنجاح. إن رضا الطلاب
                                    هو هدفنا الأول والأخير، ونحن نؤمن بأهمية بناء علاقة عمل مستدامة تعود بالفائدة
                                    على جميع الأطراف المعنية.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-features">
                                <div class="spam sl-number">2.</div>
                                <h4 class="title"> ماذا نفعل </h4>
                                <p>
                                    نحن ندرك أهمية البحث الأكاديمي وتأثيره على مسيرة الطالب الأكاديمية ومستقبله
                                    المهني. لذلك، فإن فريقنا مكون من خبراء متخصصين في مختلف المجالات الأكاديمية، مما
                                    يمنحنا القدرة على تقديم المساعدة المناسبة للطلاب في مختلف التخصصات.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-features">
                                <div class="spam sl-number">3.</div>
                                <h4 class="title"> كيف نساعد </h4>
                                <p>بعد تحديد الموضوع وتحديد المشكلة والأهداف، نساعد الطلاب في اختيار المنهجية
                                    البحثية المناسبة. فالمنهجية الصحيحة تلعب دورًا حاسمًا في جودة البحث وموثوقيته.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-features">
                                <div class="spam sl-number">4.</div>
                                <h4 class="title"> قصص النجاح </h4>
                                <p> نحن نفخر بتقديم ابحاث عالية الجودة وخدمة عملاء مميزة، ونحن سعداء بأن نساهم في
                                    تحديد المشكلة والأهداف، ومساعدة الطلاب في اختيار المنهجية البحثية المناسبة.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-gallery">
                        <div class="row row--10">
                            <div class="col-6">
                                <div class="thumbnail thumbnail-1">
                                    <img src="{{url('assets/frontend')}}/img/re3.jpg" alt="About">
                                </div>
                                <div class="thumbnail thumbnail-2">
                                    <img src="{{url('assets/frontend')}}/img/re4.jpg" alt="About">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="thumbnail thumbnail-3">
                                    <img src="{{url('assets/frontend')}}/img/re2.jpg" alt="About">
                                </div>
                                <div class="thumbnail thumbnail-4">
                                    <img src="{{url('assets/frontend')}}/img/re1.jpg" alt="About">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <div class="thumbnail"> <img src="./assets/img/testimonial/image-1.png"
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
                        <div class="thumbnail"> <img src="./assets/img/testimonial/image-2.png"
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
                        <div class="thumbnail"> <img src="./assets/img/testimonial/image-3.png"
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
                        <div class="thumbnail"> <img src="./assets/img/testimonial/image-1.png"
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
