@extends('layouts.servpubbl')

@section('title', 'Invio Proposta')

@section('content')
<div class="borderedbox" style="text-align: left; background: #E7E7E7;width: 53%; padding: 30px; margin-left: auto; margin-right: auto; margin-top: 30px; margin-bottom: 100px" >
    <h3><b><center>Invia una proposta per:</center></b></h3>
    <b><center><p style="font-size:25px;">{{$accommodation->titolo_annuncio}}</p></center></b>


    <div class="container-contact" >
        <div class="wrap-contact1">
            {!! Form::open(['action' => ['ProposalController@__insert', $accommodation->id, Auth::id()], 'method' => 'POST', 'name' =>'modifica']) !!} 

            <div style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                <div  class="wrap-input">
                    <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">

                        {{ Form::textarea('testo', 'Richiedo la priorità per affittare questo alloggio', ['class' => 'input', 'id' => 'testo', 'cols' => 62, 'rows' => 15]) }} &nbsp &nbsp &nbsp 
                    </p>

                </div>  
            </div>


            <!--Messaggio preimpostato per i vincoli-->

            <p style="font-size:20px;"> Inviando questa proposta affermo di rispettare i seguenti vincoli:</p>
            <br>

            <!--Mostra i vincoli a schermo-->

            <p style="font-size:20px;">- Il genere del locatario deve essere: {{$accommodation->genere_locatario}}</p>
            <p style="font-size:20px;">- L'età del locatario deve essere compresa tra {{$accommodation->eta_min_locatario}} e {{$accommodation->eta_max_locatario}} anni</p>
            <br>



            <div class="container-form-btn" align="center">                
                {{ Form::submit('Invia Proposta', ['class' => 'classic-form']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>

</div>