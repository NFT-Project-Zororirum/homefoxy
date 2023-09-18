@extends('components.layout')
@section('style')
    <style>
        body {
            font-family: "Arial", "sans-serif";
        }

        .about-bg {
            background: url("{{asset('img/about/background.png')}}");
            height: 100%;
        }

        .about-menu {
            color: #1E2329;
        }

        .about-button {
            background-color: rgb(252, 213, 53);
            color: rgb(24, 26, 32);
        }

        .about-menu:hover {
            color: #F0B90B;
            transition: 0.3s ease-in;
        }

        .ab-title {
            font-size: 17px;
            color: #0a0e16;
        }

        .ab-title:hover {
            color: rgb(240, 185, 11);
        }

        .link-gray:hover {
            color: rgb(240, 185, 11);
        }

        .announ {
            padding: 30px 0px;
            background-color: #FAFAFA;
        }

        .card-blog {
            margin: 2.5rem 0 0 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            row-gap: 20px;
            column-gap: 45px;
        }

        .card-blog .card {
            max-height: 35rem;
        }

        .blog-img {
            max-height: 54%;
            border-radius: 3%;
        }

        .card-blog__title {
            font-size: 20px;
            line-height: 28px;
            font-weight: 700;
            font-style: normal;
        }

        .card-blog__text {
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            font-style: normal;
            color: #707a8a;
        }

        .card-blog__texttime {
            color: #1e2329;
            font-size: 14px;
            line-height: 20px;
            font-weight: 500;
            font-style: normal;
        }

        @media (min-width: 767px) {

            .about-title {
                font-weight: 600;
                font-size: 48px;
                line-height: 56px;
            }


            .global-pc_des {
                font-size: 17px;
            }

            .about-svg-des {
                font-size: 14px;
                line-height: 20px;
                font-weight: 400;
                font-style: normal;
            }

            .svg-row div {
                padding: 0px 30px;
            }

            .hd-item .img {
                width: 25%;

            }

            .view-more {
                font-size: 15px;
                color: #000000;
            }


        }

        @media (max-width: 767px) {
            .global-pc {
                width: 70%;
            }

            .about-title {
                font-weight: 600;
                font-size: 28px;
                line-height: 40px;
            }

            .global-pc_des {
                font-weight: 400;
                font-size: 14px;
                line-height: 20px;
            }

            .about-svg-des {
                font-size: 13px;
                line-height: 20px;
                font-weight: 400;
                font-style: normal;
            }

            .svg-row div {
                padding: 0px 30px;
                justify-content: flex-start;
            }

            .y-team {
                width: 100%;
            }

            .hd-item .img {
                width: 60%;

            }

            .view-more {
                font-size: 14px;
                color: #000000;
            }

            .link-gray p {
                font-size: 12px;
            }

        }
    </style>
