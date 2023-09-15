@extends('components.layout')
@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Arial", "sans-serif";
        }

        .slide-blog__img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 2%;
        }

        .slide-blog__title {
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 56px;
            color: #1e2329;
        }

        .slide-blog {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-blog .card {
            border: none !important;
            /*margin-bottom: 4rem;*/
        }

        .list-item {
            font-size: 1rem;
            font-weight: 500;
            margin: 0 2rem;
        }

        .list-item a {
            color: #707a8a;
            line-height: 24px;
            font-size: 16px;
            font-weight: 500;
            font-style: normal;
        }

        .menu-category ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 0;
        }

        .menu-category li {
            list-style: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .menu-category li.active {
            color: #1e2329;
            background-color: #c9c9c9;
        }

        .menu-category li.active a {
            color: #1e2329;
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

        #search-icon, #search-icon-close {
            margin: auto;
            font-size: 20px;
            color: #707a8a;
            cursor: pointer;
        }

        #search-icon {
            margin-right: 15px;
        }

        #search-icon-close {
            font-size: 15px;
            margin-right: -10px;
        }

        #search-input {
            background-color: rgb(250, 250, 250);
            border: none;
        }

        #search-form {
            display: none;
            border-radius: 15px;
            padding: 5px 20px;
            background-color: rgb(250, 250, 250);
            position: absolute;
            top: 0;
            right: 0;
            width: 350px;
            z-index: 9999;
        }

        .title-page {
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 40px;
            color: #1e2329;
        }

        @media screen and (min-width: 768px) {
            .carousel-inner {
                margin: 3rem;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container my-4">
        <h1 class="title-page">Binance Blog</h1>
        <section class="slide-blog">
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
                                        <h1 class="card-title slide-blog__title">ForeverCR7: Bộ
                                            sưu tập NFT GOAT</h1>
                                        <p class="card-text">2023-07-06</p>
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
                                        <h1 class="card-title slide-blog__title">ForeverCR7: Bộ
                                            sưu tập NFT GOAT</h1>
                                        <p class="card-text">2023-07-06</p>
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
                                        <h1 class="card-title slide-blog__title">ForeverCR7: Bộ
                                            sưu tập NFT GOAT</h1>
                                        <p class="card-text">2023-07-06</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-category my-3">
            <div>
                <ul class="d-flex" style="position: relative;">
                    <li class="text-decoration-none mx-2 list-item active" data-id="1"><a href="#from-cz">From CZ</a>
                    </li>
                    <li class="text-decoration-none mx-2 list-item" data-id="2"><a href="#lanh-dao">Lãnh đạo</a></li>
                    <li class="text-decoration-none mx-2 list-item" data-id="3"><a href="#he-sinh-thai">Hệ sinh thái</a>
                    </li>
                    <li class="text-decoration-none mx-2 list-item" data-id="4"><a href="#cong-dong">Cộng đồng</a></li>
                    <li class="text-decoration-none mx-2 list-item" data-id="5"><a href="#thi-truong">Thị trường</a>
                    </li>
                    <li class="text-decoration-none mx-2 list-item" data-id="6"><a href="#p2p">P2P</a></li>
                    <li class="text-decoration-none mx-2 list-item" data-id="7"><a href="#thanh-toan">Thanh toán</a>
                    </li>
                    <li class="text-decoration-none mx-2 list-item" data-id="8"><a href="#tu-thien">Từ thiện</a></li>
                    <li class="text-decoration-none mx-2 list-item" data-id="9"><a href="#fantoken">Fantoken</a></li>
                    <li class="text-decoration-none mx-2 list-item" data-id="10"><a href="#futures">Futures</a></li>
                    <li class="text-decoration-none mx-2" data-id="11">
                        <form class="d-flex form-search" role="search">
                            <div id="search-container">
                                <i class="fa-solid fa-magnifying-glass" id="search-icon-open"></i>
                                <div id="search-form">
                                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                                    <input class="form-control me-2" id="search-input" type="search"
                                           placeholder="Search" name="search"
                                           aria-label="Search">
                                    <i class="fa-solid fa-circle-minus" id="search-icon-close"></i>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </section>
        <section class="card-blog">
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
            <div id="loading">
                loading...
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#search-icon-open').click(function () {
                $('#search-form').show().animate({width: '300px'}, 500);
                $(this).hide();
                $('#search-form').css({
                    'display': 'flex'
                })
            });

            $('#search-icon-close').click(function () {
                $('#search-form').animate({width: '0px'}, 500, function () {
                    $(this).hide();
                    $('#search-icon-open').show();
                });
            });
        });
        $('.list-item').on('click', function () {
            $('.list-item').removeClass('active');
            $(this).addClass('active');
            let id = $(this).data('id');
            console.log(id);
        });

        let postCount = 0;
        let loadMoreThreshold = 400;
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() > $(document).height() - loadMoreThreshold) {
                loadMorePosts();
            }
        });
        function loadMorePosts() {
            postCount++
            $('#loading').show();
            let html = `
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
`;
            if (postCount < 5) {
                $('.card-blog').append(html);
            }
            $('#loading').hide();
            // $.ajax({
            //     type: "GET",
            //     url: "/getMorePosts",
            //     data: {
            //         'offset': postCount
            //     },
            //     success: function (data) {
            //         let html = `
            //          <a href="/blog/test">
            //     <div class="card mb-3">
            //         <img
            //             src="https://khoinguonsangtao.vn/wp-content/uploads/2022/08/anh-thien-nhien-dep-nhat-the-gioi-troi-tim.jpg"
            //             class="card-img-top blog-img" alt="...">
            //         <div class="card-body">
            //             <h5 class="card-title card-blog__title">Giao dịch P2P an toàn: Luôn an toàn nhờ các mẹo và cảnh
            //                 báo
            //                 rủi ro thiết</h5>
            //             <p class="card-text card-blog__text">Tính năng mới trên Binance P2P được thiết kế để giúp bạn
            //                 luôn
            //                 an toàn và bảo
            //                 mật. Đừng bao giờ bỏ qua các cảnh báo rủi ro được thiết kế riêng cho bạn!</p>
            //             <p class="card-text card-blog__texttime">2023-08-18</p>
            //         </div>
            //     </div>
            // </a>
            //         `;
            //         $('.card-blog').append(data);
            //         postCount += 5;
            //         $('#loading').hide();
            //     },
            //     error: function () {
            //         $('#loading').hide();
            //     }
            // });
        }

    </script>
@endsection
