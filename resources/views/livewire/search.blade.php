<div>
    <form>
        <div class="mt-6">
            <input 
            type="text"
            wire:model.live.debounce="search"
            class="p-4 w-9/12 border rounded-md bg-gray-700 text-white"
            placeholder="{{ $placeholder }}">

            <button class="text-white font-medium rounded-md p-4 disabled:bg-indigo-400 bg-indigo-600"
            wire:click.prevent="clearSearch()"
            {{ empty($search) ? 'disabled' : ''}}>
                Clear
            </button>
        </div>
    </form>
    <livewire:search-result :results="$results" :show="!empty($search)"/>
</div>