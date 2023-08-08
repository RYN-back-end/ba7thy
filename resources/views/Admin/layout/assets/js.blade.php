<script src="{{url('assets/dashboard')}}/js/theme.js"></script>
<script>
    $('.loader-container').fadeOut(1000)
    $('.m-link').each(function (index) {
        if ($(this).attr('href') == location.origin + location.pathname) {
            $(this).addClass('active');
        }
    })

    $('.ms-link').each(function (index) {
        if ($(this).attr('href') == location.origin + location.pathname) {
            $(this).addClass('active');
            $(this).closest('ul').addClass('show');
            $(this).closest('.collapsed').find('.m-link').removeClass('collapsed');
            $(this).closest('.collapsed').find('.m-link').attr('aria-expanded', 'true');
        }
    })
</script>
