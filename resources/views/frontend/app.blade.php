<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- all css link -->
    @include('frontend.partials.style')
</head>

<body>

    <!-- heading part start -->
    @if (url()->full() !== route('login') && url()->full()!==route('register'))
        @include('frontend.partials.header')
    @endif
    <!-- heading part end -->


    <!-- main part start -->
    @yield('content')
    <!-- main part end -->

    <!-- footer part start -->
    @include('frontend.partials.footer')
    <!-- footer part end -->

    <!-- all js -->
    @include('frontend.partials.script')

</body>

</html>
