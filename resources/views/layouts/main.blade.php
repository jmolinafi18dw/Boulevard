<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Boulevard - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/tienda.css">   
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <script src="lib/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <!-- IMÁGENES DEL FONDO -->

        <svg class="blob" id="blob1" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
          <g transform="translate(300,300)">
            <path d="M59.2,-72.2C78.4,-40.1,96.7,-20,114,17.3C131.3,54.7,147.7,109.4,128.5,126C109.4,142.7,54.7,121.3,5.7,115.7C-43.4,110,-86.7,120.1,-121.1,103.4C-155.4,86.7,-180.7,43.4,-187.5,-6.8C-194.4,-57,-182.7,-114.1,-148.4,-146.2C-114.1,-178.4,-57,-185.7,-18.5,-167.2C20,-148.7,40.1,-104.4,59.2,-72.2Z" fill="#419a48"/>
          </g>
        </svg>
        <svg class="blob" id="blob2" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
          <g transform="translate(300,300)">
            <path d="M148.4,-122.4C177.5,-81.9,176,-21,166.9,45.9C157.8,112.7,141.2,185.7,101.3,201.4C61.5,217.1,-1.6,175.7,-32.3,134.9C-62.9,94,-61.2,53.8,-56.2,26.9C-51.1,-0.1,-42.8,-13.8,-32.8,-49.9C-22.9,-86,-11.5,-144.5,24.1,-163.7C59.7,-182.9,119.4,-162.9,148.4,-122.4Z" fill="#419a48"/>
          </g>
        </svg>
        <svg class="blob" id="blob3" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
          <g transform="translate(300,300)">
            <path d="M150.6,-161.9C186.6,-114.6,201.3,-57.3,207.8,6.5C214.2,70.2,212.5,140.5,176.5,186.5C140.5,232.5,70.2,254.2,1.4,252.8C-67.4,251.4,-134.8,226.8,-173.3,180.8C-211.8,134.8,-221.4,67.4,-222.9,-1.5C-224.5,-70.5,-217.9,-140.9,-179.4,-188.3C-140.9,-235.6,-70.5,-259.8,-6.6,-253.2C57.3,-246.6,114.6,-209.2,150.6,-161.9Z" fill="#7bdcb5"/>
          </g>
        </svg>
        <svg class="blob" id="blob4" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            <g transform="translate(300, 300)">
                <path d="M125.4,-163.3C167.7,-141.8,210.8,-112.2,228.3,-71.2C245.7,-30.2,237.4,22.1,210.7,57.3C184,92.5,138.7,110.6,100.5,133.8C62.3,157.1,31.2,185.5,-5.8,193.5C-42.7,201.5,-85.4,188.9,-118.4,164C-151.4,139,-174.6,101.6,-176.1,64.8C-177.5,28,-157.2,-8.2,-147.7,-51.2C-138.1,-94.1,-139.3,-143.7,-116.5,-171.5C-93.7,-199.2,-46.8,-205.1,-2.6,-201.5C41.5,-197.8,83.1,-184.7,125.4,-163.3Z" fill="#419a48"/>
            </g>
        </svg>

        <nav>
            <img src="img/menu.svg" id="menuToggle" alt="menuToggle">
            @yield('nav')
        </nav>
        <img src="img/arrow_up.svg" id="arrow_up"/>
        <div id="main">
            @yield('content')
        </div>
        <footer>David Belinchon, Koldo Intxausti y Jefry Molina &copy 2019</footer>
    </body>
</html>
