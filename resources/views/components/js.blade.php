<script src="{{asset('js/frontend/manifest.js')}} "></script>
<script src="{{asset('js/frontend/vendor.js')}} "></script>
<script src="{{asset('js/frontend/app.js')}} "></script>
{{--<script src="{{asset('assets/frontends/default/js/main.js')}} "></script>--}}
@yield('js')
<script>
    $(document).ready(function () {
        $('.footer-item').click(function () {
            $(this).find('i').toggle();
        });
        $('.dropdown-toggle').click(function () {
            $('.dropdown-toggle').not(this).removeClass('set-color');
            $(this).toggleClass('set-color');
        });
        function rearrangeElements() {
            var windowWidth = $(window).width();
            if (windowWidth <= 767) {
                $('.start-now').prependTo('.navbar-nav');
            } else {
                $('.start-now').appendTo('.navbar-nav');
            }
        }
        $(window).on('load resize', rearrangeElements);


    });
</script>
