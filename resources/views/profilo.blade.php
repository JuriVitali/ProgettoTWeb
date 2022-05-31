
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
<div class="sectiontitle">
      <p class="heading underline font-x2">Profilo</p>
</div>
    <ul class="nospace group overview btmspace-20" align="center" >
      <div class="clear">
            <h6 class="heading">Informazioni Profilo</h6>
       </div>
        
            <li class="one_half first" align="right">
              <article>
                <p><b>Username</b></p>
                <p><b>Tipo</b></p>
                <p><b>Nome</b></p>
                <p><b>Cognome</b></p>
                <p><b>Data Nascita</b></p>
                <p><b>Sesso</b></p>
                <p><b>Città</b></p>
                <p><b>Provincia</b></p>
                <p><b>Indirizzo</b></p>
              </article>
            </li>
            <li class="one_half" align="left">
              <article>

                <p> {{ Auth::user()->username }}</p>
                <p> {{ Auth::user()->role }}</p>
                <p> {{ Auth::user()->name }}</p>
                <p> {{ Auth::user()->surname }}</p>
                <p> {{ Auth::user()->data_nascita }}</p>
                <p> {{ Auth::user()->genere }}</p>
                <p> {{ Auth::user()->citta }}</p>
                <p> {{ Auth::user()->provincia }}</p>
                <p> {{ Auth::user()->indirizzo }}</p>
              </article>
            </li>
            
            
            <li class="">
              <a class="btn" href="{{ route('modificaprofilo', [ Auth::id() ]) }}" align="center">Modifica profilo</a>
            </li>  
            <br>
            <li class="">
              <a class="btn" href="{{ route('cambiapassword', [ Auth::id() ]) }}" align="center">Cambia Password</a>
            </li>  
            <br>
            <li class="">
              <a class="btn" href="{{ route('cambiausername', [ Auth::id() ]) }}" align="center">Cambia Username</a>
            </li> 
    </ul>

    <br> <br>
@endsection