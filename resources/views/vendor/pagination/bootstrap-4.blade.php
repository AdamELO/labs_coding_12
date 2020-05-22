@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a aria-disabled="true">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            @if ($page > 9)
                                <a class="active" aria-current="page">{{ $page }}.</a>
                            @else
                                <a class="active" aria-current="page">0{{ $page }}.</a>
                            @endif
                        @else
                            @if ($page > 9)
                                <a class="page-link" href="{{ $url }}">{{ $page }}.</a>
                            @else
                                <a class="page-link" href="{{ $url }}">0{{ $page }}.</a>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            {{-- @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif --}}
        </ul>
    </nav>
@endif
