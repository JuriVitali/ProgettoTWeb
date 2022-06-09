<div class="inspace-10 chat-sfondo" style="height: 288px; background-size: cover;"></div>
<div class="group send-message-new-loc" style="background-color: #BBB;">
    {{ Form::open(array('route' => 'send_message_new_loc', 'id' => 'send_message_new_locatore', 'class' => 'send-message-form')) }}
    
    <div style="display: flex; flex-direction: column; width: 85%;">
    <div style="display: flex; flex-direction: row;">
        {{ Form::label('locatore', 'Locatore:', ['class' => 'label-new-locatore bold', 'id' => 'labelLocatore']) }}
        
        @if ($locUsername == null)
            {{ Form::text('locatore', '', ['class' => 'username-locatore', 'id' => 'usernameLoc', 'required' => 'true', 'placeholder' => 'Inserisci l\'username del locatore']) }}
        @else
            {{ Form::text('locatore', $locUsername, ['class' => 'username-locatore', 'id' => 'usernameLoc', 'placeholder' => 'Inserisci l\'username del locatore']) }}
        @endif
    </div>
        
        @if ($errors->first('locatore'))
        <ul class="errors">
            @foreach ($errors->get('locatore') as $message)
            <li>{{ $message }}</li>
            @endforeach
        </ul>
        @endif    
    
    <div>
        {{ Form::textarea('text_mess', '', ['class' => 'message-area', 'maxlength' => '150', 'required' => 'true', 'id' => 'message', 'placeholder' => 'Scrivi un messaggio']) }}
    </div>
        
        @if ($errors->first('text_mess'))
            @foreach ($errors->get('text_mess') as $message)
            <li>{{ $message }}</li>
            @endforeach
        @endif
        
    </div>
    
    <div style="display: flex; align-items: end;">
        {{ Form::submit('Invia', ['class' => 'send-btn', 'id' => 'sub-btn']) }}
    </div>

    {{ Form::close() }}    
</div>
