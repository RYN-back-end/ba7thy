
<!-- footer -->
<footer class="page-footer px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <p class=" text-muted d-flex align-items-center gap-1">
            {{helperTrans('admin.all rights are save')}}
            <a href="{{route('frontend.index')}}" target="_blank" title="{{setting()->title}}" class="namiFotter">
                <img src="{{url('assets/dashboard')}}/img/fav.svg" alt=""> {{setting()->title}}
            </a>
            © {{date('Y')}}
            ❤️
        </p>
    </div>
</footer>