@endsection
@section('content')
    <section class="mb-5 container">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link about-menu" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link about-menu" href="/career">Careers</a></li>
            <li class="nav-item"><a class="nav-link about-menu" href="/press">Press</a></li>
            <li class="nav-item"><a class="nav-link about-menu" href="/community">Community</a></li>
        </ul>
    </section>
    <section class="about-bg mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 text-center">
                    <img src="{{asset('img/about/press-header-bg.png')}}" class="global-pc" alt="" width="50%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <h1 class="about-title">Foxyexchange Newsroom</h1>
                    <div class="global-pc_des mb-3">Your source for the latest news from Binance. Get access to our
                        official announcements, blog posts, news updates, media assets and more. When it comes to
                        blockchain and crypto, Binance is always at the heart of the story.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="row mb-5">
            <div class="col-4" align="center">
                <a href="#blog" class="hd-item">
                    <img class="img" src="{{asset('svg-about/svgexport-19.svg')}}" alt="">
                    <h6>Foxy Blog</h6>
                </a>
            </div>
            <div class="col-4" align="center">
                <a href="#ann" class="hd-item">
                    <img class="img" src="{{asset('svg-about/svgexport-19.svg')}}" alt="">
                    <h6>Announcements</h6>
                </a>
            </div>
            <div class="col-4" align="center">
                <a href="#media" class="hd-item">
                    <img class="img" src="{{asset('svg-about/svgexport-19.svg')}}" alt="">
                    <h6>Media Assets</h6>
                </a>
            </div>
        </section>
        <section class="mb-5">
            <h2 style="font-weight: 600">About Foxyexchange</h2>
            <p class="global-pc_des">Foxy is the world’s leading blockchain ecosystem and cryptocurrency infrastructure
                provider with a financial product suite that includes the largest digital asset exchange.</p>
            <a href="#" class="btn about-button">Learn More</a>
        </section>
    </div>
    <section class="announ mb-5" id="ann">
        <div class="container">
            <h2 style="font-weight: 600">Official Announcements</h2>
            <p class="global-pc_des">Stay up to date on Foxy product updates, new listings, trading competitions and
                other important announcements.</p>
            <a href="#" class="view-more">View More >></a>
            <div class="row mt-3">
                <div class="col-lg-6 col-md-12">
                    <h6><a href="#" class="ab-title">Join the Discord Achievements Hunt: Share Community Rewards &
                            Unlock Exclusive Benefits</a></h6>
                    <p class="about-svg-des">Fellow Foxy,To reward active community members, Foxy is hosting an
                        Achievements Hunt on the official Foxy Discord server! During the Activity Period, there will be
                        ten unique achievements for users to conquer, each with its own USDT rewards pool. On top of
                        that, two unique server roles are up for grabs for engaged participants.Join us on the Foxy
                        Discord server, unlock…</p>
                    <p class="about-svg-des">By Foxy Team, 9-15</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <a href="#" class="link-gray d-flex justify-content-between">
                        <p class="about-svg-des">Updates on the Maintenance Margin Ratios of Cross Margin Loanable</p>
                        <p class="about-svg-des">9-15</p>
                    </a>
                    <a href="#" class="link-gray d-flex justify-content-between">
                        <p class="about-svg-des">Notice Regarding the Removal of Selected Loanable Assets on</p>
                        <p class="about-svg-des">9-15</p>
                    </a>
                    <a href="#" class="link-gray d-flex justify-content-between">
                        <p class="about-svg-des">Foxy Updates Fiat Liquidity Provider Program (2023-09-25)</p>
                        <p class="about-svg-des">9-14</p>
                    </a>
                    <a href="#" class="link-gray d-flex justify-content-between">
                        <p class="about-svg-des">Anti-Scam Ninja Program: Report Suspicious P2P Activities and</p>
                        <p class="about-svg-des">9-14</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="container mb-5">
        <h2 id="blog" style="font-weight: 600">Foxy Blog</h2>
        <p class="global-pc_des">See what's happening across the Binance ecosystem.</p>
        <a href="/blog" class="view-more">View More >></a>
        <section class="card-blog mb-3">
            <a href="/blog/test">
                <div class="card mb-3">
                    <img
                        src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
                        class="card-img-top blog-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
                            báo
                            rủi ro thiết</h5>
                        <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
                            luôn
                            an toàn và bảo
                            mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
                        <p class="card-text card-blog__texttime">2023-08-18</p>
                    </div>
                </div>
            </a>
            <a href="/blog/test">
                <div class="card mb-3">
                    <img
                        src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
                        class="card-img-top blog-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
                            báo
                            rủi ro thiết</h5>
                        <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
                            luôn
                            an toàn và bảo
                            mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
                        <p class="card-text card-blog__texttime">2023-08-18</p>
                    </div>
                </div>
            </a>
            <a href="/blog/test">
                <div class="card mb-3">
                    <img
                        src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
                        class="card-img-top blog-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
                            báo
                            rủi ro thiết</h5>
                        <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
                            luôn
                            an toàn và bảo
                            mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
                        <p class="card-text card-blog__texttime">2023-08-18</p>
                    </div>
                </div>
            </a>
            <a href="/blog/test">
                <div class="card mb-3">
                    <img
                        src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
                        class="card-img-top blog-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
                            báo
                            rủi ro thiết</h5>
                        <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
                            luôn
                            an toàn và bảo
                            mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
                        <p class="card-text card-blog__texttime">2023-08-18</p>
                    </div>
                </div>
            </a>
            <a href="/blog/test">
                <div class="card mb-3">
                    <img
                        src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
                        class="card-img-top blog-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
                            báo
                            rủi ro thiết</h5>
                        <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
                            luôn
                            an toàn và bảo
                            mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
                        <p class="card-text card-blog__texttime">2023-08-18</p>
                    </div>
                </div>
            </a>
            <a href="/blog/test">
                <div class="card mb-3">
                    <img
                        src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
                        class="card-img-top blog-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
                            báo
                            rủi ro thiết</h5>
                        <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
                            luôn
                            an toàn và bảo
                            mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
                        <p class="card-text card-blog__texttime">2023-08-18</p>
                    </div>
                </div>
            </a>
        </section>
    </div>
    <div class="container mb-5">
        <h2 id="blog" style="font-weight: 600">Latest News</h2>
        <p class="global-pc_des">Keep up to date with the latest crypto news and updates.</p>
        <a href="/blog" class="view-more">View More >></a>
        <section class="row mb-3 mt-3">
            <a href="#" class="row col-12">
                <img class="col-12 col-lg-4 mb-3"
                     src="{{asset('img/about/0c80f67645aa8bb7944808311f852db9-cover.jpeg')}}" alt="">
                <div class="col-12 col-lg-8">
                    <h4 style="font-weight: 500">Foxyexchange's FOX Greenfield Testnet Undergoes Nagqu Upgrade</h4>
                    <p class="about-svg-des mb-5 text-gray">
                        Foxy is upgrading its FOX Greenfield for the testnet version to v0.2.5 in a process known as
                        the Nagqu Upgrade. This upgrade includes enhancements to the security of the platform which will
                        not impact users' account balance. The upgrade introduces features such as stricter parameter
                        checks for resource mirror smart contracts, a timer-lock mechanism for funds exceeding 10
                    </p>
                    <p class="about-svg-des text-gray">Foxy News 2023-09-15 03:08</p>
                </div>
            </a>
            <a href="#" class="row col-12">
                <img class="col-12 col-lg-4 mb-3"
                     src="{{asset('img/about/0c80f67645aa8bb7944808311f852db9-cover.jpeg')}}" alt="">
                <div class="col-12 col-lg-8">
                    <h4 style="font-weight: 500">OTC Weekly Trading Insights (09/14/2023)</h4>
                    <p class="about-svg-des mb-5 text-gray">
                        Tellor ($TRB) almost doubled in the past 7 days with a significant volume increase. Tellor is a
                        decentralized oracle protocol that serves as a data bridge between the real world and
                        blockchain-based smart contracts. It’s a critical infrastructure piece in the DeFi ecosystem,
                        providing verified, permissionless data through its native TRB tokens.The surge was driven by
                        high-profile soci
                    </p>
                    <p class="about-svg-des text-gray">Foxy Research 2023-09-15 03:08</p>
                </div>
            </a>
            <a href="#" class="row col-12">
                <img class="col-12 col-lg-4 mb-3"
                     src="{{asset('img/about/0c80f67645aa8bb7944808311f852db9-cover.jpeg')}}" alt="">
                <div class="col-12 col-lg-8">
                    <h4 style="font-weight: 500">Foxyexchange P2P Introduces Five Automated Payment Methods for Smooth
                        P2P Trading</h4>
                    <p class="about-svg-des mb-5 text-gray">
                        Foxy P2P is excited to announce the addition of five automated payment methods to its
                        platform. This enhancement will allow users to instantly receive their newly purchased assets on
                        Foxy P2P when using any of the automated payment methods across more than 15 fiat markets.To
                        use the automated payment methods on Foxy P2P:1. Log in to your Foxy
                    </p>
                    <p class="about-svg-des text-gray">Foxy News 2023-09-15 03:08</p>
                </div>
            </a>
        </section>
    </div>
    <div class="container mb-5" id="media">
        <h2 id="blog" style="font-weight: 600">Media Assets</h2>
        <p class="global-pc_des">Visit our Foxy Style Guide to download Binance logos and other brand assets.</p>
        <a href="#" class="view-more">Visit the Binance Style Guide >></a>
    </div>
    <div class="container mb-5">
        <h2 id="blog" style="font-weight: 600">Contact Us</h2>
        <p class="global-pc_des">The Foxy Newsroom is available to journalists around the world. Contact us at <strong style="color: #C99400 !important;">pr@foxyexchange.com</strong>

        Please note the Foxy PR & Communications team is only able to respond to media enquiries at this time. We
        strive to respond to valid enquiries as soon as possible.</p>
        <p>Need Customer Support? Visit our <a href="#" class="view-more" style="color: #C99400 !important;">Support Center</a>.</p>
    </div>
@endsection
