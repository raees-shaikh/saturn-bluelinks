<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>
        @yield('pageTitle')
        {{ URL::current() == url('') ? '' : '|' }}
        Saturn Blue Links
    </title>
    @production
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-49CNRPC4PL"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-49CNRPC4PL');
        </script>
    @endproduction
    @include('layouts.header')
    @yield('cdn')
</head>

<body>
    <div id="wrapper">
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </div>
    @yield('js')
</body>

</html>
