@guest
<article>
    <h3 class="heading">Trova l'alloggio dei tuoi sogni</h3>
</article>
@endguest

@can('isLocatore')
<article>
    <h3 class="heading">Area Locatore</h3>
</article>
@endcan

@can('isLocatario')
<article>
    <h3 class="heading">Area Locatario</h3>
</article>
@endcan

@can('isAdmin')
<article>
    <h3 class="heading">Area Amministratore</h3>
</article>
@endcan