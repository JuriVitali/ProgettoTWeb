@if ($paginator->lastPage() != 1)
<nav class="pagination" id="pagination">
    <p class="btmspace-20">Pagina {{ $paginator->currentPage() }} di {{ $paginator->lastPage() }} <p>
    
    
       <!-- Link alla prima pagina -->
    @if (!$paginator->onFirstPage())
        <li>
            <a href="{{ $paginator->url(1) }}">Inizio</a> 
        </li>
    @else
        <li>
            <div>Inizio</div>
        </li>
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
        <li>
            <a href="{{ $paginator->previousPageUrl() }}"> &lt; Precedente</a> 
        </li>
    @else
        <li>
            <div>&lt; Precedente</div>
        </li>
    @endif

    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}">Successivo &gt;</a> 
        </li>
    @else
        <li>
            <div>Successivo &gt; </div>
        </li>
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>
        </li>
    @else
        <li>
            <div>Fine </div>
        </li>
    @endif
    
</nav>
@endif

