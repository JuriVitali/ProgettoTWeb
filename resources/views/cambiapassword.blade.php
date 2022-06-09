
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('menu')
<article>
    <h3 class="heading">Cambia Password</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('profilo') }}">profilo</a></li>
    <li><a href="#">Cambia Password</a></li>
</ul>
@endsection

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Cambia Password</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            <!-- {!! Form::model($user, [ 'route' => ['profiloupdate', $user->id], 'method' => 'post' ]) !!} -->
             {!! Form::open(['action' => ['Auth\UpdateController@updatepassword'], 'method' => 'PUT', 'class' => 'classic-form']) !!} 
            
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
                
                {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
            </div>
            
            {!! Form::close() !!}
           
        </div>
    </div>

</div>

<br><br>
@endsection


<script>
function checklocatore( valore){
    if (valore === 'locatore'){
        return true;
    }
    else {
        return false;
    }
}

function checklocatario( valore){
    if (valore === 'locatario'){
        return true;
    }
    else {
        return false;
    }
}
</script>