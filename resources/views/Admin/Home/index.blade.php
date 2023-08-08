@extends('Admin.layout.inc.app')
@section('content')

{{--    <div class="row">--}}
{{--        <div class="col-lg-4 col-md-6 col-sm-6 p-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body d-flex align-items-center">--}}
{{--                    <div class="avatar rounded-circle no-thumbnail bg-light">--}}
{{--                        <i class="fa-regular fa-users"></i>--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill ms-3 text-truncate">--}}
{{--                        <p class="small mb-2">{{helperTrans('admin.users')}}</p>--}}
{{--                        <span class="h4 mb-0  fw-bold"> {{$usersCount??0}} </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-6 col-sm-6 p-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body d-flex align-items-center">--}}
{{--                    <div class="avatar rounded-circle no-thumbnail bg-light">--}}
{{--                        <i class="fa-regular fa-dollar-square"></i>--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill ms-3 text-truncate">--}}
{{--                        <p class="small mb-2">{{helperTrans('admin.orders')}}</p>--}}
{{--                        <span class="h4 mb-0  fw-bold"> {{$orders->count()}} </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-6 col-sm-6 p-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body d-flex align-items-center">--}}
{{--                    <div class="avatar rounded-circle no-thumbnail bg-light">--}}
{{--                        <i class="fa-regular fa-sheet-plastic"></i>--}}
{{--                    </div>--}}
{{--                    <div class="flex-fill ms-3 text-truncate">--}}
{{--                        <p class="small mb-2"> {{helperTrans('admin.products')}} </p>--}}
{{--                        <span class="h4 mb-0  fw-bold"> {{$productsCount??0}}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-8 p-2">--}}
{{--            <div class="card h-100">--}}
{{--                <div class="card-header">--}}
{{--                    <h6 class="card-title m-0"> {{helperTrans('admin.orders')}} </h6>--}}
{{--                    <!-- widgest  -->--}}
{{--                    <div class="d-flex align-items-center gap-3 ">--}}
{{--                        <a href="#" class="card-fullscreen m-0" data-bs-toggle="tooltip" title=" {{helperTrans('admin.full screen')}} ">--}}
{{--                            <i class="icon-size-fullscreen"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body d-flex justify-content-center flex-column">--}}
{{--                    <div id="apex-AudienceOverview"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 p-2">--}}
{{--            <div class="card h-100">--}}
{{--                <div class="card-header">--}}
{{--                    <h6 class="card-title m-0"> {{helperTrans('admin.total orders')}} </h6>--}}
{{--                    <!-- widgest  -->--}}
{{--                    <div class="d-flex align-items-center gap-3">--}}
{{--                        <a href="#" class="card-fullscreen m-0" data-bs-toggle="tooltip" title="{{helperTrans('admin.full screen')}} ">--}}
{{--                            <i class="icon-size-fullscreen"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body d-flex justify-content-center flex-column">--}}
{{--                    <div id="apex-SalesbyCategory"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
@section('scripts')
    <script src="{{url('assets/dashboard')}}/js/bundle/apexcharts.bundle.js"></script>
{{--    <script>--}}
{{--        // LUNO Revenue--}}
{{--        var options = {--}}
{{--            series: [--}}
{{--                {--}}
{{--                name: ' {{helperTrans('admin.new')}} ',--}}
{{--                data: [440, 505, 414, 671, 505, 414]--}}
{{--            },{--}}
{{--                name: ' {{helperTrans('admin.accepted')}} ',--}}
{{--                data: [440, 505, 414, 671, 505, 414]--}}
{{--            },{--}}
{{--                name: ' {{helperTrans('admin.rejected')}} ',--}}
{{--                data: [440, 505, 414, 671, 505, 414]--}}
{{--            },{--}}
{{--                name: ' {{helperTrans('admin.ended')}} ',--}}
{{--                data: [440, 505, 414, 671, 505, 414]--}}
{{--            },--}}
{{--            ],--}}
{{--            chart: {--}}
{{--                type: 'bar',--}}
{{--                height: 350,--}}
{{--                stacked: true,--}}
{{--                stackType: '100%',--}}
{{--                toolbar: {--}}
{{--                    show: false,--}}
{{--                },--}}
{{--            },--}}
{{--            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],--}}
{{--            responsive: [{--}}
{{--                breakpoint: 480,--}}
{{--                options: {--}}
{{--                    legend: {--}}
{{--                        position: 'bottom',--}}
{{--                        offsetX: -10,--}}
{{--                        offsetY: 0--}}
{{--                    }--}}
{{--                }--}}
{{--            }],--}}
{{--            xaxis: {--}}
{{--                categories: ['طلب رقم 1 ', 'طلب رقم 2 ', 'طلب رقم 3 ', 'طلب رقم 4 ', 'طلب رقم 5 ', 'طلب رقم 6 '],--}}
{{--            },--}}
{{--            plotOptions: {--}}
{{--                bar: {--}}
{{--                    borderRadius: 10,--}}
{{--                    horizontal: false,--}}
{{--                    endingShape: 'rounded'--}}
{{--                },--}}
{{--            },--}}
{{--            fill: {--}}
{{--                opacity: 1--}}
{{--            },--}}
{{--            dataLabels: {--}}
{{--                enabled: false,--}}
{{--            },--}}
{{--            legend: {--}}
{{--                position: 'bottom',--}}
{{--                horizontalAlign: 'center',--}}
{{--            },--}}
{{--        };--}}
{{--        var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);--}}
{{--        chart.render();--}}
{{--        // Sales by Category--}}
{{--        var options = {--}}
{{--            series: [{{$orders->where('status','new')->count()}}, {{$orders->where('status','accepted')->count()}}, {{$orders->where('status','rejected')->count()}}, {{$orders->where('status','ended')->count()}}],--}}
{{--            labels: ['{{helperTrans('admin.new')}}', '{{helperTrans('admin.accepted')}}', '{{helperTrans('admin.rejected')}}', '{{helperTrans('admin.ended')}}'],--}}
{{--            chart: {--}}
{{--                height: 350,--}}
{{--                type: 'donut',--}}
{{--            },--}}
{{--            plotOptions: {--}}
{{--                pie: {--}}
{{--                    donut: {--}}

{{--                    }--}}
{{--                }--}}
{{--            },--}}
{{--            dataLabels: {--}}
{{--                enabled: false,--}}
{{--            },--}}
{{--            legend: {--}}
{{--                position: 'bottom',--}}
{{--                horizontalAlign: 'center',--}}
{{--                show: true,--}}
{{--            },--}}
{{--            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)', 'var(--chart-color4)'],--}}
{{--        }--}}
{{--        var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);--}}
{{--        chart.render();--}}
{{--    </script>--}}
@endsection
