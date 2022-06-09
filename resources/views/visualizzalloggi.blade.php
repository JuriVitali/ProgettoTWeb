@extends('layouts.servpubbl')

@section('title', 'Catalogo')

@section('scripts')
<script>
function ConfirmDelete()
  {
  var x = confirm("Sei sicuro di volere cancellare l'alloggio?");
  if (x)
    return true;
  else{
      event.preventDefault();
      return false;
    }
  }
</script>
@endsection

@section('menu')
<article>
    <h3 class="heading">I Tuoi Alloggi</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">I tuoi alloggi</a></li>
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

<div class="sectiontitle">
    <p class="heading underline font-x2">Gestisci i tuoi Alloggi</p>
</div>

<div class="sectiontitle">
    <a class="btn-acc-a" href="{{ route('inseriscialloggio') }}" >Inserisci un nuovo Annucio</a>
</div>

<ul class="nospace group overview btmspace-80">
    
    @foreach ($accommodations as $accommodation)
    <li class="one first">
        <section class="group" style="background:#F0F2F5;">
            
            <!-- Porzione dell'immagine dell'alloggio -->
            <div class="one_half first">
                <img src= " {{asset($accommodation->foto)}} " style="width:550px; height: 350px;">

                <!-- Segnalazione alloggio già affittato -->
                @if ($accommodation->data_locazione != null)
                <img src="{{asset('/images/background/affittato.png')}}" style="width:300px; height: 150px; margin-top: -350px; margin-left: 125px;">
                @endif
            </div> 
                
            <!-- Porzione delle info dell'alloggio -->
            <div class="one_half">
                <ul class="nospace group inspace-15" style="">
                    <li class="one first ">
                        <article>
                            <h6 class="heading">{{ $accommodation->titolo_annuncio }}</h6>
                            <p class="nospace"><b>{{ $accommodation->canone_affitto }} €/mese</b></p>
                            <p class="nospace"> Locazione: {{ $accommodation->citta }} ({{ $accommodation->provincia }}), {{ $accommodation->indirizzo }}</p>
                            <p class="nospace"> Tipologia: {{ $accommodation->tipologia }} </p>
                            <p class="nospace">Periodo disponibilità: dal {{ $accommodation->inizio_disponibilita }} al {{ $accommodation->fine_disponibilita }}</p>
                            <p class="nospace">Superficie: {{ $accommodation->superficie }} m^2 </p>
                            <br>
                            <a class="btn center" style="padding: 10px; margin-bottom: 20px; width:50%;" href="{{ route('infoalloggiolocatore', [$accommodation->id]) }}" >Maggiori Informazioni</a>
                            {!!Form::open(['action' => ['GestioneAlloggiController@destroy', $accommodation->id], 'method' => 'POST', 'onsubmit' => 'ConfirmDelete()'])!!}
                                {{Form::submit('Elimina Alloggio', ['class' => 'btn-acc-d'])}}
                            {!!Form::close()!!}
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </li>
    <br> 
    @endforeach
    
</ul>

@include('pagination.paginator', ['paginator' => $accommodations])

<br> 
@endsection


