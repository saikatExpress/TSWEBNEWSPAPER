<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    @include('web.layouts.style')
</head>

<body>

    @include('web.layouts.loader')

    @include('web.layouts.header')

    <main>
        @yield('content')
    </main>

    @include('web.layouts.footer')

    <!-- JS here -->

    @include('web.layouts.script')

</body>

</html>
