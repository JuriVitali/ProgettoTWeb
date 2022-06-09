@extends('layouts.servpubbl')

@section('title', 'statistiche')

@section('menu')
<article>
    <h3 class="heading"> Statistiche</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">statistiche</a></li>
</ul>
@endsection
@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Statistiche</p>
</div>
<div class="bgded row6" name="prova">  <h6>Inserisci Parametri:</h6> </div>
<div style="background:#F0F2F5; padding: 20px;">        

    {!! Form::open(['route' =>'cambiastatistiche', 'method' => 'GET','name'=>'modifica', 'class'=>'classic-form']) !!}

    <div class="one_third first">{{ Form::label('data_iniziale', 'Data inizio', ['class' => 'label-input']) }} 
        {{ Form::date('data_iniziale','', ['class' => 'input']) }}
        @if ($errors->first('data_iniziale'))
        <ul class="errors">
            @foreach ($errors->get('data_iniziale') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif </div>
    <div class="one_third">{{ Form::label('data_finale', 'Data Fine', ['class' => 'label-input']) }} 
        {{ Form::date('data_finale','', ['class' => 'input']) }}
        @if ($errors->first('data_finale'))
        <ul class="errors">
            @foreach ($errors->get('data_finale') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif </div>
    <div class="one_third">
        {{ Form::label('locazione', 'Tipologia alloggio', ['class' => 'label-input']) }} 
        {{ Form::select('tipologia',[
            'appartamento'=>'appartamento',
          'posto letto'=>'posto letto',
        'tutte'=>'tutte'],'tutte')}}
    </div>
    &nbsp

    <div  align="center">                
        {{ Form::submit('invia', ['class' => 'btn']) }}
    </div>

    {{ Form::close() }}
</div>
<br>
@if(isset ($newdata) && isset($proposte) && isset($allocati))
&nbsp
<div>

    <ul class="nospace linklist">
        <li> <div class="one_half first"><h5>Il numero di annunci presenti nel sito:</h5></div> <div class="one_half" style="color:#B946AD">{{$newdata}} </div></li>
        &nbsp <br> <br>
        <li> <div class="one_half first"><h5>Numero di proposte fatte dai potenziali locatari:</h5></div> <div class="one_half" style="color:#B946AD">{{$proposte}}</div></li>
        &nbsp
        <br> <br>
        <li> <div class="one_half first"><h5>Numero alloggi locati:</h5></div> <div class="one_half" style="color:#B946AD">{{$allocati}}</div></li>
        &nbsp  <br>

    </ul>
</div>

@endif
@endsection
    