@extends('FrontEnd.layout.inc.app')
@section('content')

    @include('FrontEnd.parts.slider')
    @include('FrontEnd.parts.whatPresent')
    @include('FrontEnd.parts.aboutUs')

    <!-- Start Testimonila Area  -->
    <div class="axil-testimoial-area axil-section-gap ">
        <div class="container">
            <div class="section-title-wrapper"> <span class="title-highlighter highlighter-secondary"> <i
                        class="fal fa-quote-left"></i>{{helperTrans('web.opinions')}}</span>
                <h2 class="title">{{helperTrans('web.customer reviews')}}</h2>
            </div> <!-- End .section-title -->
            <div
                class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"كنت أبحث عن شخص ما لمساعدتي في كتابة بحثي لرسالة الماجستير، ووجدت منصة بحثي. لقد كانت تجربة رائعة، فقد ساعدني فريق منصة بحثي في كتابة بحثي بطريقة جيدة وواضحة، ولقد حصلت على علامة ممتازة في بحثي.
                        "</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/4.svg"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">أحمد الشمراني</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"كنت أحتاج إلى ترجمة بعض الوثائق الخاصة بي، ووجدت منصة بحثي. لقد كانت تجربة رائعة، فقد قام فريق منصة بحثي بترجمة الوثائق الخاصة بي بطريقة دقيقة وصحيحة، ولقد حصلت على الوثائق مترجمة في الوقت المحدد.
                            "</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/4.svg"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">مريم العجلان</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"كنت أحتاج إلى كتابة مقال تسويقي للشركة الخاصة بي، ووجدت منصة بحثي. لقد كانت تجربة رائعة، فقد قام فريق منصة بحثي بكتابة مقال تسويقي لي بطريقة احترافية وجذابة، وقد زادت مبيعات الشركة الخاصة بي بعد نشر المقال.
                            "</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/4.svg"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">فهد الزعابي</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"أنا أوصي بشدة منصة بحثي لأي شخص يحتاج إلى خدمات التحليل الإحصائي أو الترجمة أو التدقيق اللغوي. لقد كانت تجربتي مع منصة بحثي تجربة رائعة، فقد حصلت على خدمات عالية الجودة وأسعار مناسبة."</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/4.svg"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">محمود المبارك</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>"كنت أحتاج إلى شخص ما لمساعدتي في كتابة تقرير علمي لإحدى المجلات العلمية، ووجدت منصة بحثي. لقد كانت تجربة رائعة، فقد قام فريق منصة بحثي بكتابة تقرير علمي لي بطريقة علمية وأكاديمية، وقد تم قبول تقريري في إحدى المجلات العلمية.
                            "</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail"> <img src="{{url('assets')}}/frontend/img/4.svg"
                                                     alt="testimonial image"> </div>
                        <div class="media-body">
                            <h6 class="title">خالد العنزي</h6>
                        </div>
                    </div> <!-- End .thumbnail -->
                </div> <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
    <!-- End Testimonila Area  -->
@endsection
