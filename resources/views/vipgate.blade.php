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



        @media (min-width: 780px) {
            .vip-title {
                font-size: 30px;
                line-height: 28px;
                font-weight: 700;
                font-style: normal;
            }
            .vip-text {
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

            .vip-mailbox {
                width: 200px;
                margin: 30px 50px
            }


        }

        @media (max-width: 880px) {
            .btn-enter {
                width: 100%;
            }
            .vip-title {
                font-size: 22px;
                line-height: 28px;
                font-weight: 700;
                font-style: normal;
            }
            .card-vip_title {
                font-weight: 600;
                font-size: 35px;
                line-height: 56px;
                color: #1E2329;
            }
            .vip-mailbox {
                display: none;
            }
            .vip-mailbox-content p{
                font-size: 13px;
            }
            .vip-text {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                font-weight: 400;
                font-size: 16px;
                line-height: 24px;
                color: #474D57;
                margin-top: 16px;
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

        .slide-blog {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-blog .card {
            border: none !important;
            /*margin-bottom: 4rem;*/
        }

        .vip-learn {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 500;
            font-size: 20px;
            line-height: 28px;
            cursor: pointer;
            margin-top: 32px;
            color: #C99400;
        }
    </style>
@endsection
@section('content')
    <section class="div-banner">
        <div class="container">
            <div class="bn">
                <h1 class="card-vip_title">One-Stop Hub for Binance VIPs</h1>
                <p class="vip-text mb-3 mt-3">Discover our premium Binance VIP & Institutional services</p>
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

    <div class="container mb-10">
        <section>
            <h1 class="explore-vip mb-5">Explore VIP Portal</h1>
        </section>
        <section class="slide-blog mb-5">
            <div id="carouselExampleDark" class="carousel carousel-dark slide slide-blog">
                <div class="carousel-indicators my-2">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="card mb-3 py-4">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-19.jpg"
                                         class="img-fluid rounded-start slide-blog__img" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body mx-4">
                                        <h2 class="vip-title">Customized Dashboard</h2>
                                        <p class="vip-text mb-3">See your personalized trading and investment
                                            highlights, as well as fee information, trading statistics, VIP-only
                                            updates, and Binance news. Participate in special spot surveys to help us
                                            improve.</p>
                                        <a class="vip-learn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="card mb-3 py-4">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-19.jpg"
                                         class="img-fluid rounded-start slide-blog__img" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body mx-4">
                                        <h2 class="vip-title">Data & Analytics</h2>
                                        <p class="vip-text mb-3">Access advanced data analytics with one click. Explore
                                            flow analytics for a basket of futures contracts, DeFi index dispersions,
                                            and market liquidity in three dimensions (cost to trade, bid/ask spread, and
                                            order book depth).</p>
                                        <a class="vip-learn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card mb-3 py-4">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="https://noithatbinhminh.com.vn/wp-content/uploads/2022/08/anh-dep-19.jpg"
                                         class="img-fluid rounded-start slide-blog__img" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body mx-4">
                                        <h2 class="vip-title">Exclusive Services</h2>
                                        <p class="vip-text mb-3">Enjoy exclusive services available only in the VIP
                                            Portal, such as additional rate limits, IP whitelisting, and margin
                                            borrowing and sub-account limit adjustments. Request customized reports for
                                            audit purpose.</p>
                                        <a class="vip-learn" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="div-banner mb-5" style="padding: 50px 0px">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img class="vip-mailbox" src="{{asset('img/vipgate/mailbox.png')}}" alt="">
                    <div class="vip-mailbox-content">
                        <p class="vip-text mb-3">Tell us what features you want to see in the VIP Portal</p>
                        <div class="d-flex">
                            <input data-bn-type="input" placeholder="Share your thoughts" class="form-control ms-auto"
                                   value="">
                            <a href="#" class="btn btn-enter" style="margin: 0px 10px">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="row">
                <h1 class="mb-5 text-center card-vip_title">Learn How to Become a Binance VIP</h1>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3 text-lg-end">
                    <a href="#" class="btn btn-enter">More Infomation</a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="#" class="btn btn-enter">Frequently Asked
                        Questions</a>
                </div>
            </div>
        </section>

    </div>

@endsection
