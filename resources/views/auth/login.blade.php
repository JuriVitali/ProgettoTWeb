@extends('layouts.vuota')

@section('title', 'Accesso')

@section('content')
<div class="borderedbox" style="background: #E7E7E7; width: 30%; padding: 30px; margin-left: auto; margin-right: auto; margin-top: 250px" >
    <h3><b>Accedi a TrovAffitto</b></h3>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'login', 'class' => 'classic-form')) }}
                 
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
            
            <div class="container-form-btn" align="center">                
                {{ Form::submit('Login', ['class' => 'form-btn1']) }}
            </div>
            
            <div  class="wrap-input">
                 <p> Non sei registrato? <a  href="{{ route('register') }}">Registrati</a></p>
             </div>  
            
            {{ Form::close() }}
        </div>
    </div>

</div>

<div style="padding-bottom: 120px"></div>    
@endsection
