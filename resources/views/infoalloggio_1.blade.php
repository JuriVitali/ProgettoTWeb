<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{ asset('css/layout_base.css') }}"  rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
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




            <div class="wrapper row3">
                <main class="hoc container clear"> 
                    <!-- main body -->
                    <section id="introblocks">
                        <div class="bgded row6"> 
                            <main class="hoc container1 clear"> 
                                <!-- main body -->
                                <br> <br>
                                <div class="sectiontitle">
                                    <h6 class="heading underline"><b>Appartamento in Via Dante Alighieri 13, Roma (RO)</b></h6>
                                </div>
                                <ul class="nospace group overview btmspace-80">
                                    <li class="one first">
                                        <section class="group" style="background:#F0F2F5; padding: 30px;">
                                            
                                            <div class="one_half first">

                                                <div class="slideshow-container">
                                                    <img src="{{ asset('images/servizi/Monolocale_rossi.webp') }}" style="width:550px; height: 350px;">
                                                    <br>
                                                    <p style="font-size:medium;"><b>Descrizione</b></p>
                                                    <p class="nospace">Affittiamo un confortevole monolocale di 35 mq circa in zona Bligny, situato al terzo piano con 
                                                        ascensore, completamente e finemente arredato. Composto da Ingresso, zona Notte e zona Giorno in unico ambiente 
                                                        con angolo cottura e Bagno con box doccia. Non ci sono Balconi. Il canone mensile ammonta a 600 euro+ 100 euro 
                                                        di spese condominiali con riscaldamento centralizzato incluso.
                                                        Ideale per uno studente o un lavoratore</p>
                                                </div>

                                                <br>


                                            </div>
                                            <div class="one_half">
                                                <ul class="nospace group inspace-15">
                                                    <li class="one first btmspace-50">
                                                        <article>
                                                            <div class="">
                                                                <h6 class="heading">Canone d'affitto: &nbsp <b>600 $/mese</b></h6>
                                                                <h6 class="heading">Locazione: &nbsp <b>Roma (RO), Via Dante Alighieri 13 </b></h6>
                                                                <h6 class="heading">Disponibilità: &nbsp <b>dal 01-09-2022 al 01-02-2023 </b></h6>
                                                            </div>
                                                            <div>
                                                                <p style="font-size:medium;"><b>Caratteristiche</b></p>
                                                                <p class="nospace">Tipologia: &nbsp Appartamento</p>
                                                                <p class="nospace">Superficie totale: &nbsp 75 m^2</p>
                                                                <p class="nospace">Posti letto: &nbsp 2</p>
                                                                <p class="nospace">Camere: &nbsp 1</p>
                                                                <p class="nospace">Cucina: &nbsp Si</p>
                                                                <p class="nospace">Locale ricreativo: &nbsp No</p>
                                                            </div>
                                                            <div>
                                                                <p style="font-size:medium;"><b>Servizi</b></p>
                                                                <p class="nospace">	&FilledSmallSquare; Fibra ottica &nbsp &FilledSmallSquare; Aria condizionata</p>
                                                            </div>
                                                            <p style="font-size:medium;"><b>Vincoli preferenziali</b></p>
                                                            <p class="nospace">	&FilledSmallSquare; Il locatario deve essere di genere maschile</p>
                                                            <p class="nospace">	&FilledSmallSquare; Il locatario deve avere tra i 16 e 23 anni</p>
                                                            <!-- <a class="btn" href="#" >Maggiori Informazioni</a> -->
                                                        </article>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </section>
                                    </li>

                            </main>
                        </div>
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