@extends('layouts.public')

@section('title', 'Home')

@section('content')
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="#"><img src="images/servizi/Registrati.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Sei già registrato a TrovAffitto?</h6>
                <div>
                    <p>Accedi per usufruire delle funzionalità e tutti i vantaggi che offre il sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/servizi/Accedi.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Cerchi alloggi o vuoi offrire alloggi?</h6>
                <div>
                    <p>Registrati come potenziale locatario o locatore per accedere ai servizi del sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/servizi/Catalogo.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza il catalogo delle inserzioni</h6>
                <div>
                    <p>Visualizza il catalogo con tutte le inserzioni presenti nel sito anche senza accedere.</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endsection