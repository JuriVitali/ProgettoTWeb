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



<div class="one first">
    <h6>Ricerca l'alloggio che fa per te</h6>
    <div class="wrap-contact">
        {{ Form::open(array('route' => 'filtra_alloggi', 'class' => '')) }}
        
        <!-- Canone di affitto -->
        <div  class="">
            {{ Form::label('canone_affitto', 'Canone di affitto', ['class' => '']) }}
            {{ Form::number('canone_affitto_min', '', ['class' => '', 'min' => '0', 'max' => '50000', 'step' => '100', 'placeholder'=> 'Min']) }}
            {{ Form::number('canone_affitto_max', '', ['class' => '', 'min' => '0', 'max' => '50000', 'step' => '100', 'placeholder'=> 'Max']) }}
        </div>

        <!-- Periodo di locazione -->
        <div  class="">
            {{ Form::label('periodo_locazione', 'Periodo di locazione', ['class' => '']) }}
            {{ Form::date('data_inizio', '', ['class' => '', 'max' => '2030-12-31', 'placeholder'=> 'Da', 'id' => 'data']) }}
            {{ Form::date('data_fine', '', ['class' => '', 'max' => '2030-12-31', 'placeholder'=> 'A', 'id' =>'data']) }}
        </div>
        
        <!-- Tipologia -->
        <div  class="">
            {{ Form::label('tipologia', 'Tipologia', ['class' => '']) }}
            {{ Form::select('tipologia', ['tutte'=> 'Tutte', 'appartamento' => 'Appartamento', 'posto letto' => 'Posto letto'], 'tutte', ['class' => '']) }}
        </div>
        
        <!-- Dimensione -->
        <div  class="">
            {{ Form::label('dimensione', 'Dimensione', ['class' => '']) }}
            {{ Form::number('dimensione_min', '', ['class' => '', 'min' => '0', 'max' => '5000', 'step' => '10', 'placeholder'=> 'Min']) }}
            {{ Form::number('dimensione_max', '', ['class' => '', 'min' => '0', 'max' => '5000', 'step' => '10', 'placeholder'=> 'Max']) }}
        </div>

        <!-- Posti letto totali -->
        <div  class="">
            {{ Form::label('posti_letto_totali', 'Posti letto nell\'alloggio', ['class' => '']) }}
            {{ Form::number('posti_letto_min', '', ['class' => '', 'min' => '0', 'max' => '10', 'step' => '1', 'placeholder'=> 'Min']) }}
            {{ Form::number('posti_letto_max', '', ['class' => '', 'min' => '0', 'max' => '10', 'step' => '1', 'placeholder'=> 'Max']) }}
        </div>
    
        <!-- Servizi -->
        <div class="">
            {{ Form::label('servizi', 'Servizi inclusi', ['class' => '']) }}
            
            {{ Form::label('fibra_ottica', 'Fibra Ottica', ['class' => '']) }}
            {{ Form::checkbox('servizi', 1) }}
            {{ Form::label('posto_auto', 'Posto Auto Riservato', ['class' => '']) }}
            {{ Form::checkbox('servizi', 2) }}
            {{ Form::label('lavatrice', 'Lavatrice', ['class' => '']) }}
            {{ Form::checkbox('servizi', 3) }}
            {{ Form::label('aria condizionata', 'Aria condizionata', ['class' => '']) }}
            {{ Form::checkbox('servizi', 4) }}
            {{ Form::label('allarme', 'Impianto di allarme', ['class' => '']) }}
            {{ Form::checkbox('servizi', 5) }}
            {{ Form::label('porta_blindata', 'Porta Blindata', ['class' => '']) }}
            {{ Form::checkbox('servizi', 6) }}
        </div>

        <!-- Caratteristiche appartamento -->
        <div  class="" id="caratt_app">
            <!-- Cucina -->
            <div  class="">
                {{ Form::label('cucina', 'Cucina', ['class' => '']) }}
                {{ Form::checkbox('cucina', true) }}
            </div>

            <!-- Locale Ricreativo -->
            <div  class="">
                {{ Form::label('locale_ricreativo', 'Locale Ricreativo', ['class' => '']) }}
                {{ Form::checkbox('locale_ricreativo', true) }}
            </div>
        </div>
        
        <!-- Caratteristiche posto letto -->
        <div  class="" id="caratt_letto">
            <!-- Letti nella camera -->
            <div  class="">
                {{ Form::label('letti_camera', 'Tipologia camera', ['class' => '']) }}
                {{ Form::select('letti_camera', [
                '0' => 'Qualsiasi',
                '1' => 'Singola', 
                '2' => 'Doppia',
                '3' => 'Tripla', 
                '4' => 'Quadrupla'
                ],
                '0', ['class' => '']) }}
            </div>

            <!-- Angolo studio -->
            <div  class="">
                {{ Form::label('angolo_studio', 'Angolo studio', ['class' => '']) }}
                {{ Form::checkbox('angolo_studio', true) }}
            </div>
        </div>
        
        
        <!-- Reset -->
        <div class="">
            {{ Form::reset('Azzera', ['class' => '']) }}
        </div>
        
        <!-- Submit -->
        <div class="">
            {{ Form::submit('Cerca', ['class' => '']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>


