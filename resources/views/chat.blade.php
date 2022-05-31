@extends('layouts.servpubbl')

@section('title', 'Chat')

@section('menu')
<article>
    <h3 class="heading"> Chat</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home &#9658</a></li>
    <li><a href="#">Chat</a></li>
</ul>
@endsection

@section('content')

<section class="group btmspace-80" style="background:#F0F2F5;">
    
    <!-- Colonna contatti -->
    <section class="one_quarter first" style="border: 1px solid #666; height: 550px;">
        <div class="center heading font-x2" style="padding: 20px; color: #FFF; background-color: #B946AD; margin-bottom: 0px;">Contatti</div>
        <div style="overflow: auto; height: 467px;">
            
            @foreach($contacts as $contact)
                <a class="btn3 center bold" href="{{ route('home') }}" > {{ $contact->name }}</a>
            @endforeach
            
            
            <!-- <a class="btn3 center bold" href="{{ route('chat') }}" >Mario Rossi</a> -->
            
            
        </div>
    </section>
    
    <!-- Porzione della chat -->
    <section class="three_quarter" style="border: 1px solid #666; height: 550px;">
        <div class="center heading font-x2" style="padding: 20px; color: #FFF; background-color: #B946AD; margin-bottom: 0px;">Chat</div>
        <div class="inspace-10" style="overflow: auto; display: flex; flex-direction: column-reverse; height: 347px; background-image: url(images/background/chat.png); background-size: cover;">
            
            <!-- Messaggi -->
            <!-- Bisogna metterli in ordine inverso (dal basso verso l'alto) -->
            @for($i=1; $i<=15; $i++)
            <div>
            <div class="group btmspace-15 message-l">
                <p style="margin: 0px; padding: 0px;">Salve, sarei interessato all'appartamento ad Ancona in Via Corinaldo. A che piano si trova?</p>
                <p class="date-message-l">29-05-2022 09:15</p>
            </div>
            </div>
            
            <div>
            <div class="group btmspace-15 message-r">
                <p style="margin: 0px; padding: 0px;">Ciao Marco, si trova al terzo piano.</p>
                <p class="date-message-r">30-05-2022 15:53</p>
            </div>
            </div>
            @endfor
        </div>
            
        <!-- Form per l'invio di un nuovo messaggio -->
        <div class="group send-message" style="background-color: #BBB;">
            {{ Form::open(array('route' => 'catalogo', 'id' => 'send_message', 'class' => 'send-message-form')) }}

            <div   style="width: 85%;">
                {{ Form::textarea('message', '', ['class' => 'message-area', 'id' => 'message', 'placeholder' => 'Scrivi un messaggio']) }}
            </div>
            
            <div>
                {{ Form::hidden('destinatario', '', ['class' => 'input', 'id' => 'destinatario']) }}
            </div>

            <div style="display: flex; align-items: center;">
                {{ Form::submit('Invia', ['class' => 'send-btn', 'id' => 'sub-btn']) }}
            </div>

            {{ Form::close() }}    
            
        </div>
    </section>
@endsection