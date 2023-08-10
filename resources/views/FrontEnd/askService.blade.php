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
                            <li class="axil-breadcrumb-item active" aria-current="page"> طلب خدمة </li>
                        </ul>
                        <h1 class="title"> ارسل طلبك وانتظر النتائج المبهره </h1>
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
    <!-- Start About Area  -->
    <div class="axil-askservice-area about-style-3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 col-12">
                    <form action="">
                        <div class="row justify-content-between">
                            <div class="form-group col-lg-6 col-12">
                                <label for="name"> الاسم كاملا* </label>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="email"> البريد الالكترونى* </label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="major"> التخصص* </label>
                                <select name="major" id="major">
                                    <option value="الطب" selected>الطب</option>
                                    <option value="المحاماه">المحاماه</option>
                                    <option value="التدريس">التدريس</option>
                                    <option value="العلوم">العلوم</option>
                                    <option value="الهندسه">الهندسه</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="service-type"> نوع الخدمة* </label>
                                <select name="service-type" id="service-type">
                                    <option value="رسائل ماجيستير ودكتوراه" selected>
                                        رسائل ماجيستير ودكتوراه
                                    </option>
                                    <option value="ترجمه طبيه">ترجمه طبيه</option>
                                    <option value="ترجمه قانونيه">ترجمه قانونيه</option>
                                    <option value="ترجمه علميه">ترجمه علميه</option>
                                    <option value="تدقيق لغوى ونحوى">تدقيق لغوى ونحوى</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="recieve-date"> موعد التسليم* </label>
                                <input type="date" name="recieve-date" id="recieve-date">
                            </div>
                            <div class="form-group col-12">
                                <label for="service-description"> تفاصيل الخدمة* </label>
                                <textarea name="service-description" id="service-description"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button class="sendform" type="submit">
                                    <i class="fa-sharp fa-light fa-paper-plane-top"></i> إرسال
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->
@endsection
