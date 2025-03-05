<div>
    <div>
        <h1>Care about people's approval and you will be their prisoner.</h1>
        @if($greetingMessage)
            <h1>{{ $greetingMessage}}</h1>
        @endif
    </div>
    <form wire:submit="changeGreeting()">
        <div class="mt-6">
        <select type="text" class="p-4 border rounded-md bg-gray-700 text-white" wire:model.fill="greeting">
            @foreach($greetings as $greet)
                <option value="{{ $greet->greeting }}">{{ $greet->greeting }}</option>
            @endforeach
        </select>
            <input type="text" wire:model="name" class="p-4 border rounded-md bg-gray-700 text-white" id="changeName">
        </div>
        <div>
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-6">
            <button class="text-white font-medium rounded -md px-4 py-2 bg-blue-500" type="submit">
                Greet
            </button>
        </div>
    </form>
    <!-- Passing parameter to action method -->
    <!-- <div class="mt-6">
        <button class="text-white font-medium rounded -md px-4 py-2 bg-blue-500"
        wire:click="changeName('Ali')">
            Greet
        </button>
    </div> -->
</div>