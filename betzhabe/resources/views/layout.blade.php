<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Betzhabe Lencería</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Betzhabe shop">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('style')
    </head>

    <body>
        @yield('content')
        @stack('scripts')
    </body>
</html>