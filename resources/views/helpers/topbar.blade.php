@guest
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="{{ route('login') }}"><img style="width: 350px; height:400px;" src="images/topbar/login.jpg" alt=""></a>
            <figcaption>
                <h4 class="heading">Ti sei già registrato a TrovAffitto?</h4>
                <div>
                    <p>Accedi per usufruire delle funzionalità e tutti i vantaggi che offre il sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="{{ route('register') }}"><img style="width: 350px; height:400px;" src="images/topbar/registrati.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Cerchi alloggi o vuoi offrire alloggi?</h6>
                <div>
                    <p>Registrati come potenziale locatario o locatore per accedere ai servizi del sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="{{ route('catalogo') }}"><img src="images/topbar/catalogo_alloggi.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza il catalogo delle inserzioni</h6>
                <div>
                    <p>Visualizza il catalogo con tutte le inserzioni presenti nel sito anche senza accedere.</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endguest

@can('isLocatore')
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="{{ route('inseriscialloggiohome', [Auth::id()]) }}"><img src="images/topbar/inserzione.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Inserisci un'inserzione</h6>
                <div>
                    <p>Crea un nuovo annuncio per un appartamento o posto letto che vuoi affitare.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="{{ route('visualizzalloggi', [Auth::id()]) }}"><img src="images/topbar/alloggi.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza le tue inserzioni</h6>
                <div>
                    <p>Visualizza tutti i tuoi alloggi, inseriscine di nuovi, modifica quelli già presenti e elimina gli annunci obsoleti.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href=""><img src="images/servizi/Registrati.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza proposte</h6>
                <div>
                    <p>Visualizza le proposte che hai ricevuto per i tuoi alloggi e decide se accettarle o rifiutarle.</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endcan

@can('isLocatario')
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="{{ route('catalogo') }}"><img src="images/topbar/ricerca_alloggio.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Ricerca l'alloggio che fa per te</h6>
                <div>
                    <p>Visualizza il catalogo con tutte le inserzioni presenti nel sito o filtrandole attraverso l'apposito filtro.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/servizi/Registrati.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza le tue opzioni</h6>
                <div>
                    <p>Visualizza tutti gli alloggi che hai opzionato.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="{{ asset('images/topbar/messaggi.jpg') }}" alt=""></a>
            <figcaption>
                <h6 class="heading">Messaggia con i locatori</h6>
                <div>
                    <p>Messaggia con i locatori per richiedere informazioni ed, eventualmente, trovare un accordo per l'opzionamento di un alloggio.</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endcan

@can('isAdmin')
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="#"><img src="images/topbar/statistiche.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza Statistiche</h6>
                <div>
                    <p>Visiona le statistiche sugli alloggi a partire da un intervallo temporale e/o dalla tipologia di alloggio.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/topbar/faq.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Modifica FAQ</h6>
                <div>
                    <p>Visualizza, aggiungi, modifica ed elimina le FAQs presentisul sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover " href="{{ route('catalogo') }}"><img src="images/topbar/catalogo_alloggi.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza il catalogo</h6>
                <div>
                    <p>Visualizza il catalogo con tutte le inserzioni presenti nel sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endcan