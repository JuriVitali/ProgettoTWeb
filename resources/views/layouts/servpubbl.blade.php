<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css/layout_base.css') }}"  rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        @show
        @section('scripts')
        @show
        <title>TrovAffitto | @yield('title', '')</title>
    </head>
    <body id="top" style="background: #ffffff; color: #000000">
        <div class="bgded sfondo-gen"> 
            <div class="wrapper row1">
                <header id="header" class="hoc clear">
                    <div id="logo" class="fl_left"> 
                        <h1><a href="{{ route('home') }}">TrovAffitto</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right"> 
                        @include('layouts/_navbar')
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

        <!-- Footer -->
        @include('layouts/footer')

        <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="resources/js/scripts/jquery.min.js"></script>
        <script src="resources/js/scripts/jquery.backtotop.js"></script>
        <script src="resources/js/scripts/jquery.mobilemenu.js"></script> 
    </body>
</html>