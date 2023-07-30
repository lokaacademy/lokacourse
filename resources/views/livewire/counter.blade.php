<div class="p-4 bg-gray-200 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold">{{ $count }}</h1>

    <div class="mt-4 flex space-x-4">
        <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded" wire:click="increment">+</button>

        <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded" wire:click="decrement">-</button>
    </div>
</div>
