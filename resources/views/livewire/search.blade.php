<div>
    <form>
        <div class="mt-2">
            <input
                type="text"
                class="w-full border p-4 rounded-md bg-gray-700"
                wire:model.live.debounce="searchText"
                placeholder="{{$placeholder}}"
            >


        </div>
    </form>
    <livewire:search-results :results="$results" :show="!empty($searchText)"/>
</div>
