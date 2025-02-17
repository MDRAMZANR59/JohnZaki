@extends('frontend.app')
@section('title')
    Get The App
@endsection
@section('content')
    <main>
        <!-- terms banner part start here -->
        <section class="terms-banner">
            <div class="container">
                <div class="bi-banner-inner">
                    <h1>Get the Officialkw app</h1>
                    <h5>Home - Get the Officialkw app</h5>
                    <h3><a href="index.html">Home</a> - Trade Assurance</h3>
                </div>
            </div>
        </section>
        <!-- terms banner paert end here -->

        <!-- terms and conditions start here -->
        <div class="trade-section terms-section">
            <div class="container bi-get-the-app">
                <div class="bi-get-the-app-text">
                    <h1>Get the Officialkw app</h1>
                    <h4>Find products, communicate with suppliers, and manage and pay for your orders with the Alibaba.com
                        app anytime, anywhere.</h4>
                </div>

                <div class="bi-get-the-app-icon">
                    <a href="https://www.apple.com/app-store/"> <img src="{{ asset('frontend/images/bi-apple-store.png') }}"
                            alt=""></a>
                    <a href="https://play.google.com/store/games?device=windows"><img
                            src="{{ asset('frontend/images/bi-play-store.png') }}" alt="" srcset=""></a>
                </div>

                <div class="bi-get-the-app-qr-code">
                    <img src="{{ asset('frontend/images/bi-qr-code.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- terms and conditions end here -->

    </main>
@endsection
