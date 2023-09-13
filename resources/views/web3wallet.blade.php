@extends('components.layout')
@section('style')
    <style>
        .web3wallet-banner__right {
            width: 80vh;
            height: 65vh;
        }

        .web3wallet-banner__left {
            padding: 5em;
        }

        .web3wallet-banner__right img {
            width: 90%;
            height: 100%;
            margin-bottom: 1em;
            margin-left: 2em;
        }

        .web3wallet-banner__left1 span {
            font-size: 1.5rem;
            font-weight: 500;
            line-height: 2rem;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            background-image: linear-gradient(90deg, #f0b90b, #f8d33a);
        }

        .web3wallet-banner__left1 img {
            position: relative;
            width: 1rem;
            height: 1rem;
            margin-left: 0.5rem;
            bottom: 2px;
        }

        .web3wallet-banner__left2 {
            flex-direction: column;
        }

        .web3wallet-banner__left2 h4 {
            font-style: normal;
            font-size: 4em;
            font-weight: 600;
        }

        .web3wallet-banner__left3 p {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .web3wallet-banner__left button {
            width: 12rem;
            height: 3rem;
            color: #0a0e16;
            border: none;
            background-color: rgb(252 213 53);
        }

        .web3wallet-info {
            padding-left: -10em;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(20rem, 1fr));
            grid-gap: 3rem;
        }

        .web3wallet-info--item__img {
            width: 6rem;
            height: 6rem;
        }

        .web3wallet-info--item__title {
            margin-top: 0.75em;
            font-size: 1.75rem;
            font-weight: 500;
            line-height: 2.25rem;
            color: #0a0e16;
        }

        .web3wallet-info--item__pra {
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.25rem;
        }

        .web3wallet-detail-item {
            display: flex;
            flex-wrap: wrap;
            justify-items: center;
            justify-content: space-between;
            background-color: rgba(250, 250, 250, 1);
            padding: 2em 0;
        }

        .web3wallet-detail-item__title {
            margin: auto 6em;
        }

        .web3wallet-detail-item__title h3 {
            font-weight: 500;
            font-size: 1.75rem;
            line-height: 2.25rem;
        }

        .web3wallet-detail-item__title p {
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5rem;
            color: rgb(71 77 87);
        }

        .web3wallet-detail-item__img img {
            width: 280px;
            height: 280px;
        }

        .web3wallet-faq {
            padding: 3.75rem 0 3.75rem 0;
            background-color: rgba(250, 250, 250, 1);
        }

        .web3wallet-faq h2 {
            font-size: 2.5rem;
            font-weight: 500;
            line-height: 3rem;
            color: #0a0e16;
            margin-bottom: 2rem;
        }

        .web3wallet-faq--item img {
            width: 1.5rem;
            height: 1.5rem;
        }

        .web3wallet-faq--item p {
            padding: 0;
            margin: 0;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.5rem;
            color: rgb(71 77 87);
        }

        .web3wallet-faq--item {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(40rem, 1fr));
        }

        .web3wallet-connect {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3.75rem 0;
            background-color: rgba(250, 250, 250, 1);
        }

        .web3wallet-connect--title h3 {
            font-size: 2.5rem;
            line-height: 3rem;
            font-weight: 500;
        }

        .web3wallet-connect--btn .btn {
            color: rgba(24, 26, 32, 1);
            background-color: rgba(252, 213, 53, 1);
            width: 180px;
        }

        @media screen and (max-width: 768px) {
            .web3wallet-detail-item {
                text-align: center;
                justify-content: center;
            }

            .web3wallet-detail-item__title h3 {
                font-size: 1.2rem;
            }

            .web3wallet-detail-item__title p {
                font-size: .8rem;
                font-weight: 400;
                line-height: 1.25rem;
            }

            .web3wallet-faq h2 {
                font-size: 1.5rem;
                font-weight: 500;
                line-height: 2rem;
            }

            .web3wallet-connect--btn .btn {
                width: 62vh;
            }

            .web3wallet-connect--title h3 {
                font-size: 1.5rem;
                font-weight: 500;
                line-height: 2rem;
            }

            .web3wallet-banner__left2 h4 {
                font-size: 1.2rem;
                font-weight: 500;
                line-height: 2.25rem;
            }

            .web3wallet-banner__left2 {
                display: flex;
                flex-direction: row !important;
                flex-wrap: nowrap !important;
                gap: 5px;
                justify-content: center;
            }

            .web3wallet-banner__left3 p {
                font-size: .8rem;
                font-weight: 400;
                line-height: 1.25rem;
                padding: 0;
                margin: 0;
            }

            .web3wallet-banner1 {
                text-align: center;
                justify-items: center;
                justify-content: center;
            }

            .web3wallet-banner__right {
                height: 60vh;
            }

            .web3wallet-banner__left {
                padding: 0;
                margin: 0 auto;
            }

            .web3wallet-banner__left1 {
                justify-content: center;
            }

            .web3wallet-banner__left1 span {
                text-align: center;
                font-size: 1rem;
                font-weight: 500;
                line-height: 1.5rem;
            }

            .web3wallet-banner__left .btn {
                margin: 1em 0;
                width: 62vh;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container web3wallet">
        <section class="web3wallet-banner">
            <div class="web3wallet-banner1 d-flex justify-content-between flex-wrap-reverse">
                <div class="web3wallet-banner__left">
                    <div class="d-flex web3wallet-banner__left1">
                        <span class="">Next Generation</span>
                        <img src="{{asset('img/star.svg')}}">
                    </div>
                    <div class="d-plex flex-wrap flex-column web3wallet-banner__left2">
                        <h4>Foxy Exchanges</h4>
                        <h4>Web3 Wallet</h4>
                    </div>
                    <div class="web3wallet-banner__left3">
                        <p>Meet the next-generation Web3 wallet</p>
                    </div>
                    <button class="btn">Start Now</button>
                </div>
                <div class="web3wallet-banner__right">
                    <img src="{{asset('img/web3.png')}}">
                </div>
            </div>
        </section>
        <section class="web3wallet-info py-6">
            <div class="web3wallet-info--item text-center w-100">
                <img class="web3wallet-info--item__img" src="{{asset('img/simple.svg')}}" alt="">
                <h4 class="web3wallet-info--item__title">Simple</h4>
                <p class="web3wallet-info--item__pra">CEX and DEX in one App</p>
            </div>
            <div class="web3wallet-info--item text-center w-100">
                <img class="web3wallet-info--item__img" src="{{asset('img/convenient.svg')}}" alt="">
                <h4 class="web3wallet-info--item__title">Convenient</h4>
                <p class="web3wallet-info--item__pra">Multi-chain support</p>
            </div>
            <div class="web3wallet-info--item text-center w-100">
                <img class="web3wallet-info--item__img" src="{{asset('img/safe.svg')}}" alt="">
                <h4 class="web3wallet-info--item__title">Safe</h4>
                <p class="web3wallet-info--item__pra">Cutting-edge security technology</p>
            </div>
        </section>
        <section class="web3wallet-detail">
            <div class="web3wallet-detail-item my-4">
                <div class="web3wallet-detail-item__title">
                    <h3>No More Seed Phrases</h3>
                    <p>Foxy’s Web3 Wallet removes the need for keeping seed phrases or private keys.</p>
                </div>
                <div class="web3wallet-detail-item__img">
                    <img src="{{asset('img/ans1.svg')}}" alt="">
                </div>
            </div>
            <div class="web3wallet-detail-item my-4">
                <div class="web3wallet-detail-item__title">
                    <h3>Powerful MPC Technology</h3>
                    <p>Foxy’s multi-party computation tech means every transaction is SAFU.</p>
                </div>
                <div class="web3wallet-detail-item__img">
                    <img src="{{asset('img/ans2.svg')}}" alt="">
                </div>
            </div>
            <div class="web3wallet-detail-item my-4">
                <div class="web3wallet-detail-item__title">
                    <h3>Never Lose Wallet Access</h3>
                    <p>Your Web3 Wallet is linked to your Foxy account and will always be with you.</p>
                </div>
                <div class="web3wallet-detail-item__img">
                    <img src="{{asset('img/ans3.svg')}}" alt="">
                </div>
            </div>
        </section>
        <section class="web3wallet-faq">
            <h2>FAQ</h2>
            <div class="web3wallet-faq--item d-grid">
                <a href="#">
                    <div class="d-flex gap-2 my-3">
                        <img src="{{asset('img/document-f.svg')}}">
                        <p>How to create a Web3 Wallet</p>
                    </div>
                </a>
                <a href="#">
                    <div class="d-flex gap-2 my-3">
                        <img src="{{asset('img/document-f.svg')}}">
                        <p>How to receive tokens in your Web3 Wallet</p>
                    </div>
                </a>
            </div>
            <div class="web3wallet-faq--item d-grid">
                <a href="#">
                    <div class="d-flex gap-2 my-3">
                        <img src="{{asset('img/document-f.svg')}}">
                        <p>How to transfer funds to your Web3 Wallet</p>
                    </div>
                </a>
                <a href="#">
                    <div class="d-flex gap-2 my-3">
                        <img src="{{asset('img/document-f.svg')}}">
                        <p>How to restore your Web3 Wallet</p>
                    </div>
                </a>
            </div>
        </section>
        <section class="web3wallet-connect my-5">
            <div class="web3wallet-connect--title text-center">
                <h3>Connect With Millions of Users</h3>
                <p>Get to know your users better with our powerful Wallet SDK</p>
            </div>
            <div class="web3wallet-connect--btn">
                <button class="btn">Get Wallet SDK</button>
            </div>
        </section>
    </div>
@endsection
@section('script')
@endsection
