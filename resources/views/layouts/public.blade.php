<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css/layout_base.css') }}"  rel="stylesheet" type="text/css" media="all">
        <title>ProgettoTweb | @yield('title', '')</title>
    </head>
    <body id="top">
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

            <div class="overlay">
                <div id="pageintro" class="hoc clear"> 
                    <article>
                        <h3 class="heading">Trova l'alloggio dei tuoi sogni</h3>
                    </article>
                </div>
            </div>
        </div>
        
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
        
        <div class="bgded row3" > 
            <main class="hoc container1 clear"> 
                <!-- main body -->
                <div class="sectiontitle">
                    <p class="heading underline font-x2">Servizi</p>
                </div>
                <ul class="nospace group overview btmspace-80">
                    <li class="one first">
                        <section class="group spazio">
                            <div class="first">
                                <!-- Slideshow container -->
                                <div class="slideshow-container">
                                    <!-- Full-width images with number and caption text -->
                                    <div class="mySlides fade" style="padding: 50px; padding-right: 50px; background:#F0F2F5; border-radius: 30px;">
                                        <article>
                                            <h6 class="heading" style="color:#B946AD">Servizio Locatore #1</h6>
                                            <img class="imgr borderedbox inspace-5" src="images/servizi/annuncio_affitto.jpg" alt="">
                                            <p class="nospace">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <br>
                                            <p><h6 class="heading" style="color:#B946AD">Servizio Locatore #2</h6></p>
                                            <img class="imgl borderedbox inspace-5" src="images/servizi/proposta_acquisto .jpeg" alt="">
                                            <p class="nospace">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <br>
                                            <p><h6 class="heading" style="color:#B946AD">Servizio Locatore #3</h6></p>
                                            <img class="imgr borderedbox inspace-5" src="images/servizi/chat.jpg" alt="">
                                            <p class="nospace">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                        </article>
                                        <div id='seconds-counter-locatore' class="text" style="padding-right: 110px; color: rgb(255, 0, 0);">Locatore</div>
                                    </div>

                                    <div class="mySlides fade" style="padding: 50px; padding-right: 50px; background:#F0F2F5; border-radius: 30px;">
                                        <article>
                                            <h6 class="heading" style="color:#B946AD">Servizio Locatario #1</h6>
                                            <img class="imgr borderedbox inspace-5" src="images/servizi/ricerca_affitto.jpg" alt="">
                                            <p class="first nospace">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <br>
                                            <p><h6 class="heading" style="color:#B946AD">Servizio Locatario #2</h6></p>
                                            <img class="imgl borderedbox inspace-5" src="images/servizi/chat.jpg" alt="">
                                            <p class="nospace">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <br>
                                            <p><h6 class="heading" style="color:#B946AD">Servizio Locatario #3</h6></p>
                                            <img class="imgr borderedbox inspace-5" src="images/servizi/proposta.jpg" alt="">
                                            <p class="nospace">orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                                                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
                                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </article>
                                        <div id='seconds-counter-locatario' class="text" style="padding-right: 110px; color: rgb(255, 0, 0);">Locatario</div>
                                    </div>

                                    <!-- Next and previous buttons -->
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                </div>


                                <br>

                                <!-- The dots/circles -->
                                <div style="text-align:center">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                </div>
                            </div>
                        </section>
                    </li>
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