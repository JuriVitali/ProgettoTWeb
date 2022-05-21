<ul class="clear">
    <li><a href="{{ route('catalogo') }}" title="Vai al Catalogo">Catalogo</a></li>
    <li><a href="{{ route('chisiamo') }}" title="Visualizza le informazioni su Chi Siamo">Chi siamo</a></li>
    <li><a href="{{ route('condizioniuso') }}" title="Visualizza Condizioni d'Uso">Condizioni d'uso</a></li>
    <li><a href="{{ route('faq') }}" title="Vai alla FAQ">FAQ</a></li>
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
</ul>