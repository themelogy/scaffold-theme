@if ($paginator->hasPages())
    <nav class="clearfix">
        <ul class="pagination-1">
            @if ($paginator->onFirstPage())
                <li class="disabled hide">&laquo;</li>
            @else
                <li><a class="pag-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a></li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="pag-current" href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a class="pag-next" href="{{ $paginator->nextPageUrl() }}" rel="next"></a></li>
            @else
                <li class="disabled hide">&raquo;</li>
            @endif
        </ul>
    </nav>
@endif
