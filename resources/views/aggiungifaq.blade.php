@extends('layouts.vuota')

@section('title','Aggiungi faq')

@section('content')
<div class="borderedbox" style="background: #E7E7E7; width: 30%; padding: 30px; margin-left: auto; margin-right: auto; margin-top: 250px" >
    <h3><b>Aggiungi Faq</b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'aggiungifaq', 'class' => 'contact-form')) }}
            
            
                <div  class="wrap-input">
                        {{ Form::label('domada', 'Domanda', ['class' => 'label-input']) }} &nbsp 
                        {{ Form::text('domanda', '', ['class' => 'input', 'id' => 'domanda','size' => 40]) }} &nbsp &nbsp &nbsp 
                  @if ($errors->first('domanda'))
                    <ul class="errors">
                        @foreach ($errors->get('domanda') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                     </div>

                <br>
                
                <div  class="wrap-input">
                   
                        {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }} &nbsp
                        {{ Form::textarea('risposta', '', ['class' => 'input', 'id' => 'risposta','rows' => 3,'cols' =>26]) }}
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
