@extends('components.layout')
@section('style')
    <style>
        .btn-enter {
            background-color: #FCD535;
            color: #181A20;
        }
        .div-banner{
            background-image: url(https://bin.bnbstatic.com/static/vip-portal/landing/banner-bg-light.png);
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <section class="row">
            <div class="col-12 div-banner">
                <h1>One-Stop Hub for Binance VIPs</h1>
                <p>Discover our premium Binance VIP & Institutional services</p>
                <button class="btn btn-enter">Enter Now</button>
            </div>
        </section>
    </div>
@endsection
