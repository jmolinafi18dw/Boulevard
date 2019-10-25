<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Boulevard - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/tienda.css">   
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <script src="/lib/jquery-3.4.1.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/lib/jquery.translate.js"></script>
        <script src="/lib/traduccion.js"></script>
        <script>
            $(document).ready(function(){
                lang = "{{$lang}}";
                switch(lang){
                    case 'en':
                        cambiaridiomaen();
                    break;
                    case 'eus':
                        cambiaridiomaeus();
                    break;
                    // el español es el idioma por defecto
                    default:
                        cambiaridiomaes();
                    break;
                }
                $('.compressed-header > a').attr('href','{{route('welcome')}}/'+getLang());
            })
        </script>
    </head>
    <body>
        <header class="compressed-header">
            <a href="{{route('welcome')}}"><img src="/img/logo.png"></a>
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
