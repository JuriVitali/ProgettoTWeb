
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
       ._error {
            background-color: #f3e4e4;
            border: solid 2px #ff0000;
        }
</style>
<script type="text/javascript">
$(function () {
                $(':input').on('change', function (event) {
                    var element = $(this);
                    element.removeClass('_error');
                switch (element.attr('class')) {
                case '_name':
                    var pattern = /^([A-Za-z])+$/;
                    if (!pattern.test(element.val())) {
                        element.addClass('_error');
                    }
                    break;
                case '_surname':
                    if (element.val().length > 40 && element.val().length < 2) {
                        element.addClass('_error');
                    }
                    break;
                /*case '_email':
                    var pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
                    if (!pattern.test(element.val())) {
                        element.addClass('_error');
                    }
                    break;*/
            }
            ;
        });

        $('form').on('submit', function (event) {
            $(':input').trigger('change');
            if ($(':input').filter('[class*=_error]').length !== 0) {
                return false;
            }
            ;
        });
    });
</script>

@endsection

@section('menu')
<article>
    <h3 class="heading">Modifica Profilo</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('profilo') }}">Profilo</a></li>
    <li><a href="#">Modifica Profilo</a></li>
</ul>
@endsection

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Modifica Profilo</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            <!-- {!! Form::model($user, [ 'route' => ['profiloupdate', $user->id], 'method' => 'post' ]) !!} -->
             {!! Form::open(['action' => ['Auth\UpdateController@update', $user->id], 'method' => 'POST', 'name' =>'modifica']) !!} 
            
            <div style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                
                <div  class="wrap-input">
                    <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                        {{ Form::label('name', 'Nome', ['class' => 'label-input']) }} &nbsp 
                        {{ Form::text('name', $user->name, ['class' => 'input _name', 'id' => 'name', 'size' => 12]) }} &nbsp &nbsp &nbsp 
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
                        {{ Form::text('surname', $user->surname, ['class' => 'input', 'id' => 'surname','size' => 16]) }}
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
                       {{ Form::date('data_nascita', $user->data_nascita, ['class' => 'input','id' => 'data_nascita']) }} &nbsp &nbsp &nbsp 
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
                            {{ Form::text('citta', $user->citta, ['class' => 'input','id' => 'citta', 'size' => 30]) }} &nbsp &nbsp
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
                            {{ Form::text('provincia', $user->provincia, ['class' => 'input','id' => 'provincia', 'size' => 2]) }}
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
                    {{ Form::text('indirizzo', $user->indirizzo , ['class' => 'input','id' => 'indirizzo', 'size' => 45]) }}
                </p>
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
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