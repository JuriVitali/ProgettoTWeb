@extends('layouts.vuota')

@section('title','Aggiungi faq')

@section('content')
<br>
<br>
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Aggiungi Faq</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'aggiungifaq', 'class' => 'contact-form', 'class' => 'classic-form')) }}
            
            
                <div  class="wrap-input" align="center">
                        {{ Form::label('domada', 'Inserisici Domanda', ['class' => 'label-input']) }} 
                        {{ Form::textarea('domanda', '', ['class' => 'input', 'id' => 'domanda','rows' => 3,'cols' =>55]) }} &nbsp &nbsp &nbsp 
                  @if ($errors->first('domanda'))
                    <ul class="errors">
                        @foreach ($errors->get('domanda') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                     </div>

                <br>
                
                <div  class="wrap-input" align="center">
                   
                        {{ Form::label('risposta', 'Inserisci Risposta', ['class' => 'label-input']) }} 
                        {{ Form::textarea('risposta', '', ['class' => 'input', 'id' => 'risposta','rows' => 5,'cols' =>55]) }}
                     @if ($errors->first('risposta'))
                    <ul class="errors">
                        @foreach ($errors->get('risposta') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
       
              <br>
            <div class="container-form-btn" align="center">                
                {{ Form::submit('invia', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection
