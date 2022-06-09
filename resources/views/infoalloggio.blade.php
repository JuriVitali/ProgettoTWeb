@extends('layouts.servpubbl')

@section('title', 'Informazioni Alloggio')

<!-- percorso con link per tornare alle pagine precedenti -->
@section('menu')
 @if(isset($proprietario))
    <article>
        <h3 class="heading"> Info Alloggio</h3>
    </article>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('visualizzalloggi') }}">I tuoi Alloggi</a></li>
        <li><a href="#">Info alloggio</a></li>
    </ul>
 @else
    <article>
        <h3 class="heading"> Catalogo</h3>
    </article>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('catalogo') }}">Catalogo</a></li>
        <li><a href="#">Info alloggio</a></li>
    </ul>
 @endif
@endsection

@section('content')

<!-- messaggio che viene mostrato per l'avvenuta modifica -->
@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
        @foreach (session('success') as $message)
            <center><p class="msg">{{ $message }}</p></center>
        @endforeach
    @else
        {{ session('success') }}
    @endif
</div>
@endif

<div class="bgded row6"> 
    <main class="hoc container1 clear"> 
        <!-- main body -->
        <br> <br>
        

        <section class="group" style="background:#F0F2F5; padding: 30px;">
            
            <div class="sectiontitle">
            <h2 class="heading underline font-x2">{{$accommodation->titolo_annuncio}}</h2>
        </div>

            <!-- colonna sinistra -->
            <div class="one_half first">

                <!-- immagine -->
                <img src="{{ asset($accommodation->foto) }}" style="width:550px; height: 350px;">

                <!-- Segnalazione alloggio già affittato -->
                @if ($accommodation->data_locazione != null)
                <img src="{{asset('/images/background/affittato.png')}}" style="width:300px; height: 150px; margin-top: -350px; margin-left: 125px;">
                @endif
                <br>

                <!-- descrizione -->
                <section class="group inspace-30" style="background:#E1E0E1;">
                    <h6 class="heading underline">Descrizione</h6>
                    <p class="nospace">{{$accommodation->descrizione}}</p>
                </section>
                <br>
                
            </div>

            <!-- colonna destra -->
            <div class="one_half">

                <!-- Informazioni principali -->
                <section class="group inspace-30">
                    <h6 class="heading">Canone d'affitto: &nbsp {{$accommodation->canone_affitto}} €/mese</h6>
                    <h6 class="heading">Locazione: &nbsp {{$accommodation->citta}} ({{$accommodation->provincia}}), {{$accommodation->indirizzo}} </h6>
                    <h6 class="heading">Disponibilità: &nbsp dal {{$accommodation->inizio_disponibilita}} al {{$accommodation->fine_disponibilita}} </h6>
                </section> 

                <!-- Pulsanti per il locatario: "Contatta locatore" e "Invia una proposta" -->
                @can('isLocatario')
                <div class="one" style="padding-bottom: 10px; padding-top: -10px;" >
                    <a class="btn center" style="width: 47.5%; margin-right: 1.8%;" href="{{ route('chat_new_locatore', [$accommodation->proprietario]) }}" >Contatta il locatore</a>
                    <a class="btn center" style= "width: 47.5%; margin-left: 1.8%;" href="{{ route('catalogo') }}" >Invia una proposta</a>
                </div>
                <br>
                @endcan

                <!-- Informazioni secondarie -->
                <section class="group inspace-30" style="background:#E1E0E1;">

                    <!-- Caratteristiche -->
                    <h6 class="heading underline">Caratteristiche</h6>
                    @include('helpers/caratteristicheAlloggio', ['accommodation' => $accommodation])

                    <br> <br>          

                    <!-- Servizi -->
                    <h6 class="heading underline">Servizi</h6>
                    @foreach ($services as $service)
                    <p class="nospace">{{$service[0]->descrizione}}</p>
                    @endforeach

                    <br> <br> 

                    <!-- Vincoli sul locatario -->
                    <h6 class="heading underline">Vincoli sul locatario</h6>
                    @include('helpers/vincoliLocatario', ['eta_min' => $accommodation->eta_min_locatario, 'eta_max' => $accommodation->eta_max_locatario, 'genere' => $accommodation->genere_locatario])  
                </section>

            </div>
            @if(isset($proprietario))
                <div>
                    <center><a class="btn" style="padding: 15px 25px 15px 25px; font-size: 1.8em; margin-top: 35px" href="{{ route('modificalloggio', [$accommodation->id]) }}" >Modifica Annuncio</a></center>
                </div>
            @endif
        </section>
        <br> <br> <br> <br>

    </main>
</div>

@endsection

