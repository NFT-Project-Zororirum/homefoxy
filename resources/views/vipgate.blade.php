@extends('components.layout')
@section('style')
    <style>
        .btn-enter {
            background-color: #FCD535;
            color: #181A20;
        }
        .image-show {
            overflow: hidden;
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


        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%); /* Di chuyển ảnh ra khỏi màn hình về bên trái */
            }
            100% {
                transform: translateX(0); /* Di chuyển ảnh về vị trí ban đầu */
            }
        }

        @keyframes slideInUp {
            0% {
                transform: translateY(100%); /* Di chuyển ảnh ra khỏi màn hình về phía dưới */
            }
            100% {
                transform: translateY(-120%) translateX(40px); /* Di chuyển ảnh về vị trí ban đầu */
            }
        }

        @media (min-width: 780px) {
            .image1 {
                animation: slideInLeft 2s forwards; /* Hiệu ứng di chuyển từ trái sang phải */
                width: 80%;
            }

            .image2 {
                animation: slideInUp 2s forwards; /* Hiệu ứng di chuyển từ dưới lên */
                width: 80%;
                bottom: 0;
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
            .image1 {
                animation: slideInLeft 2s forwards; /* Hiệu ứng di chuyển từ trái sang phải */
                width: 100%;
            }

            .image2 {
                animation: slideInUp 2s forwards; /* Hiệu ứng di chuyển từ dưới lên */
                width: 100%;
            }
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
    </section>

    <section class="container image-show">
        <div class="container row">
            <div class="col-md-6" style="overflow: hidden;height: 450px">
                <img class="image1" src="{{asset('img/vipgate/explore-1.png')}}" alt="" >
                <img class="image2" src="{{asset('img/vipgate/explore-2.png')}}" alt="" >
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        $(window).scroll(function() {
            $('.image-show').each(function() {
                var hT = $(this).offset().top,
                    hH = $(this).outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                if (wS > (hT+hH-wH)){
                    $(this).find('.image1').addClass('animate-image1');
                    $(this).find('.image2').addClass('animate-image2');
                }
            });
        });
    </script>

@endsection
