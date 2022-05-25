@guest
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="{{ route('login') }}"><img src="images/servizi/login.jpg" alt=""></a>
            <figcaption>
                <h4 class="heading">Ti sei già registrato a TrovAffitto?</h4>
                <div>
                    <p>Accedi per usufruire delle funzionalità e tutti i vantaggi che offre il sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="{{ route('register') }}"><img src="images/servizi/registrazione.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Cerchi alloggi o vuoi offrire alloggi?</h6>
                <div>
                    <p>Registrati come potenziale locatario o locatore per accedere ai servizi del sito.</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="{{ route('catalogo') }}"><img src="images/servizi/catalogodig.png" alt=""></a>
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
        <figure><a class="imgover" href="#"><img src="images/servizi/Accedi.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Inserisci un'inserzione</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/servizi/Catalogo.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza le tue inserzioni</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href=""><img src="images/servizi/Registrati.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza proposte</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endcan

@can('isLocatario')
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="{{ route('catalogo') }}"><img src="images/servizi/catalogodig.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Ricerca l'alloggio che fa per te</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/servizi/Registrati.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza le tue opzioni</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="{{ asset('images/servizi/imgchat.jpg') }}" alt=""></a>
            <figcaption>
                <h6 class="heading">Messaggia con i locatori</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endcan

@can('isAdmin')
<ul class="nospace group btmspace-80">
    <li class="one_third first">
        <figure><a class="imgover" href="#"><img src="images/servizi/statistiche.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza Statistiche</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover" href="#"><img src="images/servizi/faq.jpg" alt=""></a>
            <figcaption>
                <h6 class="heading">Modifica FAQ</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
    <li class="one_third">
        <figure><a class="imgover " href="{{ route('catalogo') }}"><img src="images/servizi/catalogodig.png" alt=""></a>
            <figcaption>
                <h6 class="heading">Visualizza il catalogo</h6>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
                        dummy text ever since the 1500s</p>
                </div>
            </figcaption>
        </figure>
    </li>
</ul>
@endcan