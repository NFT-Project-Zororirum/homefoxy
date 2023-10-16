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
    });
</script>
