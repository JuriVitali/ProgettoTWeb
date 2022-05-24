
@extends('layouts.servpubbl')

@section('title', 'Profilo')

@section('menu')
<article>
    <h3 class="heading"> Chi Siamo</h3>
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
    <ul class="nospace group overview btmspace-80" style="text-align: center;">
      
      <li class="">
        <article>
          <div class="clear">
            <h6 class="heading">Informazioni Profilo</h6>
          </div>
          <p><b>Username</b>&nbsp &nbsp avdv234342fwf</p>
          <p><b>Tipo</b>&nbsp &nbsp {{ Auth::user()->role }}</p>
          <p><b>Nome</b>&nbsp &nbsp {{ Auth::user()->name }}</p>
          <p><b>Cognome</b>&nbsp &nbsp {{ Auth::user()->surname }}</p>
          <p><b>Data Nascita</b>&nbsp &nbsp {{ Auth::user()->data_nascita }}</p>
          <p><b>Sesso</b>&nbsp &nbsp {{ Auth::user()->genere }}</p>
          <p><b>Città</b>&nbsp &nbsp {{ Auth::user()->citta }}</p>
          <p><b>Provincia</b>&nbsp &nbsp {{ Auth::user()->provincia }}</p>
          <p><b>Indirizzo</b>&nbsp &nbsp {{ Auth::user()->indirizzo }}</p>
          <a class="btn" href="#">Modifica profilo</a>
        </article>
      </li>
    </ul>
@endsection