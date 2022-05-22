@extends('layouts.servpubbl')

@section('title', 'Catalogo')

@section('menu')
<article>
    <h3 class="heading"> Catalogo</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home &#9658</a></li>
    <li><a href="#">Catalogo</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Catalogo Inserzioni</p>
</div>
<ul class="nospace group overview btmspace-80">
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">
            <div class="one_half first">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <img src="images/servizi/Monolocale_rossi.webp" style="width:550px; height: 350px;">
                </div>
            </div>
            <div class="one_half">
                <ul class="nospace group inspace-15" style="">
                    <li class="one first ">
                        <article>
                            <h6 class="heading">Monolocale in Via Rossi 10, Milano</h6>
                            <p class="nospace"><b>600 $/mese</b></p>
                            <p class="nospace">1 locali &nbsp 35 mq</p>
                            <p class="nospace"> <br> </p>
                            <p class="nospace">Affittiamo un confortevole monolocale di 35 mq circa in zona Bligny, situato al terzo piano con 
                                ascensore, completamente e finemente arredato. Composto da Ingresso, zona Notte e zona Giorno in unico ambiente 
                                con angolo cottura e Bagno con box doccia. Non ci sono Balconi. Il canone mensile ammonta a 600 euro+ 100 euro 
                                di spese condominiali con riscaldamento centralizzato incluso.
                                </p>
                            <br>
                            <a class="btn" href="{{ route('infoalloggio') }}" >Maggiori Informazioni</a>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </li>
    <br> 
    <li class="one">
        <section class="group " style="background:#F0F2F5;">
            <div class="one_half first"><img class="inspace-15 borderedbox" src="images/servizi/casa_Affittojpg.jpg" alt=""></div>
            <div class="one_half">
                <ul class="nospace group inspace-15">
                    <li class="one first">
                        <article>
                            <h6 class="heading">Bilocale in Via Verdi 158, Roma</h6>
                            <p class="nospace"><b>700 $/mese</b></p>
                            <p class="nospace">2 locali &nbsp 45 mq </p>
                            <p class="nospace"> <br> </p>
                            <p class="nospace">Affittiamo un confortevole bilocale di 45 mq circa in zona .................................</p>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </li>
    <br> 
    <li class="one">
        <section class="group" style="background:#F0F2F5;">
            <div class="one_half first"><img class="inspace-15 borderedbox" src="images/servizi/casa_Affittojpg.jpg" alt=""></div>
            <div class="one_half">
                <ul class="nospace group inspace-15">
                    <li class="one first ">
                        <article>
                            <h6 class="heading">Trilocale in Via Volta 1, Firenze</h6>
                            <p class="nospace"><b>1200 $/mese</b></p>
                            <p class="nospace">3 locali &nbsp 70 mq </p>
                            <p class="nospace"> <br> </p>
                            <p class="nospace">Affittiamo un confortevole trilocale di 70 mq circa in zona .................................</p>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </li>
</ul>
@endsection