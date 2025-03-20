@extends('FrontEnd.layout.inc.app')
@section('special_meta')
    <link rel="canonical" href="{{url()->current()}}" />
@endsection
@section('title')
    {{$meta['title_'.get_lang()]}}
@endsection
@section('desc_of_page')
    {{$meta['desc_'.get_lang()]}}
@endsection
@section('content')
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a
                                    href="{{route('frontend.index')}}"> {{helperTrans('admin.Home')}} </a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active"
                                aria-current="page">{{helperTrans('web.Research')}} </li>
                        </ul>
                        <h2 class="title"> {{helperTrans('web.All about academic research.')}}</h2>
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
    <div class="axil-about-area about-style-3">
        <div class="container">
            <div class="row">
                <div class="nav col-lg-3 col-12 flex-column research-bar side-bar" role="tablist">
                    <!-- TAP -->
                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-faq" role="tab"
                            aria-selected="true">
                        {{helperTrans('web.Articles')}}
                    </button>
{{--                    <!-- TAP -->--}}
{{--                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-terms" role="tab"--}}
{{--                            aria-selected="false">--}}
{{--                        {{helperTrans('web.Tips and Advice')}}--}}
{{--                    </button>--}}
{{--                    <!-- TAP -->--}}
{{--                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-delivery" role="tab"--}}
{{--                            aria-selected="false">--}}
{{--                        {{helperTrans('web.Resources and courses')}}--}}
{{--                    </button>--}}
                </div>
                <div class="tab-content col-lg-9 col-12" role="tabpanel" id="v-pills-tabContent">
                    <div class="tab-pane info-container fade show active" id="v-pills-faq" role="tabpanel">
                        <h2 class="research-heading"> {{helperTrans('web.Our articles')}} </h2>
                        <div class="row g-5">
                            @foreach($articles as $article)
                                <div class="col-md-4">
                                    <div class="content-blog blog-grid">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="{{route('frontend.article',($article->url_title) ?? '2')}}">
                                                    <img src="{{get_file($article->image)}}"
                                                         alt="{{$article->title}}">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="fw-bold mb-4">{{$article->title}}</h5>
                                                <div class="read-more-btn">
                                                    <a class="axil-btn right-icon" href="{{route('frontend.article',($article->url_title) ?? '2')}}">{{helperTrans('web.Read more')}}<i
                                                            class="fal fa-long-arrow-left"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane info-container fade " id="v-pills-terms" role="tabpanel">
                        <h2 class="research-heading"> نصائح وإرشادات مهمة فى البحث العلمى </h2>
                        <p>
                            1.السرية والأمان:
                            <br>
                            يتعهد المكتب بالحفاظ على سرية جميع المعلومات والوثائق المقدمة من قبل العملاء.
                            يتم اتخاذ جميع الإجراءات اللازمة لضمان الأمان والحماية من عمليات الاختراق والاستخدام غير
                            المصرح به.
                            <br><br>
                            2.دقة وجودة العمل:
                            <br>
                            يتعهد المكتب بتوفير ترجمة وإنشاء رسائل دكتوراه وماجستير عالية الجودة ومتقنة.
                            يضمن المكتب أن جميع الأبحاث والمقالات والأطروحات تتوافق مع معايير الجودة والتنسيق
                            المطلوبة.
                            <br><br>
                            3.الالتزام بالمواعيد الزمنية:
                            <br>
                            يلتزم المكتب بتسليم الأعمال في المواعيد المحددة بدقة ومهنية.
                            <br><br>
                            4.الأسعار والدفع:
                            <br>
                            يتم تحديد أسعار الخدمات بشكل واضح ومحدد مسبقًا وفقًا لطبيعة العمل وتعقيده.
                            يجب أن يتم تحديد الطريقة المقبولة للدفع والشروط المتعلقة بالدفعات والتسوية.
                            <br><br>
                            5.التعديلات والاسترداد:
                            <br>
                            يجب تحديد سياسة التعديلات والاسترداد بوضوح، بما في ذلك عدد المرات المسموح بها للتعديلات
                            والشروط المحددة للاسترداد.
                            <br><br>
                            6.حقوق الملكية الفكرية:
                            <br>
                            يجب توضيح حقوق الملكية الفكرية للأبحاث والمقالات والأطروحات التي تم توفيرها من قبل
                            العملاء.
                            <br><br>
                            7.الاعتماد والمصداقية:
                            <br>
                            يجب أن يتم توضيح المصداقية والاعتمادية الخاصة بمكتب الترجمة والإنشاء، وذلك من خلال عرض
                            تفاصيل عن الخبرات والشهادات والعملاء السابقين.
                            <br><br>
                            8.الاتصال والدعم:
                            <br>
                            يجب توفير معلومات الاتصال اللازمة للتواصل مع المكتب وطرق الدعم الفني إن وجدت.
                            <br><br>
                            9.إجراءات الإلغاء:
                            <br>
                            يجب توضيح إجراءات الإلغاء من قبل العميل والمكتب في حالة عدم استمرار العمل على مشروع
                            معين.
                        </p>
                    </div>
                    <div class="tab-pane info-container fade " id="v-pills-delivery" role="tabpanel">
                        <h2 class="research-heading">مصادر وكورسات مفيده للمهتمين بالبحث العلمى</h2>
                        <p>
                            1.السرية والأمان:
                            <br>
                            يتعهد المكتب بالحفاظ على سرية جميع المعلومات والوثائق المقدمة من قبل العملاء.
                            يتم اتخاذ جميع الإجراءات اللازمة لضمان الأمان والحماية من عمليات الاختراق والاستخدام غير
                            المصرح به.
                            <br><br>
                            2.دقة وجودة العمل:
                            <br>
                            يتعهد المكتب بتوفير ترجمة وإنشاء رسائل دكتوراه وماجستير عالية الجودة ومتقنة.
                            يضمن المكتب أن جميع الأبحاث والمقالات والأطروحات تتوافق مع معايير الجودة والتنسيق
                            المطلوبة.
                            <br><br>
                            3.الالتزام بالمواعيد الزمنية:
                            <br>
                            يلتزم المكتب بتسليم الأعمال في المواعيد المحددة بدقة ومهنية.
                            <br><br>
                            4.الأسعار والدفع:
                            <br>
                            يتم تحديد أسعار الخدمات بشكل واضح ومحدد مسبقًا وفقًا لطبيعة العمل وتعقيده.
                            يجب أن يتم تحديد الطريقة المقبولة للدفع والشروط المتعلقة بالدفعات والتسوية.
                            <br><br>
                            5.التعديلات والاسترداد:
                            <br>
                            يجب تحديد سياسة التعديلات والاسترداد بوضوح، بما في ذلك عدد المرات المسموح بها للتعديلات
                            والشروط المحددة للاسترداد.
                            <br><br>
                            6.حقوق الملكية الفكرية:
                            <br>
                            يجب توضيح حقوق الملكية الفكرية للأبحاث والمقالات والأطروحات التي تم توفيرها من قبل
                            العملاء.
                            <br><br>
                            7.الاعتماد والمصداقية:
                            <br>
                            يجب أن يتم توضيح المصداقية والاعتمادية الخاصة بمكتب الترجمة والإنشاء، وذلك من خلال عرض
                            تفاصيل عن الخبرات والشهادات والعملاء السابقين.
                            <br><br>
                            8.الاتصال والدعم:
                            <br>
                            يجب توفير معلومات الاتصال اللازمة للتواصل مع المكتب وطرق الدعم الفني إن وجدت.
                            <br><br>
                            9.إجراءات الإلغاء:
                            <br>
                            يجب توضيح إجراءات الإلغاء من قبل العميل والمكتب في حالة عدم استمرار العمل على مشروع
                            معين.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
