<div>
    <button wire:click="$set('openCreateProcess', true)"
        class="group flex items-center justify-between w-full bg-white hover:bg-teal-500 h-10 rounded-md border-2 border-gray-300 mb-2">
        <div class="flex items-center pl-4">
            <div class="text-gray-700 font-semibold">
                Crear un nuevo proceso
            </div>
            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path
                    d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
            </svg>
        </div>
    </button>
    <x-dialog-modal wire:model="openCreateProcess">
        <x-slot name="title">
            <div class="text-center w-3/4 mx-auto bg-teal-500 rounded-md py-1 text-gray-200 text-2xl">
                Crear proceso
            </div>
        </x-slot>
        <x-slot name="content">
            <x-label>Nombre proceso</x-label>
            <x-input type="text" wire:model="nameProcess" class="w-full mb-4" />
            <x-label>Color proceso</x-label>
            <x-input type="color" wire:model="colorProcess" class="w-full h-16 mb-4" />
        </x-slot>
        <x-slot name="footer">
            <div class="w-full flex justify-between">
                <button wire:click="$set('openCreateProcess', false)"
                    class="bg-gray-500 py-1 px-3 rounded-md text-gray-100">Cancelar</button>
                <button wire:click='saveProcess' class="bg-green-600 py-1 px-3 rounded-md text-gray-100">Crear</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
