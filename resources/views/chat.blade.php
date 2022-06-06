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
        <div class="center heading font-x2" style="border-bottom: 1px solid #666; padding: 20px; color: #FFF; background-color: #B946AD; margin-bottom: 0px;">Contatti</div>
        
        @can('isLocatore')
        <div style="overflow: auto; height: 467px; background-color: #F4D1F0;">      
        @endcan
        @can('isLocatario')
        <div style="overflow: auto; height: 392px; background-color: #F4D1F0;">            
        @endcan
            
            <!-- Generazione dei bottoni corrispondenti ai contatti -->
            @foreach($contacts as $contact)
            
                <!-- Contatto selezionato -->
                @if(isset($selectedUser) and $contact->id == $selectedUser->id)
                    <a class="btn3_selected center bold" href="{{ route('chat_messages', [$contact->id]) }}"> {{ $contact->name }} {{ $contact->surname}}</a>
                
                <!-- Contatto non selezionato -->
                 @else
                    <a class="btn3 center bold" href="{{ route('chat_messages', [$contact->id]) }}"> {{ $contact->name }} {{ $contact->surname}}</a>
                @endif
            @endforeach
        </div>
        
        <!-- pulsante per messaggiare un nuovo locatore -->
        @can('isLocatario')
        <a class="btn-new_con center bold" href="{{ route('chat_new_locatore', [$contact->id]) }}">Messaggia nuovo locatore</a>           
        @endcan

    </section>
    
    <!-- Porzione della chat -->
    <section class="three_quarter" style="border: 1px solid #666; height: 550px;">
        
        <!-- Titolo della chat -->
        @if(isset($selectedUser))
            <div class="heading font-x2 chat_title">{{ $selectedUser->name }} {{ $selectedUser->surname}}</div>
        @else
             <div class="heading font-x2 chat_title">Chat</div>
        @endif    
             
            <!-- Porzione in cui vengono mostrati i messaggi e la form per l'invio di un nuovo messaggio se è stato selezionato un utente -->
            @if(isset($messages))
                <!-- Prozione dei messaggi -->
                @include('helpers/messagges', ['messages' => $messages])                  
                
                <!-- Form per l'invio di un nuovo messaggio -->
                @include('helpers/sendMessageForm', ['selectedUserId' => $selectedUser->id])  
                
            @else
                <div class="inspace-10" style="overflow: auto; display: flex; flex-direction: column-reverse; height: 468px; background-image: url(/images/background/chat.png); background-size: cover;">
            @endif
               
    </section>
@endsection