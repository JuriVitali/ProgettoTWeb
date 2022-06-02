@extends('layouts.servpubbl')

@section('title', 'statistiche')

@section('menu')
<article>
    <h3 class="heading"> Statistiche</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">statistiche</a></li>
</ul>
@endsection
@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Statistiche</p>
</div>
  <div class="bgded row6">  <h6>Modifica Statistiche:</h6> 
<form style="background:#F0F2F5; padding: 20px;">
    <div class="one_third first"><label for="dai">Data inizio:</label><input id="dai" type="date" size="25" ></label></div>
        <div class="one_third"><label for="daf">Data fine:</label><input id="daf" type="date" size="25" ></div>
        <div class="one_third"><label for="tial">Tipologia alloggio:</label><select id="tial"><option >appartamento</option><option>posto letto</option><option selected>tutte</option></select></div>
            <br> 
          <br>
          <div align="center"> <a class="btn" name="conferma" href="#">conferma</a></div>
</form>
<br>
  <div>
    <ul class="nospace linklist">
     <li> <div class="one_half first"><h5>Il numero di annunci presenti nel sito:</h5></div> <div class="one_half"></div></li>
     <br> <br><br>
     <li> <div class="one_half first"><h5>Numero di proposte fatte dai potenziali locatari:</h5></div> <div class="one_half"></div></li>
     <br><br><br>
     <li> <div class="one_half first"><h5>Numero alloggi locati:</h5></div> <div class="one_half"></div></li>
    <br><br><br>
    </ul>
  </div>
  </div>

@endsection
    