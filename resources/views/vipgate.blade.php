@extends('components.layout')
@section('style')
    <style>
        .btn-enter {
            background-color: #FCD535;
            color: #181A20;
        }

        .card-vip_title {
            font-weight: 600;
            font-size: 48px;
            line-height: 56px;
            color: #1E2329;
        }

        .div-banner {
            width: 100%;
            background-image: url("{{asset('img/vipgate/vipgate-bg.jpg')}}");
        }

        .bn {
            padding: 50px 24px 52px;
        }

        .vip-title {
            font-size: 30px;
            line-height: 28px;
            font-weight: 700;
            font-style: normal;
        }

        .image-show {
            overflow: hidden;
        }


        @keyframes moveRight {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        /* Định nghĩa animation cho image2 từ bên dưới chèn lên */
        @keyframes moveUp {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(-120%);
            }
        }


        @media (min-width: 780px) {
            .image1, .image2 {
                transition: all 2s; /* Thời gian hiển thị hình ảnh */
                opacity: 0; /* Ẩn hình ảnh lúc đầu */
            }

            .show-on-scroll {
                opacity: 1 !important; /* Hiển thị hình ảnh */
                transform: translateX(0) !important; /* Di chuyển hình ảnh về vị trí ban đầu */
            }

            .image1 {
                position: relative;
                animation: moveRight 2s forwards; /* Di chuyển từ trái sang */
            }

            .image2 {
                position: relative;
                animation: moveUp 2s forwards; /* Di chuyển từ dưới lên */
            }

            .vip-text mb-5 {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                font-weight: 400;
                font-size: 15px;
                line-height: 24px;
                color: #474D57;
            }

            .explore-vip {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                font-weight: 600;
                font-size: 48px;
                line-height: 56px;
                display: inline-block;
                position: relative;
                z-index: 1;
                color: #1E2329;
                padding-bottom: 16px;
            }


        }

        @media (max-width: 780px) {
            .vip-text mb-5 {
                box-sizing: border-box;
                margin: 16px 0px 0px;
                min-width: 0px;
                font-weight: 400;
                font-size: 14px;
                line-height: 20px;
                color: rgb(71, 77, 87);
            }

            .explore-vip {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                font-weight: 600;
                font-size: 30px;
                line-height: 56px;
                display: inline-block;
                position: relative;
                z-index: 1;
                color: #1E2329;
                padding-bottom: 16px;
            }
        }

        .explore-vip::before {
            content: "";
            display: block;
            width: 100%;
            height: 7px;
            background-color: #F0B90B;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }

    </style>
@endsection
@section('content')

    <section class="div-banner">
        <div class="container">
            <div class="bn">
                <h1 class="card-vip_title">One-Stop Hub for Binance VIPs</h1>
                <p class="vip-text">Discover our premium Binance VIP & Institutional services</p>
                <a href="#" class="btn btn-enter">Enter Now</a>
            </div>
        </div>
    </section>
    <section class="vg-content-1 container">
        <div class="container row card-blog">
            <div class="col-md-6 mb-5">
                <img src="{{asset('img/vipgate/content1.png')}}" alt="image" width="90%">
            </div>
            <div class="col-md-6 mb-5">
                <h4 class="vip-title">Your VIP Journey Starts Here</h4>
                <p class="vip-text mb-5">Built by Binance Institutional, the VIP Portal is your exclusive destination
                    for all things VIP,
                    including customized dashboards, data analytics, VIP-only services, and customized reports.</p>
                <p class="vip-text mb-5">The VIP Portal is accessible to all current Binance VIPs, and is available upon
                    request to Binance
                    users who meet the asset and trading volume requirements.</p>
                <a href="#" class="btn btn-enter">Request for Access</a>
            </div>
        </div>
    </section>

    <section class="container">
        <h1 class="explore-vip mb-5">Explore VIP Portal</h1>
        <div class="container row image-show">
            <div class="col-6">
                <img class="image1" src="{{asset('img/vipgate/explore-1.png')}}" alt="" width="90%">
                <img class="image2" src="{{asset('img/vipgate/explore-2.png')}}" alt="" width="90%">
            </div>
        </div>
    </section>

@endsection
@section('js')
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            // Hàm kiểm tra vị trí cuộn và áp dụng hiệu ứng--}}
{{--            function checkScroll() {--}}
{{--                var scrollTop = $(window).scrollTop();--}}

{{--                $('.image1, .image2').each(function() {--}}
{{--                    var objectOffset = $(this).offset().top;--}}
{{--                    var windowHeight = $(window).height();--}}

{{--                    if (scrollTop > objectOffset - windowHeight + 100) {--}}
{{--                        $(this).addClass('show-on-scroll');--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}

{{--            // Gọi hàm khi trang tải xong--}}
{{--            checkScroll();--}}

{{--            // Gọi hàm khi người dùng cuộn trang--}}
{{--            $(window).scroll(checkScroll);--}}
{{--        });--}}
{{--    </script>--}}

@endsection
