<div class="inspace-10" style="height: 288px; background-image: url(/images/background/chat.png); background-size: cover;"></div>
<div class="group send-message-new-loc" style="background-color: #BBB;">
    {{ Form::open(array('route' => 'chat_new_locatore', 'id' => 'send_message_new_locatore', 'class' => 'send-message-form')) }}
    
    <div style="display: flex; flex-direction: column; width: 85%;">
    <div style="display: flex; flex-direction: row;">
        {{ Form::label('locatore', 'Locatore:', ['class' => 'label-new-locatore bold', 'id' => 'labelLocatore']) }}
        {{ Form::text('locatore', '', ['class' => 'username-locatore', 'id' => 'usernameLoc', 'placeholder' => 'Inserisci l\'username del locatore']) }}
    </div>
    
    <div>
        {{ Form::textarea('text_mess', '', ['class' => 'message-area', 'id' => 'message', 'placeholder' => 'Scrivi un messaggio']) }}
    </div>
    </div>
    
    <div style="display: flex; align-items: end;">
        {{ Form::submit('Invia', ['class' => 'send-btn', 'id' => 'sub-btn']) }}
    </div>

    {{ Form::close() }}    
</div>
