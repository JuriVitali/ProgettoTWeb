@extends('layouts.servpubbl')

@section('title', 'Proposte inviate')

@section('menu')
<article>
    <h3 class="heading"> Proposte inviate</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home &#9658</a></li>
    <li><a href="#">Proposte inviate</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Visualizza le proposte inviate</p>
</div>
<ul class="nospace group overview btmspace-80">

       
            
                 
    @foreach ($accommodations as $accommodation)             
        @foreach ($proposals as $proposal)
    
    @if ($accommodation->id == $proposal->alloggio)
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">
            {!! Form::open(['action' => ['ProposalController@EliminaProposta', $proposal->id], 'method' => 'POST', 'name' =>'elimina']) !!} 
             
            <!-- Porzione delle info dell'alloggio opzionato -->
            <div class="one_half first">
                
                <article style="padding: 20px 10px 0px 20px;">
                
                    <h6 class="heading"><b>{{ $accommodation->titolo_annuncio }}</b></h6>
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
       
            
            <!-- 
            <div class="container-form-btn" align="center">                
                {{ Form::submit('Elimina Proposta', ['class' => 'form-btn1']) }}
            </div>
            -->
            {{ Form::close() }}
        </section>
    </li>
    <br> 
    @endif
        @endforeach
    @endforeach
</ul>


            <div class="mamt">
                
                <div class="modal-content">
                    <div>vdsb </div>
                </div>
            </div>


@include('pagination.paginator', ['paginator' => $accommodations])

<br> 
@endsection

