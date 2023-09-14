@extends('components.layout')
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", "sans-serif";
        }

        ul {
            margin: 0;
            padding: 0;
        }

        .assets_management-banner__title h1 {
            margin: 2rem 0;
            font-size: 48px;
            line-height: 56px;
            color: #1e2329;
            font-weight: 600;
        }

        .assets_management-banner__logo img {
            height: 38px;
        }

        .assets_management-banner__para p {
            font-size: 16px;
            line-height: 24px;
            color: #474d57;
            font-weight: 400;
            max-width: 90%;
        }

        .assets_management-block2 {
            margin: 3em 0;
        }

        .assets_management-block2 h1 {
            font-size: 40px;
            line-height: 48px;
            color: #1e2329;
            font-weight: 600;
        }
        .assets_management-block2__title h6 {
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 28px;
            color: #1e2329;
            padding-top: 0.5em;
        }
        .assets_management-block2--info {
            padding: 0.5em 0;
            border-bottom: 1px solid #e8e8e8;
            border-top: 1px solid #e8e8e8;
        }
        .assets_management-block2--info .collapse p {
            margin-left: 1em;
        }
        .assets_management-block3--info .info {
            margin: 1em 0;
        }
        .info__card {
            max-height: 6.5rem;
            padding: 1em 1em;
        }
        .info__card.active {
            border-left: 3px solid #F0B90B;
        }
        .info__card .img {
            width: 48px;
            height: 48px;
            margin-right: 1em;
        }
        .assets_management-block3--about__list {
            display: flex;
            gap: 2em;
            flex-wrap: wrap;
            align-items: center;
            -webkit-box-align: center;
            list-style: none;
            padding-left: 1em;
        }
        .assets_management-block3--about__list li::before {
            display: inline-block;
            content: "";
            width: 8px;
            height: 8px;
            background-color: #F0B90B;
            margin-right: 5px;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .assets_management-block3--about2 h6 {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 600;
            font-size: 24px;
            line-height: 32px;
            color: #1E2329;
        }
        .list-benefit .img {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: #03A66D;
            width: 1.25em;
            height: 1.25em;
            font-size: 1.25em;
            fill: #1E2329;
            fill: #03A66D;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 1em;
            height: 1em;
            margin-top: 0.125em;
            margin-right: 0.75em;
        }
        .list-benefit {
            margin: 1em 0;
        }
        .list-benefit li {
            list-style: none;
            display: flex;
            margin: 1em 0;
        }
        .list-benefit li p {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 400;
            font-size: 1em;
            line-height: 1.5em;
            color: #474d57;
        }
        .button--2 {
            display: none;
        }
        .button--4 {
            display: none;
        }
        .assets_management-block3--about2__button .btn {
            color: rgb(112, 122, 138);
        }
        .assets_management-block3--about2__button .btn.active {
            background-color: #EAECEF;
            color: rgb(112, 122, 138);
        }
        .assets_management-block4 h2 {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 600;
            font-size: 2.5em;
            line-height: 2.5em;
            color: #1E2329;
        }
        .content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            background-color: #FAFAFA;
            padding-left: 16px;
            padding-right: 16px;
            padding-top: 16px;
            padding-bottom: 16px;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 24px;
        }
        .assets_management-block5__left {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            position: relative;
            height: 54px;
            margin-top: 4px;
            margin-bottom: 0px;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            line-height: 1.6;
            border: 1px solid transparent;
            border-color: #EAECEF;
            border-radius: 4px;
            margin-top: 0;
            margin-bottom: 0;
            width: 100%;
            height: 48px;
            border-radius: 8px;
            padding-left: 8px;
            background-color: #FFFFFF;
            border: none;
        }
        .support {
            margin: 2rem 0;
            gap: 3rem;
        }
        .support .img {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: #929AA5;
            width: 1.5em;
            height: 1.5em;
            font-size: 1.5em;
            fill: #1E2329;
            fill: #929AA5;
            width: 1em;
            height: 1em;
        }
        .support span {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 500;
            font-size: 1em;
            line-height: 1.5em;
            color: #707A8A;
        }
        .assets_management-block5__left {
            /*width: 100%;*/
            margin: 0 2rem;
        }
        .assets_management-block5__left .btn {
            height: 2.813em;
            width: 6.75em;
            font-size: 1em;
            line-height: 1.5em;
            background-color: #FCD535;
        }
        .assets_management-block5__left #search {
            box-sizing: border-box;
            margin: 0 0 0 2rem;
            min-width: 0;
            height: 100%;
            color: #181717;
            font-style: normal;
            font-weight: 500;
            font-size: 1em;
            line-height: 1.5em;
            padding: 0;
            outline: none;
            border: none;
            background-color: inherit;
            opacity: 1;
        }
        .icon-search {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: #929AA5;
            width: 20px;
            height: 20px;
            font-size: 20px;
            fill: #1E2329;
            fill: #929AA5;
            cursor: auto;
            width: 1em;
            height: 1em;
            vertical-align: bottom;
            margin-right: 4px;
        }
        .assets_management-block5 h3 {
            font-size: 40px;
            line-height: 48px;
            font-style: normal;
            font-weight: 600;
            color: #1E2329;
        }
        .assets_management-block5 p {
            font-size: 16px;
            line-height: 24px;
            font-style: normal;
            font-weight: 400;
            color: #707a8a;
        }
        .img-icon {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            color: #929AA5;
            width: 24px;
            height: 24px;
            font-size: 24px;
            fill: #1E2329;
            fill: #929AA5;
            width: 1em;
            height: 1em;
        }
        .content span {
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            color: #707A8A;
        }
        .contact-form-btn{
            width: 15%;
            height: 10%;
            background-color: #FCD535;
            border-radius: 5px;
            color: #1E2329;
            text-align: center;
            margin-left: 84%;
        }
        .contact-form-input input{
            height: 50px;
        }
        .contact-form-content{
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 24px;
            color: #474D57;
        }
        .contact-form-content .title{
            box-sizing: border-box;
            margin: 0 0.5em 0 0;
            min-width: 0;
            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            margin-bottom: 24px;
            color: #474D57;
        }
        .assets_management-signup{
            box-sizing: border-box;
            margin: 0;
            min-width: 0;
            text-align: center;
        }
        .assets_management-signup h2{
            font-weight: 600;
            font-size: 40px;
            line-height: 48px;
            color: #1E2329;
        }
        .assets_management-signup a .btn{
            background-color: #FCD535;
            margin: 2em 1em;
            width: 12em;
            height: 3.5em;
            color: #181A20;
        }
        .assets_management-signup a .btn-signup{
            background-color: #EAECEF;
        }
        @media screen and (max-width: 768px) {
            .assets_management-banner__img {
                display: none;
            }

            .assets_management-block2 .img img {
                width: 100%;
            }
            .assets_management-block4 h2{
                font-size: 24px;
                line-height: 32px;
            }
            .assets_management-block5 h3{
                font-size: 24px;
                line-height: 12px;
            }
            .contact-form-btn{
                width: 100%;
                margin: 0;
            }
            .assets_management-signup a .btn{
                width: 100%;
                margin: 1em 0;
            }
            .assets_management-signup h2{
                font-size: 24px;
                line-height: 32px;
                font-weight: 600;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container my-5">
        <section class="assets_management-banner row">
            <div class="col-md-7 col-sm-12">
                <div class="assets_management-banner__logo">
                    <img src="{{asset('img/logo-light.svg')}}">
                </div>
                <div class="assets_management-banner__title">
                    <h1>Giải pháp quản lý tài sản</h1>
                </div>
                <div class="assets_management-banner__para">
                    <p>Khám phá các dịch vụ tài sản kỹ thuật số theo yêu cầu được Binance Institutional xây dựng cho các
                        nhà đầu tư và nhà quản lý tài sản sành sỏi, bao gồm các quỹ phòng hộ, văn phòng gia đình, nhà
                        cung cấp thanh khoản, công ty giao dịch độc quyền, nhà môi giới và nhiều đối tượng khác.</p>
                </div>
            </div>
            <div class="col-md-5 assets_management-banner__img">
                <img src="{{asset('img/banner-hero.svg')}}">
            </div>
        </section>
        <section class="row assets_management-block2">
            <div class="col-md-6 col-sm-12">
                <div class="img mx-auto">
                    <img src="{{asset('img/overview-2.svg')}}">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 ">
                <h1>Tất cả nhu cầu quản lý tài sản của bạn ở một nơi</h1>
                <div>
                    <ul class="list-group">
                        <div class="assets_management-block2--info">
                            <li class="list-group-item assets_management-block2__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                aria-controls="collapse1">
                                <div class="d-flex justify-content-between">
                                    <h6>Cấu trúc tài khoản tích hợp và linh hoạt</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse1">
                                <p>Tăng cường phân bổ tài sản và hiệu quả sử dụng vốn với cấu trúc tài khoản linh
                                    hoạt theo quyết định của bạn.</p>
                            </div>
                        </div>
                        <div class="assets_management-block2--info">
                            <li class="list-group-item assets_management-block2__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                aria-controls="collapse2">
                                <div class="d-flex justify-content-between">
                                    <h6>Thực hiện và quản lý lệnh</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse2">
                                <p>Thực hiện và quản lý đồng thời nhiều lệnh lớn từ nhiều tài khoản với hệ thống
                                    quản lý lệnh mạnh mẽ và các điểm cuối API.</p>
                            </div>
                        </div>
                        <div class="assets_management-block2--info">
                            <li class="list-group-item assets_management-block2__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                aria-controls="collapse3">
                                <div class="d-flex justify-content-between">
                                    <h6>Báo cáo và sao kê tài khoản</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse3">
                                <p>Tải về các báo cáo về lịch sử giao dịch và số dư tài khoản, đồng thời chia sẻ
                                    chúng với các bên liên quan bên ngoài.</p>
                            </div>
                        </div>
                        <div class="assets_management-block2--info">
                            <li class="list-group-item assets_management-block2__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                aria-controls="collapse4">
                                <div class="d-flex justify-content-between">
                                    <h6>Giám sát và quản lý rủi ro</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse4">
                                <p>Giám sát rủi ro tài khoản trong nháy mắt và điều chỉnh chiến lược giao dịch thời
                                    gian thực dựa trên khả năng chấp nhận rủi ro của bạn.</p>
                            </div>
                        </div>
                        <div class="assets_management-block2--info">
                            <li class="list-group-item assets_management-block2__title" style="border:none"
                                data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                aria-controls="collapse5">
                                <div class="d-flex justify-content-between">
                                    <h6>Đăng nhập tùy chỉnh và kiểm soát quyền</h6>
                                    <i class="fa-solid fa-chevron-up" style="margin-top: 10px"></i>
                                    <i class="fa-solid fa-chevron-down" style="margin-top: 10px;display: none"></i>
                                </div>
                            </li>
                            <div class="collapse" id="collapse5">
                                <p>Cải thiện bảo mật thông qua kiểm soát quyền và tùy chỉnh quyền truy cập cho các
                                    tài khoản phụ và người dùng khác nhau.</p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
        <section class="assets_management-block3 my-5">
            <h2>Giới thiệu các giải pháp quản lý tài sản Binance</h2>
            <div class="assets_management-block3--info row">
                <div class="info col-md-4 col-sm-12">
                    <div class="info__card active d-flex" data-id="1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13.5 7.5a4.5 4.5 0 10-9 0 4.5 4.5 0 009 0z"
                                  fill="url(#sub-account-g_svg__paint0_linear)"></path>
                            <path
                                d="M16 3h5v2h-5V3zM21 7h-5v2h5V7zM21 11h-5v2h5v-2zM3 18a4 4 0 014-4h4a4 4 0 014 4v3H3v-3z"
                                fill="#76808F"></path>
                            <defs>
                                <linearGradient id="sub-account-g_svg__paint0_linear" x1="9" y1="12" x2="9" y2="3"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="info__title">
                            <h6>Tài khoản phụ thông thường</h6>
                            <div class="info__para">
                                <p>Tách biệt vốn và quản lý rủi ro</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info col-md-4 col-sm-12">
                    <div class="info__card d-flex" data-id="2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3a3 3 0 110 6 3 3 0 010-6z"
                                  fill="url(#p2p-g_svg__paint0_linear)"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M17.5 13a3 3 0 100-6 3 3 0 000 6zM2 13a3 3 0 013-3h3a3 3 0 013 3v3H2v-3z"
                                  fill="#76808F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 17a3 3 0 013-3h3a3 3 0 013 3v3h-9v-3z"
                                  fill="url(#p2p-g_svg__paint1_linear)"></path>
                            <path d="M13 4V2h9v4h-2V4h-7zM11 22v-2H4v-2H2v4h9z" fill="#76808F"></path>
                            <defs>
                                <linearGradient id="p2p-g_svg__paint0_linear" x1="6.5" y1="9" x2="6.5" y2="3"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                                <linearGradient id="p2p-g_svg__paint1_linear" x1="17.5" y1="20" x2="17.5" y2="14"
                                                gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <div class="info__title">
                            <h6>Tài khoản phụ quản lý tài sản</h6>
                            <div class="info__para">
                                <p>Ủy thác tài khoản của bạn cho Người quản lý tài sản chuyên nghiệp</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info col-md-4 col-sm-12">
                    <div class="info__card d-flex" data-id="3">
                        <img src="{{asset('img/affiliates-g.svg')}}" class="img">
                        <div class="info__title">
                            <h6>Tài khoản phụ được quản lý</h6>
                            <div class="info__para">
                                <p>Đa dạng hóa danh mục đầu tư với nhiều nhóm giao dịch</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="assets_management-block3--about" id="section1">
                    <div class="row my-4 assets_management-block3--about1">
                        <div class="col-md-5 col-sm-12">
                            <div class="img">
                                <img src="{{asset('img/intro-1.svg')}}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <p>
                                Tạo nhiều tài khoản phụ để tách biệt tài sản và thực hiện các chiến lược giao dịch khác
                                nhau.
                                Theo dõi và quản lý các giao dịch một cách liền mạch thông qua trang tổng quan tài khoản
                                phụ.
                                Phù hợp với:
                            </p>
                            <ul class="assets_management-block3--about__list">
                                <li>
                                    Quỹ phòng hộ
                                </li>
                                <li>
                                    Văn phòng gia đình
                                </li>
                                <li>
                                    Nhà môi giới
                                </li>

                                <li>
                                    Nhà cung cấp thanh khoản
                                </li>
                                <li>
                                    Công ty giao dịch độc quyền và nhiều đối tượng khác
                                </li>
                            </ul>
                            <div class="button">
                                <a href="#" class="btn mx-2" style="background-color: #F0B90B;color: #1E2329">Đăng kí
                                    ngay</a>
                                <a href="#" class="btn mx-2" style="background-color: #EAECEF;color: #1E2329">Các câu
                                    hỏi thường
                                    gặp</a>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 assets_management-block3--about2">
                        <div class="col-md-6">
                            <h6>Các lợi ích chính</h6>
                            <ul class="list-benefit">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                         class="img">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <p>Mức phí giao dịch được chia sẻ và tất cả khối lượng giao dịch đều ảnh hưởng đến
                                        việc
                                        tính VIP</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                         class="img">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <p>Tách biệt tài sản giữa các tài khoản để bảo vệ vốn hiệu quả</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                         class="img">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <p>Trải nghiệm quản lý tài khoản phụ tất cả trong một toàn diện</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                         class="img">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                              fill="currentColor"></path>
                                    </svg>
                                    <p>Khả năng tạo với nhiều email và hỗ trợ đăng nhập giao diện người dùng</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="img">
                                <img src="{{asset('img/intro-1-benefits.svg')}}">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section>
                <div class="assets_management-block3--about d-none" id="section2">
                    <div class="row my-4 assets_management-block3--about1">
                        <div class="col-md-5 col-sm-12">
                            <div class="img">
                                <img src="{{asset('img/intro-2.svg')}}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <p>
                                Nhà đầu tư có thể ủy thác tài khoản cá nhân của mình cho một nhóm giao dịch doanh nghiệp
                                và trở thành tài khoản phụ của nhóm giao dịch đó. Cả nhà đầu tư và nhóm giao dịch đều có
                                thể đồng quản lý tài khoản. Phù hợp với:
                            </p>
                            <ul class="assets_management-block3--about__list">
                                <li>
                                    Cá nhân có giá trị tài sản ròng cao (HNWI)
                                </li>
                                <li>
                                    quỹ phòng hộ
                                </li>
                                <li>
                                    văn phòng gia đình
                                </li>
                                <li>
                                    người quản lý tài sản
                                </li>
                                <li>
                                    công ty giao dịch độc quyền và nhiều đối tượng khác
                                </li>
                            </ul>
                            <p>
                                Tính năng quản lý tài sản cho các tài khoản phụ dành riêng cho khách hàng VIP. Liên hệ
                                với người quản lý tài khoản của bạn hoặc gửi email tới vip@binance.com.
                            </p>
                            <div class="button">
                                <a href="#" class="btn mx-2" style="background-color: #EAECEF;color: #1E2329">Các câu
                                    hỏi thường
                                    gặp</a>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 assets_management-block3--about2">
                        <div class="col-md-6">
                            <h6>Các lợi ích chính</h6>
                            <div class="assets_management-block3--about2__button">
                                <button class="btn mx-2 active" id="button--1">Cho nhà đầu tư</button>
                                <button class="btn mx-2" id="button--2">Đối với đội ngũ giao dịch</button>
                            </div>
                            <div class="button--1">
                                <ul class="list-benefit">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Tận hưởng phí giao dịch giống như nhóm giao dịch</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Quyền sở hữu vốn chỉ thuộc về nhà đầu tư</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Xem số dư tài sản và lịch sử giao dịch bất kỳ lúc nào</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button--2">
                                <ul class="list-benefit">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Huy động vốn từ các nhà đầu tư và thực hiện nhiều chiến lược</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Tận dụng khối lượng giao dịch để tính mức VIP của nhóm giao dịch</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Tăng quy mô vốn và thu phí quản lý</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img">
                                <img src="{{asset('img/intro-2-benefits.svg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="assets_management-block3--about d-none" id="section3">
                    <div class="row my-4 assets_management-block3--about1">
                        <div class="col-md-5 col-sm-12">
                            <div class="img">
                                <img src="{{asset('img/intro-3.svg')}}">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <p>
                                Các nhà đầu tư có thể tạo nhiều tài khoản phụ được quản lý, phân bổ vốn cho các nhóm
                                giao dịch khác nhau và cải thiện đa dạng hóa vốn. Phù hợp với:
                            </p>
                            <ul class="assets_management-block3--about__list">
                                <li>
                                    Công ty
                                </li>
                                <li>
                                    quỹ phòng hộ
                                </li>
                                <li>
                                    văn phòng gia đình
                                </li>
                                <li>
                                    người quản lý tài sản
                                </li>
                                <li>
                                    công ty giao dịch độc quyền và nhiều đối tượng khác
                                </li>
                            </ul>
                            <p>
                                Tính năng quản lý tài sản cho các tài khoản phụ dành riêng cho khách hàng VIP. Liên hệ
                                với người quản lý tài khoản của bạn hoặc gửi email tới vip@binance.com.
                            </p>
                            <div class="button">
                                <a href="#" class="btn mx-2" style="background-color: #EAECEF;color: #1E2329">Các câu
                                    hỏi thường
                                    gặp</a>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 assets_management-block3--about2">
                        <div class="col-md-6">
                            <h6>Các lợi ích chính</h6>
                            <div class="assets_management-block3--about2__button">
                                <button class="btn mx-2 active" id="button--3">Cho nhà đầu tư</button>
                                <button class="btn mx-2" id="button--4">Đối với đội ngũ giao dịch</button>
                            </div>
                            <div class="button--3">
                                <ul class="list-benefit">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Xem số dư tài sản được quản lý và sổ rút tiền bất kỳ lúc nào</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Mức phí giao dịch được chia sẻ với tư cách là nhóm giao dịch</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Không xung đột với giao dịch tài khoản cá nhân của nhà đầu tư</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Phân bổ vốn vào các chiến lược khác nhau để đa dạng hóa danh mục đầu tư</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button--4">
                                <ul class="list-benefit">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Tận dụng khối lượng giao dịch để tính mức VIP của nhóm giao dịch</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Bảo vệ chiến lược giao dịch và lịch sử lệnh</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Huy động vốn từ các nhà đầu tư và thực hiện nhiều chiến lược</p>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             class="img">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <p>Tăng quy mô vốn và thu phí quản lý</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img">
                                <img src="{{asset('img/intro-3-benefits.svg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="assets_management-block4">
            <h2>Những đổi mới hàng đầu trong ngành tập trung vào doanh nghiệp</h2>
            <div class="assets_management-block4--info row">
                <div class="col-md-6">
                    <div class="img">
                        <img src="{{asset('img/da-cap.png')}}" width="70%" class="mx-5">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>
                        Là giải pháp phổ biến nhất trên thị trường về tài sản kỹ thuật số, Binance Fund Manager (Người
                        quản lý quỹ Binance) cho phép các tổ chức vận hành nhiều tài khoản pháp nhân liên kết khối lượng
                        giao dịch của họ và mở khóa nhiều lợi ích VIP hơn trên tất cả các tài khoản, bao gồm cả tài
                        khoản phụ. Với Binance Fund Manager (Người quản lý quỹ Binance), bạn sẽ trải nghiệm:
                    </p>
                    <ul class="list-benefit">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 class="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                      fill="currentColor"></path>
                            </svg>
                            <p>Đăng ký tài khoản liền mạch</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 class="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                      fill="currentColor"></path>
                            </svg>
                            <p>Kiểm soát tài khoản độc lập</p>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 class="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7.035 16.812l-.001.002 2.121 2.121.002-.002 2.121-2.12 9.19-9.192-2.12-2.121-9.191 9.19-3.536-3.534-2.121 2.12 3.535 3.536z"
                                      fill="currentColor"></path>
                            </svg>
                            <p>Tiếp cận các dịch vụ VIP cao cấp</p>
                        </li>
                    </ul>
                    <p>
                        Để kích hoạt Binance Fund Manager (Người quản lý quỹ Binance), vui lòng liên hệ với đại diện bán
                        hàng VIP của bạn hoặc gửi email đến vip@binance.com.
                    </p>
                    <div class="button">
                        <a href="#" class="btn mx-2" style="background-color: #EAECEF;color: #1E2329">Các câu
                            hỏi thường
                            gặp</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="assets_management-block5 my-5">
            <div class="row">
                <div class="col-md-6 content" style="margin-right: 2rem">
                    <h3>Bạn có thắc mắc?</h3>
                    <div class="assets_management-block5__left" style="width: 90%">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="icon-search">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z"
                                      fill="currentColor"></path>
                            </svg>
                        </div>
                        <input type="text" class="form-control" maxlength="50" id="search" name="search"
                               placeholder="Tìm">
                        <div>
                            <button class="btn" type="button">
                                Tìm
                            </button>
                        </div>
                    </div>
                    <div class="d-flex support">
                        <a href="" class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3 3h18v14h-9l-5 5v-5H3V3zm15 3H6v2.5h12V6zm0 5.5H6V14h12v-2.5z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Trò chuyện trực tiếp</span>
                        </a>
                        <a href="" class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Trung tâm Trợ giúp</span>
                        </a>
                    </div>

                </div>
                <div class="col-md-5 content">
                    <h3>Theo dõi chúng tôi</h3>
                    <p>Theo dõi chúng tôi trên mạng xã hội để nhận các bản cập nhật và tài nguyên VIP mới nhất!</p>
                    <div class="d-flex gap-3">
                        <a href="" class="d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img-icon">
                                <path
                                    d="M8.287 20.5c7.545 0 11.675-6.535 11.675-12.198 0-.181 0-.362-.01-.555A8.522 8.522 0 0022 5.527a8.284 8.284 0 01-2.363.68 4.323 4.323 0 001.81-2.379c-.791.499-1.67.85-2.612 1.042a3.967 3.967 0 00-2.992-1.37c-2.266 0-4.109 1.925-4.109 4.292 0 .34.044.657.109.974-3.404-.17-6.428-1.89-8.456-4.485a4.44 4.44 0 00-.552 2.164c0 1.483.726 2.797 1.82 3.567a3.982 3.982 0 01-1.853-.532v.057c0 2.072 1.42 3.816 3.285 4.201a3.806 3.806 0 01-1.084.148c-.26 0-.52-.023-.77-.08.52 1.71 2.038 2.945 3.837 2.98a7.995 7.995 0 01-5.094 1.834c-.326 0-.662-.011-.976-.057A11.183 11.183 0 008.287 20.5z"
                                    fill="currentColor"></path>
                            </svg>
                            <span>Twitter</span>
                        </a>
                        <a href="" class="d-flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="img-icon">
                                <path
                                    d="M19.663 3H4.327A1.32 1.32 0 003 4.306v15.398C3 20.424 3.597 21 4.327 21h15.336c.74 0 1.337-.576 1.337-1.296V4.306C21 3.586 20.403 3 19.663 3zM8.338 18.346H5.664V9.758h2.674v8.588zM7.001 8.575a1.54 1.54 0 01-1.543-1.543c0-.854.69-1.553 1.543-1.553.854 0 1.553.7 1.553 1.553 0 .854-.7 1.543-1.553 1.543zm11.335 9.771h-2.664V14.17c0-.997-.02-2.283-1.389-2.283-1.388 0-1.604 1.09-1.604 2.211v4.248h-2.664V9.758h2.561v1.172h.03c.36-.679 1.235-1.388 2.531-1.388 2.705 0 3.199 1.78 3.199 4.093v4.711z"
                                    fill="currentColor"></path>
                            </svg>
                            <span>LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-form row my-5">
            <div class="contact-form-content col-md-12">
                <span class="title contact-form-content__text">Liên hệ với chúng tôi</span>
                <span class="contact-form-content__text">Hãy cho chúng tôi biết nhu cầu của bạn</span>
            </div>
            <div class="d-flex gap-4 contact-form-input my-3 col-md-12">
                <input type="text" class="form-control" id="name" placeholder="Tên">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="contact-form-input my-3 col-md-12">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="contact-form-btn col-md-6">
                <button type="button" class="btn">Gửi</button>
            </div>

        </section>
        <section class="assets_management-signup my-4">
            <h2>Định hình lại cách quản lý tài sản kỹ thuật số với Binance</h2>
            <div>
                <a href="">
                    <button class="btn ">Đăng ký ngay</button>
                </a>
                <a href="">
                    <button class="btn btn-signup">Giao dịch ngay</button>
                </a>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.assets_management-block2__title').click(function () {
                $(this).find('i').toggle();
            });
            $('.info__card').click(function () {
                $('.info__card').removeClass('active');
                $(this).addClass('active');
                let id = $(this).data('id');
                $('.assets_management-block3--about').addClass('d-none');
                $('#section' + id).removeClass('d-none');
            });
            $('#button--1').click(function () {
                $('.button--1').show();
                $('.button--2').hide();
                $('#button--1').addClass('active');
                $('#button--2').removeClass('active');
            });
            $('#button--2').click(function () {
                $('.button--1').hide();
                $('.button--2').show();
                $('#button--2').addClass('active');
                $('#button--1').removeClass('active');
            });
            $('#button--3').click(function () {
                $('.button--3').show();
                $('.button--4').hide();
                $('#button--3').addClass('active');
                $('#button--4').removeClass('active');
            });
            $('#button--4').click(function () {
                $('.button--3').hide();
                $('.button--4').show();
                $('#button--4').addClass('active');
                $('#button--3').removeClass('active');
            });
        });
    </script>
@endsection
