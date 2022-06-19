@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        dateMin = new Date().toISOString().split("T")[0];
        $("input#data").attr('min', dateMin);
        $('#caratt_app').hide();
        $('#caratt_letto').hide();
        $("select#tipologia").on('change', function (event) {
                var tipologia = $(this).val();
                switch (tipologia) {
                    case 'appartamento':
                        $('#caratt_app').show();
                        $('#caratt_letto').hide();
                        break;
                    case 'posto letto':
                        $('#caratt_letto').show();
                        $('#caratt_app').hide();
                        break;
                    case 'tutte':
                        $('#caratt_app').hide();
                        $('#caratt_letto').hide();
                        break;
                }
            });
        });
</script>
@endsection



<div class="one first" style="padding: 20px; background: #E7E7E7; margin-bottom: 20px;">
    <h6><center><b>Ricerca l'alloggio che fa per te</b></center></h6>
    <div class="wrap-contact">
        {{ Form::open(array('route' => 'filtra_alloggi', 'method' => 'GET', 'class' => 'classic-form')) }}

        <!-- Canone di affitto -->
        <div  class="">
            <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                {{ Form::label('canone_affitto', 'Canone di affitto', ['class' => '']) }} &nbsp
                {{ Form::number('canone_affitto_min', '', ['class' => '', 'min' => '0', 'max' => '50000', 'step' => '100', 'placeholder'=> 'Min']) }} &nbsp
                {{ Form::number('canone_affitto_max', '', ['class' => '', 'min' => '0', 'max' => '50000', 'step' => '100', 'placeholder'=> 'Max']) }} &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp

            <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                {{ Form::label('periodo_locazione', 'Periodo di locazione', ['class' => '']) }}
                {{ Form::date('data_inizio', '', ['class' => '', 'max' => '2030-12-31', 'placeholder'=> 'Da', 'id' => 'data']) }} &nbsp
                {{ Form::date('data_fine', '', ['class' => '', 'max' => '2030-12-31', 'placeholder'=> 'A', 'id' =>'data']) }}
            <p>
            <p>
        </div>

        <!-- Tipologia -->
        <div  class="">
            <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                {{ Form::label('tipologia', 'Tipologia', ['class' => '']) }} &nbsp
                {{ Form::select('tipologia', ['tutte'=> 'Tutte', 'appartamento' => 'Appartamento', 'posto letto' => 'Posto letto'], 'tutte', ['class' => '']) }}   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

            <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                {{ Form::label('dimensione', 'Dimensione', ['class' => '']) }} &nbsp 
                {{ Form::number('dimensione_min', '', ['class' => '', 'min' => '0', 'max' => '5000', 'step' => '10', 'placeholder'=> 'Min']) }} &nbsp 
                {{ Form::number('dimensione_max', '', ['class' => '', 'min' => '0', 'max' => '5000', 'step' => '10', 'placeholder'=> 'Max']) }} &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


            <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                {{ Form::label('posti_letto_totali', 'Posti letto nell\'alloggio', ['class' => '']) }} &nbsp 
                {{ Form::number('posti_letto_min', '', ['class' => '', 'min' => '0', 'max' => '10', 'step' => '1', 'placeholder'=> 'Min']) }} &nbsp 
                {{ Form::number('posti_letto_max', '', ['class' => '', 'min' => '0', 'max' => '10', 'step' => '1', 'placeholder'=> 'Max']) }}
            </p>

        </div>


        <!-- Reset -->
        <div class="" align="center">
            <p style="display: inline-flex;margin-block-start: 0em;align-items: center;">
                {{ Form::reset('Azzera', ['class' => '']) }}  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                {{ Form::submit('Cerca', ['class' => '']) }}
            </p>
        </div>
        {{ Form::close() }}
    </div>
</div>
