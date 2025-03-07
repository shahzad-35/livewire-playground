<div>
    <form>
        <div class="mt-6">
            <input 
            type="text"
            wire:model.live.debounce="search"
            class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"
            placeholder="type to search...">

            <button class="text-white font-medium rounded-md p-4 disabled:bg-indigo-400 bg-indigo-600"
            wire:click.prevent="clearSearch()"
            {{ empty($search) ? 'disabled' : ''}}>
                Clear
            </button>
        </div>
    </form>
    <div class="mt-6">
        @if($search)
        <h1 class="text-white">Search results for: "{{ $search }}"</h1>
            @foreach($results as $result)
            <a href="{{ route('show-article', $result->id) }}"
                class="block text-black hover:bg-white-700 p-4 rounded-md"
                >
                {{ $result->title }}
            </a>
            @endforeach
        </ul>
        @endif
    </div>
</div>