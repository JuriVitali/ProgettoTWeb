@extends('layouts.servpubbl')

@section('title', 'Proposte ricevute')

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
    <h3 class="heading"> Proposte Ricevute</h3>
</article>
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="#">Proposte ricevute</a></li>
</ul>
@endsection

@section('content')
<div class="sectiontitle">
    <p class="heading underline font-x2">Proposte ricevute</p>
</div>
<ul class="nospace group overview btmspace-80">

@foreach ($proposals as $proposal)
<li class="one">
    <section class="group" style="background:#F0F2F5;">

        <!-- Porzione dell'immagine dell'alloggio -->
        <div class="one_half first">
            <img src= " {{asset($proposal->foto)}} " style="width:550px; height: 350px;">
        </div>    

        <!-- Porzione delle info dell'alloggio -->
        <div class="one_half">
            <article style="padding: 20px 30px 10px 10px">

                <h6 class="heading center">Proposta per "{{ $proposal->titolo }}"</h6>
                <p class="nospace">Inoltrata il: {{ $proposal->proposta->data }}</p>
                <p class="nospace">Stato: {{ $proposal->proposta->stato }}</p>
                <br>
                <p class="nospace" style="overflow:auto; height: 120px;">{{ $proposal->proposta->testo }}</p>
                <br>
                
                <!-- Pulsanti per l'accettazione o il rifiuto della proposta -->
                @if($proposal->proposta->stato == 'in valutazione')
                <div style="display: flex; flex-direction: row;">
                <a class="btn-prop-acc" style="background-color: #30BA1A; " href="{{ route('accetta_proposta', [$proposal->proposta->id]) }}" >Accetta</a>
                {!!Form::open(['action' => ['ProposalController@RifiutaProposta', $proposal->proposta->id], 'method' => 'POST', 'onsubmit' => 'ConfirmDelete()'])!!}
                    {{Form::submit('Rifiuta', ['class' => 'btn-prop-d'])}}
                {!!Form::close()!!}
                </div>
                @endif
                

                
            </article>
        </div>
    </section>
    <br> <br>
</li>
@endforeach
@endsection
