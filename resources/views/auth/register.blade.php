@extends('layouts.vuota')

@section('title', 'Registrazione')

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; margin-top: 250px" >
    <h3><b><center>Registrazione</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}
            
            <div style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                <div  class="wrap-input">
                    <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                        {{ Form::label('name', 'Nome', ['class' => 'label-input']) }} &nbsp 
                        {{ Form::text('name', '', ['class' => 'input', 'id' => 'name','size' => 12]) }} &nbsp &nbsp &nbsp 
                    </p>
                    @if ($errors->first('name'))
                    <ul class="errors">
                        @foreach ($errors->get('name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div  class="wrap-input">
                    <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                        {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }} &nbsp
                        {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname','size' => 16]) }}
                    </p>
                    @if ($errors->first('surname'))
                    <ul class="errors">
                        @foreach ($errors->get('surname') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
                
            <div style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                <div  class="wrap-input">
                   <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                       {{ Form::label('data_nascita', 'Data Nascita', ['class' => 'label-input']) }} &nbsp
                       {{ Form::date('data_nascita', '', ['class' => 'input','id' => 'data_nascita']) }} &nbsp &nbsp &nbsp 
                   </p>
                   @if ($errors->first('data_nascita'))
                   <ul class="errors">
                       @foreach ($errors->get('data_nascita') as $message)
                       <li>{{ $message }}</li>
                       @endforeach
                   </ul>
                   @endif
               </div>

                <div  class="wrap-input">

                   <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                       {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }} &nbsp &nbsp 
                       
                           {{ Form::radio('genere', 'M', false,['class' => 'input','id' => 'generem']) }} M &nbsp
                           {{ Form::radio('genere', 'F', false, ['class' => 'input','id' => 'generef']) }} F
                       
                   </p>
                   @if ($errors->first('genere'))
                   <ul class="errors">
                       @foreach ($errors->get('genere') as $message)
                       <li>{{ $message }}</li>
                       @endforeach
                   </ul>
                   @endif
               </div>
            </div>    
            
            <div style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    <div  class="wrap-input">
                        <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                            {{ Form::label('citta', 'Città', ['class' => 'label-input']) }} &nbsp
                            {{ Form::text('citta', '', ['class' => 'input','id' => 'citta', 'size' => 30]) }} &nbsp &nbsp
                        </p>
                        @if ($errors->first('citta'))
                        <ul class="errors">
                            @foreach ($errors->get('citta') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <div  class="wrap-input" >
                        <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                            {{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }} &nbsp
                            {{ Form::text('provincia', '', ['class' => 'input','id' => 'provincia', 'size' => 2]) }}
                        </p>
                        @if ($errors->first('provincia'))
                        <ul class="errors">
                            @foreach ($errors->get('provincia') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
            </div>
            
            <div  class="wrap-input">
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label-input']) }} &nbsp
                    {{ Form::text('indirizzo', '', ['class' => 'input','id' => 'indirizzo', 'size' => 45]) }}
                </p>
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input  rs1-wrap-input" >
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('image', 'Immagine Profilo ', ['class' => 'label-input']) }} &nbsp &nbsp
                    {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                </p>
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::label('role', 'Scegli la tipologia', ['class' => 'label-input']) }} &nbsp &nbsp &nbsp
                    <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                        {{ Form::radio('role', 'locatore', false, ['class' => 'input','id' => 'rolelocatore']) }} locatore &nbsp
                        {{ Form::radio('role', 'locatario', false, ['class' => 'input','id' => 'rolelocatario']) }} locatario
                    </p>
                </p>
                @if ($errors->first('role'))
                <ul class="errors">
                    @foreach ($errors->get('role') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <br>
            
             <div  class="wrap-input" align="center">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input" align="center">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }} 
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input" align="center">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="container-form-btn" align="center">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection
