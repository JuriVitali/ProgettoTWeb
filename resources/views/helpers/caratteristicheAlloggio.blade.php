<p class="nospace">Tipologia: &nbsp {{$accommodation->tipologia}}</p>

@if ($accommodation->tipologia == 'appartamento')
    <p class="nospace">Superficie: &nbsp {{$accommodation->superficie}} m^2</p>
    <p class="nospace">Posti letto totatli: &nbsp {{$accommodation->posti_tot}}</p>
    <p class="nospace">Camere: &nbsp {{$accommodation->n_camere}}</p>
    
    @if ($accommodation->cucina)
        <p class="nospace">Cucina: presente</p>
    @else
        <p class="nospace">Cucina: assente</p>
    @endif
    
    @if ($accommodation->locale_ricreativo)
        <p class="nospace">Locale ricreativo: presente</p>
    @else
        <p class="nospace">Locale ricreativo: assente</p>
    @endif
    
    
@else 
    <p class="nospace">Superficie camera: &nbsp {{$accommodation->superficie}} m^2</p>
    <p class="nospace">Posti totali nell'alloggio: &nbsp {{$accommodation->posti_tot}}</p>
    <p class="nospace">Letti nella camera: &nbsp {{$accommodation->letti_stanza}}</p>
    
    @if ($accommodation->angolo_studio)
        <p class="nospace">Angolo studio: presente</p>
    @else
        <p class="nospace">Angolo studio: assente</p>
    @endif
@endif