<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('FrontEnd.layout.assets.css')
</head>

<body class="sticky-header">
<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
<a class="whatsappButton" href="https://wa.me/201097984798"><img src="{{url('assets/frontend')}}/img/whatsappbrand.svg" alt=""></a>
<!-- Start Header -->
@include('FrontEnd.layout.inc.header')
<!-- End Header -->
<main class="main-wrapper">
    @yield('content')
</main>
<!-- Start Footer Area  -->
@include('FrontEnd.layout.inc.footer')

<!-- End Footer Area  -->

@include('FrontEnd.layout.assets.js')
</body>

</html>
