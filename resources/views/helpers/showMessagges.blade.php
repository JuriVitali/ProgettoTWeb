<div class="inspace-10 chat-sfondo" style="overflow: auto; display: flex; flex-direction: column-reverse; height: 347px; background-size: cover;">
<!-- Messaggi -->
@foreach($messages as $message)
<!-- Inviati dall'utente autenticato -->
@if($message->mittente == Auth::id())
<div>
    <div class="group btmspace-15 message-l">
        <p style="margin: 0px; padding: 0px;"> {{ $message->testo }} </p>
        <p class="date-message-l"> {{ $message->data }} </p>
    </div>
</div>
<!-- Ricevuti dall'utente autenticato -->
@else
<div>
    <div class="group btmspace-15 message-r">
        <p style="margin: 0px; padding: 0px;"> {{ $message->testo }} </p>
        <p class="date-message-r" > {{ $message->data }} </p>
    </div>
</div>
@endif
@endforeach
</div>

