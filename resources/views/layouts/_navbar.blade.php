<ul class="clear">
    <li><a href="{{ route('catalogo') }}" title="Vai al Catalogo">Catalogo</a></li>
    <li><a href="{{ route('chisiamo') }}" title="Visualizza le informazioni su Chi Siamo">Chi siamo</a></li>
    <li><a href="{{ route('faq') }}" title="Vai alla FAQ">FAQ</a></li>
    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li> 
        <li><a href="{{ route('register') }}" class="highlight" title="Accedi all'area riservata del sito">Registrati</a></li> 
    @endguest
    
    @can('isLocatore')
        <li><a href="{{ route('visualizzalloggi') }}" title="Visualizza i messaggi">I tuoi alloggi</a></li>
        <li><a href="{{ route('VisualPropRicevute', [ Auth::id() ]) }}" title="Visualizza le proposte che hai ricevuto">Proposte</a></li>
        <li><a href="{{ route('chat') }}" title="Visualizza i messaggi">Chat</a></li>
        <li><a href="{{ route('profilo') }}" title="Visualizza il tuo profilo">Profilo</a></li>
        
    @endcan
    
    @can('isLocatario')
        <li><a href="{{ route('VisualPropInviate', [ Auth::id() ]) }}" title="Visualizza le proposte che hai inviato">Proposte</a></li>
        <li><a href="{{ route('chat') }}" title="Visualizza i messaggi">Chat</a></li>
        <li><a href="{{ route('profilo') }}" title="Visualizza il tuo profilo">Profilo</a></li>      
    @endcan
    
    @can('isAdmin')
        <li><a href="{{ route('home') }}" title="">Amministratore</a></li>
    @endcan
    
    @auth  
            <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    @endauth 
</ul>