@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination">
        <div class="flex justify-between items-center gap-4">
            {{-- Previous Button --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">
                    &larr; Previous
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                   class="px-4 py-2 text-purple-600 bg-white border border-purple-600 rounded-lg hover:bg-purple-50 transition-colors">
                    &larr; Previous
                </a>
            @endif

            {{-- Next Button --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                   class="px-4 py-2 text-purple-600 bg-white border border-purple-600 rounded-lg hover:bg-purple-50 transition-colors">
                    Next &rarr;
                </a>
            @else
                <span class="px-4 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">
                    Next &rarr;
                </span>
            @endif
        </div>
    </nav>
@endif
