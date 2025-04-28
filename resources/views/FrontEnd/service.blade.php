@extends('FrontEnd.layout.inc.app')

@section('special_meta')
    <link rel="canonical" href="{{url('/').'/'.get_lang().'/services/'.$obj->url_title}}"/>
@endsection

@section('title')
    {{$obj['meta_title_'.get_lang()]}}
@endsection

@section('desc_of_page')
    {{$obj['meta_desc_'.get_lang()]}}
@endsection

<style>
    #paypal-form-fields-container-T7KD3FFVJ5JNL .input-label {
        font-size: 15px !important;
    }
    #paypal-container-T7KD3FFVJ5JNL {
        margin-top: 20px !important;
    }
    #paypal-form-fields-container-T7KD3FFVJ5JNL input {
        font-size: 15px !important;
    }
    #paypal-form-fields-container-T7KD3FFVJ5JNL .amount-container {
        margin-top: 15px !important;
    }
    #paypal-form-fields-container-T7KD3FFVJ5JNL #desc-label {
        font-size: 16px !important;
        margin-bottom: 15px !important;
    }

    .css-dt0ym9 {
        margin: auto;
    }

    .channels img {
        height: 35px;
        width: 35px;
        margin: 10px 10px;
    }

    .channels .telegram {
        height: 30px;
        width: 30px;
    }
    .channels .bahthi {
        height: 30px;
        width: 60px;
    }

    /* PayPal Form Loader */
    #paypal-loader {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px; /* Adjust height as needed */
    }
    #paypal-loader p {
        font-size: 16px;
        font-weight: bold;
    }
    #paypal-container-T7KD3FFVJ5JNL {
        display: none; /* Hide PayPal form until loaded */
    }
</style>

@section('content')
    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="axil-single-post post-formate post-standard">
            <div class="container">
                <div class="content-block">
                    <div class="inner">
                        <div class="post-thumbnail">
                            <img src="{{ get_file($obj->image) }}" alt="{{ $obj->title }}" loading="lazy">
                        </div>
                        <!-- End .thumbnail -->
                    </div>
                </div>
                <!-- End .content-blog -->
            </div>
        </div>
        <!-- End .single-post -->
        <div class="post-single-wrapper position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top">
                                <div class="post-details__social-share">
                                    <span class="share-on-text">{{ helperTrans('web.sharing') }}:</span>
                                    <div class="social-share">
                                        <a href="https://twitter.com/intent/tweet?text={{ route('frontend.service', $obj->url_title) }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://api.whatsapp.com/send?text={{ route('frontend.service', $obj->url_title) }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://t.me/share/url?url={{ route('frontend.service', $obj->url_title) }}" target="_blank"><i class="fab fa-telegram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 axil-post-wrapper">
                        <div class="post-heading">
                            <h2 class="title">
                                {{ $obj->title }}
                            </h2>
                        </div>
                        {!! $obj->text !!}
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center">
                            <p class="fw-bolder">{{ helperTrans('web.pay_text') }}</p>

                            <a class="channels" href="{{ $setting->whatsapp }}">
                                <img class="whatsapp" src="{{ url('assets/frontend') }}/img/whatsappbrand.svg" alt="واتساب">
                            </a>
                            <a class="channels" href="{{ $setting->telegram }}">
                                <img class="telegram" src="{{ url('assets/frontend') }}/img/Telegram_logo.png" alt="تليجرام">
                            </a>
                            <a class="channels" href="{{ route('frontend.contact') }}">
                                <img class="bahthi" src="{{ url('assets/frontend') }}/img/3.svg" alt="تواصل معنا">
                            </a>

                            <!-- PayPal Loader -->
                            <div id="paypal-loader">
                                <p>يتم تحميل نموذج الدفع ...</p>
                            </div>

                            <!-- PayPal Container -->
                            <div id="paypal-container-T7KD3FFVJ5JNL"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <aside class="axil-sidebar-area">
                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget mt--40">
                                <h6 class="widget-title fw-bold">{{ helperTrans('web.Other services') }}</h6>
                                @foreach($another as $row)
                                    <!-- Start Single Post List  -->
                                    <a href="{{ route('frontend.service', $row->url_title) }}">
                                        <div class="content-blog post-list-view mb--20">
                                            <div class="thumbnail">
                                                <a href="{{ route('frontend.service', $row->url_title) }}">
                                                    <img class="small-thumb-image" loading="lazy" src="{{ get_file($row->image) }}" alt="{{ $row->title }}">
                                                </a>
                                            </div>
                                            <div style="height: 150px;" class="content d-flex justify-content-center flex-column">
                                                <a href="{{ route('frontend.service', $row->url_title) }}">
                                                    <h5 class="mb-2">{{ $row->title }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- End Single Post List  -->
                                @endforeach
                            </div>
                            <!-- End Single Widget  -->
                        </aside>
                        <!-- End Sidebar Area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area  -->

    <!-- PayPal Script and Initialization -->
    <script>
        document.addEventListener("DOMContentLoaded", async function () {
            try {
                // Show PayPal Loader
                document.getElementById('paypal-loader').style.display = 'flex';

                // Load PayPal Script
                await loadPayPalScript();

                // Render PayPal Buttons
                paypal.HostedButtons({
                    hostedButtonId: "T7KD3FFVJ5JNL",
                }).render("#paypal-container-T7KD3FFVJ5JNL");

                // Hide PayPal Loader and Show PayPal Form
                document.getElementById('paypal-loader').style.display = 'none';
                document.getElementById('paypal-container-T7KD3FFVJ5JNL').style.display = 'block';
            } catch (error) {
                console.error('Failed to load PayPal:', error);
                document.getElementById('paypal-loader').innerHTML = '<p>خطأ في تحميل نموذج الدفع. يرجى المحاولة مرة أخرى.</p>';
            }
        });

        // Function to Load PayPal Script
        function loadPayPalScript() {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = 'https://www.paypal.com/sdk/js?client-id=BAAbdlLLxGsztrENdMJmCBxVHNGwyllq5KnZa3aCjGq-aIqyF-4FS6681FZfTE7D-M2MxRYcxd8Uo1-hh4&components=hosted-buttons&disable-funding=venmo&currency=USD';
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }
    </script>
@endsection