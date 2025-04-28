<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" maintenance management  computerized system ">
    <meta name="keyword" content=" maintenance management  computerized system ">
    <link rel="icon" href="{{url('assets/frontend')}}/img/4.svg" type="image/x-icon">
    <title> بحثى | Bahthi </title>
    <link rel="stylesheet" href="{{url('assets/dashboard')}}/css/all.css">
    <link rel="stylesheet" href="{{url('assets/dashboard')}}/css/styleAR.css">
    <link rel="stylesheet" href="{{url('assets/dashboard')}}/css/custom.css">

    <script src="{{url('assets/dashboard')}}/js/plugins.js"></script>
</head>

<body class="layout-1" data-nami="theme-blue">
<!-- content -->
<div class="wrapper radius-0">
    <!-- inner content -->
    <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
        <div class="container-fluid m-auto">
            <!-- put your content here -->
            <div class="row g-0 justify-content-center">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="page-footer px-xl-4 px-sm-2 px-0 py-3">
        <div class="container-fluid d-flex flex-wrap justify-content-center align-items-center">
            <p class=" text-muted d-flex align-items-center gap-1">
                {{helperTrans('admin.all rights are save')}}
                <a href="https://rynprogramming.com/" target="_blank" title="{{setting()->title}}" class="namiFotter">
                    <img src="{{url('assets')}}/frontend/img/logo-new.png" alt="nami">
                </a>
                © {{date('Y')}}
                ❤️
            </p>
        </div>
    </footer>
</div>
<script src="{{url('assets/dashboard')}}/js/theme.js"></script>
@include('layouts.toaster.toaster')
<script>
    $("form#Form").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = $('#Form').attr('action');
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            beforeSend: function () {
                $('.loader-ajax').show()
                $('#loginButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">{{helperTrans('admin.working')}}</span>').attr('disabled', true);
            },
            complete: function () {
                $('#loginButton').html(`<i id="lockId" class="fa-solid fa-lock" style="margin-left: 6px"></i> {{helperTrans('admin.login')}}`).attr('disabled', false);

            },
            success: function (data) {

                if (data == 200) {

                    window.setTimeout(function () {
                        my_toaster('{{helperTrans('admin.welcome back')}}')
                    }, 500);
                    window.setTimeout(function () {
                        window.location = "{{route('admin.index')}}"
                    }, 1000);

                } else {

                    window.setTimeout(function () {
                        my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                    }, 500);
                }
            },
            error: function (data) {

                window.setTimeout(function () {
                    $('.loader-ajax').hide()
                    if (data.status === 500) {
                        $('#loginButton').html(`<i id="lockId" class="fa-solid fa-lock" style="margin-left: 6px"></i> {{helperTrans('admin.login')}}`).attr('disabled', false);
                        my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                    } else if (data.status === 422) {
                        $('#loginButton').html(`<i id="lockId" class="fa-solid fa-lock" style="margin-left: 6px"></i> {{helperTrans('admin.login')}}`).attr('disabled', false);
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    my_toaster(value, 'error');
                                });
                            } else {
                            }
                        });
                    } else {
                        $('#loginButton').html(`<i id="lockId" class="fa-solid fa-lock" style="margin-left: 6px"></i> {{helperTrans('admin.login')}}`).attr('disabled', false);

                        my_toaster('{{helperTrans('admin.there is an error')}}', 'error')
                    }
                }, 500);


            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });

</script>
</body>

</html>
