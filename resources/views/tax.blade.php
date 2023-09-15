@extends('components.layout')
@section('style')
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: "Arial", "sans-serif";
        }

        .tax-banner {
            background-color: rgb(12 14 17);
        }

        .tax-banner-title h3 {
            color: #fff;
            font-size: 3.75rem;
            line-height: 1;
            font-weight: 500;
        }

        .tax-banner-title p {
            color: #fff;
            font-weight: 400;
            margin: 2rem 0;
        }

        .tax-banner-title button {
            background-color: #FCD535;
            color: #1E2329;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            height: 48px;
            min-height: 48px;
            min-width: 80px;
            line-height: 24px;
            padding: 0 4rem;
        }

        .tax-banner-img img {
            width: 100%;
        }

        .tax-block1-title {
            margin: auto 0;
        }

        .tax-block1-title h4 {
            font-size: 3rem;
            line-height: 1;
            font-weight: 500;
        }

        .tax-block1-title p {
            color: rgb(112 122 138);
        }

        .tax-block1-img {
            margin: 0 auto;
            text-align: center
        }

        .tax-block2-content {
            display: flex;
            justify-content: space-around;
            gap: 1em 2rem;
        }

        .tax-block2-item {
            border-radius: 10px;
            flex: 1;
            padding: 2rem;
            background-color: rgb(250 250 250);
        }

        .tax-block2-item__step span {
            font-size: .875rem;
            line-height: 1.25rem;
            padding: 0.5rem;
            background-color: rgb(234 236 239);
            border-radius: 1.5rem;
        }

        .tax-block2-item__icon {
            margin: 1rem 0;
            text-align: center;
            background-color: rgb(237 201 79);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 64px;
            height: 64px;
        }

        .tax-block2-item__icon svg {
            width: 32px;
            height: 32px;
            color: #1E2329;
        }

        .tax-block2-item__title h5 {
            font-size: 1.5rem;
            line-height: 2rem;
            font-weight: 500;
        }

        .tax-block2-item__pra span {
            color: rgb(112 122 138);
        }

        .tax-block2-title {
            margin-bottom: 2rem;
        }

        .tax-block2-title h3 {
            font-size: 3rem;
            line-height: 1rem;
            font-weight: 700;
            padding: 0.5rem;
        }

        .tax-block2-title span {
            color: rgb(112 122 138);
            font-size: 0.875rem;
            line-height: 1.25rem;
            padding: 0.5rem;
            margin: 0.25rem 0;
        }

        .text-center h3 {
            font-size: 3rem;
            line-height: 1;
            font-weight: 500;
            padding: 1rem;

        }

        .tax-signup-pra {
            color: rgb(112 122 138);
            padding: 0.5rem;
        }

        .tax-signup-pra a {
            color: rgb(193 150 50);
            font-weight: 600;
            background-color: transparent;
        }

        .tax-signup .btn {
            background-color: #FCD535;
            height: 48px;
            min-height: 48px;
            min-width: 80px;
            padding: 0 4rem;
            margin-top: 1rem;
            color: #0B0E11;
        }

        .tax-content {
            transform: translateY(-2em);
            border-top-left-radius: 32px;
            border-top-right-radius: 32px;
            background-color: white;
        }
        .tax-block2-title{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .tax-signup{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .tax-block2-item:hover{
                box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5);
        }
        @media screen and (max-width: 768px) {
            .tax-banner-img {
                display: none;
            }

            .tax-banner-title {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .tax-banner-title h3 {
                font-size: 1.5rem;
                line-height: 2rem;
            }

            .tax-banner-title .btn {
                display: flex;
                padding-top: 0.7rem;
            }

            .tax-block1-title h4 {
                font-size: 1.5rem;
                line-height: 2rem;
                font-weight: 500;
                padding: 0;
            }

            .tax-content {
                padding: 3.5rem 0 !important;
            }

            .tax-block1__2 {
                display: flex;
                flex-direction: column-reverse;
            }
            .tax-block2-title h3{
                font-size: 1.5rem;
                line-height: 2rem;
                font-weight: 700;
            }
            .tax-block2-title span{
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
            .tax-block2-content{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .tax-signup h3{
                font-size: 1.5rem;
                line-height: 2rem;
                font-weight: 500;
            }
        }
    </style>
@endsection
@section('content')

    <section class="tax-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 tax-banner-title">
                    <h3>Ước tính thuế tiền mã hóa phát sinh từ Giao dịch trên Foxy mà không mất phí</h3>
                    <p>Binance Tax là trợ lý thuế dễ sử dụng và thân thiện với người dùng, giúp bạn hiểu rõ hơn gánh
                        nặng thuế tiềm ẩn của mình</p>
                    <button class="btn">Hãy bắt đầu</button>
                </div>
                <div class="col-md-6 tax-banner-img">
                    <img src="{{asset('img/tax/landing-banner.png')}}">
                </div>
            </div>
        </div>
    </section>
    <div class="py-7 tax-content">
        <div class="container">
            <section class="tax-block1 ">
                <div class="row">
                    <div class="col-md-6 tax-block1-title">
                        <h4>giải pháp miễn phí 100%</h4>
                        <p>Binance tax hoàn toàn miễn phí cho bất kỳ ai cần chuẩn bị thuế tiền mã hóa của họ. Tuyệt vời
                            hơn là bạn có thể bao gồm tối đa 100 nghìn giao dịch!</p>
                    </div>
                    <div class="col-md-6 tax-block1-img">
                        <img src="{{asset('img/tax/intro01.svg')}}">
                    </div>
                </div>
            </section>
            <section class="tax-block1 py-5">
                <div class="row tax-block1__2">
                    <div class="col-md-6 tax-block1-img">
                        <img src="{{asset('img/tax/intro02.svg')}}">
                    </div>
                    <div class="col-md-6 tax-block1-title">
                        <h4>Báo cáo thuế tiền mã hóa tùy chỉnh</h4>
                        <p>Nền tảng của chúng tôi nhập tất cả giao dịch của bạn và cung cấp thông tin tóm tắt về lợi
                            nhuận của bạn</p>
                    </div>
                </div>
            </section>
            <section class="tax-block2">
                <div class="tax-block2-title">
                    <h3>Cách hoạt động</h3>
                    <span>Bắt đầu dễ dàng với Binance Tax. Tính thuế cho bạn trong vài phút.</span>
                </div>
                <div class="tax-block2-content">
                    <div class="tax-block2-item">
                        <div class="tax-block2-item__step">
                            <span>Bước 1</span>
                        </div>
                        <div class="tax-block2-item__icon">
                            <svg class="bn-svg w-[32px] h-[32px]" size="64" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M13.5 3h-3v6.95l-.303-.003-4.159.04 5.975 5.976 5.975-5.975-4.176-.01-.312-.002V3zm-10 11h3v4h11v-4h3v7h-17v-7z"
                                      fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="tax-block2-item__title"><h5>Nhập giao dịch của bạn</h5></div>
                        <div class="tax-block2-item__pra"><span>Tất cả các giao dịch được tự động nhập khi bạn đăng nhập.</span>
                        </div>
                    </div>
                    <div class="tax-block2-item">
                        <div class="tax-block2-item__step">
                            <span>Bước 2</span>
                        </div>
                        <div class="tax-block2-item__icon">
                            <svg class="bn-svg w-[32px] h-[32px]" size="64" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z"
                                      fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="tax-block2-item__title"><h5>Xem lại các giao dịch của bạn</h5></div>
                        <div class="tax-block2-item__pra"><span>Nhận thông tin chi tiết về danh mục đầu tư tiền mã hóa của bạn. Nền tảng của chúng tôi giúp bạn dễ dàng tùy chỉnh mọi giao dịch.
</span>
                        </div>
                    </div>
                    <div class="tax-block2-item">
                        <div class="tax-block2-item__step">
                            <span>Bước 3</span>
                        </div>
                        <div class="tax-block2-item__icon">
                            <svg class="bn-svg w-[32px] h-[32px]" size="64" viewBox="0 0 25 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9 4h11.5v12a4 4 0 01-4 4H8a3.5 3.5 0 01-3.5-3.5V10H9V4zm0 8.5H7v4a1 1 0 102 0v-4zM11.758 7h6v2h-6V7zm6 4h-6v2h6v-2z"
                                      fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="tax-block2-item__title"><h5>Tạo báo cáo thuế của bạn</h5></div>
                        <div class="tax-block2-item__pra"><span>Bạn đã hoàn thành bài đánh giá? Chỉ cần nhấp vào và nhận báo cáo thuế trong vài phút. Hoàn thành!</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tax-signup py-4">
                <h3>Tham gia Foxy Tax</h3>
                <div><span>Hãy thử Binance Tax ngay hôm nay và nhận báo cáo thuế tiền mã hóa của bạn miễn phí và chỉ trong vài phút.</span>
                </div>
                <div class="tax-signup-pra">
                    <span>Bằng cách sử dụng Binance Tax, bạn xác nhận rằng bạn đã đọc và đồng ý với</span>
                    <a href="#">Điều khoản sử dụng của Foxy Tax</a> <span>và</span>
                    <a href="#">Miễn trừ trách nhiệm</a>
                </div>
                <button class="btn">Đăng kí ngay</button>
            </section>
            <style>

            </style>
        </div>
    </div>
@endsection
@section('script')
@endsection
