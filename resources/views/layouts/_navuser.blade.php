<ul>
    <li><a href="{{ route('user') }}" title="Va alla Home di User">Home</a></li>
    <li><a href="{{ route('catalog1') }}" title="Visualizza il Catalogo Prodotti">Catalogo</a></li>
    <li><a href="{{ route('user') }}" title="Azione1">Azione1</a></li>
    <li><a href="{{ route('user') }}" title="Azione2">Azione2</a></li>
    <li><a href="{{ route('user') }}" title="Azione3">Azione3</a></li>
    @can('isAdmin')
        <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isUser')
        <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
    @endcan
    @auth
        <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>
   