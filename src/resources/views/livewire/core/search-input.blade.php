<div>
    <div class="flex justify-center overflow-hidden border-2 rounded-xl">
        <input wire:model.defer="searchTerm" wire:keydown.enter="{{ $keydownMethod }}" type="search" placeholder="Search..." class="flex-grow block w-full p-2 bg-green-200 border-0 rounded-md focus:outline-none focus:ring-0 focus:border-blue-500">
        <button wire:click="{{ $keydownMethod }}" class="px-4 py-2 font-bold text-green-900 bg-gray-500 border border-solid rounded-lg hover:bg-gray-700">
            Search
        </button>
    </div>
    <div>
        {{$keydownMethod}}
    </div>
    
</div>
