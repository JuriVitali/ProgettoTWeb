@extends('layouts.servpubbl')

@section('title', 'Proposte ricevute')

@section('menu')
<article>
    <h3 class="heading"> Proposte Ricevute</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home &#9658</a></li>
    <li><a href="#">Proposte inviate</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Visualizza le proposte Ricevute</p>
</div>
<ul class="nospace group overview btmspace-80">

       
            
                 
    @foreach ($accommodations as $accommodation)   
    
        @foreach ($proposals as $proposal)
            @foreach($users as $user)
        
    
    @if ($accommodation->proprietario == Auth::id() and $accommodation->id == $proposal->alloggio and $proposal->mittente == $user->id  )
    <h6 class="heading"><b><center>Proposte per: {{ $accommodation->titolo_annuncio }}</center></b></h6>
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">
            
            <!-- Porzione delle info dell'alloggio opzionato -->
            <div class="one_half first">
                
               
                
                <article style="padding: 20px 10px 0px 20px;">
                    
                    <h6 class="heading"><b>Proposta da parte di {{$user->name}} {{$user->surname}}</b></h6>
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
                    
                    <p class="nospace"> messaggio per il locatore: {{ $proposal->testo }} </p>
                    
                    <br>
                    
                </article>
                
                
            </div>
            
            <!--Pulsante elimina-->
       
           
        </section>
    </li>
    <br> 
    @endif
            @endforeach
        @endforeach
    @endforeach
</ul>



@include('pagination.paginator', ['paginator' => $accommodations])

<br> 
@endsection
