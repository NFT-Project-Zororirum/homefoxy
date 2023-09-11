@extends('components.layout')
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", "sans-serif";
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

        @media screen and (max-width: 768px) {
            .assets_management-banner__img {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container">
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
            <div class="col-md-6">
                <div class="img">
                    <img src="{{asset('img/overview-2.svg')}}">
                </div>
            </div>
            <div class="col-md-6">
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
        <section class="assets_management-block3">
            <h2>Giới thiệu các giải pháp quản lý tài sản Binance</h2>
            <div class="assets_management-block3--info row">
                <div class="info col-md-4 col-sm-12">
                    <div class="info__card active d-flex">
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
                    <div class="info__card d-flex">
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
                    <div class="info__card d-flex">
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
            <div class="assets_management-block3--about row">
                <div class="col-md-5 col-sm-12">
                    <div class="img">
                        <img src="{{asset('img/intro-3.svg')}}">
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <p>
                        Các nhà đầu tư có thể tạo nhiều tài khoản phụ được quản lý, phân bổ vốn cho các nhóm giao dịch khác nhau và cải thiện đa dạng hóa vốn. Phù hợp với:
                    </p>
                </div>
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
            });
        });
    </script>
@endsection
