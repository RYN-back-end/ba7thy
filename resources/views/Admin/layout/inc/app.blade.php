<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.layout.assets.css')
    @include('layouts.loader.loaderCss')

    @yield('styles')
</head>

<body class="layout-1" data-nami="theme-blue">
@include('layouts.loader.loader')
@include('Admin.layout.inc.sidebar')
<!-- content -->
<div class="wrapper">
    @include('Admin.layout.inc.header')
    @include('Admin.layout.inc.toolbar')
    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @include('Admin.layout.inc.footer')

</div>
@include('Admin.layout.assets.js')
@include('layouts.toaster.toaster')

@yield('scripts')

</body>

</html>
