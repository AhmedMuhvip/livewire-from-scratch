<div>
    <div>
        Hello, {{$name}}
    </div>
    <form
        wire:submit="changeName(document.querySelector('#newName').value)"
    >
        <div class="mt-2">
            <input
                id="newName"
                type="text"
                class="block w-full border p-4 rounded-md bg-gray-700">
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-500">
                click to change name
            </button>
        </div>
    </form>
</div>
