
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('menu')
<article>
    <h3 class="heading">Modifica Faq</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('faq') }}">faq</a></li>
    <li><a href="{{ route('faq') }}">Modifica Faq</a></li>
</ul>
@endsection

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Modifica Faq</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
           
             {!! Form::open(['action' => ['AggiungifaqController@updatefaq', $faq->id], 'method' => 'POST']) !!} 
            
             <div  class="wrap-input" align="center">
                {{ Form::label('domanda', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('domanda', $faq->domanda, ['class' => 'input','id' => 'domanda']) }}
                
            </div>

             <div  class="wrap-input" align="center">
                {{ Form::label('risposta', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::textarea('risposta', $faq->risposta, ['class' => 'input','id' => 'risposta','rows' => 3,'cols' =>26]) }}
              
            </div>
            
           
            
                
            <div class="container-form-btn" align="center">   
                
                {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
            </div>
            
            {!! Form::close() !!}
           
        </div>
    </div>

</div>

<br><br>
@endsection