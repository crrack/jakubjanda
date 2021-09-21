@if ($paginator->hasPages())
<nav class="flex items-center justify-between px-4 mx-auto my-4 text-base sm:px-0 md:w-3/4 md:flex">
    <div class="flex flex-1 w-0">
      @if ($paginator->onFirstPage())
      <a href="#" class="inline-flex items-center pt-4 pr-1 -mt-px font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-700">
        <svg class="w-5 h-5 mr-3 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Předchozí
      </a>
      @else
      <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center pt-4 pr-1 -mt-px font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-700">
        <svg class="w-5 h-5 mr-3 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Předchozí
      </a>
      @endif
    </div>
    <div class="hidden md:flex">
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <span class="inline-flex items-center px-4 pt-4 -mt-px font-medium leading-5 text-gray-700">
            ...
          </span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <a x-link="{{ $url }}" class="inline-flex items-center px-4 pt-4 pb-2 -mt-px font-medium leading-5 transition duration-150 ease-in-out border-b-2 border-primary text-primary focus:outline-none focus:text-indigo-800">
                {{ $page }}
              </a>
            @else
              <a x-link="{{ $url }}" class="inline-flex items-center px-4 pt-4 pb-2 -mt-px font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-700">
                {{ $page }}
              </a>
            @endif
          @endforeach
        @endif
      @endforeach
    </div>
    <div class="flex justify-end flex-1 w-0">
      @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center pt-4 pl-1 -mt-px font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-700">
        Další
        <svg class="w-5 h-5 ml-3 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </a>
      @else
      <a href="#" class="inline-flex items-center pt-4 pl-1 -mt-px font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-700">
        Další
        <svg class="w-5 h-5 ml-3 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </a>
      @endif

    </div>
</nav>
@endif