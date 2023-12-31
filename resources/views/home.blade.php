@extends('components.layout')
@section('style')
    <style>
        .ptb70 {
            padding: 70px 0;
        }

        .markets-container {
            position: relative;
            overflow: hidden;
            height: 159px;
            border: 1px solid rgba(0, 0, 0, 0.02);
            box-shadow: 0 2px 16px 0 rgba(0, 0, 0, 0.04);
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .markets-content span.green,
        .markets-content span.red {
            position: absolute;
            right: 0;
            background: #26a69a;
            color: #fff;
            top: 15px;
            padding: 3px 12px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            font-weight: 600;
        }

        #dark .markets-content h2,
        #dark .markets-content p {
            color: #ffffff;
        }

        #dark .markets-content span.green,
        #dark .markets-content span.red {
            color: #fff;
        }

        .markets-content span.red {
            background: #ef5350;
        }

        .markets-content h2 {
            font-size: 14px;
            top: 14px;
            position: absolute;
            left: 15px;
            color: #4a4a4a;
        }

        .markets-content p {
            position: absolute;
            top: 32px;
            left: 15px;
            font-size: 16px;
        }
        .markets-chart {
            position: absolute;
            top: 40px;
            width: 100%;
            left: 0;
        }

        #dark .markets-pair-list .nav {
            background: #1c2030;
        }

        #dark .markets-pair-list .nav-link.active,
        #dark #STAR i {
            color: #ffffff;
        }

        #dark thead th,
        #dark .markets-pair-list .nav-link {
            color: #4f5966;
        }

        #dark .markets-pair-list .load-more {
            border: 1px solid #2a2e39;
            color: #ffffff;
        }

        #dark .markets-pair-list .load-more:hover {
            color: #fff;
            border: 1px solid #007bff;
        }.markets-pair-list tr {
             cursor: pointer;
         }

        .markets-pair-list th,
        .markets-pair-list td {
            padding: 15px !important;
            width: 16%;
            font-size: 14px;
        }

        .markets-pair-list tbody tr td i {
            color: #75869696;
        }

        .markets-pair-list .nav-link.active {
            color: #007bff;
            background: transparent;
        }

        .markets-pair-list .nav-link {
            color: #4a4a4a;
        }

        .markets-pair-list .nav {
            background: #f5f9fc;
            padding: 7px 0;
        }

        .markets-pair-list th {
            font-weight: 400;
        }

        .markets-pair-list td img {
            width: 18px;
            vertical-align: text-top;
            margin-right: 5px;
        }

        .markets-pair-list .load-more {
            border: 1px solid #e0e3eb;
            display: inline-block;
            padding: 11px 30px 8px;
            color: #4a4a4a;
            margin-top: 50px;
            transition: 0.3s;
        }

        .markets-pair-list .load-more i {
            margin-left: 10px;
        }
        .green {
            color: #26de81;
        }

        .red {
            color: #ff231f;
        }

        .markets-pair-list .load-more:hover {
            background: #007bff;
            color: #fff;
            border: 1px solid #007bff;
        }
        #dark .wallet .nav-pills a,
        #dark .wallet-history {
            border-top: 1px solid #2a2e39;
        }

        #dark .wallet .nav {
            background: #1e222d;
        }

        #dark .wallet h2,
        #dark .wallet h3,
        #dark .wallet h4,
        #dark .wallet p {
            color: #ffffff;
        }

        #dark .wallet button.green,
        #dark .wallet button.red,
        #dark .wallet .nav-pills a.active h2,
        #dark .wallet .nav-pills a.active h3,
        #dark .wallet .nav-pills a.active p {
            color: #ffffff;
        }
        .settings .wallet .nav-pills img {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }

        .settings .wallet .nav-pills h2 {
            margin-bottom: 0;
            line-height: 1;
            color: #18214d;
            font-size: 22px;
        }

        .settings .wallet .nav-pills p {
            margin-bottom: 0;
            color: #18214d;
        }

        .settings .wallet .nav-pills a.active {
            background: #0f7dff;
        }

        .settings .wallet .nav-pills a {
            border-top: 1px solid #f0f3fa;
            padding: 15px;
        }

        .settings .wallet .nav-pills a:first-child,
        .settings-nav .nav-link:first-child {
            border-top: 0;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .settings .wallet .nav-pills a:last-child,
        .settings .settings-nav .nav-link:last-child {
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .settings .wallet .nav-pills h3 {
            color: #18214d;
            margin-bottom: 0;
        }

        .settings .wallet .nav-pills {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 14px -6px;
            border-radius: 5px;
        }

        .settings .wallet .nav-pills a {
            border-radius: 0;
        }

        .settings .wallet .nav-pills a.active h2,
        .settings .wallet .nav-pills a.active h3,
        .settings .wallet .nav-pills a.active p {
            color: #ffffff;
        }
        .market-trade .nav .nav-item .nav-link.active {
            background: #fff;
            color: #007bff;
        }

        .market-trade .nav .nav-item .nav-link {
            color: #4a4a4a;
            padding: 0;
        }

        .market-trade .input-group-text {
            background: #eff2f6;
            color: #4a4a4a;
            font-weight: 300;
        }

        .market-trade .input-group {
            margin-bottom: 14px;
        }

        .market-trade .nav-item {
            margin-right: 30px;
        }
    </style>
@endsection
@section('script')
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/amcharts-core.min.js')}}"></script>
    <script src="{{asset('assets/js/amcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
@endsection
@section('content')
    <header class="header section" id="home">
        <div class="container pb-5">
            <div class="row justify-content-between align-items-center mt-5">
                <div class="col-md-6 text-center  text-md-start">
                    <h1 class="bold font-md display-lg-2 mt-3 aos-init aos-animate" data-aos="fade-right"
                        data-aos-delay="100">Online Trading <span class="d-block">Never Been This Easy!</span></h1>

                    <p class="lead aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                        Besides its beautiful Interface. Bicrypto is an incredibly rich core trading platform and secure
                        to
                        start your your crypto journey.</p>

                    <div class="my-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
                        <a href="/login" class="btn btn-rounded btn-lg btn-black px-4 mx-auto me-md-0">Know more
                            <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('img/625de0e1c384f1650319585.png')}}" style="max-width: 100%;"
                         data-aos="fade-up"
                         data-aos-delay="200" alt="..." class="aos-init aos-animate">
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="markets ptb70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="markets-container">
                            <div class="markets-content">
                                <h2>BTC Index</h2>
                                <p>7340.65</p>
                                <span class="green"> + 0.45%</span>
                            </div>
                            <div class="markets-chart">
                                <div id="marketsChartBtcLight"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="markets-container">
                            <div class="markets-content">
                                <h2>ETH Index</h2>
                                <p>146.58</p>
                                <span class="red"> - 5.09%</span>
                            </div>
                            <div class="markets-chart">
                                <div id="marketsChartEthLight"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="markets-container">
                            <div class="markets-content">
                                <h2>LTC Index</h2>
                                <p>44.49</p>
                                <span class="green"> + 2.14%</span>
                            </div>
                            <div class="markets-chart">
                                <div id="marketsChartLtcLight"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="markets-pair-list">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#STAR" role="tab"
                                       aria-selected="false"><strong>Favorites</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab"
                                       aria-selected="true">BTC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#KCS" role="tab" aria-selected="true">KCS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="true">USDT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#ALTS" role="tab" aria-selected="true">ALTS</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show" id="STAR" role="tabpanel">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>Change (24H)</th>
                                            <th>Volume (24h)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-href="exchange-light-2.html">

                                            <td><img src="{{asset('assets/img/icon/1.png')}}" alt="eth"> ETH</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">

                                            <td><img src="{{asset('assets/img/icon/2.png')}}" alt="vid"> EOS</td>
                                            <td>6984.06</td>
                                            <td class="red">-1.65%</td>
                                            <td>431,684,298.45</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">

                                            <td><img src="{{asset('assets/img/icon/3.png')}}" alt="bitcoin"> LTC</td>
                                            <td>4582.06</td>
                                            <td class="green">+2.62%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">

                                            <td><img src="{{asset('assets/img/icon/4.png')}}" alt="bitcoin"> KCS</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.94%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/5.png')}}" alt="bitcoin"> COTI</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/6.png')}}" alt="bitcoin"> TRX</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.71%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/7.png')}}" alt="bitcoin"> XMR</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.73%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/8.png')}}" alt="bitcoin"> ADA</td>
                                            <td>7394.06</td>
                                            <td class="red">-1.20%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/9.png')}}" alt="bitcoin"> BNB</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.74%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/10.png')}}" alt="bitcoin"> NEO</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade show active" id="BTC" role="tabpanel">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>Change (24H)</th>
                                            <th>Volume (24h)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/1.png')}}" alt="eth"> ETH</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/2.png')}}" alt="vid"> EOS</td>
                                            <td>6984.06</td>
                                            <td class="red">-1.65%</td>
                                            <td>431,684,298.45</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/3.png')}}" alt="bitcoin"> LTC</td>
                                            <td>4582.06</td>
                                            <td class="green">+2.62%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/4.png')}}" alt="bitcoin"> KCS</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.94%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/5.png')}}" alt="bitcoin"> COTI</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/6.png')}}" alt="bitcoin"> TRX</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.71%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/7.png')}}" alt="bitcoin"> XMR</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.73%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/8.png')}}" alt="bitcoin"> ADA</td>
                                            <td>7394.06</td>
                                            <td class="red">-1.20%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/9.png')}}" alt="bitcoin"> BNB</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.74%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/10.png')}}" alt="bitcoin"> NEO</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/11.png')}}" alt="bitcoin"> TOMO</td>
                                            <td>7394.06</td>
                                            <td class="red">-4.78%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/12.png')}}" alt="bitcoin"> MKR</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.32%</td>
                                            <td>431,687,258.14</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/13.png')}}" alt="bitcoin"> ZEC</td>
                                            <td>7394.06</td>
                                            <td class="green">+5.53%</td>
                                            <td>431,687,258.22</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/14.png')}}" alt="bitcoin"> VSYS</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.52%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/15.png')}}" alt="bitcoin"> ATOM</td>
                                            <td>7394.06</td>
                                            <td class="red">-2.78%</td>
                                            <td>431,687,258.21</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/16.png')}}" alt="bitcoin"> MTV</td>
                                            <td>7394.06</td>
                                            <td class="green">+1.78%</td>
                                            <td>431,687,258.32</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/17.png')}}" alt="bitcoin"> XTZ</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.78%</td>
                                            <td>431,687,258.25</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" id="KCS" role="tabpanel">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>Change (24H)</th>
                                            <th>Volume (24h)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/1.png')}}" alt="eth"> ETH</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/2.png')}}" alt="vid"> EOS</td>
                                            <td>6984.06</td>
                                            <td class="red">-1.65%</td>
                                            <td>431,684,298.45</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/3.png')}}" alt="bitcoin"> LTC</td>
                                            <td>4582.06</td>
                                            <td class="green">+2.62%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/4.png')}}" alt="bitcoin"> KCS</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.94%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/5.png')}}" alt="bitcoin"> COTI</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/6.png')}}" alt="bitcoin"> TRX</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.71%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/7.png')}}" alt="bitcoin"> XMR</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.73%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/8.png')}}" alt="bitcoin"> ADA</td>
                                            <td>7394.06</td>
                                            <td class="red">-1.20%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/9.png')}}" alt="bitcoin"> BNB</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.74%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/10.png')}}" alt="bitcoin"> NEO</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/11.png')}}" alt="bitcoin"> TOMO</td>
                                            <td>7394.06</td>
                                            <td class="red">-4.78%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/12.png')}}" alt="bitcoin"> MKR</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.32%</td>
                                            <td>431,687,258.14</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/13.png')}}" alt="bitcoin"> ZEC</td>
                                            <td>7394.06</td>
                                            <td class="green">+5.53%</td>
                                            <td>431,687,258.22</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/14.png')}}" alt="bitcoin"> VSYS</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.52%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/15.png')}}" alt="bitcoin"> ATOM</td>
                                            <td>7394.06</td>
                                            <td class="red">-2.78%</td>
                                            <td>431,687,258.21</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/16.png')}}" alt="bitcoin"> MTV</td>
                                            <td>7394.06</td>
                                            <td class="green">+1.78%</td>
                                            <td>431,687,258.32</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/17.png')}}" alt="bitcoin"> XTZ</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.78%</td>
                                            <td>431,687,258.25</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" id="USDT" role="tabpanel">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>Change (24H)</th>
                                            <th>Volume (24h)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/1.png')}}" alt="eth"> ETH</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/2.png')}}" alt="vid"> EOS</td>
                                            <td>6984.06</td>
                                            <td class="red">-1.65%</td>
                                            <td>431,684,298.45</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/3.png')}}" alt="bitcoin"> LTC</td>
                                            <td>4582.06</td>
                                            <td class="green">+2.62%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/4.png')}}" alt="bitcoin"> USDT</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.94%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/5.png')}}" alt="bitcoin"> COTI</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/6.png')}}" alt="bitcoin"> TRX</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.71%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/7.png')}}" alt="bitcoin"> XMR</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.73%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/8.png')}}" alt="bitcoin"> ADA</td>
                                            <td>7394.06</td>
                                            <td class="red">-1.20%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/9.png')}}" alt="bitcoin"> BNB</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.74%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/10.png')}}" alt="bitcoin"> NEO</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/11.png')}}" alt="bitcoin"> TOMO</td>
                                            <td>7394.06</td>
                                            <td class="red">-4.78%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/12.png')}}" alt="bitcoin"> MKR</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.32%</td>
                                            <td>431,687,258.14</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/13.png')}}" alt="bitcoin"> ZEC</td>
                                            <td>7394.06</td>
                                            <td class="green">+5.53%</td>
                                            <td>431,687,258.22</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/14.png')}}" alt="bitcoin"> VSYS</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.52%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/15.png')}}" alt="bitcoin"> ATOM</td>
                                            <td>7394.06</td>
                                            <td class="red">-2.78%</td>
                                            <td>431,687,258.21</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/16.png')}}" alt="bitcoin"> MTV</td>
                                            <td>7394.06</td>
                                            <td class="green">+1.78%</td>
                                            <td>431,687,258.32</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/17.png')}}" alt="bitcoin"> XTZ</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.78%</td>
                                            <td>431,687,258.25</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" id="ALTS" role="tabpanel">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Coin</th>
                                            <th>Last Price</th>
                                            <th>Change (24H)</th>
                                            <th>Volume (24h)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/1.png')}}" alt="eth"> ETH</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/2.png')}}" alt="vid"> EOS</td>
                                            <td>6984.06</td>
                                            <td class="red">-1.65%</td>
                                            <td>431,684,298.45</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/3.png')}}" alt="bitcoin"> LTC</td>
                                            <td>4582.06</td>
                                            <td class="green">+2.62%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/4.png')}}" alt="bitcoin"> ALTS</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.94%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/5.png')}}" alt="bitcoin"> COTI</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.78%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/6.png')}}" alt="bitcoin"> TRX</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.71%</td>
                                            <td>431,687,258.53</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/7.png')}}" alt="bitcoin"> XMR</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.73%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/8.png')}}" alt="bitcoin"> ADA</td>
                                            <td>7394.06</td>
                                            <td class="red">-1.20%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/9.png')}}" alt="bitcoin"> BNB</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.74%</td>
                                            <td>431,687,258.23</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/10.png')}}" alt="bitcoin"> NEO</td>
                                            <td>7394.06</td>
                                            <td class="red">-0.78%</td>
                                            <td>431,687,258.77</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/11.png')}}" alt="bitcoin"> TOMO</td>
                                            <td>7394.06</td>
                                            <td class="red">-4.78%</td>
                                            <td>431,687,258.33</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/12.png')}}" alt="bitcoin"> MKR</td>
                                            <td>7394.06</td>
                                            <td class="green">+0.32%</td>
                                            <td>431,687,258.14</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/13.png')}}" alt="bitcoin"> ZEC</td>
                                            <td>7394.06</td>
                                            <td class="green">+5.53%</td>
                                            <td>431,687,258.22</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/14.png')}}" alt="bitcoin"> VSYS</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.52%</td>
                                            <td>431,687,258.35</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/15.png')}}" alt="bitcoin"> ATOM</td>
                                            <td>7394.06</td>
                                            <td class="red">-2.78%</td>
                                            <td>431,687,258.21</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/16.png')}}" alt="bitcoin"> MTV</td>
                                            <td>7394.06</td>
                                            <td class="green">+1.78%</td>
                                            <td>431,687,258.32</td>
                                        </tr>
                                        <tr data-href="exchange-light-2.html">
                                            <td><img src="{{asset('assets/img/icon/17.png')}}" alt="bitcoin"> XTZ</td>
                                            <td>7394.06</td>
                                            <td class="red">-3.78%</td>
                                            <td>431,687,258.25</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" class="load-more btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Credit Cards Management -->
    <section class="section anime-background">
        <div class="shapes-container">
            <div class="static-shape shape-main left"></div>
        </div>

        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6">
                    <div class="card shadow bg-dark no-action mx-auto wallet">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <img src="{{asset('assets/frontends/default/img/avatar/1.jpg')}}"
                                 class="icon-md rounded-circle"
                                 alt="">
                            <span class="text-uppercase small bold">checkout</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </div>

                        <div class="card-body">
                            <div
                                class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                                data-sw-autoplay="2500" data-swiper-instance="[object Object]">
                                <div class="swiper-wrapper"
                                     style="transition-duration: 0ms; transform: translate3d(-298px, 0px, 0px);">
                                    <div
                                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-prev"
                                        data-swiper-slide-index="0" style="width: 298px;">
                                        <div class="card credit-card credit-card-st1">
                                            <div class="shapes-container">
                                                <div class="shape shape-1">
                                                    <div></div>
                                                </div>
                                                <div class="shape shape-2">
                                                    <div></div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col d-flex">
                                                        <div class="icon-md rounded-circle bg-danger op-7"></div>
                                                        <div class="icon-md rounded-circle bg-warning op-7"
                                                             style="transform: translateX(-50%)"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="badge badge-success">Active</span>
                                                    </div>
                                                </div>
                                                <div class="my-4">
                                                    <div class="d-flex justify-content-around align-items-center">
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="text-dark bold">1234</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="small text-muted">Card holder</div>
                                                        <div class="text-dark semi-bold h6">John Doe</div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="small text-muted">Expires</div>
                                                        <div class="text-dark semi-bold h6">08/24</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="swiper-slide swiper-slide-active swiper-slide-duplicate-next swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="0" style="width: 298px;">
                                        <div class="card credit-card credit-card-st1">
                                            <div class="shapes-container">
                                                <div class="shape shape-1">
                                                    <div></div>
                                                </div>
                                                <div class="shape shape-2">
                                                    <div></div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col d-flex">
                                                        <div class="icon-md rounded-circle bg-danger op-7"></div>
                                                        <div class="icon-md rounded-circle bg-warning op-7"
                                                             style="transform: translateX(-50%)"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="badge badge-success">Active</span>
                                                    </div>
                                                </div>
                                                <div class="my-4">
                                                    <div class="d-flex justify-content-around align-items-center">
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="text-dark bold">1234</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="small text-muted">Card holder</div>
                                                        <div class="text-dark semi-bold h6">John Doe</div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="small text-muted">Expires</div>
                                                        <div class="text-dark semi-bold h6">08/24</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-next"
                                        data-swiper-slide-index="0" style="width: 298px;">
                                        <div class="card credit-card credit-card-st1">
                                            <div class="shapes-container">
                                                <div class="shape shape-1">
                                                    <div></div>
                                                </div>
                                                <div class="shape shape-2">
                                                    <div></div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col d-flex">
                                                        <div class="icon-md rounded-circle bg-danger op-7"></div>
                                                        <div class="icon-md rounded-circle bg-warning op-7"
                                                             style="transform: translateX(-50%)"></div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="badge badge-success">Active</span>
                                                    </div>
                                                </div>
                                                <div class="my-4">
                                                    <div class="d-flex justify-content-around align-items-center">
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                            <div class="safe-digit"></div>
                                                        </div>
                                                        <div class="text-dark bold">1234</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="small text-muted">Card holder</div>
                                                        <div class="text-dark semi-bold h6">John Doe</div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="small text-muted">Expires</div>
                                                        <div class="text-dark semi-bold h6">08/24</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-details bg-contrast aos-init aos-animate" data-aos="fade-up">
                            <div class="card-body pb-0 d-flex align-items-center justify-content-between">
                                <h6 class="m-0 bold">Summary</h6>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i></button>
                            </div>

                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">
                                                <p class="my-0 semi-bold font-sm">Bitcoin</p>
                                                <p class="my-0 small text-muted">Rise trade 3 hours duration</p>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">$535.45</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">
                                                <p class="my-0 semi-bold font-sm">Litecoin</p>
                                                <p class="my-0 small text-muted">Fall trade 1 hours duration</p>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">$183.95</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">
                                                <p class="my-0 semi-bold font-sm">Dogecoin</p>
                                                <p class="my-0 small text-muted">Rise trade 20 min duration</p>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">$5.99</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item px-0 pb-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="text-start">Total</div>
                                            <div class="text-end"><span class="bold">$725.39</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="/login" class="btn btn-primary btn-block btn-place-order">
                                Trade
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="section-heading aos-init aos-animate" data-aos="fade-up">
                        <h2 class="heading-line bold"><span class="light">In-app</span>
                            <br>Checkout</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, recusandae
                            tenetur!</p>
                    </div>

                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eligendi esse,
                        facilis <br> fugit inventore iste itaque labore magni minima minus molestiae neque nesciunt
                        nihil
                        nobis
                        <br> nulla,quaerat quibusdam repellat sequi!</p>

                    <a href="/login" class="btn btn-rounded btn-outline-darker">Learn More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Gifts -->
    <section class="section with-promo" id="gifts">
        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2 class="heading-line bold"><span class="light">Accumulate Points</span>
                            <br>when doing payments</h2>
                        <p class="lead">The More you Pay the More you Earn</p>
                    </div>

                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eligendi esse,
                        facilis fugit inventore iste itaque labore magni minima minus molestiae neque nesciunt nihil
                        nobis
                        nulla, quaerat quibusdam repellat sequi!</p>

                    <a href="/login" class="btn btn-rounded btn-outline-darker">Learn More</a>
                </div>

                <div class="col-md-6">
                    <figure class="figure-box mockup me-md-0">
                        <div class="screens cutout-md bottom-right aos-init aos-animate" data-aos="fade-up">
                            <img src="{{asset('assets/frontends/default/img/gift.png')}}" alt="">
                        </div>

                        <div class="promo-box card shadow bottom-left">
                            <div class="circle-icon icon-lg bg-success p-2 rounded-circle center-flex shadow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-gift stroke-contrast">
                                    <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                    <rect x="2" y="7" width="20" height="5"></rect>
                                    <line x1="12" y1="22" x2="12" y2="7"></line>
                                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                                </svg>
                            </div>

                            <div class="card-body">
                                <p class="small text-primary mb-3">Notification</p>
                                <p class="text-dark h4">$168.00</p>
                                <p class="small">In your favor for making payments</p>
                            </div>
                        </div>

                        <div class="shapes-container d-none d-lg-block">
                            <div class="shape pattern pattern-dots"></div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <!-- Security -->
    <section class="section with-promo anime-background" id="security">
        <div class="shapes-container">
            <div class="static-shape shape-main right"></div>
        </div>

        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6 order-md-last">
                    <div class="section-heading">
                        <h2 class="heading-line bold"><span class="light">Take a break</span>
                            <br>You're all Safe</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius modi
                            saepe
                            voluptas.</p>
                    </div>

                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eligendi esse,
                        facilis fugit inventore iste itaque labore magni minima minus molestiae neque nesciunt nihil
                        nobis
                        nulla, quaerat quibusdam repellat sequi!</p>

                    <a href="/login" class="btn btn-rounded btn-outline-darker">Learn More</a>
                </div>

                <div class="col-md-6">
                    <figure class="figure-box mockup ms-md-0">
                        <div class="screens cutout-md bottom-left aos-init aos-animate" data-aos="fade-up">
                            <img src="{{asset('assets/frontends/default/img/security.png')}}" alt="">
                        </div>

                        <div class="promo-box card shadow top-right">
                            <div class="circle-icon icon-lg bg-success p-2 rounded-circle center-flex shadow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-shield stroke-contrast">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>

                            <div class="card-body">
                                <p class="small text-primary mb-3">You're Safe</p>
                                <p class="text-dark bold">Just smile</p>
                                <p class="small">All transactions are protected with e2e encryption</p>
                            </div>
                        </div>

                        <div class="shapes-container d-none d-lg-block">
                            <div class="shape pattern pattern-dots"></div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- Smart Wallet -->
    <section class="section smart-wallet" id="wallet">
        <div class="shapes-container d-none d-lg-block">
            <div class="shape pattern pattern-dots"></div>
        </div>

        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2 class="heading-line bold"><span class="light">Smart</span>
                            <br>Wallet</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, recusandae
                            tenetur!</p>
                    </div>

                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eligendi esse,
                        facilis fugit inventore iste itaque labore magni minima minus molestiae neque nesciunt nihil
                        nobis
                        nulla, quaerat quibusdam repellat sequi!</p>

                    <a href="/login" class="btn btn-rounded btn-outline-darker">Learn More</a>
                </div>

                <div class="col-md-6">
                    <div class="card shadow bg-dark no-action mx-auto wallet">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <img src="{{asset('assets/frontends/default/img/avatar/1.jpg')}}"
                                 class="icon-md rounded-circle"
                                 alt="">
                            <span class="text-uppercase small bold">Learn More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </div>

                        <div class="card-body">
                            <span class="small">Available Balance</span>
                            <p class="h2 mt-0 text-contrast">$ <span class="counter"
                                                                     style="visibility: visible;">1,485.21</span></p>
                        </div>

                        <div class="card-body">
                            <a href="/login" class="btn btn-primary">Pay</a>
                            <a href="/login" class="btn btn-contrast">Request</a>
                        </div>

                        <div class="card card-details bg-contrast aos-init aos-animate" data-aos="fade-up">
                            <div class="card-body pb-0 d-flex align-items-center justify-content-between">
                                <h6 class="m-0 bold">My Transactions</h6>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-sliders-h"></i></button>
                            </div>

                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="d-flex">
                                                <div class="icon-md bg-primary p-2 rounded-circle center-flex me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-cast stroke-contrast">
                                                        <path
                                                            d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                                                        <line x1="2" y1="20" x2="2.01" y2="20"></line>
                                                    </svg>
                                                </div>

                                                <div class="flex-fill">
                                                    <p class="my-0 bold font-sm">Bitcoin</p>
                                                    <p class="my-0 small text-muted">Today</p>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">
                                                    +$35.45</p>
                                                <p class="my-0 small text-success">
                                                    Win </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="d-flex">
                                                <div class="icon-md bg-primary p-2 rounded-circle center-flex me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-coffee stroke-contrast">
                                                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                        <line x1="6" y1="1" x2="6" y2="4"></line>
                                                        <line x1="10" y1="1" x2="10" y2="4"></line>
                                                        <line x1="14" y1="1" x2="14" y2="4"></line>
                                                    </svg>
                                                </div>

                                                <div class="flex-fill">
                                                    <p class="my-0 bold font-sm">Litecoin</p>
                                                    <p class="my-0 small text-muted">Today</p>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">
                                                    -$5.45</p>
                                                <p class="my-0 small text-success">
                                                    Lost </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="d-flex">
                                                <div class="icon-md bg-primary p-2 rounded-circle center-flex me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-cast stroke-contrast">
                                                        <path
                                                            d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                                                        <line x1="2" y1="20" x2="2.01" y2="20"></line>
                                                    </svg>
                                                </div>

                                                <div class="flex-fill">
                                                    <p class="my-0 bold font-sm">Dogecoin</p>
                                                    <p class="my-0 small text-muted">Yesterday</p>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">
                                                    +$135.45</p>
                                                <p class="my-0 small text-success">
                                                    Win </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between mb-0">
                                            <div class="d-flex">
                                                <div class="icon-md bg-primary p-2 rounded-circle center-flex me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-shopping-bag stroke-contrast">
                                                        <path
                                                            d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                    </svg>
                                                </div>

                                                <div class="flex-fill">
                                                    <p class="my-0 bold font-sm">Bitcoin</p>
                                                    <p class="my-0 small text-muted">Yesterday</p>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <p class="my-0 bold font-sm">
                                                    +$178.95</p>
                                                <p class="my-0 small text-success">
                                                    Win </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="section anime-background">
        <div class="shapes-container" style="width: 100%">
            <div class="static-shape shape-main left"></div>
        </div>

        <div class="container">
            <div class="section-heading" id="features">
                <h2 class="heading-line">Powerful Features</h2>
            </div>

            <div class="row gap-y text-center text-md-start">
                <div class="col-md-4">
                    <div class="icon-anime mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-pie-chart icon stroke-darker">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <div class="shape bg-alternate-gradient circle aos-init aos-animate" data-aos="fade-up"
                             data-aos-delay="100" data-aos-offset="0"></div>
                    </div>

                    <p class="my-0 bold lead text-dark">Dashboard</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-anime mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-dollar-sign icon stroke-darker">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <div class="shape bg-alternate-gradient circle aos-init aos-animate" data-aos="fade-up"
                             data-aos-delay="100" data-aos-offset="0"></div>
                    </div>

                    <p class="my-0 bold lead text-dark">Save money</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-anime mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-sliders icon stroke-darker">
                            <line x1="4" y1="21" x2="4" y2="14"></line>
                            <line x1="4" y1="10" x2="4" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12" y2="3"></line>
                            <line x1="20" y1="21" x2="20" y2="16"></line>
                            <line x1="20" y1="12" x2="20" y2="3"></line>
                            <line x1="1" y1="14" x2="7" y2="14"></line>
                            <line x1="9" y1="8" x2="15" y2="8"></line>
                            <line x1="17" y1="16" x2="23" y2="16"></line>
                        </svg>
                        <div class="shape bg-alternate-gradient circle aos-init aos-animate" data-aos="fade-up"
                             data-aos-delay="100" data-aos-offset="0"></div>
                    </div>

                    <p class="my-0 bold lead text-dark">Design tools</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-anime mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-download icon stroke-darker">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <div class="shape bg-alternate-gradient circle aos-init aos-animate" data-aos="fade-up"
                             data-aos-delay="100" data-aos-offset="0"></div>
                    </div>

                    <p class="my-0 bold lead text-dark">Updates</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-anime mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-pie-chart icon stroke-darker">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <div class="shape bg-alternate-gradient circle aos-init aos-animate" data-aos="fade-up"
                             data-aos-delay="100" data-aos-offset="0"></div>
                    </div>

                    <p class="my-0 bold lead text-dark">Dashboard</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <div class="icon-anime mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-dollar-sign icon stroke-darker">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <div class="shape bg-alternate-gradient circle aos-init aos-animate" data-aos="fade-up"
                             data-aos-delay="100" data-aos-offset="0"></div>
                    </div>

                    <p class="my-0 bold lead text-dark">Save money</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section partners">
        <div class="container">
            <div class="mb-5">
                <h2 class="heading-line">Trusted by 13,000+ <br>Business Leaders all Around the Globe</h2>
            </div>

            <div class="row">
                <div class="col-4 col-md-2">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right" data-aos-delay="100 ">
                        <img src="{{asset('img/logos/1.png')}}" class="img-responsive mx-auto mb-5 " alt=" "
                             style="max-height: 40px ">
                    </figure>
                </div>
                <div class="col-4 col-md-2 ">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right "
                            data-aos-delay="200">
                        <img src="{{asset('img/logos/2.png')}}" class="img-responsive mx-auto mb-5" alt=""
                             style="max-height: 40px">
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right"
                            data-aos-delay="300 ">
                        <img src="{{asset('img/logos/3.png')}}" class="img-responsive mx-auto mb-5 " alt=" "
                             style="max-height: 40px ">
                    </figure>
                </div>
                <div class="col-4 col-md-2 ">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right "
                            data-aos-delay="400">
                        <img src="{{asset('img/logos/4.png')}}" class="img-responsive mx-auto mb-5" alt=""
                             style="max-height: 40px">
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right"
                            data-aos-delay="500 ">
                        <img src="{{asset('img/logos/5.png')}}" class="img-responsive mx-auto mb-5 " alt=" "
                             style="max-height: 40px ">
                    </figure>
                </div>
                <div class="col-4 col-md-2 ">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right "
                            data-aos-delay="600">
                        <img src="{{asset('img/logos/6.png')}}" class="img-responsive mx-auto mb-5" alt=""
                             style="max-height: 40px">
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right"
                            data-aos-delay="700 ">
                        <img src="{{asset('img/logos/7.png')}}" class="img-responsive mx-auto mb-5 mb-md-0 " alt=" "
                             style="max-height: 40px ">
                    </figure>
                </div>
                <div class="col-4 col-md-2 ">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right "
                            data-aos-delay="800">
                        <img src="{{asset('img/logos/8.png')}}" class="img-responsive mx-auto mb-5 mb-md-0" alt=""
                             style="max-height: 40px">
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right"
                            data-aos-delay="900 ">
                        <img src="{{asset('img/logos/9.png')}}" class="img-responsive mx-auto mb-5 mb-md-0 " alt=" "
                             style="max-height: 40px ">
                    </figure>
                </div>
                <div class="col-4 col-md-2 ">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right "
                            data-aos-delay="1000">
                        <img src="{{asset('img/logos/10.png')}}" class="img-responsive mx-auto" alt=""
                             style="max-height: 40px">
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure class="mockup aos-init aos-animate" data-aos="fade-right"
                            data-aos-delay="1100 ">
                        <img src="{{asset('img/logos/11.png')}}" class="img-responsive mx-auto " alt=" "
                             style="max-height: 40px ">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section slider-testimonials " id="testimonials ">
        <div class="container swiper-center-nav ">
            <div class="section-heading text-center ">
                <h2 class="bold ">Our customers have something to say</h2>
                <p class="lead text-muted ">They are the best, our customer want to let you know how Bicrypto is helping
                    them to achieve their goals and how simple is to use it</p>
            </div>

            <div class="card strong-top-bordered-card ">
                <div class="row g-0 ">
                    <div class="col-md-6 ">
                        <!-- Images slider, will fade -->
                        <div
                            class="swiper-container h-100 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                            data-sw-effect="fade " data-sw-space-between="0 " data-sw-pagination="false "
                            data-sw-nav-arrows=".nav-testimonial
                        " data-swiper-instance="[object Object]">
                            <div class="swiper-wrapper "
                                 style="transform: translate3d(-347px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                     data-swiper-slide-index="3" style="width: 347px;">
                                    <figure class="m-0 image-background cover "
                                            style="background-image: url({{asset('img/logos/companies/6.jpg')}}) ">
                                        <img src="{{asset('img/logos/companies/6.jpg')}} " alt="... " class="invisible ">
                                    </figure>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                     style="width: 347px;">
                                    <figure class="m-0 image-background cover "
                                            style="background-image: url({{asset('img/logos/companies/3.jpg')}}) ">
                                        <img src="{{asset('img/logos/companies/3.jpg')}} " alt="... " class="invisible ">
                                    </figure>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                     style="width: 347px;">
                                    <figure class="m-0 image-background cover "
                                            style="background-image: url({{asset('img/logos/companies/2.jpg')}}) ">
                                        <img src="{{asset('img/logos/companies/2.jpg')}} " alt="... " class="invisible ">
                                    </figure>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2" style="width: 347px;">
                                    <figure class="m-0 image-background cover "
                                            style="background-image: url({{asset('img/logos/companies/5.jpg')}}) ">
                                        <img src="{{asset('img/logos/companies/5.jpg')}} " alt="... " class="invisible ">
                                    </figure>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3"
                                     style="width: 347px;">
                                    <figure class="m-0 image-background cover "
                                            style="background-image: url({{asset('img/logos/companies/6.jpg')}}) ">
                                        <img src="{{asset('img/logos/companies/6.jpg')}} " alt="... " class="invisible ">
                                    </figure>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                     data-swiper-slide-index="0" style="width: 347px;">
                                    <figure class="m-0 image-background cover "
                                            style="background-image: url({{asset('img/logos/companies/3.jpg')}}) ">
                                        <img src="{{asset('img/logos/companies/3.jpg')}} " alt="... " class="invisible ">
                                    </figure>
                                </div>
                            </div>

                            <div class="divider "></div>
                        </div>

                        <!-- Prev button -->
                        <div class="swiper-button swiper-button-prev nav-testimonial-prev rounded-circle shadow ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24 " height="24 " viewBox="0 0 24 24 "
                                 fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round "
                                 stroke-linejoin="round " class="feather feather-arrow-left
                        ">
                                <line x1="19 " y1="12 " x2="5 " y2="12 "></line>
                                <polyline points="12 19 5 12 12 5 "></polyline>
                            </svg>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <!-- Testimonials slider, will slide -->
                        <div
                            class="swiper-container h-100 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                            data-swiper-instance="[object Object]">
                            <div class="swiper-wrapper " data-sw-pagination="false "
                                 data-sw-nav-arrows=".nav-testimonial "
                                 style="transform: translate3d(-347px, 0px, 0px); transition-duration: 0ms;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                     data-swiper-slide-index="3" style="width: 347px;">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center ">
                                        <blockquote class="blockquote text-center mb-0 ">
                                            <figure class="mockup mb-5 ">
                                                <img src="{{asset('img/logos/companies/2.svg')}} " alt="... "
                                                     class="img-responsive ">
                                            </figure>

                                            <i class="fas fa-quote-left fa-2x op-4 absolute-md left top "></i>
                                            <p class="mb-5 mb-md-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident.
                                                Incidunt accusantium.</p>
                                            <footer class="blockquote-footer ">
                                                <span class="h6 text-uppercase ">Jane Doe</span>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                     style="width: 347px;">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center ">
                                        <blockquote class="blockquote text-center mb-0 ">
                                            <figure class="mockup mb-5 ">
                                                <img src="{{asset('img/logos/companies/1.svg')}} " alt="... "
                                                     class="img-responsive ">
                                            </figure>

                                            <i class="fas fa-quote-left fa-2x op-4 absolute-md left top "></i>
                                            <p class="mb-5 mb-md-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident.
                                                Incidunt accusantium.</p>
                                            <footer class="blockquote-footer ">
                                                <span class="h6 text-uppercase ">Jane Doe</span>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                     style="width: 347px;">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center ">
                                        <blockquote class="blockquote text-center mb-0 ">
                                            <figure class="mockup mb-5 ">
                                                <img src="{{asset('img/logos/companies/2.svg')}} " alt="... "
                                                     class="img-responsive ">
                                            </figure>

                                            <i class="fas fa-quote-left fa-2x op-4 absolute-md left top "></i>
                                            <p class="mb-5 mb-md-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident.
                                                Incidunt accusantium.</p>
                                            <footer class="blockquote-footer ">
                                                <span class="h6 text-uppercase ">Jane Doe</span>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2" style="width: 347px;">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center ">
                                        <blockquote class="blockquote text-center mb-0 ">
                                            <figure class="mockup mb-5 ">
                                                <img src="{{asset('img/logos/companies/1.svg')}} " alt="... "
                                                     class="img-responsive ">
                                            </figure>

                                            <i class="fas fa-quote-left fa-2x op-4 absolute-md left top "></i>
                                            <p class="mb-5 mb-md-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident.
                                                Incidunt accusantium.</p>
                                            <footer class="blockquote-footer ">
                                                <span class="h6 text-uppercase ">Jane Doe</span>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3"
                                     style="width: 347px;">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center ">
                                        <blockquote class="blockquote text-center mb-0 ">
                                            <figure class="mockup mb-5 ">
                                                <img src="{{asset('img/logos/companies/2.svg')}} " alt="... "
                                                     class="img-responsive ">
                                            </figure>

                                            <i class="fas fa-quote-left fa-2x op-4 absolute-md left top "></i>
                                            <p class="mb-5 mb-md-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident.
                                                Incidunt accusantium.</p>
                                            <footer class="blockquote-footer ">
                                                <span class="h6 text-uppercase ">Jane Doe}</span>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                     data-swiper-slide-index="0" style="width: 347px;">
                                    <div class="card-body h-100 d-flex flex-column justify-content-center ">
                                        <blockquote class="blockquote text-center mb-0 ">
                                            <figure class="mockup mb-5 ">
                                                <img src="{{asset('img/logos/companies/1.svg')}} " alt="... "
                                                     class="img-responsive ">
                                            </figure>

                                            <i class="fas fa-quote-left fa-2x op-4 absolute-md left top "></i>
                                            <p class="mb-5 mb-md-6 ">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Atque, quas sunt enim tempore minima tenetur voluptatem provident.
                                                Incidunt accusantium.</p>
                                            <footer class="blockquote-footer ">
                                                <span class="h6 text-uppercase ">Jane Doe</span>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Next button -->
                        <div class="swiper-button swiper-button-next nav-testimonial-next rounded-circle shadow ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24 " height="24 " viewBox="0 0 24 24 "
                                 fill="none " stroke="currentColor " stroke-width="2 " stroke-linecap="round "
                                 stroke-linejoin="round " class="feather feather-arrow-right
                        ">
                                <line x1="5 " y1="12 " x2="19 " y2="12 "></line>
                                <polyline points="12 5 19 12 12 19 "></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ./FAQs -->
    <section class="section " id="faqs ">
        <div class="container pt-0 ">
            <div class="row gap-y ">
                <div class="col-lg-4 col-md-5 ">
                    <div class="card shadow ">
                        <div class="card-body ">
                            <div class="light text-center display-6 mt-auto ">
                                <p class="my-0 ">Frequently <span class="d-block text-secondary ">asked</span></p>
                                <p class="my-0 text-uppercase text-info mt-1 ">questions</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 ">
                    <div class="accordion accordion-clean accordion-collapsed " id="faqs-accordion-2 ">
                        <div class="card ">
                            <div class="card-header ">
                                <a href="# " class="card-title btn " data-bs-toggle="collapse "
                                   data-bs-target="#v2-q0 ">
                                    <i class="fas fa-angle-down angle "></i>
                                    What does the package include?
                                </a>
                            </div>

                            <div id="v2-q0 " class="collapse " data-bs-parent="#faqs-accordion-2 ">
                                <div class="card-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam
                                    ducimus ea facilis illum laboriosam, provident quidem recusandae sequi velit vero.
                                    Aliquid commodi eos esse exercitationem itaque iure iusto molestiae nemo.
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header ">
                                <a href="# " class="card-title btn " data-bs-toggle="collapse "
                                   data-bs-target="#v2-q1 ">
                                    <i class="fas fa-angle-down angle "></i>
                                    What is the typical response time for a support question?
                                </a>
                            </div>

                            <div id="v2-q1 " class="collapse " data-bs-parent="#faqs-accordion-2 ">
                                <div class="card-body ">Since you report us a support question we try to make our best
                                    to
                                    find out what is going on, depending on the case it could take more or les time,
                                    however
                                    a standard time could be minutes or hours.
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header ">
                                <a href="# " class="card-title btn " data-bs-toggle="collapse "
                                   data-bs-target="#v2-q2 ">
                                    <i class="fas fa-angle-down angle "></i>
                                    What do I need to know to customize this template?
                                </a>
                            </div>

                            <div id="v2-q2 " class="collapse " data-bs-parent="#faqs-accordion-2 ">
                                <div class="card-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam
                                    ducimus ea facilis illum laboriosam, provident quidem recusandae sequi velit vero.
                                    Aliquid commodi eos esse exercitationem itaque iure iusto molestiae nemo.
                                </div>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-header ">
                                <a href="# " class="card-title btn " data-bs-toggle="collapse "
                                   data-bs-target="#v2-q3 ">
                                    <i class="fas fa-angle-down angle "></i>
                                    Can I suggest a new feature?
                                </a>
                            </div>

                            <div id="v2-q3 " class="collapse " data-bs-parent="#faqs-accordion-2 ">
                                <div class="card-body ">Definitely Yes, you can contact us to let us know your needs. If
                                    your suggestion represents any value to both we can include it as a part of the
                                    theme or
                                    you can request a custom build by an extra cost. Please note it could take some time
                                    in
                                    order for the feature to be implemented.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Try it -->
    <section class="section anime-background">
        <div class="shapes-container ">
            <div class="static-shape shape-main left "></div>
        </div>

        <div class="container text-center text-md-start ">
            <div class="row ">
                <div class="col-md-8 section-heading ">
                    <p class="bold mb-0 text-primary ">Are you ready to try?</p>
                    <h2 class="mt-0 ">Register for free NOW!</h2>

                    <p class="text-muted ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ducimus ea facilis illum
                        laboriosam, provident quidem recusandae sequi velit vero. Aliquid commodi eos esse
                        exercitationem
                        itaque iure iusto molestiae nemo.
                    </p>
                </div>
            </div>

            <a href="/register " class="btn btn-rounded btn-primary btn-lg mt-2 mt-md-0 mx-auto ">
                Get $10,000 Free Practice
            </a>
        </div>
    </section>
    <blockquote class="mt-5 mb-5 text-center">
        Today I shall be meeting with interference, ingratitude, insolence, disloyalty, ill-will, and selfishness all of
        them due to the offenders' ignorance of what is good or evil..
    </blockquote>
@endsection
