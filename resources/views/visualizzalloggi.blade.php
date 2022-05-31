@extends('layouts.servpubbl')

@section('title', 'Catalogo')

@section('menu')
<article>
    <h3 class="heading">I Tuoi Alloggi</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home &#9658</a></li>
    <li><a href="#">I tuoi alloggi</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Gestisci i tuoi Alloggi</p>
</div>

<div class="sectiontitle">
    <a class="btn" style="padding: 15px 25px 15px 25px; font-size: 1.8em" href="" >Inserisci un Nuovo Annucio</a>
</div>

<ul class="nospace group overview btmspace-80">
    
    @foreach ($accommodations as $accommodation)
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">
            
            <!-- Porzione dell'immagine dell'alloggio -->
            <div class="one_half first">
                <!-- Slide container -->
                <div class="slideshow-container">
                    <img src= " {{asset($accommodation->foto)}} " style="width:550px; height: 350px;">
                </div>
                
            <!-- Porzione delle info dell'alloggio -->
            </div>
            <div class="one_half">
                <ul class="nospace group inspace-15" style="">
                    <li class="one first ">
                        <article>
                            <h6 class="heading">{{ $accommodation->titolo_annuncio }}</h6>
                            <p class="nospace"><b>{{ $accommodation->canone_affitto }} €/mese</b></p>
                            <p class="nospace"> Locazione: {{ $accommodation->citta }} ({{ $accommodation->provincia }}), {{ $accommodation->indirizzo }}</p>
                            <p class="nospace"> Tipologia: {{ $accommodation->tipologia }} </p>
                            <p class="nospace">Periodo disponibilità: dal {{ $accommodation->inizio_disponibilita }} al {{ $accommodation->fine_disponibilita }}</p>
                            <p class="nospace">Superficie: {{ $accommodation->superficie_tot }} m^2 </p>
                            <br>
                            <a class="btn" style="padding: 10px; margin-right: 60px" href="{{ route('infoalloggio', [$accommodation->id]) }}" >Maggiori Informazioni</a>
                            <a class="btn" style="padding: 10px;" href="" >Elimina Alloggio</a>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </li>
    <br> 
    @endforeach
    
</ul>

@include('pagination.paginator', ['paginator' => $accommodations])

<br> 
@endsection