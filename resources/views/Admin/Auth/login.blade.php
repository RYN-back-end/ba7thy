@extends('Admin.Auth.layout.inc.app')
@section('content')
    <form class="row g-3" id="Form" action="{{route('admin.login')}}" method="POST">
        @csrf
        <div class="col-12 text-center mb-4">
            <img class="authLogo" src="{{url('assets/frontend')}}/img/3.svg" alt="">
        </div>
        <div class="col-12 text-center mb-5">
            <h2 class="fw-bold">{{helperTrans('admin.login')}} </h2>
            <span class="text-muted"> بحثى | Bahthi</span>
        </div>
        <div class="col-12">
            <div class="mb-2">
                <label class="form-label"> {{helperTrans('admin.email')}} </label>
                <input type="email" name="email" required class="form-control form-control-lg" placeholder="name@example.com">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-2">
                <div class="form-label">{{helperTrans('admin.password')}}</div>
                <input id="password" class="form-control form-control-lg" name="password" required type="password"
                       placeholder="{{helperTrans('admin.enter Password')}}">
            </div>
        </div>
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-lg btn-block btn-dark lift text-uppercase" id="loginButton"><i class="fa-solid fa-lock"></i>
                {{helperTrans('admin.login')}}</button>
        </div>
    </form>

@endsection
