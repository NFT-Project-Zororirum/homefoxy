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

        .about-button {
            background-color: rgb(252, 213, 53);
            color: rgb(24, 26, 32);
        }

        .card-blog {
            margin: 2.5rem 0 0 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            row-gap: 20px;
            column-gap: 45px;
        }

        .card-body {
            background: #FAFAFA;
        }

        .card-blog .card {
            max-height: 35rem;
        }


        .card-blog__text {
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            font-style: normal;
            color: #707a8a;
        }


        .about-img {
            width: 20%;
        }

        .about-board {
            box-sizing: border-box;
            padding: 20px 0px;
            overflow: hidden;
        }

        .about-board:hover {
            background-color: #FAFAFA;

        }
        .about-menu{
            color: #1E2329;
        }
        .about-menu:hover{
            color: #F0B90B;
            transition: 0.3s ease-in;
        }
        .box{
            background-color: #fff;
        }

        @media (min-width: 767px) {
            .card-blog__title {
                box-sizing: border-box;
                min-width: 0;
                font-size: 20px;
                margin-top: 16px;
            }

            .card-blog__text {
                font-size: 15px;
                line-height: 20px;
                font-weight: 400;
                color: #707a8a;
            }

            .about-title {
                font-weight: 600;
                font-size: 48px;
                line-height: 56px;
            }


            .global-pc_des {
                font-size: 17px;
            }

            .about-svg-text {
                font-weight: 500;
                font-size: 20px;
                line-height: 28px;
            }

            .about-svg-des {
                font-weight: 500;
                font-size: 14px;
                line-height: 20px;
            }

            .svg-row div {
                padding: 0px 30px;
            }
            .vip-mailbox{
                width: 20%;
                margin: 0px 35px;
            }

        }

        @media (max-width: 767px) {
            .global-pc {
                width: 100%;
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

            .about-svg-text {
                font-weight: 500;
                font-size: 14px;
                line-height: 20px;
            }

            .about-svg-des {
                font-weight: 500;
                font-size: 11px;
                line-height: 15px;
            }

            .svg-row div {
                padding: 0px 30px;
                justify-content: flex-start;
            }

            .card-blog__title {
                box-sizing: border-box;
                margin: 0;
                min-width: 0;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                margin-top: 16px;
            }
            .vip-mailbox{
                display: none;
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
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <img src="{{asset('img/about/global-pc.png')}}" class="global-pc" alt="" width="50%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <h1 class="about-title">Welcome to Foxyexchange</h1>
                    <div class="global-pc_des">At Foxyexchange, we believe that everyone should have the freedom to
                        earn, hold, spend, share and give their money - no matter who you are or where you come from.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 svg-row d-flex align-items-center">
                    <img src="{{asset('img/about/svgexport-9.svg')}}" alt="">
                    <div>
                        <h3 class="about-svg-text">$65 bn</h3>
                        <p class="about-svg-des">Average daily volume</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 svg-row d-flex align-items-center">
                    <img src="{{asset('img/about/svgexport-9.svg')}}" alt="">
                    <div>
                        <h3 class="about-svg-text">300 bn</h3>
                        <p class="about-svg-des">Spot transactions in 2022</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 svg-row d-flex align-items-center">
                    <img src="{{asset('img/about/svgexport-11.svg')}}" alt="">
                    <div>
                        <h3 class="about-svg-text">24/7</h3>
                        <p class="about-svg-des">Customer Support in 40 languages</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <div class="container mb-5">
        <section class="row mb-5">
            <div class="our-mission">
                <h2 style="font-weight: 600;">Our Mission</h2>
                <div class="global-pc_des mb-3">Today, Foxyexchange is the world’s leading blockchain ecosystem, with a
                    product suite that includes the largest digital asset exchange. Our mission is to be the
                    infrastructure provider for crypto in tomorrow’s world.
                </div>
                <a href="#" class="btn about-button">Learn More</a>
            </div>
        </section>
        <section class="row mb-5">
            <h2 class="md-3" style="font-weight: 600;">Our Ecosystem</h2>
            <div class="global-pc_des">Our platform is trusted by millions worldwide, and features an unmatched
                portfolio of financial product offerings.
            </div>
            <section class="card-blog">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img src="{{asset('svg/svgexport-47.svg')}}"
                            class="about-img" alt="...">
                        <h4 class="card-title card-blog__title">Foxyexchange Academy</h4>
                        <p class="card-text card-blog__text">Foxyexchange Research provides institutional-grade
                            analysis, in-depth insights, and unbiased information to all participants in the digital
                            asset industry.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img
                            src="{{asset('svg/svgexport-34.svg')}}"
                            class="about-img" alt="...">
                        <h4 class="card-title card-blog__title">Foxyexchange Charity</h4>
                        <p class="card-text card-blog__text">Foxyexchange Charity is a non-profit organization dedicated
                            to building a future where Web3 technology is used as a force of good.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img
                            src="{{asset('img/about/svgexport-9.svg')}}"
                            class="about-img" alt="...">
                        <h4 class="card-title card-blog__title">Foxyexchange Exchange</h4>
                        <p class="card-text card-blog__text">Foxyexchange Exchange is the largest crypto exchange by
                            trade volume.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img
                            src="{{asset('svg/svgexport-45.svg')}}"
                            class="about-img" alt="...">
                        <h4 class="card-title card-blog__title">Foxyexchange Labs</h4>
                        <p class="card-text card-blog__text">Foxyexchange Labs is a venture capital and accelerator
                            whose goal is to identify and support the most promising Web3 projects.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img
                            src="{{asset('svg/svgexport-19.svg')}}"
                            class="about-img" alt="...">
                        <h4 class="card-title card-blog__title">Foxyexchange Research</h4>
                        <p class="card-text card-blog__text">Foxyexchange Research provides institutional-grade
                            analysis, in-depth insights, and unbiased information to all participants in the digital
                            asset industry.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img
                            src="{{asset('svg/svgexport-30.svg')}}"
                            class="about-img" alt="...">
                        <h4 class="card-title card-blog__title">Foxyexchange NFT</h4>
                        <p class="card-text card-blog__text">Foxyexchange NFT is the official NFT marketplace of
                            Foxyexchange, dedicated to building a community-focused platform that enhances user
                            experience. </p>
                    </div>
                </div>
            </section>
        </section>
        <section class="row mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <img src="{{asset('img/about/trusted-section.png')}}" alt="" width="90%">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <h3 class="title-des" style="font-weight: 600;">Putting Our Users First</h3>
                <div class="global-pc_des mb-3">Users are at the heart of everything we do. From the beginning, we’ve
                    made user protection our top priority. That is why we’ve embedded state-of-the-art security measures
                    and strict data privacy controls across the entire Binance ecosystem.
                </div>
                <a href="#" class="btn about-button">User Protection</a>
            </div>
        </section>
        <section class="row mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <h3 class="title-des" style="font-weight: 600;">Working with Regulators</h3>
                <div class="global-pc_des mb-3">We’re also committed to meeting the highest standards for regulatory
                    compliance to maintain our responsibility to our users and further build a sustainable path forward
                    for the blockchain industry.
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <img src="{{asset('img/about/fair-m.png')}}" alt="" width="90%">
            </div>
        </section>
        <section class="row mb-5">
            <h2 class="md-3" style="font-weight: 600;">Our Founders</h2>
            <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                <img src="{{asset('img/about/cz2.png')}}" alt="" width="90%" style="border-radius: 30px">
                <div class="in-4">
                    <h5 style="font-weight: 600;">CZ (Changpeng Zhao)</h5>
                    <div style="font-weight: 600;">Founder & Chief Executive Officer</div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="global-pc_des mb-3">Changpeng Zhao, known as CZ, is a serial entrepreneur with an impressive
                    track record of successful startups. He launched Binance in July 2017 and, within 180 days, grew
                    Binance into the largest digital asset exchange in the world by trading volume. An pioneer within
                    the blockchain industry, CZ has built Binance into the leading blockchain ecosystem, comprised of
                    Binance Exchange, Labs, Launchpad, Academy, Research, Trust Wallet, Charity, NFT, and more. CZ spent
                    his youth flipping burgers before studying at McGill University Montreal. In 2005, CZ quit his role
                    as head of the Bloomberg Tradebook Futures Research & Development team and moved to Shanghai to
                    start Fusion Systems. Soon thereafter, he learned about Bitcoin and joined Blockchain.com as Head of
                    Technology.
                </div>
            </div>
        </section>
        <section class="row mb-5">
            <div class="col-lg-9 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="global-pc_des mb-3">Yi He leads business, marketing, and branding strategy at Binance. Yi
                    has led the business strategy behind Binance’s growth to become the world’s largest crypto exchange
                    – having pivoted the company from just a crypto-to-crypto trading platform to a global blockchain
                    ecosystem. Before co-founding Binance, Yi served as Vice President at Yixia Technology, the leading
                    mobile video tech company behind popular mobile apps like Miaopai, Xiaokaxiu, and Yizhibo, where she
                    led branding strategy and marketing operations. She was also a fundamental part of the fundraising
                    strategy that drove the firm’s valuation to USD$3+ billion. Additionally, Yi was co-founder of the
                    digital asset exchange OKCoin between 2014 and 2015. Yi is recognized as one of the most influential
                    entrepreneurs in the blockchain industry and has helped to create a trend of hiring female
                    executives in the male-dominant tech industry, increasing the market’s trust in women leaders.
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 text-center">
                <img src="{{asset('img/about/heyi3.png')}}" alt="" width="90%" style="border-radius: 30px">
                <div class="in-4">
                    <h5 style="font-weight: 600;">Yi He</h5>
                    <div style="font-weight: 600;">Co-Founder</div>
                </div>
            </div>
        </section>
        <section class="row mb-5">
            <h2 class="md-3" style="font-weight: 600;">Global Advisory Board</h2>
            <div class="d-flex flex-wrap" style="gap: 0.5rem 3rem">
                <div class="row about-board col-lg-6 col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Max Baucus</h6>
                        <p>USA</p>
                    </div>
                    <div class="col-8">Former U.S. Ambassador to the People’s Republic of China; Former U.S. Senator
                        Montana; Former
                        Chairman of Senate Committee on Finance
                    </div>
                </div>
                <div class="row col-lg-6 about-board col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Ibukun Awosika</h6>
                        <p>Nigeria</p>
                    </div>
                    <div class="col-8">First Female Chairman, First Bank of Nigeria; Founder, The Chair Centre group; Chairman, Nigerian Advisory Board, for Impact Investing and Convention on Business Integrity; Member G7 International Task Force for impact investing; Author of several books
                    </div>
                </div>
                <div class="row about-board col-lg-6 col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>HyungRin Bang</h6>
                        <p>Korea</p>
                    </div>
                    <div class="col-8">Advisor of the Korea Presidential Committee; PR/Communications Advisor of Yoon Seuk-Yul’s 2022 Presidential Campaign; Former CEO, SoftForum Inc.; Former Executive Director, Hyundai; Former Executive Director, Samsung;

                    </div>
                </div>
                <div class="row col-lg-6 about-board col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Bruno Bezard</h6>
                        <p>France</p>
                    </div>
                    <div class="col-8">Managing partner of Cathay Capital; Former Economic Advisor to the French Prime Minister; Former Head of the French Treasury; Former CEO of the French Government Shareholding Agency

                    </div>
                </div>
                <div class="row about-board col-lg-6 col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Leslie Maasdorp
                        </h6>
                        <p>South Africa</p>
                    </div>
                    <div class="col-8">Vice President and Chief Financial Officer of the New Development Bank. Former MD and President for Southern Africa at Bank of America Merrill Lynch. Former Vice Chairman of Barclays Capital. Former International Adviser to Goldman Sachs.
                    </div>
                </div>
                <div class="row col-lg-6 about-board col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Henrique de Campos Meirelles</h6>
                        <p>Brazil</p>
                    </div>
                    <div class="col-8">Former Minister of the Economy, Former President of the Central Bank of Brazil, Former Chair of J&F’s board of directors, Former Member of the Board of Directors of Azul Brazilian Airlines, Former President, BankBoston; Former President of Global Banking, FleetBoston Financial; Former Board member, Raytheon Corporation, Bestfoods and Champion International. Former Member of the Council of Lloyd’s of London; Former Chairman of Lazard Americas.

                    </div>
                </div>
                <div class="row about-board col-lg-6 col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Adalberto Palma</h6>
                        <p>Mexico</p>
                    </div>
                    <div class="col-8">Honorary Board Member of The Aspen Institute Mexico; Former Senior Advisor at the Chief of Staff Office to the President of Mexico; Director of Business Development at BEworksMX Consulting; Former President of the CNBV; Founding Chairman of The Center for Excellency in Corporate Governance; Independent Director of the Institute for Savings Protection; President of Bankers Trust Mêxico, Colombia and Venezuela; Managing Director of Citibank Mexico.

                    </div>
                </div>
                <div class="row col-lg-6 about-board col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>David Plouffe</h6>
                        <p>USA</p>
                    </div>
                    <div class="col-8">Business, Non-Profit and Political strategist; Author, Member of Various Boards of Directors; Former Campaign Manager Senior Advisor to President Obama in the White House

                    </div>
                </div>
                <div class="row about-board col-lg-6 col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Christin Schäfer
                        </h6>
                        <p>Germany
                        </p>
                    </div>
                    <div class="col-8">Founder and Managing Director of acs plus; Former Group Risk Operating Officer, Erste Group Bank; Former Global Head of Quantitative Solutions, Deutsche Bank, Member of the Data Ethics Commission, German Federal Government

                    </div>
                </div>
                <div class="row col-lg-6 about-board col-md-12 col-sm-12 d-flex mb-3">
                    <div class="col-4">
                        <h6>Lord Vaizey
                        </h6>
                        <p>UK</p>
                    </div>
                    <div class="col-8">Member of the House of Lords; Former Minister and Member of Parliament
                    </div>
                </div>
            </div>
        </section>
        <section class="row mb-5">
            <h2 style="font-weight: 600;">Working at Binance</h2>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <img src="{{asset('img/about/grow.png')}}" alt="" width="90%">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <h3 class="title-des" style="font-weight: 600;">Putting Our Users First</h3>
                <div class="global-pc_des mb-3">At Binance, we give people the freedom to own their decisions, collaborate openly, and serve our users with passion and integrity. Join the Binance team today and work with some of the world’s most talented, hardworking, and passionate people.
                </div>
                <a href="#" class="btn about-button">Explore Jobs</a>
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
        </div>
    </div>
@endsection
