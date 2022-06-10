@extends('layouts.servpubbl')

@section('title', 'Invio Proposta')

<!-- percorso con link per tornare alle pagine precedenti -->
@section('menu')
    <article>
        <h3 class="heading">Invia proposta</h3>
    </article>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('catalogo') }}">Catalogo</a></li>
    </ul>
@endsection

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 100px" >
    <h3><b><center>Invia una proposta per:</center></b></h3>
    <b><center><p style="font-size:25px;">{{$accommodation->titolo_annuncio}}</p></center></b>

    {!! Form::open(['action' => ['ProposalController@__insert', $accommodation->id], 'method' => 'POST', 'name' =>'modifica', 'class' => 'classic-form']) !!} 

    {{ Form::textarea('testo', 'Richiedo la priorità per affittare questo alloggio', ['class' => 'textarea', 'id' => 'testo', 'cols' => 62, 'rows' => 15]) }}

    <center>{{ Form::submit('Invia Proposta') }}</center>
    
    {{ Form::close() }}
       
</div>
@endsection('content')