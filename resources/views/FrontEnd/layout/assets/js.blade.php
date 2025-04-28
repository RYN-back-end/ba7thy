<script src="{{url('assets/frontend')}}/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="{{url('assets/frontend')}}/js/vendor/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="{{url('assets/frontend')}}/js/vendor/popper.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/bootstrap.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/slick.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/js.cookie.js"></script>
<!-- <script src="{{url('assets/frontend')}}/js/vendor/jquery.style.switcher.js"></script> -->
<script src="{{url('assets/frontend')}}/js/vendor/jquery-ui.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/jquery.ui.touch-punch.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/jquery.countdown.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/sal.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/jquery.fancybox.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/isotope.pkgd.min.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/counterup.js"></script>
<script src="{{url('assets/frontend')}}/js/vendor/waypoints.min.js"></script>
<script src="{{url('assets/frontend')}}/js/jquery.fancybox.min.js"></script>
<!-- Main JS -->
<script src="{{url('assets/frontend')}}/js/rtl-main.js"></script>
<script>
    var loader = document.getElementById("preload");
    window.addEventListener("load", () => {
        setTimeout(() => {
            loader.classList.add("hide_loader");
        }, 1500);
        loader.classList.add("hide_loader");
    });


    $('.socialClick').click(function (){
        var url = "{{route('updateClickNums')}}";
        var type =  $(this).attr('id');
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                type: type
            },
        });

    });
</script>


