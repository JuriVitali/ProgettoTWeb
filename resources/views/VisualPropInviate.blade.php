@extends('layouts.servpubbl')

@section('title', 'Proposte inviate')

@section('scripts')
<script>
function ConfirmDelete()
  {
  var x = confirm("Sei sicuro di volere cancellare la proposta?");
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
    <h3 class="heading"> Proposte inviate</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Proposte inviate</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Proposte inviate</p>
</div>
<ul class="nospace group overview btmspace-80">

@foreach ($proposals as $proposal)
<li class="one first">
    <section class="group" style="background:#F0F2F5;">

        <!-- Porzione dell'immagine dell'alloggio -->
        <div class="one_half first">
            <img src= " {{asset($proposal->foto)}} " style="width:550px; height: 350px;">
        </div>    

        <!-- Porzione delle info dell'alloggio -->
        <div class="one_half">
            <article style="padding: 20px 10px 10px 10px">

                <h6 class="heading center">Proposta per "{{ $proposal->titolo }}"</h6>
                <p class="nospace">Inoltrata il: {{ $proposal->proposta->data }}</p>
                <p class="nospace">Stato: {{ $proposal->proposta->stato }}</p>
                <br>
                <p class="nospace" style="overflow:auto; height: 120px;">{{ $proposal->proposta->testo }}</p>
                <br>
                <div style="display: flex; flex-direction: row;">
                <a class="btn-info-acc" href="{{ route('infoalloggio', [$proposal->accId]) }}" >Dettagli alloggio</a>
                {!!Form::open(['action' => ['ProposalController@EliminaProposta', $proposal->proposta->id], 'method' => 'POST', 'onsubmit' => 'ConfirmDelete()'])!!}
                    {{Form::submit('Annulla proposta', ['class' => 'btn-prop-d'])}}
                {!!Form::close()!!}
                </div>
                
            </article>
        </div>
    </section>
    <br> <br>
</li>
@endforeach
@endsection

