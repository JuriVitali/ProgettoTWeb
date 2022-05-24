@guest
style="background-image:url('../public/images/background/letto_stretta.jpg');"
@endguest

@can('isLocatore')
style="background-image:url('../public/images/background/affittolocatore.jpg');"
@endcan

@can('isLocatario')
style="background-image:url('../public/images/background/sfondosalone1290x800.jpg');"
@endcan

@can('isAdmin')
style="background-image:url('../public/images/background/amministratore.jpg');"
@endcan