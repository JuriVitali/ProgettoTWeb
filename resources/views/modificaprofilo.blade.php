
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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
                        if($('#msg').length < 1){
                            $('#wrap1').append('<div id="msg"><li style="margin-top: 0px;margin-bottom: 0px;">Il nome può solo contenere lettere</li></div>');
                        }
                        else $('#msg').remove();
                    }else  $('#msg').remove();
                    break;
                case '_surname':
                    if (element.val().length < 2 || element.val().length > 30) {
                        element.addClass('_error');
                    }
                    break;
                /*case '_data_nascita':
                    var pattern = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
                    if (!pattern.test(element.val())) {
                        element.addClass('_error');
                    }
                    break;   */
                    
                case '_citta':
                    var pattern = /^([A-Za-z])+$/;
                    if (element.val().length < 2 || element.val().length > 30) {
                        element.addClass('_error');
                    }
                    if (!pattern.test(element.val())) {
                        element.addClass('_error');
                    }
                    break;
                case '_provincia':
                    var pattern = /^([A-Z])+$/;
                    if (element.val().length < 2) {
                        element.addClass('_error');
                    }
                    if (!pattern.test(element.val())) {
                        element.addClass('_error');
                    }
                    break;
                 case '_indirizzo':
                    if (element.val().length < 2 || element.val().length > 40) {
                        element.addClass('_error');
                    }
                    break;
            }
            ;
        });

        $('form').on('submit', function (event) {
            $(':input').trigger('change');
            if ($(':input').filter('[class*=_error]').length != 0) {
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
        <div class="wrap-contact1" >
            <!-- {!! Form::model($user, [ 'route' => ['profiloupdate', $user->id], 'method' => 'post' ]) !!} -->
             {!! Form::open(['action' => ['Auth\UpdateController@update'], 'method' => 'POST', 'id' => 'form', 'class' => 'classic-form']) !!} 
            
            <div style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                
                <div  class="wrap-input1" id="wrap1">
                    <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                        {{ Form::label('name', 'Nome', ['class' => 'label-input']) }} &nbsp 
                        {{ Form::text('name', $user->name, ['class' => '_name', 'id' => 'name', 'size' => 12]) }} &nbsp &nbsp &nbsp 
                    </p>
                    
                    <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                        {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }} &nbsp
                        {{ Form::text('surname', $user->surname, ['class' => ' _surname ', 'id' => 'surname','size' => 18]) }}
                    </p>
                    
                    @if ($errors->first('name'))
                    <ul class="errors">
                        @foreach ($errors->get('name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                    
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
                       {{ Form::date('data_nascita', $user->data_nascita, ['class' => '_data_nascita','id' => 'data_nascita']) }} &nbsp &nbsp &nbsp 
                   </p>
                   
                   <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                       {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }} &nbsp &nbsp 
                       
                           {{ Form::radio('genere', 'M', false,['class' => 'input','id' => 'generem']) }} M &nbsp
                           {{ Form::radio('genere', 'F', false, ['class' => 'input','id' => 'generef']) }} F
                       
                   </p>
                   
                   @if ($errors->first('data_nascita'))
                   <ul class="errors">
                       @foreach ($errors->get('data_nascita') as $message)
                       <li>{{ $message }}</li>
                       @endforeach
                   </ul>
                   @endif
                   
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
                            {{ Form::text('citta', $user->citta, ['class' => '_citta','id' => 'citta', 'size' => 27]) }} &nbsp &nbsp
                        </p>
                       
                        <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                            {{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }} &nbsp
                            {{ Form::text('provincia', $user->provincia, ['class' => '_provincia ','id' => 'provincia', 'size' => 2]) }}
                        </p>
                        
                         @if ($errors->first('citta'))
                        <ul class="errors">
                            @foreach ($errors->get('citta') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                        
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
                    {{ Form::text('indirizzo', $user->indirizzo , ['class' => '_indirizzo','id' => 'indirizzo', 'size' => 45]) }}
                </p>
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
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
