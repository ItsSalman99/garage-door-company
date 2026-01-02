<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD</title>
    @include('partials.header')
    @stack('extra-css')
</head>
<body>

    @include('portal.partials.sidebar')
    @include('portal.partials.topbar')

    @yield('content')

    @include('partials.footer')

    @stack('extra-js')
</body>
</html>
