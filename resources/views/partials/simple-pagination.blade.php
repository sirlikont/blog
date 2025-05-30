@if ($paginator->hasPages())
    <nav>
        <div class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">⮨</span>
                </a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn" rel="prev" aria-label="@lang('pagination.previous')">
                    ⮨
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn" rel="next" aria-label="@lang('pagination.next')">
                    ⮩
                </a>
            @else
                <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">⮩</span>
                </a>
            @endif
        </div>
    </nav>
@endif
