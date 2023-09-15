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
@endsection
