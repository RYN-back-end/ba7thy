<!-- sidebar -->
<div class="sidebar p-2 py-md-3 ">
    <div class="container-fluid h-auto">
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span> {{setting()->title}} </span></h4>
        </div>
        <div class="main-menu flex-grow-1">
            <ul class="menu-list my-4">
                <li class="divider py-2 lh-sm"><span
                            class="small"> {{helperTrans('admin.System Administrator')}} </span> <br>
                </li>
                <li>
                    <a class="m-link" href="{{route('admin.index')}}">
                        <i class="fa-regular fa-gauge-high"></i>
                        <span> {{helperTrans('admin.main')}} </span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="{{route('admins.index')}}">
                        <i class="fa-regular fa-user"></i>
                        <span> {{helperTrans('admin.admins')}} </span>
                    </a>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#website-data" href="#">
                        <i class="fa-regular fa-spider-web"></i>
                        <!-- /icon -->
                        <span class="ms-2">{{helperTrans('admin.Web Site Data')}}</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <ul class="sub-menu collapse" id="website-data">
                        <li><a class="ms-link"
                               href="{{route('slider.index')}}">{{helperTrans('admin.slider')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('whatPresent.index')}}">{{helperTrans('admin.What do we offer ')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('about-us.index')}}">{{helperTrans('admin.About Us')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('about-us-images.index')}}">{{helperTrans('admin.About us images')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('articles.index')}}">{{helperTrans('admin.Our articles')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('services.index')}}">{{helperTrans('admin.Services')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('questions.index')}}">{{helperTrans('admin.FAQ')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('counters.index')}}">{{helperTrans('admin.Counter')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('steps.index')}}">{{helperTrans('admin.Steps')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('reviews.index')}}">اراء العملاء</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('aboutPage.index')}}">{{trans('admin.aboutPage')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('majors.index')}}">{{helperTrans('admin.Majors')}}</a>
                        </li>
                        <li><a class="ms-link"
                               href="{{route('servicesType.index')}}">{{helperTrans('admin.Services Type')}}</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a class="m-link" href="{{route('contacts.index')}}">
                        <i class="fa fa-message"></i>
                        <span> رسائل العملاء </span>
                    </a>
                </li>

                <li>
                    <a class="m-link" href="{{route('meta.index')}}">
                        <i class="fa-regular fa-edit"></i>
                        <span> بيانات Meta للصفحات </span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="{{route('setting.index')}}">
                        <i class="fa fa-cogs"></i>
                        <span> سياسات الموقع </span>
                    </a>
                </li>


                {{--                <li>--}}
                {{--                    <a class="m-link" href="{{route('requests.index')}}">--}}
                {{--                        <i class="fa fa-code-pull-request"></i>--}}
                {{--                        <span> {{helperTrans('admin.Requests')}} </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                {{--                <li>--}}
                {{--                    <a class="m-link" href="{{route('setting.index')}}">--}}
                {{--                        <i class="fa fa-cogs"></i>--}}
                {{--                        <span> {{helperTrans('admin.setting')}} </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="clints.html">--}}
                {{--                        <i class="fa-regular fa-user-tie"></i>--}}
                {{--                        <span> العملاء </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="permissions.html">--}}
                {{--                        <i class="fa-regular fa-shield-check"></i>--}}
                {{--                        <span> الصلاحيات </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="projects.html">--}}
                {{--                        <i class="fa-regular fa-rectangle-history"></i>--}}
                {{--                        <span> المشاريع </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="work-order.html">--}}
                {{--                        <i class="fa-regular fa-sheet-plastic"></i>--}}
                {{--                        <span> أوامر العمل </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="daily-tasks.html">--}}
                {{--                        <i class="fa-regular fa-list-radio"></i>--}}
                {{--                        <span> المهام اليومية </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="purchase-orders.html">--}}
                {{--                        <i class="fa-regular fa-bag-shopping"></i>--}}
                {{--                        <span> أوامر الشراء </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="#">--}}
                {{--                        <i class="fa-regular fa-receipt"></i>--}}
                {{--                        <span> الفواتير </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="chat.html">--}}
                {{--                        <i class="fa-regular fa-receipt"></i>--}}
                {{--                        <span> المحادثات </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <!-- main link -->--}}
                {{--                    <a class="m-link" href="zoom.html">--}}
                {{--                        <i class="fa-regular fa-calendar"></i>--}}
                {{--                        <span> مواعيد اجتماعات زوم </span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                <!-- menu -->
                <!-- <li class="collapsed">
                  main link --
                  <a class="m-link " data-bs-toggle="collapse" data-bs-target="#my_dashboard" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                      <path class="var(--secondary-color)" fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    <span> My Dashboard </span>
                    <span class="arrow fa fa-angle-right ms-auto text-end"> </span>
                  </a>
                   sub menu --
                  <ul class="sub-menu collapse " id="my_dashboard">
                    <li> <a class="ms-link active" href="{{route('frontend.index')}}"> Analysis </a> </li>
                    <li> <a class="ms-link" href="index-wallet.html"> My wallet </a> </li>
                    <li> <a class="ms-link" href="index-iot.html"> IOT </a> </li>
                  </ul>
                </li> -->
            </ul>
        </div>
    </div>
    <a href="{{route('logout')}}" class="logOut"> <i class="fa-duotone fa-power-off"></i>
        <span> {{helperTrans('admin.logout')}} </span> </a>
</div>
