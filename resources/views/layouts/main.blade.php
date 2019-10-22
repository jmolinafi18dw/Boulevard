<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Boulevard - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/tienda.css">   
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <script src="/lib/jquery-3.4.1.min.js"></script>
        <script src="/js/main.js"></script>
    </head>
    <body>
        <header class="compressed-header">
            <img src="/img/logo.png">
        </header>
        <nav>
            @yield('nav')
        </nav>
        <img src="/img/arrow_up.svg" id="arrow_up"/>
        <div id="main">
            @yield('content')
        </div>
        @yield('js')
        <footer>David Belinchon, Koldo Intxausti y Jefry Molina &copy 2019</footer>
    </body>
</html>
