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

<!-- Porzione con filtri per i locatari -->
@can('isLocatario')
    @include('helpers/filtriCatalogo')
@endcan
                
    @foreach ($accommodations as $accommodation)
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">

            <!-- Porzione dell'immagine dell'alloggio -->
            <div class="one_half first">
                <img src= " {{asset($accommodation->foto)}} " style="width:550px; height: 350px;">

                <!-- Segnalazione alloggio già affittato -->
                @if ($accommodation->data_locazione != null)
                <img src="{{asset('/images/background/affittato.png')}}" style="width:300px; height: 150px; margin-top: -350px; margin-left: 125px;">
                @endif
            </div>    

            <!-- Porzione delle info dell'alloggio -->
            <div class="one_half">
                <article style="padding: 20px 10px 0px 5px;">
                
                    <h6 class="heading">{{ $accommodation->titolo_annuncio }}</h6>
                    <p class="nospace"><b>{{ $accommodation->canone_affitto }} €/mese</b></p>
                    <p class="nospace"> Locazione: {{ $accommodation->citta }} ({{ $accommodation->provincia }}), {{ $accommodation->indirizzo }}</p>
                    <p class="nospace"> Tipologia: {{ $accommodation->tipologia }} </p>
                    <p class="nospace">Periodo disponibilità: dal {{ $accommodation->inizio_disponibilita }} al {{ $accommodation->fine_disponibilita }}</p>

                    @if ($accommodation->tipologia == 'appartamento')
                    <p class="nospace">Superficie: {{ $accommodation->superficie }} m^2 </p>
                    @else
                    <p class="nospace">Superficie camera: {{ $accommodation->superficie }} m^2 </p>
                    @endif

                    <br>
                    <a class="btn" style="text-align: center; width: 86%;" href="{{ route('infoalloggio', [$accommodation->id]) }}" >Maggiori Informazioni</a>

                    <!-- Pulsanti per il locatario: "Contatta locatore" e "Invia una proposta" -->
                    @can('isLocatario')                       
                    <div class="one" style="margin-top: 10px" >
                        
                        <!-- Pulsanti attivi se l'alloggio non è stato ancora affittato -->
                        @if($accommodation->data_locazione == null)
                        <a class="btn2" style="text-align: center; width: 41%; margin-right: 1.5%;" href="{{ route('chat_new_locatore', [$accommodation->proprietario]) }}" >Contatta locatore</a>
                        <a class="btn2" style="text-align: center; width: 41%; margin-left: 1.5%;" href="{{ route('InvioProposta', [$accommodation->id]) }}" >Invia una proposta</a>
                        
                        <!-- Pulsanti disattivati se l'alloggio è stato ancora affittato -->
                        @else
                        <a class="btn2disabled" style="text-align: center; width: 41%; margin-right: 1.5%;" >Contatta locatore</a>
                        <a class="btn2disabled" style="text-align: center; width: 41%; margin-left: 1.5%;" >Invia una proposta</a>
                        @endif
                        
                    </div>
                    <br>
                    @endcan
                    
                </article>
            </div>
        </section>
    </li>
    <br> 
    @endforeach

</ul>

@include('pagination.paginator', ['paginator' => $accommodations])

<br> 
@endsection