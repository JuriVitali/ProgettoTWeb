@guest
<article>
    <h3 class="heading">Trova l'alloggio che fa per te</h3>
</article>
@endguest

@can('isLocatore')
<article>
    <h3 class="heading">Area Locatore</h3>
    <h6>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h6>
</article>
@endcan

@can('isLocatario')
<article>
    <h3 class="heading">Area Locatario</h3>
    <h6>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h6>
</article>
@endcan

@can('isAdmin')
<article>
    <h3 class="heading">Area Amministratore</h3>
</article>
@endcan