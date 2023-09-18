@extends('components.layout')
@section('style')
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: "Arial", "sans-serif";
        }

        .referral-banner {
            background-color: rgb(12 14 17);
        }

        .referral-banner-title div span {
            font-weight: 600;
            color: rgb(255, 255, 255);
            font-size: 48px;
            line-height: 56px;
        }

        .referral-banner-title p {
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: rgb(234, 236, 239);
        }

        .referral-banner-title a {
            font-size: 16px;
            line-height: 24px;
            color: rgb(252, 213, 53);
            text-decoration: none;
        }
        .referral-banner-img{
            height: 15em;
            margin-left: 4rem;
        }
        .referral-banner-img img {
           height: 100%;
        }

        .referral-block2-content {
            box-sizing: border-box;
            min-width: 0px;
            display: flex;
            row-gap: 56px;
            width: 100%;
            max-width: 1200px;
            margin: 0px auto;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .referral-block2-item {
            flex: 0 0 calc(33% - 40px);
            width: calc(33% - 40px);
            margin: 0px auto;
            border-radius: 8px;
        }

        .referral-block2-item .img img {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            max-width: 100%;
            height: auto;
            padding-bottom: 24px;
        }

        .referral-block2-item__title h5 {
            font-weight: 500;
            font-size: 20px;
            line-height: 28px;
            color: rgb(30, 35, 41);
        }

        .referral-block2-title {
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
        }

        .referral-block2-title h3 {
            font-size: 32px;
            line-height: 40px;
            font-weight: 600;
            padding: 0.5rem;
        }

        .text-center h3 {
            font-size: 3rem;
            line-height: 1;
            font-weight: 500;
            padding: 1rem;

        }


        .referral-signup .btn {
            background-color: #FCD535;
            height: 48px;
            min-height: 48px;
            min-width: 80px;
            padding: 0 4rem;
            margin-top: 1rem;
            color: #0B0E11;
        }

        .referral-signup h3 {
            font-weight: 600;
            font-size: 40px;
            line-height: 48px;
            color: rgb(30, 35, 41);
        }

        .referral-content {
            transform: translateY(-2em);
            border-top-left-radius: 32px;
            border-top-right-radius: 32px;
            background-color: white;
        }

        .referral-signup {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 80px 16px;
            background-color: rgb(250, 250, 250);
            text-align: center;
        }

        .referral-banner-link {
            display: flex;
            padding-top: 1rem;
        }

        .referral-banner-link__item span {
            min-width: 0px;
            box-sizing: border-box;
            user-select: none;
            position: relative;
            padding: 14px 0px;
            width: fit-content;
            color: rgb(183, 189, 198);
            height: 60px;
            margin: 0px 48px 0px 0px;
            font-size: 20px;
            line-height: 28px;
            font-weight: 550;
        }

        .referral-banner-link__item.active span {
            color: rgb(255, 255, 255);
        }

        .referral-banner-link__item.active span::after {
            position: absolute;
            content: "";
            background-color: rgb(255, 255, 255);
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 4px;
        }
        /*.standard{*/
        /*    display: none;*/
        /*}*/
        .standard a {
            color: #f3f3f3;
            display: flex;
            justify-items: center;
            align-items: center
        }
        .standard a svg{
            color: currentcolor;
            font-size: 24px;
            fill: currentcolor;
            margin-inline-end: 8px;
            width: 1em;
            height: 1em;
        }
        .referral-block2-item div span{
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: rgb(71, 77, 87);
        }
        .lite .referral-banner-img{
            margin: 0;
        }
        @media screen and (max-width: 768px) {
            .referral-content {
                transform: translateY(-2em);
                border-top-left-radius: 1rem;
                border-top-right-radius: 1rem;
                background-color: white;
            }

            .referral-banner-img {
                display: none;
            }

            .referral-banner-title {
                display: flex;
                flex-direction: column;
                margin: 0 0 2rem 0;
            }

            .referral-block2-item {
                flex: 0 0 calc(100% - 40px);
                width: calc(100% - 40px);
                margin: 0px auto;
                border-radius: 8px 8px 0px 0px;
            }

            .referral-block1-title h4 {
                font-size: 1.5rem;
                line-height: 2rem;
                font-weight: 500;
                padding: 0;
            }

            .referral-content {
                padding: 1rem 0 !important;
            }

            .referral-block2-title h3 {
                font-weight: 600;
                font-size: 20px;
                line-height: 28px;
            }

            .referral-block2-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .referral-signup h3 {
                font-weight: 600;
                font-size: 24px;
                line-height: 32px;
                color: rgb(30, 35, 41);
            }

            .referral-banner-link {
                justify-content: space-around;
            }

            .referral-banner-link__item span {
                user-select: none;
                position: relative;
                padding: 14px 0px;
                height: 48px;
                width: fit-content;
                margin: 0px auto;
                font-size: 14px;
                line-height: 20px;
                color: rgb(183, 189, 198);
            }

            .referral-signup .btn {
                width: 100%;
            }

            .referral-banner-link__item.active span::after {
                position: absolute;
                content: "";
                width: 100%;
                height: 2px;
                background-color: rgb(255, 255, 255);
                bottom: 0px;
                left: 50%;
                transform: translateX(-50%);
            }

            .referral-banner-title div span {
                font-size: 28px;
                line-height: 36px;
            }

            .referral-signup {
                padding: 24px 1rem;
                margin: 0;
            }
            .standard{
                margin: 0 2rem;
            }
            .lite{
                margin: 0 0.5rem;
            }
            .standard .referral-banner-title{
                width: 100% !important;
            }
        }
    </style>
@endsection
@section('content')
    <section class="referral-banner">
        <div class="referral-banner-link container">
            <div class="referral-banner-link__item active">
                <span>Lite Referral</span>
            </div>
            <div class="referral-banner-link__item">
                <span>Standard Referral</span>
            </div>
        </div>
        <div class="container">
            <div class="row lite py-3">
                <div class="col-md-6 referral-banner-title">
                    <div class="d-flex flex-column">
                        <span>Refer Friends.</span>
                        <span>Get 100 USDT Trading Fee</span>
                        <span> Credit Each.</span>
                    </div>
                    <p>You're just steps away from receiving your reward.</p>
                    <a href="#">View referral rules ></a>
                </div>
                <div class="col-md-6 referral-banner-img">
                    <img src="{{asset('img/referral/banner-pic-lg.png')}}">
                </div>
            </div>
            <div class="row standard py-3 d-none">
                <div class="col-md-6 referral-banner-title w-40" style="margin-right: 4rem">
                    <div class="">
                        <span>Refer Friends.</span>
                        &nbsp;
                        <span>Earn Crypto Together.</span>
                    </div>
                    <p>Earn up to 40% commission on every trade across Binance Spot, Futures, and Pool.</p>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon" style="width: 1rem;height: 1rem">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z"
                                  fill="currentColor"></path>
                        </svg>
                        <span>View referral rules</span>
                    </a>
                </div>
                <div class="col-md-6 referral-banner-img">
                    <img src="{{asset('img/referral/banner-pic-lg.png')}}">
                </div>
            </div>
        </div>
    </section>
    <div class="py-6 referral-content">
        <div class="container">
            <section class="referral-block2 lite">
                <div class="referral-block2-title">
                    <h3>How To Refer Your Friends</h3>
                </div>
                <div class="referral-block2-content">
                    <div class="referral-block2-item">
                        <div class="img">
                            <img src="{{asset('img/referral/tutorial-step1.png')}}" alt="">
                        </div>
                        <div class="referral-block2-item__title"><h5>Share your referral link with friends</h5></div>
                    </div>
                    <div class="referral-block2-item">
                        <div class="img">
                            <img src="{{asset('img/referral/tutorial-step2.png')}}" alt="">
                        </div>
                        <div class="referral-block2-item__title"><h5>Invite friends to sign up and deposit more than
                                $50</h5></div>
                    </div>
                    <div class="referral-block2-item">
                        <div class="img">
                            <img src="{{asset('img/referral/tutorial-step3.png')}}" alt="">
                        </div>
                        <div class="referral-block2-item__title"><h5>Receive 100 USDT trading fee rebate voucher
                                each</h5></div>
                    </div>
                </div>
            </section>
            <section class="referral-block2 standard d-none">
                <div class="referral-block2-title">
                    <h3>How Referral Works</h3>
                </div>
                <div class="referral-block2-content">
                    <div class="referral-block2-item">
                        <div class="img">
                            <img src="{{asset('img/referral/tutorial-step1.png')}}" alt="">
                        </div>
                        <div class="referral-block2-item__title"><h5>Share Commission</h5></div>
                        <div><span>Set how much referral commission you want to share with your friends.</span></div>
                    </div>
                    <div class="referral-block2-item">
                        <div class="img">
                            <img src="{{asset('img/referral/tutorial-step2.png')}}" alt="">
                        </div>
                        <div class="referral-block2-item__title"><h5>Refer Friends</h5></div>
                        <div><span>Share your referral link or QR code with your friends and social media.</span></div>

                    </div>
                    <div class="referral-block2-item">
                        <div class="img">
                            <img src="{{asset('img/referral/tutorial-step3.png')}}" alt="">
                        </div>
                        <div class="referral-block2-item__title"><h5>Earn Crypto!</h5></div>
                        <div><span>Earn up to 40% commission when your friends start trading.</span></div>
                    </div>
                </div>
            </section>
            <section class="referral-signup my-3">
                <h3>Start Earning Now</h3>
                <button class="btn">Log In</button>
            </section>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.referral-banner-link__item').click(function () {
                $('.referral-banner-link__item').removeClass('active');
                $(this).addClass('active');
                if ($(this).index() == 0) {
                    $('.lite').removeClass('d-none');
                    $('.standard').addClass('d-none');
                } else {
                    $('.lite').addClass('d-none');
                    $('.standard').removeClass('d-none');
                }
            })
        })
    </script>
@endsection
