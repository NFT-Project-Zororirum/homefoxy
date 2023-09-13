<!DOCTYPE html>
<html
    class="wf-poppins-n1-active wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-poppins-n7-active wf-poppins-n9-active wf-caveat-n4-active wf-active no-touch"
    lang="">
@include('components.head')
<body data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1087.0"
      data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1087.0">
@include("components.menu")
<!-- Banners Start -->
<header class="header section" id="home">
    <div class="shapes-container">
        <div class="static-shape shape-main cutout x2 bottom-right aos-init aos-animate" data-aos="fade-down"
             data-aos-delay="300"></div>
    </div>

    <div class="container pb-1">
    </div>
</header>
@yield('content')
<!--====== Scroll To Top Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up "></i>
</div>
@include("components.footer")

@include('components.js')
@yield('script')
</body>
</html>
