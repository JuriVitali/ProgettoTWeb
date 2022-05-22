<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css/layout_base.css') }}"  rel="stylesheet" type="text/css" media="all">
        <title>ProgettoTweb | @yield('title', '')</title>
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
                
                <br>


      
        
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
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.backtotop.js') }}"></script>
        <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
        <script>
          var slideIndex = 1;
          showSlides(slideIndex);
  
          // Next/previous controls
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }
  
          // Thumbnail image controls
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
  
          function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
          }
        </script>

        <script>
          var slideIndex = 0;
         carousel();
 
         function carousel() {
           var i;
           var x = document.getElementsByClassName("mySlides");
           for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
           }
           slideIndex++;
           if (slideIndex > x.length) {slideIndex = 1}
           x[slideIndex-1].style.display = "block";
           setTimeout(carousel, 15000); // Change every 15 seconds
         }
        </script>

            
    </body>
</html>