@if ($genere == null and $eta_min == null and $eta_max == null)
<p class="nospace">Non ci sono vincoli sul locatario.</p>

@else
    @if ($genere == 'M')
        <p class="nospace"> &FilledSmallSquare; Il locatario deve essere di genere maschile.</p>
        @elseif ($genere == 'F')
            <p class="nospace">	&FilledSmallSquare; Il locatario deve essere di genere femminile.</p>
    @endif
    @if ($eta_min != null and $eta_max != null)
        <p class="nospace"> &FilledSmallSquare; Il locatario deve avere età compresa tra {{$eta_min}} e {{$eta_max}} anni.</p>
        @elseif ($eta_min != null)
            <p class="nospace">	&FilledSmallSquare; Il locatario deve avere almeno {{$eta_min}} anni.</p>
            @elseif ($eta_max != null)
                <p class="nospace"> &FilledSmallSquare; Il locatario deve avere al massimo {{$eta_max}} anni.</p>
    @endif
@endif
