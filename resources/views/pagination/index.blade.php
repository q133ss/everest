<div class="pagination-articles articles__pagination">
    <span class="pagination-articles__current">{{$paginator->currentPage()}}</span>
    <ul class="pagination">
        <li class="control">
            <a href="{{ $paginator->previousPageUrl() }}">Предыдущая</a>
        </li>
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    @else
                    <li>
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        <li class="control">
            <a href="{{ $paginator->nextPageUrl() }}">Следующая</a>
        </li>
    </ul>
</div>
