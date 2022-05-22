<ul class="clear">
    <li><a href="{{ route('catalogo') }}" title="Vai al Catalogo">Catalogo</a></li>
    <li><a href="{{ route('chisiamo') }}" title="Visualizza le informazioni su Chi Siamo">Chi siamo</a></li>
    <li><a href="{{ route('condizioniuso') }}" title="Visualizza Condizioni d'Uso">Condizioni d'uso</a></li>
    <li><a href="{{ route('faq') }}" title="Vai alla FAQ">FAQ</a></li>
    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
    
    @can('isLocatore')
        <li><a href="{{ route('proposte') }}" title="Visualizza le proposte">Proposte</a></li>
        <li><a href="{{ route('messaggi') }}" title="Visualizza i messaggi">Messaggi</a></li>
        <li><a href="{{ route('profilo') }}" title="Visualizza il tuo profilo">Profilo</a></li>
        @auth
            <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endauth 
    @endcan
    
    @can('isLocatario')
        <li><a href="{{ route('proposte') }}" title="Visualizza le proposte">Proposte</a></li>
        <li><a href="{{ route('messaggi') }}" title="Visualizza i messaggi">Messaggi</a></li>
        <li><a href="{{ route('profilo') }}" title="Visualizza il tuo profilo">Profilo</a></li>
        @auth
            <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endauth 
    @endcan
    
    @can('isAdmin')
        @auth
            <li><a href="" title="">Amministratore</a></li>
            <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endauth  
    @endcan
</ul>