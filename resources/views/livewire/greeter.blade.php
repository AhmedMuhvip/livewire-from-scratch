<div>
    <form
        wire:submit="changeGreeting()"
    >
        <div class="mt-2">
            <select
                type="text"
                class="border p-4 rounded-md bg-gray-700"
                wire:model.fill="greeting"
            >
                @foreach($greetings as $item)
                    <option value="{{$item->greeting}}">{{$item->greeting}}</option>
                @endforeach
            </select>
            <input
                type="text"
                class="border p-4 rounded-md bg-gray-700"
                wire:model="name"
            >
        </div>
        <div>
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-500">
                click to change name
            </button>
        </div>
    </form>
    @if($greetingMessage!=='')
        <div class="mt-5">
            {{$greetingMessage}}
        </div>
    @endif
</div>
