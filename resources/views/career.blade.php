@extends('components.layout')
@section('style')
    <style>
        body {
            font-family: "Arial", "sans-serif";
        }

        .about-menu {
            color: #1E2329;
        }

        .about-menu:hover {
            color: #F0B90B;
            transition: 0.3s ease-in;
        }

        .about-bg {
            background: url("{{asset('img/about/background.png')}}");
            height: 100%;
        }

        .about-button {
            background-color: rgb(252, 213, 53);
            color: rgb(24, 26, 32);
        }

        .collect-item {
            background-color: #FAFAFA;
            padding: 20px 30px;

        }

        .param {
            background-color: #F0B90B;
            padding: 50px 0px;
        }

        .y-team {
            background-color: #FAFAFA;
            padding: 20px;
        }


        .y-item img {
            width: 60px;
            height: 60px
        }

        .y-item div {
            margin-left: 20px;
            color: #0a0e16;
        }

        .slide-blog {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-blog .card {
            border: none !important;
        }

        .end-bn {
            padding: 100px 0px;
            background-color: #0B0E11;
        }
        .end-bn h1 {
            color: #fff;
            font-weight: 600;
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
                font-weight: 500;
                font-size: 14px;
                line-height: 20px;
            }

            .svg-row div {
                padding: 0px 30px;
            }

            .img {
                width: 20%;
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
                font-weight: 500;
                font-size: 11px;
                line-height: 15px;
            }

            .svg-row div {
                padding: 0px 30px;
                justify-content: flex-start;
            }

            .y-team {
                width: 100%;
            }

            .img {
                width: 30%;
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
                    <img src="{{asset('img/about/hero.png')}}" class="global-pc" alt="" width="50%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <h1 class="about-title">Careers at Foxyexchange</h1>
                    <div class="global-pc_des mb-3">Join our quest to increase the Freedom of Money
                    </div>
                    <a href="#" class="btn about-button">View Openings</a>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="mb-5">
            <h2 style="font-weight: 600">Our Values</h2>
            <p class="global-pc_des">Binance Core Values guide our behavior, decisions, and action, enabling unified
                collaboration across our diverse, international teams.</p>
        </section>
        <section class="row mb-5">
            <div class="d-flex flex-wrap" style="gap: 0.5rem 3rem">
                <div
                    class=" row col-lg-6 col-md-12 col-sm-12 mb-3 collect-item d-flex justify-content-between align-items-center">
                    <div class="col-6 text-start">
                        <h5 style="font-weight: 400">User-Focused</h5>
                        <p class="about-svg-des">We protect our users by putting our users' needs first and delivering
                            quality
                            service.</p>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img" src="{{asset('img/about/user-focused.svg')}}" alt="">
                    </div>
                </div>
                <div
                    class="row col-lg-6 col-sm-12 col-md-12 collect-item mb-3 d-flex justify-content-between align-items-center">
                    <div class="col-6 text-start">
                        <h5 style="font-weight: 400">Collaboration</h5>
                        <p class="about-svg-des">We communicate openly.
                            We work as a team towards shared goals to build the ecosystem together.</p>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img" src="{{asset('img/about/collaboration.svg')}}" alt="">
                    </div>
                </div>
                <div
                    class="row col-lg-6 col-sm-12 col-md-12 collect-item mb-3 d-flex justify-content-between align-items-center">
                    <div class="col-6 text-start">
                        <h5 style="font-weight: 400">Hardcore</h5>
                        <p class="about-svg-des">We are results driven. We get things done.
                            We are passionate and work hard.
                            When we fail, we learn fast, and pick ourselves up.</p>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img" src="{{asset('img/about/hardcore.svg')}}" alt="">
                    </div>
                </div>
                <div
                    class="row col-lg-6 col-sm-12 col-md-12 collect-item mb-3 d-flex justify-content-between align-items-center">
                    <div class="col-6 text-start">
                        <h5 style="font-weight: 400">Humility</h5>
                        <p class="about-svg-des">We accept critical feedback.
                            We treat everyone as equals.
                            We are modest about our success.</p>
                    </div>
                    <div class="col-6 text-end">
                        <img class="img" src="{{asset('img/about/humility.svg')}}" alt="">
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container-fluid row param mb-5">
        <div class="col-4 text-center">
            <h1>110+</h1>
            <div class="global-pc_des">Nationalities</div>
        </div>
        <div class="col-4 text-center">
            <h1>8000+</h1>
            <div class="global-pc_des">Employees</div>
        </div>
        <div class="col-4 text-center">
            <h1>100+</h1>
            <div class="global-pc_des">Employees</div>
        </div>
    </div>
    <div class="container">
        <section class="row mb-5">
            <h2 style="font-weight: 600">Choose Your Team</h2>
            <div class="global-pc_des mb-3">Select a team most relevant to your interests and experience to view job
                openings.
            </div>
            <div class="d-flex flex-wrap" style="gap: 0.5rem 2.25rem">
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-42.svg')}}" alt="">
                        <div class="mgl-auto">Business Development</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-43.svg')}}" alt="">
                        <div class="mgl-auto">Communications</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-44.svg')}}" alt="">
                        <div class="mgl-auto">Customer Support</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-45.svg')}}" alt="">
                        <div class="mgl-auto">Data & Research</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-46.svg')}}" alt="">
                        <div class="mgl-auto">Editorial & Video</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-47.svg')}}" alt="">
                        <div class="mgl-auto">Engineering</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-48.svg')}}" alt="">
                        <div class="mgl-auto">Finance & Administration</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-49.svg')}}" alt="">
                        <div class="mgl-auto">Legal & Compliance</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-50.svg')}}" alt="">
                        <div class="mgl-auto">Marketing</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-51.svg')}}" alt="">
                        <div class="mgl-auto">Operations, Strategy & Project Management</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-52.svg')}}" alt="">
                        <div class="mgl-auto">Product & Design</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-53.svg')}}" alt="">
                        <div class="mgl-auto">Quantitative Strategy</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-54.svg')}}" alt="">
                        <div class="mgl-auto">Security & IT Helpdesk</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-55.svg')}}" alt="">
                        <div class="mgl-auto">HR</div>
                    </a>
                </div>
                <div class="y-team col-lg-4 col-sm-12 col-md-12 row">
                    <a href="#" class="y-item d-flex align-items-center">
                        <img src="{{asset('svg-about/svgexport-56.svg')}}" alt="">
                        <div class="mgl-auto">Early Careers</div>
                    </a>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <section>
                <h2 class="mb-5" style="font-weight: 600">Work With Us</h2>
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
                                        <img src="{{asset('img/about/innovation.png')}}"
                                             class="img-fluid rounded-start slide-blog__img" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body mx-4">
                                            <h2 class="vip-title">Bridge the Gap at Binance</h2>
                                            <p class="vip-text mb-3">What's our secret to success? Our people. Be united
                                                by a commom DNA of talented, hardworking and passionate individuals in a
                                                world renowned team.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="card mb-3 py-4">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="{{asset('img/about/grow.png')}}"
                                             class="img-fluid rounded-start slide-blog__img" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body mx-4">
                                            <h2 class="vip-title">Data & Analytics</h2>
                                            <p class="vip-text mb-3">Transform our products and services with expertise
                                                and be recognized for success. Connect in an expanding environment that
                                                rewards personal growth.</p>
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
                                        <img src="{{asset('img/about/thrive-2.png')}}"
                                             class="img-fluid rounded-start slide-blog__img" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body mx-4">
                                            <h2 class="vip-title">Inspire through Innovation</h2>
                                            <p class="vip-text mb-3">Embrace the future with challenges. Tackle
                                                accelerating the adoption of cryptocurrency, blockchain, and distributed
                                                ledger technology with the leading company in the crypto space.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </div>
    <section class="mb-5 end-bn text-center">
        <h1>Exchange the World With Us</h1>
        <a href="#" class="btn about-button">See all opportunities</a>
    </section>
@endsection
