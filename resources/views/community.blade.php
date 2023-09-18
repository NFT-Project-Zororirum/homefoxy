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

        .social-media {
            color: #929AA5;
        }

        .social-media svg {
            width: 50px;
        }

        @media (min-width: 767px) {
            .cm-ct {
                width: 1200px;
                background-color: #FAFAFA;
                padding: 40px;
            }

            .social-media div {
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
            }
        }

        @media (max-width: 767px) {
            .cm-ct {
                width: 100%;
                background-color: #FAFAFA;
                padding: 20px;
                font-size: 11px;
            }

            .social-media div {
                font-weight: 500;
                font-size: 14px;
                line-height: 20px;
            }
        }

        .about-button {
            background-color: rgb(252, 213, 53);
            color: rgb(24, 26, 32);
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
                    <img src="{{asset('img/about/join.png')}}" class="global-pc" alt="" width="50%">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <h1 class="about-title">Join the Foxy Community</h1>
                    <div class="global-pc_des mb-3">Foxyexchange is more than a crypto ecosystem. It's a vibrant global
                        community powered by Foxyexchange users from all walks of life, who come together both in real
                        life
                        and online to pursue their passions and advance the crypto cause.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container cm-ct mb-5">
        <img class="mb-3" src="{{asset('img/about/quote.svg')}}" alt="">
        <h5 style="font-weight: 500">The Foxyexchange community inspires us every day. It is the innovation engine of
            Foxyexchange that helps, and
            motivates us to achieve even higher goals. The Foxyexchange community is the most knowledgeable crypto
            community
            in the world. Nothing gives me greater pleasure than meeting and speaking to our community members, both
            online and in-person. <br><br>Thank you for your ongoing help and support. <br><br>-CZ</h5>
    </section>
    <div class="container">
        <section class="row mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <h3 class="title-des" style="font-weight: 600;">Explore Meet-ups & Events</h3>
                <div class="global-pc_des mb-3">We’ve resumed offline events and meet-ups in cities where they’re
                    permitted, from Dubai and Kyiv to Uruguay. Meet-ups give community members the chance to connect and
                    share ideas in person, hear from Foxyexchange team members, industry experts, and special guests.
                </div>
                <a href="#" class="btn about-button">Explore Events</a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <img src="{{asset('img/about/grow.png')}}" alt="" width="90%">
            </div>
        </section>
        <section class="row mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <img src="{{asset('img/about/angel.svg')}}" alt="" width="90%">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <h3 class="title-des" style="font-weight: 600;">Foxy Angel Program</h3>
                <div class="global-pc_des mb-3">Binance Angels are our most active and passionate community builders,
                    who help make a difference by sharing Binance’s vision with the world. There are currently 300+
                    Binance Angels across 70+ cities, who help fellow Binancians, lead the crypto conversation, share
                    local insights and trends, organize online and offline events, and more. <br><br>We’re looking for
                    dedicated users from all walks of life who share our values. Bring your unique voice and perspective
                    to help us increase the freedom of money for all.
                </div>
                <a href="#" class="btn about-button">Become a Foxy Angel</a>
            </div>
        </section>
        <section class="row mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <h3 class="title-des" style="font-weight: 600;">Join the Conversation</h3>
                <div class="global-pc_des mb-3">Explore more than 60 official Telegram groups on a variety of topics,
                    from trading and NFTs to platform announcements and more. Find your community with more than 40
                    multilingual Telegram groups designed to bring together local communities. <br><br>Explore more than
                    60 official Telegram groups on a variety of topics, from trading and NFTs to platform announcements
                    and more. Find your community with more than 40 multilingual Telegram groups designed to bring
                    together local communities.
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <img src="{{asset('img/about/joinconversation.png')}}" alt="" width="90%">
            </div>
        </section>
        <section class="row mb-5">
            <h2 style="font-weight: 600" class="mb-3">Foxy Social Medias</h2>
            <div class="row col-lg-6 col-md-12 col-sm-12 mb-3 mt-3">
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank" id="Community-a-bannerDiscord" class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class=""
                        >
                            <path
                                d="M8.819 12.48c0 .69.504 1.25 1.123 1.25.625 0 1.124-.561 1.124-1.25.012-.687-.5-1.249-1.124-1.249-.631 0-1.123.562-1.123 1.25zM12.966 12.48c0 .69.506 1.25 1.124 1.25.63 0 1.123-.561 1.123-1.25.013-.687-.499-1.249-1.123-1.249-.631 0-1.124.562-1.124 1.25z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-8.226-4.72a10.3 10.3 0 012.582.795h.002c1.414 2.064 2.116 4.4 1.844 7.089a10.467 10.467 0 01-3.163 1.584 7.662 7.662 0 01-.675-1.092c.372-.14.726-.31 1.066-.511-.067-.048-.13-.1-.196-.152l-.063-.05c-2.032.94-4.261.94-6.319 0-.083.069-.171.139-.26.202.342.202.695.372 1.068.51a7.65 7.65 0 01-.676 1.093 10.523 10.523 0 01-3.163-1.584c-.22-2.323.221-4.678 1.856-7.089a10.143 10.143 0 012.582-.795c.106.195.24.46.328.669a9.859 9.859 0 012.86 0c.088-.208.213-.474.327-.67z"
                                  fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text">Discord</div>
                    </a>
                </div>
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank" id="Community-a-bannerTelegram"
                       class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 2C6.478 2 2 6.478 2 11.99 2 17.511 6.478 22 12 22s10-4.488 10-10.01C22 6.477 17.522 2 12 2zm4.925 6.28c-.064.927-1.78 7.857-1.78 7.857s-.107.405-.48.415a.644.644 0 01-.49-.192c-.395-.33-1.29-.97-2.132-1.556a.949.949 0 01-.107.096c-.192.17-.48.416-.789.714-.117.107-.245.224-.373.352l-.01.01a2.21 2.21 0 01-.193.171c-.415.341-.458.053-.458-.096l.224-2.441v-.021l.01-.022c.011-.032.033-.043.033-.043s4.36-3.88 4.477-4.296c.01-.021-.021-.043-.074-.021-.288.096-5.31 3.273-5.864 3.625-.032.02-.128.01-.128.01l-2.441-.8s-.288-.117-.192-.383c.021-.054.053-.107.17-.181.544-.384 10-3.785 10-3.785s.267-.085.427-.032c.074.032.117.064.16.17.01.043.021.128.021.224 0 .054-.01.118-.01.224z"
                                fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text" class="css-oulcek">Telegram</div>
                    </a></div>
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank"
                       id="Community-a-bannerFacebook" class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M22 12.07c0 5.013-3.659 9.178-8.437 9.94v-7.03h2.336l.437-2.91h-2.763v-1.89c0-.794.384-1.578 1.622-1.578h1.269V6.133s-1.152-.193-2.24-.193c-2.283 0-3.787 1.395-3.787 3.908v2.222H7.9v2.91h2.538v7.03A10.07 10.07 0 012 12.07C2 6.509 6.48 2 12.005 2 17.531 2 22 6.509 22 12.07z"
                                fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text" class="css-oulcek">Facebook</div>
                    </a>
                </div>
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank"
                       id="Community-a-bannerTwitter" class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="">
                            <path
                                d="M8.287 20.5c7.545 0 11.675-6.535 11.675-12.198 0-.181 0-.362-.01-.555A8.522 8.522 0 0022 5.527a8.284 8.284 0 01-2.363.68 4.323 4.323 0 001.81-2.379c-.791.499-1.67.85-2.612 1.042a3.967 3.967 0 00-2.992-1.37c-2.266 0-4.109 1.925-4.109 4.292 0 .34.044.657.109.974-3.404-.17-6.428-1.89-8.456-4.485a4.44 4.44 0 00-.552 2.164c0 1.483.726 2.797 1.82 3.567a3.982 3.982 0 01-1.853-.532v.057c0 2.072 1.42 3.816 3.285 4.201a3.806 3.806 0 01-1.084.148c-.26 0-.52-.023-.77-.08.52 1.71 2.038 2.945 3.837 2.98a7.995 7.995 0 01-5.094 1.834c-.326 0-.662-.011-.976-.057A11.183 11.183 0 008.287 20.5z"
                                fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text" class="css-oulcek">Twitter</div>
                    </a>
                </div>
            </div>
            <div class="row col-lg-6 col-md-12 col-sm-12 mb-3 mt-3">
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank" id="Community-a-bannerDiscord" class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-xnls6g">
                            <path
                                d="M9.714 11.994c.575 0 1.044.469 1.044 1.044 0 .576-.469 1.045-1.044 1.045a1.046 1.046 0 01-1.045-1.045c0-.575.47-1.044 1.045-1.044zM12.005 16.022c.682 0 1.64-.16 2.088-.608a.28.28 0 01.384-.01.27.27 0 010 .383c-.714.714-2.067.768-2.472.768-.405 0-1.759-.054-2.472-.757a.27.27 0 010-.384.27.27 0 01.383 0c.448.448 1.407.608 2.089.608zM13.252 13.05c0-.576.468-1.045 1.044-1.045a1.06 1.06 0 011.044 1.044c0 .576-.469 1.044-1.044 1.044a1.046 1.046 0 01-1.044-1.044z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12.005 2.01c-5.52 0-9.995 4.475-9.995 9.995S6.485 22 12.005 22A9.989 9.989 0 0022 12.005c-.01-5.52-4.475-9.995-9.995-9.995zm5.797 11.327c.021.139.032.288.032.437 0 2.248-2.611 4.06-5.829 4.06-3.218 0-5.829-1.812-5.829-4.06 0-.15.01-.298.032-.437a1.447 1.447 0 01-.863-1.332 1.462 1.462 0 012.472-1.055c1.013-.735 2.408-1.193 3.964-1.236 0-.021.735-3.485.735-3.485 0-.063.043-.127.096-.16a.263.263 0 01.203-.042l2.419.522c.17-.34.522-.586.927-.586a1.04 1.04 0 011.044 1.044 1.04 1.04 0 01-1.044 1.045 1.033 1.033 0 01-1.034-.991l-2.174-.47-.66 3.123c1.534.053 2.909.522 3.9 1.236a1.453 1.453 0 012.472 1.044 1.48 1.48 0 01-.863 1.343z"
                                  fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text">Reddit</div>
                    </a>
                </div>
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank" id="Community-a-bannerTelegram"
                       class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-xnls6g">
                            <path
                                d="M19.663 3H4.327A1.32 1.32 0 003 4.306v15.398C3 20.424 3.597 21 4.327 21h15.336c.74 0 1.337-.576 1.337-1.296V4.306C21 3.586 20.403 3 19.663 3zM8.338 18.346H5.664V9.758h2.674v8.588zM7.001 8.575a1.54 1.54 0 01-1.543-1.543c0-.854.69-1.553 1.543-1.553.854 0 1.553.7 1.553 1.553 0 .854-.7 1.543-1.553 1.543zm11.335 9.771h-2.664V14.17c0-.997-.02-2.283-1.389-2.283-1.388 0-1.604 1.09-1.604 2.211v4.248h-2.664V9.758h2.561v1.172h.03c.36-.679 1.235-1.388 2.531-1.388 2.705 0 3.199 1.78 3.199 4.093v4.711z"
                                fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text" class="css-oulcek">LinkedIn</div>
                    </a></div>
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank"
                       id="Community-a-bannerFacebook" class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-xnls6g">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 7.382a4.618 4.618 0 100 9.236 4.618 4.618 0 000-9.236zm0 7.622A3.007 3.007 0 018.997 12 3.007 3.007 0 0112 8.997 3.007 3.007 0 0115.004 12 3.007 3.007 0 0112 15.004z"
                                  fill="currentColor"></path>
                            <path d="M17.884 7.197a1.08 1.08 0 11-2.16 0 1.08 1.08 0 012.16 0z"
                                  fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M12 3c-2.448 0-2.746.01-3.713.051-.957.052-1.615.196-2.18.422a4.311 4.311 0 00-1.595 1.039 4.311 4.311 0 00-1.039 1.594c-.226.566-.37 1.224-.422 2.18C3.011 9.255 3 9.553 3 12s.01 2.746.051 3.713c.042.957.196 1.615.422 2.18.226.597.535 1.091 1.039 1.595.504.504.998.813 1.594 1.039.576.226 1.224.37 2.18.422.957.04 1.266.051 3.714.051s2.746-.01 3.713-.051c.957-.042 1.615-.196 2.18-.422a4.311 4.311 0 001.595-1.039 4.311 4.311 0 001.039-1.594c.226-.576.37-1.224.422-2.18.04-.957.051-1.266.051-3.714s-.01-2.746-.051-3.713c-.042-.957-.196-1.615-.422-2.18a4.312 4.312 0 00-1.039-1.595 4.311 4.311 0 00-1.594-1.039c-.576-.226-1.224-.37-2.18-.422C14.745 3.011 14.447 3 12 3zm0 1.625c2.407 0 2.685.01 3.641.052.874.04 1.358.185 1.666.308.422.165.72.36 1.04.669.318.319.514.617.668 1.039.123.318.267.792.308 1.666.042.946.052 1.234.052 3.641s-.01 2.685-.052 3.641c-.04.874-.185 1.358-.308 1.666-.165.422-.36.72-.669 1.04a2.66 2.66 0 01-1.039.668c-.318.123-.792.267-1.666.308-.946.042-1.234.052-3.641.052s-2.685-.01-3.641-.052c-.874-.04-1.358-.185-1.666-.308a2.911 2.911 0 01-1.04-.669 2.659 2.659 0 01-.668-1.039c-.123-.318-.267-.792-.308-1.666-.042-.946-.052-1.234-.052-3.641s.01-2.685.052-3.641c.04-.874.185-1.358.308-1.666.165-.422.36-.72.669-1.04a2.658 2.658 0 011.039-.668c.318-.123.792-.267 1.666-.308.956-.042 1.234-.052 3.641-.052z"
                                  fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text" class="css-oulcek">Instagram</div>
                    </a>
                </div>
                <div class="col-3" align="center">
                    <a data-bn-type="link" href="#" target="_blank"
                       id="Community-a-bannerTwitter" class="social-media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="css-xnls6g">
                            <path
                                d="M12 2C6.478 2 2 6.478 2 12s4.478 10 10 10 10-4.478 10-10S17.512 2 12 2zm6.14 14.264h-1.45c-.553 0-.714-.447-1.705-1.439-.864-.831-1.237-.949-1.45-.949-.298 0-.384.075-.384.49v1.312c0 .352-.117.565-1.044.565-1.536 0-3.241-.927-4.446-2.665-1.812-2.537-2.303-4.456-2.303-4.84 0-.213.075-.405.49-.405H7.32c.362 0 .512.16.65.565.714 2.079 1.92 3.89 2.41 3.89.18 0 .266-.084.266-.553v-2.133c-.053-.991-.576-1.076-.576-1.428 0-.17.139-.341.363-.341h2.281c.31 0 .427.17.427.533v2.889c0 .309.128.426.224.426.18 0 .34-.117.682-.447 1.045-1.173 1.791-2.975 1.791-2.975.096-.213.267-.405.64-.405h1.45c.437 0 .533.224.437.533-.182.842-1.951 3.337-1.951 3.358-.16.256-.214.363 0 .65.16.214.66.65 1.002 1.045.618.704 1.098 1.3 1.226 1.706.117.405-.085.618-.501.618z"
                                fill="currentColor"></path>
                        </svg>
                        <div data-bn-type="text" class="css-oulcek">VK</div>
                    </a>
                </div>
            </div>

        </section>
    </div>
@endsection
