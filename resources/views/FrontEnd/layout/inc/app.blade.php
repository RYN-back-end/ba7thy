<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('FrontEnd.layout.assets.css')
</head>

<body class="sticky-header">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJS25VB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

{{--<div id="preload"></div>--}}
<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
<a class="whatsappButton socialClick" id="whatsapp_clicks" href="{{$setting->whatsapp}}"><img src="{{url('assets/frontend')}}/img/whatsappbrand.svg" alt="واتساب"></a>
<a class="telegramButton socialClick" id="telegram_clicks" href="{{$setting->telegram}}"><img src="{{url('assets/frontend')}}/img/Telegram_logo.png" alt="تليجرام"></a>
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
@include('layouts.toaster.toaster')
@yield('web.scripts')

</body>

</html>
