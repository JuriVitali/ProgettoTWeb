<div class="inspace-10" style="overflow: auto; display: flex; flex-direction: column-reverse; height: 280px; background-image: url(/images/background/chat.png); background-size: cover;">
<div class="group send-message" style="background-color: #BBB;">
    {{ Form::open(array('route' => 'chat_new_locatore', 'id' => 'send_message_new_locatore', 'class' => 'send-message-form')) }}

    <div   style="width: 85%;">
        {{ Form::label('locatore', '', ['class' => '', 'id' => 'message', 'placeholder' => 'Locatore']) }}
        {{ Form::textarea('locatore', '', ['class' => 'message-area', 'id' => 'usernameLoc', 'placeholder' => 'Inserisci l\'username del locatore']) }}
    </div>
    
    <div   style="width: 85%;">
        {{ Form::textarea('text_mess', '', ['class' => 'message-area', 'id' => 'message', 'placeholder' => 'Scrivi un messaggio']) }}
    </div>

    <div style="display: flex; align-items: center;">
        {{ Form::submit('Invia', ['class' => 'send-btn', 'id' => 'sub-btn']) }}
    </div>

    {{ Form::close() }}    
</div>
