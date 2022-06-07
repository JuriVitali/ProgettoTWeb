@guest
style="background-image:url('/images/background/letto_stretta.jpg');"
@endguest

@can('isLocatore')
style="background-image:url('/images/background/affittolocatore.jpg');"
@endcan

@can('isLocatario')
style="background-image:url('/images/background/sfondosalone1290x800.jpg');"
@endcan

@can('isAdmin')
style="background-image:url('/images/background/amministratore.jpg');"
@endcan