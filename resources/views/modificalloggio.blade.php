@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('menu')
<article>
    <h3 class="heading">Modifica Alloggio</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('visualizzalloggi') }}">I tuoi Alloggi</a></li>
    <li><a href="{{ route('infoalloggiolocatore', [$alloggio->id]) }}">Info alloggio</a></li>
    <li><a href="#">Modifica Alloggio</a></li>
</ul>
@endsection

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 80%; padding: 30px; margin-left: auto; margin-right: auto; " >
    <h3><b><center>Modifica Alloggio</center></b></h3>

    <div class="container-contact" >
        <div class="wrap-contact1">
            {!! Form::open(['action' => ['GestioneAlloggiController@updateAlloggio', $alloggio->id], 'method' => 'POST', 'files' => true, 'class' => 'classic-form']) !!} 
            
            <h6><b>Informazione Generali</b></h6>

            <div  class="">
                <p style="display: inline-flex; margin-block-start: 0em; align-items: center;">
                    {{ Form::label('titolo_annuncio', 'Titolo ', ['class' => 'label-input']) }} &nbsp 
                    {{ Form::text('titolo_annuncio', $alloggio->titolo_annuncio , ['class' => 'input ', 'id' => 'titolo_annuncio', 'size' => 70, 'maxlength' => '100']) }} &nbsp &nbsp &nbsp 
                </p>
                @if ($errors->first('titolo_annuncio'))
                <ul class="errors">
                    @foreach ($errors->get('titolo_annuncio') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('citta', 'Città', ['class' => 'label-input']) }} &nbsp
                    {{ Form::text('citta', $alloggio->citta , ['class' => 'input','id' => 'citta', 'size' => 40]) }} &nbsp &nbsp &nbsp 
                </p>

                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('provincia', 'Provincia', ['class' => 'label-input']) }} &nbsp
                    {{ Form::text('provincia', $alloggio->provincia , ['class' => 'inputUpper','id' => 'provincia', 'size' => 5, 'placeholder' => 'sigla', 'maxlength' => '2']) }}
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


            <div  class="wrap-input">
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('indirizzo', 'Indirizzo', ['class' => 'label-input']) }} &nbsp
                    {{ Form::text('indirizzo', $alloggio->indirizzo , ['class' => 'input','id' => 'indirizzo', 'size' => 70]) }}
                </p>
                @if ($errors->first('indirizzo'))
                <ul class="errors">
                    @foreach ($errors->get('indirizzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div>
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('posti_tot', 'Numero posti letto totali alloggio', ['class' => 'label-input']) }} &nbsp
                    {{ Form::number('posti_tot', $alloggio->posti_tot , ['class' => 'input','id' => 'posti_tot',  'min' => 0, 'max' => 50]) }}
                </p>
                @if ($errors->first('posti_tot'))
                <ul class="errors">
                    @foreach ($errors->get('posti_tot') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
           
            
            <br>
            
            @if($alloggio->tipologia == 'appartamento')
            
            <div>
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('n_camere', 'Numero camere', ['class' => 'label-input']) }} &nbsp
                    {{ Form::number('n_camere', $alloggio->n_camere , ['class' => 'input','id' => 'n_camere',  'min' => 0, 'max' => 50]) }} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                </p>

                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::label('stanzepresenti', 'Stanze presenti', ['class' => 'label-input']) }} &nbsp &nbsp &nbsp</p>
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::checkbox('cucina', '1' , $alloggio->cucina , ['class' => 'input','id' => 'cucina']) }} Cucina &nbsp
                    {{ Form::checkbox('locale_ricreativo', '1' , $alloggio->locale_ricreativo , ['class' => 'input','id' => 'locale_ricreativo']) }} Locale ricreativo
                </p>

                @if ($errors->first('n_camere'))
                <ul class="errors">
                    @foreach ($errors->get('n_camere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

            </div>  
            
            @else
            
            <div>
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('letti_stanza', 'Letti nella Stanza', ['class' => 'label-input']) }} &nbsp
                    {{ Form::number('letti_stanza', $alloggio->letti_stanza , ['class' => 'input','id' => 'letti_stanza', 'min' => 0, 'max' => 50]) }} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                </p>


                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::label('angolo_studio', 'Stanze presenti', ['class' => 'label-input']) }} &nbsp &nbsp &nbsp</p>
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::checkbox('angolo_studio', '1' , $alloggio->angolo_studio , ['class' => 'input','id' => 'angolo_studio']) }} Angolo studio
                </p>

                @if ($errors->first('letti_stanza'))
                <ul class="errors">
                    @foreach ($errors->get('letti_stanza') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

            </div> 
 
            @endif
            
            <div  class="wrap-input">
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('canone_affitto', 'Canone', ['class' => 'label-input']) }} &nbsp
                    {{ Form::text('canone_affitto', $alloggio->canone_affitto , ['class' => 'input','id' => 'canone_affitto', 'size' => 15, 'placeholder' => 'euro/mese', 'maxlength' => '5']) }} &nbsp &nbsp &nbsp
                </p>

                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('superficie', 'Superficie', ['class' => 'label-input']) }} &nbsp
                    {{ Form::text('superficie', $alloggio->superficie , ['class' => 'input','id' => 'superficie', 'size' => 15, 'placeholder' => 'mq', 'maxlength' => '4']) }}
                </p>

                @if ($errors->first('canone_affitto'))
                <ul class="errors">
                    @foreach ($errors->get('canone_affitto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

                @if ($errors->first('superficie'))
                <ul class="errors">
                    @foreach ($errors->get('superficie') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <h6><b>Periodo disponibilità</b></h6>

            <div  class="wrap-input">
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('inizio_disponibilita', 'Inizio Disponibilità', ['class' => 'label-input']) }} &nbsp
                    {{ Form::date('inizio_disponibilita', $alloggio->inizio_disponibilita , ['class' => 'input','id' => 'inizio_disponibilita']) }} &nbsp &nbsp &nbsp 
                </p>


                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('fine_disponibilita', 'Fine Disponibilità', ['class' => 'label-input']) }} &nbsp
                    {{ Form::date('fine_disponibilita', $alloggio->fine_disponibilita , ['class' => 'input','id' => 'fine_disponibilita']) }} 
                </p>

                @if ($errors->first('inizio_disponibilita'))
                <ul class="errors">
                    @foreach ($errors->get('inizio_disponibilita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

                @if ($errors->first('fine_disponibilita'))
                <ul class="errors">
                    @foreach ($errors->get('fine_disponibilita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <h6><b>Vincoli sul Locatario</b></h6>

            <div>
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::label('genere_locatario', 'Preferenza genere', ['class' => 'label-input']) }} &nbsp &nbsp &nbsp
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::radio('genere_locatario', 'M', ( $alloggio->genere_locatario =="M" ? true : false ) , ['class' => 'input','id' => 'generem']) }} M &nbsp
                    {{ Form::radio('genere_locatario', 'F', ( $alloggio->genere_locatario =="F" ? true : false ), ['class' => 'input','id' => 'generef']) }} F
                </p>
                </p>
                @if ($errors->first('genere_locatario'))
                <ul class="errors">
                    @foreach ($errors->get('genere_locatario') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div> 

            <div  class="wrap-input">
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('eta_min_locatario', 'Preferenza età minima', ['class' => 'label-input']) }} &nbsp
                    {{ Form::number('eta_min_locatario', $alloggio->eta_min_locatario , ['class' => 'input','id' => 'eta_min_locatario',  'min' => 16, 'max' => 120]) }} &nbsp &nbsp &nbsp 
                </p>

                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('eta_max_locatario', 'Preferenza età massima', ['class' => 'label-input']) }} &nbsp
                    {{ Form::number('eta_max_locatario', $alloggio->eta_max_locatario , ['class' => 'input','id' => 'eta_max_locatario', 'min' => 16, 'max' => 120]) }}
                </p>

                @if ($errors->first('eta_min_locatario'))
                <ul class="errors">
                    @foreach ($errors->get('eta_min_locatario') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

                @if ($errors->first('eta_max_locatario'))
                <ul class="errors">
                    @foreach ($errors->get('eta_max_locatario') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <h6><b>Servizi</b></h6>

            <div  class="wrap-input">
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::label('servizio', 'Seleziona i servizi', ['class' => 'label-input']) }} &nbsp &nbsp &nbsp
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::checkbox('fibra', 1,  $servizi[0]  , ['class' => 'input','id' => 'fibra']) }} Fibra ottica &nbsp
                    {{ Form::checkbox('postoauto', 2, $servizi[1], ['class' => 'input','id' => 'postoauto']) }} Posto auto riservato &nbsp
                    {{ Form::checkbox('lavatrice', 3, $servizi[2] , ['class' => 'input','id' => 'lavatrice']) }} Lavatrice &nbsp
                </p> 
                <p style="display: inline-flex; margin-block-start: 0em;align-items: center;">
                    {{ Form::checkbox('ariacondizionata', 4,  $servizi[3], ['class' => 'input','id' => 'ariacondizionata']) }} Aria condizionata &nbsp
                    {{ Form::checkbox('allarme', 5, $servizi[4] , ['class' => 'input','id' => 'allarme']) }} Impianto di allarme &nbsp
                    {{ Form::checkbox('portablindata', 6, $servizi[5], ['class' => 'input','id' => 'portablindata']) }} Porta blindata 
                </p>
                
            </div>

            <h6><b>Descrizione</b></h6>

            <div  class="wrap-input" >
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }} &nbsp
                    {{ Form::textarea('descrizione', $alloggio->descrizione , ['class' => 'input','id' => 'descrizione', 'cols' => 60, 'rows' =>8]) }}
                </p>
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <h6><b>Immagine</b></h6>
            <p>Inserisci una nuova immagine se vuoi sostituire quella in uso</p>

            <div  class="wrap-input" >
                <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                    {{ Form::label('foto', 'Immagine alloggio', ['class' => 'label-input']) }} &nbsp
                    {{ Form::file('foto',  ['class' => 'input','id' => 'foto']) }}
                </p>
                @if ($errors->first('foto'))
                <ul class="errors">
                    @foreach ($errors->get('foto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
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

