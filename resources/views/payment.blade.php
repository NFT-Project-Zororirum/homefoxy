@extends('components.layout')
@section('style')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Arial", "sans-serif";
        }

        .payment-banner-img img {
            box-sizing: border-box;
            margin: 0;
            object-fit: contain;
            width: 100%;
            height: 60vh;
            flex-shrink: unset;
            padding: 0;
        }

        .payment-banner .row {
            box-sizing: border-box;
            margin: 0 0 2rem 0;
            min-width: 0px;
            display: flex;
            height: auto;
            -webkit-box-align: center;
            align-items: center;
        }

        .payment-banner-content1 h3 {
            box-sizing: border-box;
            margin: 0px 0px 16px;
            min-width: 0px;
            overflow-wrap: break-word;
            font-size: 20px;
            font-weight: 600;
            line-height: 28px;
            color: rgb(30, 35, 41);
        }

        .payment-banner-content1 span {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            font-size: 20px;
            font-weight: 600;
            line-height: 28px;
            color: rgb(201, 148, 0);
        }

        .payment-banner-content h2 {
            box-sizing: border-box;
            margin: 0px 0px 16px;
            min-width: 0px;
            overflow-wrap: break-word;
            font-size: 56px;
            font-weight: 600;
            line-height: 64px;
            color: rgb(30, 35, 41);
        }

        .payment-banner-content p {
            box-sizing: border-box;
            margin: 0px 0px 24px;
            min-width: 0px;
            overflow-wrap: break-word;
            font-size: 16px;
            line-height: 24px;
            color: rgb(112, 122, 138);
        }

        .payment-banner-content {
            box-sizing: border-box;
            max-width: 486px;
            margin-right: 32px;
        }

        .payment-banner-content .btn {
            margin: 0px;
            font-weight: 500;
            padding: 6px 12px;
            color: rgb(24, 26, 32);
            border-radius: 4px;
            min-height: 24px;
            border: none;
            background-color: rgb(252, 213, 53);
            height: 40px;
            min-width: 160px;
            font-size: 16px;
            line-height: 24px;
        }

        .payment-info-item {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
            grid-gap: 4rem;
        }

        .payment-info--item h5 {
            min-width: 0px;
            overflow-wrap: break-word;
            font-size: 20px;
            font-weight: 500;
            line-height: 28px;
        }

        .payment-info--item span {
            margin: 0px;
            min-width: 0px;
            overflow-wrap: break-word;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            color: rgb(112, 122, 138);
        }

        .payment-info--item .img {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            color: currentcolor;
            font-size: 32px;
            fill: currentcolor;
            width: 1.5em;
            height: 1.5em;
        }

        .payment-info-title {
            font-size: 32px;
            font-weight: 600;
            line-height: 40px;
            margin: 1.7em 0;
        }

        .payment-market-title {
            min-width: 0px;
            grid-area: title / title / title / title;
            font-size: 32px;
            font-weight: 600;
            line-height: 40px;
        }

        .payment-market-content__img {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            /*display: none;*/
            height: 280px;
            width: 50%;
            background-image: url("{{asset('img/market.svg')}}");
            background-repeat: no-repeat;
            background-position: right center;
            background-size: cover;
        }

        .payment-market-content {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            display: flex;
            min-height: 320px;
            padding-bottom: 32px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
            gap: 0 3rem;
        }

        .payment-market-content p {
            box-sizing: border-box;
            margin: 0px 0px 24px;
            min-width: 0px;
            grid-area: desc / desc / desc / desc;
            font-size: 16px;
            line-height: 24px;
            font-weight: 400;
            color: rgb(112, 122, 138);
        }

        .payment-market-content .btn {
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            color: rgb(24, 26, 32);
            border-radius: 4px;
            background-color: rgb(252, 213, 53);
            width: 160px;
        }

        .payment-store-band {
            box-sizing: border-box;
            margin: 0px 0px 48px;
            min-width: 0px;
            display: flex;
            height: unset;
            width: 100%;
            flex-direction: row;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .payment-store-band__left span {
            box-sizing: border-box;
            margin: 0px 0px 16px;
            min-width: 0px;
            font-size: 20px;
            font-weight: 500;
            line-height: 28px;
            color: rgb(30, 35, 41);
        }

        .payment-store-band__right {
            box-sizing: border-box;
            margin: 0px;
            min-width: 0px;
            display: grid;
            grid-template-columns: repeat(4, minmax(auto, min-content));
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: end;
            justify-content: flex-end;
            gap: 16px 24px;
            flex: 0 1 0%;
            width: 100%;
        }

        .payment-store-band__right img {
            box-sizing: border-box;
            margin: 0px;
            max-height: 32px;
            max-width: 175px;
            height: auto;
        }

        .payment-store-merchant {
            box-sizing: border-box;
            margin: 0px 0px 32px;
            min-width: 0px;
            display: flex;
            border-radius: 4px;
            background-image: unset;
            background-size: cover;
            background-color: rgb(250, 250, 250);
            padding: 20px 16px;
            -webkit-box-align: center;
            align-items: center;
        }

        .payment-store-merchant__img {
            box-sizing: border-box;
            margin: 0px 16px 0px 0px;
            min-width: 0px;
            max-width: 100%;
            width: 60px;
            height: 60px;
            flex-shrink: 0;
        }

        .payment-store-merchant__icon {
            box-sizing: border-box;
            margin: 0px 2em 0px auto;
            min-width: 0px;
            border-radius: 50%;
            height: 48px;
            width: 48px;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            flex-shrink: 0;
            color: rgb(196, 196, 196);
            background-color: rgb(234, 236, 239);
        }

        .payment-store-merchant__icon .svg {
            width: 20px;
            height: 20px;
        }

        .payment-store-merchant__text {
            box-sizing: border-box;
            margin: 0px 0px 2px;
            min-width: 0px;
            overflow-wrap: break-word;
            color: rgb(30, 35, 41);
        }

        .payment-store-merchant__text h6 {
            font-size: 20px;
            font-weight: 500;
            line-height: 28px;
        }

        .payment-store-merchant__text span {
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
        }
        .payment-faq-header h4 {
            font-size: 32px;
            font-weight: 600;
            line-height: 40px;
        }

        .payment-faq-header a {
            text-decoration: none;
            color: rgb(240, 185, 11);
        }

        .payment-faq-header a span {
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
        }

        .payment-faq-content__info {
            padding: 0.5em 0;
            border-bottom: 1px solid #e8e8e8;
            border-top: 1px solid #e8e8e8;
        }
        .payment-faq-content__info:first-child{
            border-top: none;
        }
        .payment-faq-content__info:last-child{
            border-bottom: none;
        }
        .payment-faq-content__info .collapse p {
            margin-left: 1em;
        }
        .payment-faq-content__title h6 {
            font-size: 20px;
            font-weight: 500;
            line-height: 28px;
        }
        .payment-faq-content__info p{
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
        }
        @media screen and (max-width: 768px) {
            .payment-info--item {
                display: flex;
                flex-direction: row;
                margin: 0.1em 0 !important;
                padding: 0 !important;
            }

            .payment-info--item h5 {
                margin: 0.2em !important;
                font-size: 1em;
                line-height: 24px;
                font-weight: 500;
            }

            .payment-info--item span {
                font-size: 0.8em;
                line-height: 20px;
                font-weight: 400;
            }

            .payment-info--item .img {
                width: 1em;
                height: 1em;
                margin-top: 0.1em;
            }

            .payment-info-item {
                grid-gap: 1em;
            }

            .payment-info-title {
                font-size: 1.2em;
                line-height: 28px;
                font-weight: 550;
                font-style: normal;
                color: #1E2329;
            }

            .payment-banner__img {
                display: none;
            }

            .payment-banner-content h2 {
                font-size: 32px;
                font-weight: 600;
                line-height: 40px;
                color: rgb(30, 35, 41);
            }

            .payment-banner-content1 h3, .payment-banner-content1 span {
                font-size: 16px;
                font-weight: 500;
                line-height: 24px;
            }

            .payment-banner-content p {
                font-size: 14px;
                line-height: 20px;
            }

            .payment-market-content {
                display: flex;
                flex-direction: column-reverse;
                gap: 0;
                padding: 0;
                margin: 0;
            }

            .payment-market-content__body {
                width: 100% !important;
            }

            .payment-store-band__right {
                box-sizing: border-box;
                margin: 0px;
                min-width: 0px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: end;
                justify-content: flex-end;
                gap: 16px 24px;
                flex: 0 1 0%;
                width: 100%;
            }

            .payment-store-band {
                display: flex;
                flex-direction: column;
                gap: 0;
                padding: 0;
                margin: 0;
            }

            .payment-store-band__left {
                margin: 1em 0;
            }

            .payment-store-band__left span {
                font-size: 14px;
                font-weight: 550;
                line-height: 20px;
            }

            .payment-store-band__right img {
                max-height: 24px;
                max-width: 130px;
            }

            .payment-store-merchant__text h6 {
                font-size: 14px;
                font-weight: 500;
                line-height: 20px;
                margin: 0;
                padding: 0;
            }

            .payment-store-merchant__text span {
                margin: 0px;
                min-width: 0px;
                overflow-wrap: break-word;
                font-size: 12px;
                font-weight: 400;
                line-height: 16px;
                color: rgb(112, 122, 138);
            }

            .payment-store-merchant__img {
                width: 48px;
                height: 48px;
            }

            .payment-store-merchant__icon {
                margin: 0px 0px 0px auto;
                min-width: 0px;
                border-radius: 50%;
                height: 24px;
                width: 24px;
                display: flex;
                -webkit-box-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                align-items: center;
                flex-shrink: 0;
                color: rgb(196, 196, 196);
                background-color: rgb(234, 236, 239);
            }

            .payment-store-merchant {
                margin: 1em 0;
            }
            .payment-faq-content__title h6{
                font-size: 14px;
                font-weight: 500;
                line-height: 20px;
                flex: 1 1 0%;
                color: rgb(30, 35, 41);
            }
            .payment-faq-content__info{
                padding: 0.1rem 0;
            }
            .payment-market-content__img{
                width: 100%;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <section class="payment-banner">
            <div class="row">
                <div class="col-md-5 col-sm-12 payment-banner__title">
                    <div class="payment-banner-content">
                        <div class="d-flex payment-banner-content1">
                            <h3>Welcome to the &nbsp;</h3>
                            <span>#CryptoLifestyle</span>
                        </div>
                        <h2>Pay and get paid with crypto.</h2>
                        <p>
                            Binance Pay is a contactless, borderless and secure cryptocurrency payment technology
                            designed by Binance. Shop with crypto or send crypto to friends and family worldwide.
                        </p>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>
                <div class="col-md-7 payment-banner__img">
                    <div class="payment-banner-img">
                        <img src="{{ asset('img/hero-banner.png') }}" alt="payment-banner">
                    </div>
                </div>
            </div>
        </section>
        <section class="payment-info my-5">
            <h4 class="payment-info-title">Freedom to choose how you pay</h4>
            <div class="payment-info-item">
                <div class="payment-info--item">
                    <div>
                        <img class="img" src="{{asset('img/pay-light.svg')}}" alt="">
                    </div>
                    <div>
                        <h5 class="my-3">Set your payment preferences</h5>
                        <span>Payment Priority Order lets you choose which cryptocurrencies you want to spend, in the order you prefer.</span>
                    </div>
                </div>
                <div class="payment-info--item">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" class="img">
                            <circle cx="32" cy="32" r="26.667" fill="#E6E8EA"></circle>
                            <circle cx="32" cy="32" r="21.333" fill="url(#dynamic-light_svg__paint0)"></circle>
                            <path d="M18 32h11.333v16.667L46 32H34.667V15.333L18 32z"
                                  fill="url(#dynamic-light_svg__paint1)"></path>
                            <path
                                d="M56 10.667l2.667 2.666 2.666-2.666L58.667 8 56 10.667zM3.333 49.333l2 2 2-2-2-2-2 2zM51.333 60.667h2v-2h-2v2z"
                                fill="#E6E8EA"></path>
                            <defs>
                                <linearGradient id="dynamic-light_svg__paint0" x1="32" y1="10.667" x2="32" y2="53.333"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#929AA5"></stop>
                                    <stop offset="1" stop-color="#76808F"></stop>
                                </linearGradient>
                                <linearGradient id="dynamic-light_svg__paint1" x1="32" y1="48.667" x2="32" y2="15.333"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0.333" stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#FBDA3C"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h5 class="my-3">Lightning fast payments</h5>
                        <span>Instantly send crypto to your friends and family worldwide.</span>
                    </div>
                </div>
                <div class="payment-info--item">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" fill="none" class="img">
                            <circle cx="48" cy="48" r="40" fill="#E6E8EA"></circle>
                            <path d="M82 80.5l4.5 4.5 4.5-4.5-4.5-4.5-4.5 4.5zM5 22l3 3 3-3-3-3-3 3zM85 11h3V8h-3v3z"
                                  fill="#E6E8EA"></path>
                            <path
                                d="M16 48c0 17.673 14.327 32 32 32 17.673 0 32-14.327 32-32 0-17.673-14.327-32-32-32-17.673 0-32 14.327-32 32z"
                                fill="url(#exposure-light_svg__paint0_linear)"></path>
                            <path d="M48 16c-17.673 0-32 14.327-32 32 0 17.673 14.327 32 32 32V16z"
                                  fill="#76808F"></path>
                            <path
                                d="M77.704 59.926A31.913 31.913 0 0080 48c0-1.632-.122-3.236-.358-4.802L76.444 40h-5.333l-4.444 4.444v5.334l2.666 2.666h5.334v4.445l3.037 3.037z"
                                fill="url(#exposure-light_svg__paint1_linear)"></path>
                            <path
                                d="M25.478 70.733l4.744-4.066V63.11h-2.666v-2.666l-2.667-2.667v4.444l-2.667-2.666V56h-2.666l-1.972 1.971a32.002 32.002 0 007.894 12.762z"
                                fill="url(#exposure-light_svg__paint2_linear)"></path>
                            <path
                                d="M74.611 30.222a31.935 31.935 0 012.487 4.445h-3.32v2.666h-3.556v-2.666L72.89 32l-1.778-1.778h3.5z"
                                fill="url(#exposure-light_svg__paint3_linear)"></path>
                            <path d="M70.133 24.889c.65.622 1.272 1.27 1.867 1.944v.723h-6.222l2.666-2.667h1.69z"
                                  fill="url(#exposure-light_svg__paint4_linear)"></path>
                            <path d="M57.404 17.404a31.888 31.888 0 019.388 4.692l-5.459 5.46v-6.223l-3.929-3.929z"
                                  fill="url(#exposure-light_svg__paint5_linear)"></path>
                            <path
                                d="M22.669 28.445A32.192 32.192 0 0126.833 24h8.723v-3.555H40L43.556 24H48v-2.667h2.667l1.777 1.778-2.666 2.667h7.11v2.667l-2.666 2.666h-4.444l-5.334 6.222v4.445l-2.666-2.667h-3.556v5.334h3.556v7.11l-4.445-4.444h-3.555v-5.333L31.11 39.11h-3.555V32.89L32 28.444h-9.331z"
                                fill="url(#exposure-light_svg__paint6_linear)"></path>
                            <path d="M18.667 35.19c.208-.476.428-.947.66-1.412h2.895v3.555l-3.555 3.556V35.19z"
                                  fill="url(#exposure-light_svg__paint7_linear)"></path>
                            <path d="M16 48h3.556v-3.556h-3.36A32.339 32.339 0 0016 48z"
                                  fill="url(#exposure-light_svg__paint8_linear)"></path>
                            <path
                                d="M45.333 48l-3.555 3.556v3.555L48 61.333V72l5.333 5.333V72l4.445-4.444V64l3.555-3.556v-5.333H56.89v-3.555h-3.556L49.778 48h-4.445z"
                                fill="url(#exposure-light_svg__paint9_linear)"></path>
                            <path d="M45.333 44.444L48 41.779h2.667v2.666h-5.334z"
                                  fill="url(#exposure-light_svg__paint10_linear)"></path>
                            <path d="M34.667 67.556L30.222 72h4.445v-4.444z"
                                  fill="url(#exposure-light_svg__paint11_linear)"></path>
                            <path d="M22.222 50.667L27.556 56v-5.333h-5.334z"
                                  fill="url(#exposure-light_svg__paint12_linear)"></path>
                            <path d="M56.889 24l-4.445-4.444h4.445V24z"
                                  fill="url(#exposure-light_svg__paint13_linear)"></path>
                            <path d="M45.333 21.333v-3.555h-3.555l3.555 3.555z"
                                  fill="url(#exposure-light_svg__paint14_linear)"></path>
                            <path
                                d="M48 24h-4.444L40 20.445h-4.444V24h-8.723a32.192 32.192 0 00-4.164 4.445H32l-4.444 4.444v6.222h3.555l2.667 2.667v5.333h3.555l4.445 4.445v3.555L48 61.333V48h-2.667l-3.555 3.556v-7.111h-3.556V39.11h3.556l2.666 2.667v-4.445L48 33.185V24z"
                                fill="#F0B90B"></path>
                            <path
                                d="M48 41.778l-2.667 2.666H48v-2.666zM30.222 66.667l-4.744 4.066a32.002 32.002 0 01-7.894-12.762l1.972-1.97h2.666v3.555l2.667 2.666v-4.444l2.667 2.666v2.667h2.666v3.556zM18.667 35.19c.208-.476.428-.947.66-1.412h2.895v3.555l-3.555 3.556V35.19zM19.556 48H16c0-1.202.066-2.388.195-3.556h3.36V48zM34.667 67.556L30.222 72h4.445v-4.444zM27.556 56l-5.334-5.333h5.334V56zM45.333 17.778v3.555l-3.555-3.555h3.555z"
                                fill="#F0B90B"></path>
                            <defs>
                                <linearGradient id="exposure-light_svg__paint0_linear" x1="48" y1="16" x2="48" y2="80"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#929AA5"></stop>
                                    <stop offset="1" stop-color="#76808F"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint1_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint2_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint3_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint4_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint5_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint6_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint7_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint8_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint9_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint10_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint11_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint12_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint13_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="exposure-light_svg__paint14_linear" x1="48" y1="77.333" x2="48"
                                                y2="17.404" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h5 class="my-3">200+ cryptocurrencies</h5>
                        <span>Send and spend your favourite cryptocurrencies with Binance Pay.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="payment-market">
            <h3 class="payment-market-title">Foxy Marketplace</h3>
            <div class="payment-market-content">
                <div class="w-50 payment-market-content__body">
                    <div>
                        <p>We're bringing your favorite businesses to your fingertips. Access the Binance Marketplace
                            via the app and make payments using <a href="#" class="" style="text-decoration: none;
    color: rgb(240, 185, 11);">Foxy Pay.</a></p>
                    </div>
                    <p>Spending crypto just became a whole lot easier.</p>
                    <a href="#" class="btn">Shop now</a>
                </div>
                <div class="payment-market-content__img">
                </div>
            </div>
        </section>
        <section class="payment-store my-3">
            <div class="payment-store-band">
                <div class="payment-store-band__left">
                    <span>Use Binance Pay at these stores</span>
                </div>
                <div class="payment-store-band__right">
                    <img src="{{asset('img/travala.png')}}" alt="">
                    <img src="{{asset('img/cryptorefills.png')}}" alt="">
                    <img src="{{asset('img/coinsbee.png')}}" alt="">
                    <img src="{{asset('img/exception.png')}}" alt="">
                </div>
            </div>
            <div class="payment-store-merchant">
                <img class="payment-store-merchant__img" src="{{asset('img/payment-merchant.png')}}" alt="">
                <div class="payment-store-merchant__text">
                    <h6>Become a Merchant</h6>
                    <span>Accept cryptocurrency payments and tap into our 6.9 million and growing Pay users.</span>
                </div>
                <div class="payment-store-merchant__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z"
                              fill="currentColor"></path>
                    </svg>
                </div>
            </div>
        </section>
        <section class="payment-faq my-5">
            <div class="payment-faq-header d-flex justify-content-between">
                <h4>FAQs</h4>
                <a href="#"><span>View more</span></a>
            </div>
            <div class="payment-faq-content">
                <div>
                    <ul class="list-group">
                        <div class="payment-faq-content__info">
                            <li class="list-group-item payment-faq-content__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                aria-controls="collapse1">
                                <div class="d-flex justify-content-between">
                                    <h6>Who can use Foxy Pay?</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse1">
                                <p>Binance pay is available to all eligible users on Binance.com. To start using Binance
                                    Pay, please register on Binance.com and complete your Identity Verification.</p>
                            </div>
                        </div>
                        <div class="payment-faq-content__info">
                            <li class="list-group-item payment-faq-content__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                aria-controls="collapse2">
                                <div class="d-flex justify-content-between">
                                    <h6>Can I pay with Bitcoin, BNB and other cryptocurrencies supported by
                                        Binance?</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse2">
                                <p>Binance Pay currently supports more than 70 cryptocurrencies.
                                    ADA, ATOM, AVA, BCH, BNB, BTC, BUSD, CTSI, DASH, DOGE, DOT, EGLD, EOS, ETC, ETH,
                                    FIL, FRONT, FTM, GRS, HBAR, IOTX, LINK, LTC, MANA, MATIC, NEO, OM, ONE, PAX, QTUM,
                                    STRAX, SXP, TRX, TUSD, UNI, USDC, USDT, VAI, VET, WRX, XLM, XMR, XRP, XTZ, XVS, ZEC,
                                    ZIL.</p>
                            </div>
                        </div>
                        <div class="payment-faq-content__info">
                            <li class="list-group-item payment-faq-content__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                aria-controls="collapse3">
                                <div class="d-flex justify-content-between">
                                    <h6>How to access your Binance Pay?</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse3">
                                <p>You can access your Binance Pay Wallet by clicking [Wallets] - [Funding] - [Pay] on your Binance App.</p>
                            </div>
                        </div>
                        <div class="payment-faq-content__info">
                            <li class="list-group-item payment-faq-content__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                aria-controls="collapse4">
                                <div class="d-flex justify-content-between">
                                    <h6>How long does it take for a Binance Pay transaction to be completed?</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse4">
                                <p>Binance Pay transactions are usually confirmed instantly.</p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $('.payment-faq-content__info').click(function () {
            $(this).find('i').toggle();
        });
    </script>
@endsection
