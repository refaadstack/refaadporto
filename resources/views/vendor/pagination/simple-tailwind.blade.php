@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="mt-6 inline-block bg-secondary-light font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="mt-6 inline-block bg-secondary-light font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="mt-6 inline-block bg-secondary-light font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="mt-6 inline-block bg-secondary-light font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
