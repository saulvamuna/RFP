<div>
    <button wire:click="$set('openShowProcess', true)"
        class="rounded-md py-1 px-2"
        style="background: {{$processColor}};">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
        </svg>
    </button>

    <x-dialog-modal wire:model="openShowProcess">
        <x-slot name="title">
            <div class="text-center">Editar {{$process->name}}</div>
        </x-slot>
        <x-slot name="content">
            <x-label>Siguiente proceso</x-label>
            <select wire:model='nextProcess' class="w-full rounded-lg h-10 border-gray-300 mb-4">
                <option class="hidden">-- Seleccione una opcion --</option>
                @foreach ($processes as $process)
                    <option value="{{$process->id}}">{{$process->name}}</option>
                @endforeach
            </select>
            <x-label>Anterior proceso</x-label>
            <select wire:model='beforeProcess' class="w-full rounded-lg h-10 border-gray-300">
                <option class="hidden">-- Seleccione una opcion --</option>
                @foreach ($processes as $process)
                    <option value="{{$process->id}}">{{$process->name}}</option>
                @endforeach
            </select>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="save">editar</button>
        </x-slot>
    </x-dialog-modal>
</div>
