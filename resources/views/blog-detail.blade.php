@extends('components.layout')
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", "sans-serif";
        }

        .title-page_h1 {
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 40px;
            color: #1e2329;
            margin: 0;
        }

        .title-page .img {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: #707A8A;
            width: 24px;
            height: 24px;
            font-size: 24px;
            fill: #1E2329;
            fill: #707A8A;
            width: 1em;
            height: 1em;
        }

        .title-page {
            padding: 1em 0;
        }

        .blog-detail--body__header {
            padding: 0 0 1em 0;
        }

        .blog-detail--body__header h1 {
            box-sizing: border-box;
            margin-bottom: 8px;
            color: #1E2329;
            font-size: 28px;
            font-weight: 600;
            line-height: 36px;
        }

        .blog-detail--body__header p {
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 24px;
            color: #707A8A;
        }

        .blog-detail--body__content img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .blog-detail--body__like {
            display: flex;
            flex-direction: column;
            align-items: self-start;
        }

        .blog-detail--body__like span {
            margin-left: 0.7em;
            font-size: 1em;
            font-weight: 600;
            line-height: 24px;
            color: #1E2329;
        }
        .blog-detail--body__like .like-img{
            width: 3em;
            height: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .blog-detail--body__like .like-img:hover {
            color: #F0B90B;
        }
        .blog-detail--body__like .like-img svg {
            width: 2em;
            height: 2em;
            padding: 0;
            margin: 0;
        }
        .blog-detail--body__like .like-img.active {
            border-radius: 50%;
            background-color: #F0B90B;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <section class="blog-detail--header">
            <a href="/blog">
                <div class="d-flex align-items-center title-page">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M11.934 12l3.89 3.89-1.769 1.767L8.398 12l1.768-1.768 3.89-3.889 1.767 1.768-3.889 3.89z"
                              fill="currentColor"></path>
                    </svg>
                    <h1 class="title-page_h1">Foxy Blog</h1>
                </div>
            </a>
        </section>
        <section class="blog-detail--body row my-5">
            <div class="col-md-9 px-5">
                <div class="blog-detail--body__header">
                    <div>
                        <h1>Binance to Airdrop up to $500,000 in BNB to Users in Libya to Support Flood Recovery</h1>
                    </div>
                    <div>
                        <p>2023-09-13</p>
                    </div>
                </div>
                <div class="blog-detail--body__content">
                    <div>
                        <img src="{{asset('img/5d1afb27-b858-44ec-9748-41ffa54bbdc5.jpg')}}" alt="">
                    </div>
                    <div>
                        <p>In response to the devastation caused by the recent floods in Libya, Binance will airdrop BNB
                            worth USD $100 to all Binance users who have completed Proof of Address (POA) in Libya.

                            Identification of the users will be based on POA completed before 11th September 2023 across
                            the country.

                            Users who have completed POA before 11th September 2023 will each receive $100 in BNB
                            directly in their Binance account. For any existing user who completes POA after 11th
                            September 2023 and before 30th September 2023, we will donate $25 in BNB directly to your
                            Binance account. Furthermore, all active transacting users across Libya will receive $10 in
                            BNB.

                            Funds will reach our users starting 13th September, 2023.

                            While the POA method has its limitations and inaccuracies, it is the best method we have
                            available for us to locate potentially impacted users. With a commitment of up to $500,000
                            in BNB, we expect to support around 13,000 users directly with these efforts.

                            In the aftermath of natural disasters, people often lose access to traditional banking at
                            the exact moment when extra funds are needed to help cover medical supplies, food and other
                            essential needs.

                            Crypto transfers are now increasingly being used to deliver financial aid to disaster
                            victims as they provide fast, low-cost, borderless and transparent transactions.

                            Binance Charity has also launched a public donation address for anyone to donate. For
                            everything we receive on this address, we will donate the total crypto amount to an
                            authorized NGO (to be named soon) to help people in need. Donations will be accepted in BNB,
                            BTC, ETH, USDC, USDT, or BUSD.

                            In these difficult times, Binance stands by our users and we will continue to work on
                            additional ways to help our community in Libya. Binance has also provided recent support to
                            users in Ukraine, Turkey and Morocco.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="blog-detail--body__like">
                   <div class="like-img">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" >
                           <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M8 9.723l3.444-3.391V3.01h.888a3.106 3.106 0 013.106 3.105v1.673H21v6.425a4.778 4.778 0 01-4.778 4.778H8V9.723zm-2-.038H3v9.306h3V9.685z"
                                 fill="currentColor"></path>
                       </svg>
                   </div>
                    <span class="count-like">525</span>
                </div>
                <div class="blog-detail--body__share my-5">
                    <h6>Share Posts</h6>
                    <div class="icon-share">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" cursor="pointer" class="css-1okhjks"><path d="M8.287 20.5c7.545 0 11.675-6.535 11.675-12.198 0-.181 0-.362-.01-.555A8.522 8.522 0 0022 5.527a8.284 8.284 0 01-2.363.68 4.323 4.323 0 001.81-2.379c-.791.499-1.67.85-2.612 1.042a3.967 3.967 0 00-2.992-1.37c-2.266 0-4.109 1.925-4.109 4.292 0 .34.044.657.109.974-3.404-.17-6.428-1.89-8.456-4.485a4.44 4.44 0 00-.552 2.164c0 1.483.726 2.797 1.82 3.567a3.982 3.982 0 01-1.853-.532v.057c0 2.072 1.42 3.816 3.285 4.201a3.806 3.806 0 01-1.084.148c-.26 0-.52-.023-.77-.08.52 1.71 2.038 2.945 3.837 2.98a7.995 7.995 0 01-5.094 1.834c-.326 0-.662-.011-.976-.057A11.183 11.183 0 008.287 20.5z" fill="currentColor"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" cursor="pointer" class="css-1okhjks"><path d="M22 12.07c0 5.013-3.659 9.178-8.437 9.94v-7.03h2.336l.437-2.91h-2.763v-1.89c0-.794.384-1.578 1.622-1.578h1.269V6.133s-1.152-.193-2.24-.193c-2.283 0-3.787 1.395-3.787 3.908v2.222H7.9v2.91h2.538v7.03A10.07 10.07 0 012 12.07C2 6.509 6.48 2 12.005 2 17.531 2 22 6.509 22 12.07z" fill="currentColor"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" cursor="pointer" class="css-1okhjks"><path d="M12 2C6.478 2 2 6.478 2 11.99 2 17.511 6.478 22 12 22s10-4.488 10-10.01C22 6.477 17.522 2 12 2zm4.925 6.28c-.064.927-1.78 7.857-1.78 7.857s-.107.405-.48.415a.644.644 0 01-.49-.192c-.395-.33-1.29-.97-2.132-1.556a.949.949 0 01-.107.096c-.192.17-.48.416-.789.714-.117.107-.245.224-.373.352l-.01.01a2.21 2.21 0 01-.193.171c-.415.341-.458.053-.458-.096l.224-2.441v-.021l.01-.022c.011-.032.033-.043.033-.043s4.36-3.88 4.477-4.296c.01-.021-.021-.043-.074-.021-.288.096-5.31 3.273-5.864 3.625-.032.02-.128.01-.128.01l-2.441-.8s-.288-.117-.192-.383c.021-.054.053-.107.17-.181.544-.384 10-3.785 10-3.785s.267-.085.427-.032c.074.032.117.064.16.17.01.043.021.128.021.224 0 .054-.01.118-.01.224z" fill="currentColor"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" cursor="pointer" class="css-1okhjks"><path d="M9.714 11.994c.575 0 1.044.469 1.044 1.044 0 .576-.469 1.045-1.044 1.045a1.046 1.046 0 01-1.045-1.045c0-.575.47-1.044 1.045-1.044zM12.005 16.022c.682 0 1.64-.16 2.088-.608a.28.28 0 01.384-.01.27.27 0 010 .383c-.714.714-2.067.768-2.472.768-.405 0-1.759-.054-2.472-.757a.27.27 0 010-.384.27.27 0 01.383 0c.448.448 1.407.608 2.089.608zM13.252 13.05c0-.576.468-1.045 1.044-1.045a1.06 1.06 0 011.044 1.044c0 .576-.469 1.044-1.044 1.044a1.046 1.046 0 01-1.044-1.044z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12.005 2.01c-5.52 0-9.995 4.475-9.995 9.995S6.485 22 12.005 22A9.989 9.989 0 0022 12.005c-.01-5.52-4.475-9.995-9.995-9.995zm5.797 11.327c.021.139.032.288.032.437 0 2.248-2.611 4.06-5.829 4.06-3.218 0-5.829-1.812-5.829-4.06 0-.15.01-.298.032-.437a1.447 1.447 0 01-.863-1.332 1.462 1.462 0 012.472-1.055c1.013-.735 2.408-1.193 3.964-1.236 0-.021.735-3.485.735-3.485 0-.063.043-.127.096-.16a.263.263 0 01.203-.042l2.419.522c.17-.34.522-.586.927-.586a1.04 1.04 0 011.044 1.044 1.04 1.04 0 01-1.044 1.045 1.033 1.033 0 01-1.034-.991l-2.174-.47-.66 3.123c1.534.053 2.909.522 3.9 1.236a1.453 1.453 0 012.472 1.044 1.48 1.48 0 01-.863 1.343z" fill="currentColor"></path></svg>
                    </div>
                </div>
                <style>
                    .blog-detail--body__share h6{
                        box-sizing: border-box;
                        margin: 0px 0px 32px;
                        min-width: 0px;
                        font-weight: 500;
                        font-size: 20px;
                        line-height: 28px;
                        color: rgb(30, 35, 41);
                    }
                    .blog-detail--body__share .icon-share svg{
                        box-sizing: border-box;
                        margin: 16px 24px 0px 0px;
                        min-width: 0px;
                        color: rgb(112, 122, 138);
                        font-size: 24px;
                        fill: rgb(112, 122, 138);
                        width: 1.5em;
                        height: 1.5em;
                    }
                </style>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.blog-detail--body__like .like-img').click(function () {
                $(this).toggleClass('active');
                if ($(this).hasClass('active')) {
                    let count = parseInt($('.count-like').text());
                    $('.count-like').text(count + 1);
                } else {
                    let count = parseInt($('.count-like').text());
                    $('.count-like').text(count - 1);
                }
            })
        })
    </script>
@endsection
