@extends('layouts.servpubbl')

@section('title', 'Informazioni Alloggio')

@section('content')
<div class="bgded row6"> 
    <main class="hoc container1 clear"> 
        <!-- main body -->
        <br> <br>
        <div class="sectiontitle">
            <h2 class="heading underline"><b>{{$accommodation->titolo_annuncio}}</b></h2>
        </div>
        <ul class="nospace group overview btmspace-80">
            <li class="one first">
                <section class="group" style="background:#F0F2F5; padding: 30px;">

                    <section class="group" style="background:#93FF96; padding: 20px; margin-top: -50px; margin-bottom: 30px; margin-left: 600px; margin-right: 150px;">
                        <h6 style="margin-bottom: 0px; text-align: center;">Disponibile</h6>
                    </section>

                    <!-- colonna sinistra -->
                    <div class="one_half first">

                        <!-- immagine -->
                        <img src="{{ asset($accommodation->foto) }}" style="width:550px; height: 350px;">
                        <br>

                        <!-- descrizione -->
                        <section class="group" style="background:#E1E0E1; padding: 30px;">
                            <h6 class="heading underline">Descrizione</h6>
                            <p class="nospace">{{$accommodation->descrizione}}</p>
                        </section>
                        <br>

                    <!-- colonna destra -->
                    </div>
                    <div class="one_half">

                        <!-- Informazioni principali -->
                        <section class="group"; padding: 30px;">
                            <h6 class="heading">Canone d'affitto: &nbsp {{$accommodation->canone_affitto}} €/mese</h6>
                            <h6 class="heading">Locazione: &nbsp {{$accommodation->citta}} ({{$accommodation->provincia}}), {{$accommodation->indirizzo}} </h6>
                            <h6 class="heading">Disponibilità: &nbsp dal {{$accommodation->inizio_disponibilita}} al {{$accommodation->fine_disponibilita}} </h6>
                        </section> 

                        <br>

                        <!-- Informazioni secondarie -->
                        <section class="group " style="background:#E1E0E1; padding: 30px;">
                            
                            <!-- Caratteristiche -->
                            <h6 class="heading underline">Caratteristiche</h6>
                            <p class="nospace">Tipologia: &nbsp {{$accommodation->tipologia}}</p>
                            <p class="nospace">Superficie totale: &nbsp {{$accommodation->superficie_tot}} m^2</p>
                            <p class="nospace">Posti letto: &nbsp {{$accommodation->posti_tot}}</p>
                            <p class="nospace">Camere: &nbsp {{$accommodation->n_camere}}</p>
                            <p class="nospace">Cucina: &nbsp {{$accommodation->cucina}}</p>
                            <p class="nospace">Locale ricreativo: &nbsp {{$accommodation->locale_ricreativo}}</p>

                            <br> <br>          
                            
                            <!-- Servizi -->
                            <h6 class="heading underline">Servizi</h6>
                            
                            <p class="nospace">Fibra ottica</p>
                            <p class="nospace">Impianto di allarme</p>
                            
                            
                            <br> <br> 
                            
                            <!-- Vincoli sul locatario -->
                            <h6 class="heading underline">Vincoli sul locatario</h6>
                            <p class="nospace">	&FilledSmallSquare; Il locatario deve essere di genere maschile</p>
                            <p class="nospace">	&FilledSmallSquare; Il locatario deve avere tra i 16 e 23 anni</p>   
                        </section>

                    </div>

                </section>
            </li>
        </ul>
    </main>
</div>

@endsection

