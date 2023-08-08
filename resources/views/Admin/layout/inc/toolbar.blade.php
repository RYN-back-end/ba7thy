<!-- toolbar -->
<div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 mb-3 align-items-center">
            <div class="col">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"> <a class="text-secondary" href="{{route('admin.index')}}"> {{helperTrans('admin.main')}} </a> </li>
                    @yield('routes')
                </ol>
            </div>
        </div>
    </div>
</div>
