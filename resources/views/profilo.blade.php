
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('menu')
<article>
    <h3 class="heading"> Profilo</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Profilo</a></li>
</ul>
@endsection

@section('content')

<!-- messaggio che viene mostrato per l'avvenuta aggiunta dell'alloggio -->
@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
        @foreach (session('success') as $message)
            <center><p class="msg">{{ $message }}</p></center>
        @endforeach
    @else
        {{ session('success') }}
    @endif
</div>
@endif

<div class="group one" style=" margin: auto; border-radius: 5px; background-color: #EEE; width: 40%; padding: 25px 50px; ">
    <div class="sectiontitle">
    <p class="heading underline font-x2" >Profilo</p>
</div>
    <div class="one_half first">
        <p><b>Username</b></p>
        <p><b>Tipo</b></p>
        <p><b>Nome</b></p>
        <p><b>Cognome</b></p>
        <p><b>Data Nascita</b></p>
        <p><b>Sesso</b></p>
        <p><b>Città</b></p>
        <p><b>Provincia</b></p>
        <p><b>Indirizzo</b></p>
    </div>

    <div class="one_half">
        <p> {{ Auth::user()->username }}</p>
        <p> {{ Auth::user()->role }}</p>
        <p> {{ Auth::user()->name }}</p>
        <p> {{ Auth::user()->surname }}</p>
        <p> {{ Auth::user()->data_nascita }}</p>
        <p> {{ Auth::user()->genere }}</p>
        <p> {{ Auth::user()->citta }}</p>
        <p> {{ Auth::user()->provincia }}</p>
        <p> {{ Auth::user()->indirizzo }}</p>
    </div>
</div>
            
<div class="one" style="display:flex; flex-direction: column; align-items: center; margin: 40px auto;">
    <a class="btn-upd-prof" href="{{ route('modificaprofilo') }}">Modifica Informazioni utente</a>
    <a class="btn-upd-prof" href="{{ route('cambiapassword') }}">Cambia Password</a>
    <a class="btn-upd-prof" href="{{ route('cambiausername') }}">Cambia Username</a>
</div>

@endsection