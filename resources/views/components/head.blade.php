<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logoIcon/favicon.png')}}">
    <link href="{{asset('css/frontend/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontends/default/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontends/default/css/responsive.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900%7CCaveat"
          media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @yield('style')
    <style>
        .set-color {
            background: #FAFAFA;
        }

        @media (min-width: 767px) {
            .title-icon {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .img-icon {
                display: none;
            }
            .dropdown-toggle::after {
                border-right: .3em solid transparent;
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
            }

            .title-icon {
                width: 30px;
            }

            .description {
                display: none;
            }



            .link-mobile .nav-link {
                font-size: 16px !important;
            }

            .dropdown-menu {
                margin: 0 15% 0 15%;
                padding: 0;
            }
            .mein-menu .navbar #navbarNavDropdown ul.navbar-nav {
                 height: 100vh !important;
                overflow: auto;
            }


        }

        .img-icon
    </style>
</head>
