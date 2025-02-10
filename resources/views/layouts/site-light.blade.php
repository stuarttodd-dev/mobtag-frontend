<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $metaTitle ?? null }}</title>

        <meta content="{{ $metaDescription ?? null }}" name="description">
        <meta content="{{ $metaKeywords ?? null }}" name="keywords">

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gabarito|Bungee&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="{{ asset('assets/css/prism.css') }}" rel="stylesheet" />
        <link href="{{ asset('static/css/style.css?=' . time()) }}" rel="stylesheet">

        @yield('styles')

        @if(env('APP_ENV') === 'production')

        @endif
</head>

<body>
    @include('components/header-light')
    <main>
        @yield('content')
    </main>

    @include('components/footer')

    <!-- End Footer -->
    <!-- jquery -->
    <script src="{{ asset('static/js/jquery-3.5.1.min.js') }}"></script>
    <!-- appear -->
    <script src="{{ asset('static/vendor/appear/jquery.appear.js') }}"></script>
    <!--bootstrap-->
    <script src="{{ asset('static/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- countTo -->
    <script src="{{ asset('static/vendor/counter/jquery.countTo.js') }}"></script>
    <!-- typed -->
    <script src="{{ asset('static/vendor/typed/typed.js') }}"></script>
    <!-- owl-carousel -->
    <script src="{{ asset('static/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!-- magnific -->
    <script src="{{ asset('static/vendor/magnific/jquery.magnific-popup.min.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('static/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- svg-injector -->
    <script src="{{ asset('static/vendor/svginjector/svg-injector.min.js') }}"></script>
    <!-- jarallax -->
    <script src="{{ asset('static/vendor/jarallax/jarallax-all.js') }}"></script>
    <!-- count-down -->
    <script src="{{ asset('static/vendor/count-down/jquery.countdown.min.js') }}"></script>
    <!-- working form -->
    <script src="{{ asset('static/vendor/mail/js/form.min.js') }}"></script>
    <script src="{{ asset('static/vendor/mail/js/script.js') }}"></script>
    <!-- Theme Js -->
    <script src="{{ asset('static/js/custom.js') }}"></script>

    <script src="{{ asset('assets/js/prism.js') }}"></script>

    @yield('scripts')
</body>

</html>