@if ($paginator->hasPages())
<div class="relative flex">
    <div id="pagination" class="absolute flex inset-0 mt-[3.542vw]">
        <ul class="inline-flex items-center m-auto shadow-xl rounded-lg">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true">
                    <span class="sr-only">Previous</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="block px-3 py-2 text-lg font-medium text-gray-400 bg-white rounded-l-lg hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">
                        <span class="sr-only">Previous</span>
                        <svg class="w-6 h-6 p-[0.104vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled px-3 py-2 text-lg font-medium text-gray-400 bg-white rounded-l-lg hover:bg-green-new hover:bg-opacity-5 hover:text-green-new" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active z-10 px-3 py-2 font-medium bg-green-new bg-opacity-5 text-green-new hover:bg-green-new hover:bg-opacity-5 hover:text-green-new" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="px-3 py-2 font-medium text-gray-400 bg-white hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="block px-3 py-2 text-lg font-medium text-gray-400 bg-white rounded-r-lg hover:bg-green-new hover:bg-opacity-5 hover:text-green-new">
                        <svg aria-hidden="true" class="w-6 h-6 p-[0.104vw]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true">
                    <span class="sr-only">Next</span>
                </li>
            @endif
        </ul>
    </div>
</div>
@endif
