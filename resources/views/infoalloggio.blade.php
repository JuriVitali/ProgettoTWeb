@extends('layouts.vuota')

@section('title', 'Informazioni Alloggio')

@section('content')
<div class="bgded row6"> 
  <main class="hoc container1 clear"> 
  <!-- main body -->
  <div class="sectiontitle">
    <p class="heading underline font-x2">Appartamento in via ...</p>
  </div>
  <ul class="nospace group overview btmspace-80">
    <li class="one first">
        <section class="group" style="background:#F0F2F5; padding-left: 30px;">
            <div class="clear">
                <h6 class="heading"><br>Affitto#1</h6>
              </div>
             <div class="one_half first">
                 <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <img src="../images/demo/catalogo/Monolocale_rossi.webp" style="width:550px; height: 350px;">
                    <div class="text">Interno</div>
                    </div>
                
                    <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <img src="../images/demo/catalogo/bagno_rossi.jpg" style="width:550px; height: 350px;">
                    <div class="text">Bagno</div>
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
                    <p class="nospace">Affittiamo un confortevole monolocale di 35 mq circa in zona Bligny, situato al terzo piano con 
                        ascensore, completamente e finemente arredato. Composto da Ingresso, zona Notte e zona Giorno in unico ambiente 
                        con angolo cottura e Bagno con box doccia. Non ci sono Balconi. Il canone mensile ammonta a 600 euro+ 100 euro 
                        di spese condominiali con riscaldamento centralizzato incluso.
                        Ideale per uno studente o un lavoratore</p>
                        <a class="btn" href="#" >Maggiori Informazioni</a>
                  </article>
                </li>
              </ul>
            </div>
            <li class="one first btmspace-50">
                <article>
                  <h6 class="heading">Canone d'affitto: &nbsp <b>600 $/mese</b></h6>
                  <h6 class="heading">Locazione: &nbsp <b>Roma (RO), Via Dante Alighieri 13 </b></h6>
                  <h6 class="heading">Disponibilità: &nbsp <b>dal 01-09-2022 al 01-02-2023 </b></h6>
                  <p class="nospace">1 locali &nbsp 35 mq</p>
                  <p class="nospace"> <br> </p>
                  <p class="nospace">Affittiamo un confortevole monolocale di 35 mq circa in zona Bligny, situato al terzo piano con 
                      ascensore, completamente e finemente arredato. Composto da Ingresso, zona Notte e zona Giorno in unico ambiente 
                      con angolo cottura e Bagno con box doccia. Non ci sono Balconi. Il canone mensile ammonta a 600 euro+ 100 euro 
                      di spese condominiali con riscaldamento centralizzato incluso.
                      Ideale per uno studente o un lavoratore</p>
                      <a class="btn" href="#" >Maggiori Informazioni</a>
                </article>
              </li>
          </section>
    </li>
    
  </main>
</div>