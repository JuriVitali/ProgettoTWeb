
@extends('layouts.vuota')

@section('title', 'Modifica faq')

@section('content')
<br>
<br>
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Modifica Faq</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
           
             {!! Form::open(['action' => ['FaqController@updatefaq', $faq->id], 'method' => 'POST']) !!} 
            
             <div  class="wrap-input" align="center">
                {{ Form::label('domanda', 'Modifica Domanda', ['class' => 'label-input']) }}
                {{ Form::textarea('domanda', $faq->domanda, ['class' => 'input','rows' => 3,'cols' =>55]) }}
                 @if ($errors->first('domanda'))
                    <ul class="errors">
                        @foreach ($errors->get('domanda') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
            </div>

             <div  class="wrap-input" align="center">
                {{ Form::label('risposta', 'Modifica Risposta', ['class' => 'label-input']) }}
                {{ Form::textarea('risposta', $faq->risposta, ['class' => 'input','id' => 'risposta','rows' => 5,'cols' =>55]) }}
              
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