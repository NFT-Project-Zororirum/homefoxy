@extends('components.layout')
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", "sans-serif";
            font-style: normal;
        }

        .affiliate-banner {
            background-image: url("{{asset('img/affiliate/bg 1.png')}}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            /*padding: 100px 0;*/
        }

        .affiliate-banner-content h1 {
            min-height: 1.2em;
            font-size: 48px;
            font-weight: 500;
            color: #FFFFFF;
        }

        .affiliate-banner-content p {
            font-size: 16px;
            margin-top: 16px;
            opacity: 0.8;
            color: #FFFFFF;
        }

        .affiliate-banner-content .btn {
            user-select: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            margin-top: 48px;
            line-height: 20px;
            color: #181A20;
            border-radius: 4px;
            min-height: 24px;
            min-width: 52px;
            padding: 6px 120px;
            height: 48px;
            background-color: #FCD535;
            display: inline-flex;
            align-items: center;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            align-items: center;
        }

        .affiliate-activity-title h3 {
            font-weight: 600;
            font-size: 32px;
            line-height: 40px;
            color: #1E2329;
        }

        .affiliate-activity-title span {
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #474D57;
            margin-top: 16px;
        }

        .affiliate-activity-item {
            display: flex;
            flex-direction: column;
            color: #1E2329;
            width: 19rem;
            padding: 24px;
        }

        .affiliate-activity-content {
            display: flex;
            flex-wrap: wrap;
        }

        .affiliate-activity-item__number {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #FCD535;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 16px;
            font-size: 20px;
            font-weight: 600;
        }

        .affiliate-activity-item__title {
            margin: 1rem 0;
        }

        .affiliate-activity-item__title span {
            font-size: 16px;
            color: #1E2329;
            font-weight: 550;
        }

        .affiliate-activity-item__content span {
            font-size: 14px;
            color: #474D57;
            margin: 2rem 0;
            line-height: 1.3;
        }

        .btn {
            user-select: none;
            cursor: pointer;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            justify-content: center;
            text-decoration: none;
            outline: none;
            font-family: inherit;
            word-break: keep-all;
            text-align: center;
        }

        .affiliate-activity-item .btn {
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            line-height: 20px;
            min-width: 60px;
            color: #181A20;
            border-radius: 4px;
            min-height: 24px;
            background-color: #FCD535;
            margin: 2rem 0;
            width: 54%;
        }

        .affiliate-interest h3 {
            font-weight: 600;
            font-size: 32px;
            line-height: 40px;
            color: #1E2329;
            margin: 1rem 0;
        }

        .affiliate-interest span {
            color: #707A8A;
            font-size: 14px;
        }

        .affiliate-interest a {
            color: #F0B90B;
            -webkit-text-decoration: none;
            text-decoration: none;
            word-break: break-all;
        }

        .affiliate-interest .btn {
            margin: 2rem 0;
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            min-width: 60px;
            color: #181A20;
            border-radius: 4px;
            min-height: 24px;
            background-color: #FCD535;
        }

        .affiliate-rose-title {
            font-size: 32px;
            line-height: 40px;
            color: #1E2329;
            font-weight: 600;
            margin: 1rem 0 6rem 0;
        }

        .affiliate-rose-item {
            box-sizing: border-box;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #707A8A;
            margin: 3rem 0;
        }

        .affiliate-rose-item__left {
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #707A8A;
        }

        .affiliate-rose-item__right {
            color: #1E2329;
            font-size: 16px;
            line-height: 24px;
        }

        .affiliate-rose {
            padding: 48px 0;
        }

        .affiliate-benefit-item {
            width: 25%;
            padding: 24px;
        }

        .affiliate-benefit-item img {
            width: 64px;
            height: 64px;
        }

        .affiliate-benefit-item h6 {
            font-size: 16px;
            line-height: 24px;
            color: #1E2329;
            font-weight: 500;
            margin: 1rem 0;
        }

        .affiliate-benefit-item span {
            font-size: 14px;
            color: #474D57;
        }

        .affiliate-benefit-item a span {
            color: #F0B90B;
        }
        .affiliate-question{
            padding: 48px 0;
        }
        .affiliate-question-item {
            cursor: pointer;
            width: 50%;
            padding: 24px;
            border-radius: 4px;
        }

        .affiliate-question-item.active {
            background-color: #F5F5F5;

        }

        .affiliate-question-item:hover {
            background-color: #F5F5F5;
        }

        .affiliate-question-item.active i {
            color: #F0B90B;
        }

        .affiliate-question-item:hover i {
            color: #F0B90B;
        }
        .affiliate-question-title,.affiliate-benefit-title{
            font-weight: 600;
            font-size: 32px;
            line-height: 40px;
            color: #1E2329;
        }
        .affiliate-question-orther span{
            font-size: 20px;
            margin: 0;
            min-width: 0;
            min-height: 1.2em;
            text-align: left;
            color: #1E2329;
        }
        .affiliate-question-orther a span{
            color: #F0B90B;
            text-decoration: none;
        }
        .affiliate-signup{
            padding: 80px 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .affiliate-signup h3{
            font-size: 32px;
            line-height: 40px;
            font-weight: 600;
        }
        .affiliate-signup .btn{
            margin: 4em 0;
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            min-width: 60px;
            color: #181A20;
            border-radius: 4px;
            min-height: 24px;
            background-color: #FCD535;
        }
        @media screen and (max-width: 768px) {
            .affiliate-banner {
                background-color: #0B0E11;
                background-image: none;
                margin: 0;
                padding: 0;
            }

            .affiliate-banner-content h1 {
                font-size: 20px;
                font-weight: 550;
            }

            .affiliate-banner-content p {
                font-size: 16px;
                opacity: 0.8;
            }

            .affiliate-banner-content .btn {
                margin-top: 24px;
                font-size: 14px;
                width: 100%;
                justify-content: center;
            }

            .affiliate-activity-title h3 {
                font-size: 24px;
                line-height: 32px;
            }

            .affiliate-activity-title span {
                font-size: 14px;
                line-height: 20px;
            }

            .affiliate-activity-item {
                width: 100%;
                padding: 16px;
            }

            .affiliate-activity-item .btn {
                width: 42%;
            }
            .affiliate-question-title, .affiliate-benefit-title{
                font-size: 24px;
                line-height: 32px;
            }
            .affiliate-benefit-content{
                flex-direction: column;
            }
            .affiliate-benefit-item{
                width: 100%;
                padding: 0 16px;
                border-radius: 8px;
            }
            .affiliate-question-content{
                flex-direction: column;
            }
            .affiliate-question-item{
                width: 100%;
                padding: 16px;
                /*border-radius: 8px;*/
            }
            .affiliate-question-orther span{
                text-align: left;
                font-size: 14px;
                color: #1E2329;
            }
            .affiliate-question {
                padding: 24px 0;
            }
            .affiliate-signup h3{
                font-size: 24px;
                line-height: 30px;
            }
            .affiliate-signup .btn{
                margin: 3em 0;
                font-size: 14px;
                width: 100%;
                justify-content: center;
            }
            .affiliate-signup{
                padding: 30px 0;
            }
            .affiliate-interest h3{
                font-size: 24px;
                line-height: 30px;
                font-weight: 500;
            }
            .affiliate-interest{
                padding: 0!important;
            }
            .affiliate-interest .btn{
                width: 100%;
                justify-content: center;
            }
            .affiliate-rose{
                padding:0 !important;
            }
            .affiliate-rose-title{
                font-size: 24px;
                line-height: 30px;
                font-weight: 600;
                margin: 0;
            }
            .affiliate-rose-item{
                flex-direction: column;
                width: 100%;
                gap:5px!important;
                margin: 1.5em 0;
            }
            .affiliate-rose-item__left
            {
               width: 100%;
            }
            .affiliate-benefit-item img{
                width: 48px;
                height: 48px;
            }
            .affiliate-activity-title{
                margin: 0 !important;
            }
        }
    </style>
@endsection
@section('content')
    <section class="affiliate-banner">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <div class="affiliate-banner-content">
                        <h1>Tham gia Chương trình Foxy Affiliate Program</h1>
                        <p>Kiếm tiền từ lượng người truy cập và nhận hoa hồng tiền mã hóa khi bạn chia sẻ Foxy với
                            khán giả của mình. Người sáng tạo nội dung, người có tầm ảnh hưởng và các nền tảng có thể
                            kiếm hoa hồng và phần thưởng đặc biệt từ mỗi giao dịch trên Foxy Spot, Futures, Margin
                            Trading hoặc thậm chí là Foxy Pool.</p>
                        <a href="#" class="btn">Trở thành Đối tác tiếp thị liên kết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="affiliate-activity my-3">
            <div class="affiliate-activity-title my-5">
                <h3>Chương trình Foxy Affiliate Program hoạt động như thế nào?</h3>
                <span>Giới thiệu Foxy với khán giả. Kiếm hoa hồng bằng tiền mã hóa.</span>
            </div>
            <div class="affiliate-activity-content">
                <a href="#">
                    <div class="affiliate-activity-item">
                        <div class="affiliate-activity-item__number">
                            <span>01</span>
                        </div>
                        <div class="affiliate-activity-item__title">
                            <span>Đăng ký trở thành đối tác tiếp thị liên kết</span>
                        </div>
                        <div class="affiliate-activity-item__content">
                            <span>Nộp đơn đăng ký bằng cách điền vào biểu mẫu bên dưới. Đội ngũ của chúng tôi sẽ đánh giá đơn đăng ký của bạn và đảm bảo bạn đáp ứng các tiêu chí về đối tác tiếp thị liên kết.</span>
                        </div>
                        <button class="btn">Gửi biếu mẫu</button>
                    </div>
                </a>
                <div class="affiliate-activity-item">
                    <div class="affiliate-activity-item__number">
                        <span>02</span>
                    </div>
                    <div class="affiliate-activity-item__title">
                        <span>Tạo và chia sẻ liên kết giới thiệu</span>
                    </div>
                    <div class="affiliate-activity-item__content">
                        <span>Tạo, quản lý và theo dõi hiệu quả hoạt động của các liên kết giới thiệu ngay từ tài khoản Foxy.</span>
                    </div>

                </div>
                <div class="affiliate-activity-item">
                    <div class="affiliate-activity-item__number">
                        <span>03</span>
                    </div>
                    <div class="affiliate-activity-item__title">
                        <span>Nhận tới 50% hoa hồng</span>
                    </div>
                    <div class="affiliate-activity-item__content">
                        <span>Khi người dùng tạo tài khoản qua liên kết giới thiệu của bạn, bạn sẽ nhận được hoa hồng từ mỗi giao dịch họ thực hiện.</span>
                    </div>

                </div>
            </div>
        </section>
        <section class="affiliate-interest py-4">
            <h3>Quyền lợi hoa hồng của Chương trình Foxy Affiliate Program</h3>
            <div><span>Xem quy định chi tiết hơn của chương trình tiếp thị liên kết. <a
                        href="#">Quy định cụ thể</a></span></div>
            <button class="btn">Tham gia ngay</button>
        </section>
        <section class="affiliate-rose">
            <h3 class="affiliate-rose-title">Nhận thêm hoa hồng</h3>
            <div class="affiliate-rose-content">
                <div class="d-flex flex-wrap gap-4 affiliate-rose-item">
                    <div class="w-20 affiliate-rose-item__left"><span>Hoa hồng Spot</span></div>
                    <span class="affiliate-rose-item__right">Tới 50%</span>
                </div>
                <div class="d-flex flex-wrap gap-4 affiliate-rose-item">
                    <div class="w-20 affiliate-rose-item__left"><span>Hoa hồng Hợp đồng tương lai</span></div>
                    <span class="affiliate-rose-item__right">30%</span>
                </div>
                <div class="d-flex flex-wrap gap-4 affiliate-rose-item">
                    <div class="w-20 affiliate-rose-item__left"><span>Hoa hồng Foxy Pool</span></div>
                    <span class="affiliate-rose-item__right">30%</span>
                </div>
                <div class="d-flex flex-wrap gap-4 affiliate-rose-item">
                    <div class="w-20 affiliate-rose-item__left"><span>Yêu cầu tối thiểu</span></div>
                    <span class="affiliate-rose-item__right">Tài khoản mạng xã hội phải có 5000 người theo dõi hoặc cộng đồng giao dịch phải có 500 thành viên</span>
                </div>
                <div class="d-flex flex-wrap gap-4 affiliate-rose-item">
                    <div class="w-20"><span>Điều kiện</span></div>
                    <span class="affiliate-rose-item__right">Chỉ những người dùng đủ điều kiện mới được tham gia sau khi nộp đơn đăng ký</span>
                </div>
            </div>
        </section>
        <section class="affiliate-benefit">
            <h2 class="affiliate-benefit-title">Các lợi ích của Chương trình Affiliate Program</h2>
            <div class="affiliate-benefit-content d-flex gap-4">
                <div class="affiliate-benefit-item">
                    <img src="{{asset('img/affiliate/1.jpg')}}" alt="">
                    <h6>Chương trình nội dung độc quyền</h6>
                    <div>
                        <span>Kiếm BUSD mỗi tháng và phần thưởng đăng ký đặc biệt cho khán giả của bạn khi bạn tạo nội dung chất lượng. </span>
                        <a href="#"><span>Tìm hiểu thêm</span></a>
                    </div>
                </div>
                <div class="affiliate-benefit-item">
                    <img src="{{asset('img/affiliate/2.jpg')}}" alt="">
                    <h6>Nhiều phần thưởng hơn</h6>
                    <div>
                        <span>Nhận tiền thưởng lên đến 72.000 USD/tháng dựa trên tổng số phí mà người dùng Futures bạn giới thiệu đã trả.</span>

                    </div>
                </div>
                <div class="affiliate-benefit-item">
                    <img src="{{asset('img/affiliate/3.jpg')}}" alt="">
                    <h6>Thanh toán thuận tiện</h6>
                    <div>
                        <span>Được thanh toán khi có người mua lần đầu tiên, không có hạn mức giới thiệu và áp dụng hoa hồng trọn đời đối với giới thiệu Spot.</span>
                    </div>
                </div>
                <div class="affiliate-benefit-item">
                    <img src="{{asset('img/affiliate/4.jpg')}}" alt="">
                    <h6>Nhà quản lý tài khoản riêng</h6>
                    <div>
                        <span>Được quyền tiếp cận dịch vụ hỗ trợ chuyên nghiệp, hướng dẫn, tài liệu tiếp thị và nhà quản lý Foxy Affiliate riêng.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="affiliate-question">
            <h3 class="affiliate-question-title">Câu hỏi thường gặp về tiếp thị liên kết</h3>
            <div class="affiliate-question-content d-flex flex-wrap">
                <div class="affiliate-question-item" data-bs-toggle="collapse" href="#affiliate-question-content__item1"
                     role="button"
                     aria-expanded="false"
                     aria-controls="affiliate-question-content__item1">
                    <div class="d-flex gap-4 affiliate-question-content__item">
                        <div>
                            <i class="fa-solid fa-circle-plus"></i>
                            <i class="fa-solid fa-circle-minus" style="display: none"></i>
                        </div>
                        <div>
                            <span>Chương trình Foxy Affiliate Program là gì?</span>
                        </div>
                    </div>
                    <div class="collapse" id="affiliate-question-content__item1">
                        <p>Chương trình Foxy Affiliate Program cho phép bạn tạo liên kết giới thiệu duy nhất để mời
                            cộng
                            đồng đăng ký và giao dịch trên Foxy. Nếu có bất kỳ ai bấm vào liên kết này và đăng ký, họ
                            sẽ
                            tự động được tính vào danh sách giới thiệu của bạn. Bạn sẽ nhận được hoa hồng từ mỗi giao
                            dịch
                            mà họ thực hiện, dù là giao dịch Foxy Spot, Futures hay Margin hoặc thậm chí là Foxy
                            Pool.</p>
                    </div>
                </div>
                <div class="affiliate-question-item" data-bs-toggle="collapse" href="#affiliate-question-content__item2"
                     role="button"
                     aria-expanded="false"
                     aria-controls="affiliate-question-content__item2">
                    <div class="d-flex gap-4 affiliate-question-content__item">
                        <div>
                            <i class="fa-solid fa-circle-plus"></i>
                            <i class="fa-solid fa-circle-minus" style="display: none"></i>
                        </div>
                        <div>
                            <span>Yêu cầu để trở thành Đối tác tiếp thị liên kết Foxy là gì?</span>
                        </div>
                    </div>
                    <div class="collapse" id="affiliate-question-content__item2">
                        <div>
                            <p>Cá nhân</p>
                            <p>Người có sức ảnh hưởng trên mạng xã hội có hơn 5.000 người theo dõi hoặc người đăng ký
                                trên một hoặc nhiều nền tảng mạng xã hội (YouTube, Twitter, Facebook, Instagram)</p>
                            <p>Cộng đồng tiền mã hóa</p>
                            <p>Những người đi đầu trong giới tài chính hoặc những người dẫn dắt dư luận trong cộng đồng
                                hơn 500 thành viên trên một hoặc nhiều nhóm cộng đồng (Telegram, Facebook, WeChat,
                                Reddit, QQ, VK)</p>
                            <p>Doanh nghiệp/Tổ chức</p>
                            <p>Lượng người dùng hơn 2.000 người</p>
                            <p>Nền tảng phân tích thị trường có hơn 5.000 lượt truy cập mỗi ngày</p>
                            <p>Nền tảng truyền thông của ngành</p>
                            <p>Quỹ tiền mã hóa</p>
                            <p>Nền tảng giao dịch tổng hợp</p></div>
                    </div>
                </div>
                <div class="affiliate-question-item" data-bs-toggle="collapse" href="#affiliate-question-content__item3"
                     role="button"
                     aria-expanded="false"
                     aria-controls="affiliate-question-content__item3">
                    <div class="d-flex gap-4 affiliate-question-content__item">
                        <div>
                            <i class="fa-solid fa-circle-plus"></i>
                            <i class="fa-solid fa-circle-minus" style="display: none"></i>
                        </div>
                        <div>
                            <span>Làm cách nào để kiếm tiền thưởng lên đến 72.000 USD/tháng?</span>
                        </div>
                    </div>
                    <div class="collapse" id="affiliate-question-content__item3">
                        <p>Ngoài việc kiếm được 30% hoa hồng, những Đối tác tiếp thị liên kết quảng bá giao dịch Futures
                            giờ có thể nhận được khoản tiền thưởng lên đến 72.000 USD dựa trên các khoản phí từ những
                            người mà họ giới thiệu chi trả trong khoảng thời gian 1 tháng. Ví dụ, nếu người mà bạn giới
                            thiệu phát sinh phí giao dịch tương đương 15.000 USD trong khoảng thời gian 1 tháng, thì
                            ngoài hoa hồng giới thiệu tiêu chuẩn ra, bạn sẽ được nhận thêm phần thưởng 1.500 USD. Người
                            mà bạn giới thiệu phát sinh càng nhiều phí giao dịch thì phần thưởng bạn nhận được càng
                            lớn.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="affiliate-question-orther">
            <div>
                <span>Bạn có câu hỏi khác? Hãy xem phần </span>
                <a href="#"><span>Hướng dẫn chương trình tiếp</span></a>
                <span> thị liên kết của chúng tôi để có thêm câu trả lời.</span>
            </div>
        </section>
        <section class="affiliate-signup">
                <h3>Quảng bá Foxy. Nhận thưởng. Quá đơn giản đúng không?</h3>
                <a href="#" class="btn">Trở thành đối tác tiếp thị liên kết của Foxy</a>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.affiliate-question-item').click(function () {
                $(this).find('i').toggle();
                $(this).toggleClass('active');
            })
        })
    </script>
@endsection
