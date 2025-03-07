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
        <ul>
            @foreach($results as $result)
            <li class="text-black
                    p-4 border-b border-gray-700
                    hover:bg-gray-800
                    transition duration-300
                    ease-in-out">
                {{ $result->title }}
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>