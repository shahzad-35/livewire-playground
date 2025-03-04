<div>
    <div>
        <h1>Care about people's approval and you will be their prisoner.</h1>
        <h1>Hi, {{ $name}}</h1>
    </div>
    <form wire:submit="changeName(document.querySelector('#changeName').value)">
        <div class="mt-6">
            <input type="text" class="block w-full p-4 rounded-md bg-black text-white" id="changeName">
        </div>
        <div class="mt-6">
            <button class="text-white font-medium rounded -md px-4 py-2 bg-blue-500"
            type="submit">
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