@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center space-x-2">
        {{-- Vorige knop --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-gray-400 bg-gray-200 rounded-md cursor-not-allowed">Vorige</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-400 transition">
                Vorige
            </a>
        @endif

        {{-- Pagina nummers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-400">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 bg-yellow-600 text-white rounded-md">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-400 transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Volgende knop --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-400 transition">
                Volgende
            </a>
        @else
            <span class="px-4 py-2 text-gray-400 bg-gray-200 rounded-md cursor-not-allowed">Volgende</span>
        @endif
    </nav>
@endif