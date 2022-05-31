<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css/layout_base.css') }}"  rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <title>TrovAffitto | @yield('title', '')</title>
    </head>
    <body id="top">
        
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left"> 
                    <h1><a href="{{ route('home') }}">TrovAffitto</a></h1>
                </div>
                <nav id="mainav" class="fl_right"> 
                    @include('layouts/_navbar')
                </nav>
            </header>



            <div class="wrapper row3">
                <main class="hoc container clear"> 
                    <!-- main body -->
                    <section id="introblocks">
                        @yield('content')
                    </section>
                    <!-- / main body -->
                    <div class="clear"></div>
                </main>
            </div>
        </div>    
        

        <!-- Footer -->
        @include('layouts/footer')

        <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.backtotop.js') }}"></script>
        <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
        

            
    </body>
</html>