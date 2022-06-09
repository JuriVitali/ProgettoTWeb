<div class="group send-message" style="background-color: #BBB;">
    {{ Form::open(array('route' => array('send_message', $selectedUserId), 'id' => 'send_message', 'class' => 'send-message-form')) }}

    <div   style="width: 85%;">
        {{ Form::textarea('text_mess', '', ['class' => 'message-area', 'id' => 'message','maxlength' => '150', 'required' => 'true', 'placeholder' => 'Scrivi un messaggio']) }}
    </div>

    <div style="display: flex; align-items: center;">
        {{ Form::submit('Invia', ['class' => 'send-btn', 'id' => 'sub-btn']) }}
    </div>

    {{ Form::close() }}    
</div>
