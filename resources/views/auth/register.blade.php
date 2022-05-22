@extends('layouts.vuota')

@section('title', 'Registrazione')

@section('content')
<div class="borderedbox" style="background: #E7E7E7;width: 60%; padding: 30px; margin-left: auto; margin-right: auto; margin-top: 250px" >
    <h3><b>Registrazione</b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('data_nascita', 'Data Nascita', ['class' => 'label-input']) }}
                {{ Form::date('data_nascita', '', ['class' => 'input','id' => 'data_nascita']) }}
                @if ($errors->first('data_nascita'))
                <ul class="errors">
                    @foreach ($errors->get('data_nascita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                {{ Form::radio('genere', '', ['class' => 'input','id' => 'genere']) }} 
                {{ Form::radio('genere', '', ['class' => 'input','id' => 'genere']) }}
                {{ Form::radio('genere', '', ['class' => 'input','id' => 'genere']) }}
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('citta', 'Città', ['class' => 'label-input']) }}
                {{ Form::text('citta', '', ['class' => 'input','id' => 'citta']) }}
                @if ($errors->first('citta'))
                <ul class="errors">
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }}
                {{ Form::text('provincia', '', ['class' => 'input','id' => 'provincia']) }}
                @if ($errors->first('provincia'))
                <ul class="errors">
                    @foreach ($errors->get('provincia') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label-input']) }}
                {{ Form::text('indirizzo', '', ['class' => 'input','id' => 'indirizzo']) }}
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input  rs1-wrap-input" >
                {{ Form::label('image', 'Immagine Profilo', ['class' => 'label-input']) }}
                <center>{{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}</center>
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <br><br><br>
            
             <div  class="wrap-input">
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
            
             <div  class="wrap-input">
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

            <div  class="wrap-input">
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
