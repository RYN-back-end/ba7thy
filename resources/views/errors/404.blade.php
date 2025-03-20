@extends('FrontEnd.layout.inc.app')
@section('title')
    بحثى | Bahthi
@endsection
@section('content')

    <div class="text-center">
        <div class="container">
            <h4 class="title mt-5">{{trans('web.error404')}}</h4>
            <div class="content-block">
                <div class="inner">
                    <div class="post-thumbnail">
                        <img style="height: 400px" src="{{asset('assets/frontend/img/404.webp')}}" alt="blog Images">
                    </div>
                    <!-- End .thumbnail -->
                </div>
            </div>
            <!-- End .content-blog -->
        </div>
    </div>

    <?php $services = \App\Models\Service::latest()->get(); ?>
    @include('FrontEnd.parts.services')
@endsection
