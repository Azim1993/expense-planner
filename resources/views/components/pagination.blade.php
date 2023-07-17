<div class="mt-6">
    <ul class="flex items-center justify-center space-x-2">
        @if ($data->onFirstPage())
            <li class="px-2 py-1 text-gray-500 bg-gray-200 rounded">Previous</li>
        @else
            <li><a href="{{ $data->previousPageUrl() }}" class="px-2 py-1 text-blue-500 hover:text-blue-700 hover:underline rounded">Previous</a></li>
        @endif

        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
            @if ($page == $data->currentPage())
                <li class="px-2 py-1 text-blue-700 bg-blue-200 rounded">{{ $page }}</li>
            @else
                <li><a href="{{ $url }}" class="px-2 py-1 text-blue-500 hover:text-blue-700 hover:underline rounded">{{ $page }}</a></li>
            @endif
        @endforeach

        @if ($data->hasMorePages())
            <li><a href="{{ $data->nextPageUrl() }}" class="px-2 py-1 text-blue-500 hover:text-blue-700 hover:underline rounded">Next</a></li>
        @else
            <li class="px-2 py-1 text-gray-500 bg-gray-200 rounded">Next</li>
        @endif
    </ul>
</div>
