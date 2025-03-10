<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-6 p-4 absolute border rounded-md bg-gray-300 bg-indigo-600">
        @if (count($results) === 0)
        <p class="text-white">No results found</p>
        @endif
        @foreach($results as $result)
        <a href="{{ route('show-article', $result->id) }}" class="block text-black hover:bg-white-700 p-4 rounded-md">
            {{ $result->title }}
        </a>
        @endforeach
        </ul>
    </div>
</div>