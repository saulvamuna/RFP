<div>
    <button wire:click="$set('openDeclinePetition', true)"
        class="bg-red-500 hover:bg-red-600 py-1 px-3 rounded-md text-center text-gray-100">Rechazar</button>

    <x-dialog-modal wire:model="openDeclinePetition">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <div class="w-full bg-gray-200 py-1 px-2 rounded-md text-left text-lg mb-2">
                <span class="font-semibold text-gray-700">Para: </span>{{$nameDecline}}
            </div>
            <div class="w-full bg-gray-200 py-1 px-2 rounded-md text-left text-lg mb-2">
                <span class="font-semibold text-gray-700">Correo: </span>{{$emailDecline}}
            </div>
            <div class="w-full bg-gray-200 py-1 px-2 rounded-md text-left text-lg mb-2">
                <span class="font-semibold text-gray-700">Asunto: </span>Peticion Rechazada
            </div>
            {{-- <x-label class="mt-2 font-semibold">Descripción</x-label>
            <textarea wire:model='descriptionDecline' class="w-full h-32 bg-gray-200 py-1 px-2 rounded-md text-left text-lg mb-2 border-none"></textarea> --}}
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-between w-full">
                <button wire:click="$set('openDeclinePetition', false)"
                    class="bg-gray-500 hover:bg-gray-600 py-1 px-3 rounded-md text-center text-gray-100">Cerrar</button>
                <button wire:click='email'
                    class="bg-green-500 hover:bg-green-600 py-1 px-3 rounded-md text-center text-gray-100">Rechazar</button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
