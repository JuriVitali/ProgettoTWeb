@if ($paginator->lastPage() != 1)
<nav class="pagination" id="pagination">

       <!-- Link alla prima pagina -->
    @if (!$paginator->onFirstPage())
        <li>
            <a href="{{ $paginator->url(1) }}">Inizio</a> 
        </li>
    @else
        <li>
            Inizio 
        </li>
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
        <li>
            <a href="{{ $paginator->previousPageUrl() }}">« Precedente</a> 
        </li>
    @else
        <li>
            « Precedente 
        </li>
    @endif

    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}">Successivo &gt;</a> 
        </li>
    @else
        <li>
            Successivo &gt; 
        </li>
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>
        </li>
    @else
        <li>
            Fine
        </li>
    @endif
    
</nav>
@endif

