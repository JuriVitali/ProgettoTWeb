<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css/layout_base.css') }}"  rel="stylesheet" type="text/css" media="all">
        <title>ProgettoTweb | @yield('title', '')</title>
    </head>
    <body id="top" style="background: #ffffff; color: #000000">
        <div class="bgded" style="background-image:url('../public/images/background/letto_stretta.jpg');"> 
            <div class="wrapper row1">
                <header id="header" class="hoc clear">
                    <div id="logo" class="fl_left"> 
                        <h1><a href="{{ route('home') }}">TrovAffitto</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right"> 
                        @include('layouts/_navbarpubbl')
                    </nav>
                </header>
            </div>

            <div class="overlay btmspace-80">
                <div id="breadcrumb" class="hoc clear"> 
                    @yield('menu')
                </div>
            </div>
        </div>
        
        <div class="bgded row6"> 
            <main class="hoc container1 clear"> 
               @yield('content')
            </main>
        </div>

        <!-- Founders -->
        @yield('founders')


        <div class="bgded overlay row4" >
            <footer id="footer" class="hoc clear"> 
                <div class="one_quarter first">
                    <h6 class="heading">Contatti</h6>
                    <ul class="nospace linklist">
                        <li>Telefono &nbsp 071 8547145</li>
                        <li>Email &nbsp TrovAffito@gmail.com</li>

                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="heading"><a href="../TrovAffitto/pagine/condizioniuso.html">Regolamento generale d'uso</a></h6>
                    <ul class="nospace linklist">
                        <li>.............</li>
                        <li>.............</li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="heading">Localizzazione</h6>
                    <ul class="nospace linklist">
                        <li>.............</li>
                        <li>.............</li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="heading">Social</h6>
                    <ul class="nospace clear latestimg">
                        <li><a class="imgover" href="#"><img src="../TrovAffitto/images/demo/100x100.png" alt=""></a></li>
                    </ul>
                </div>

            </footer>
        </div>

        <div class="wrapper row5">
            <div id="copyright" class="hoc clear"> 
                <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved </p>
            </div>
        </div>

        <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="resources/js/scripts/jquery.min.js"></script>
        <script src="resources/js/scripts/jquery.backtotop.js"></script>
        <script src="resources/js/scripts/jquery.mobilemenu.js"></script> 
    </body>
</html>