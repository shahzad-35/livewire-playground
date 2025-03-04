<div>
    <div>
        <h1>Care about people's approval and you will be their prisoner.</h1>
        @if($name)
            <h1>{{ $greeting}}, {{ $name}}</h1>
        @endif
    </div>
    <form wire:submit="changeName()">
        <div class="mt-6">
        <select type="text" class="p-4 border rounded-md bg-gray-700 text-white" wire:model.fill="greeting">

            <option value="salam">Salam</option>
            <option value="Hi">Hi</option>
            <option value="Hey">Hey</option>
            <option value="Howdy" selected>Howdy</option>
        </select>
            <input type="text" wire:model="name" class="p-4 border rounded-md bg-gray-700 text-white" id="changeName">
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