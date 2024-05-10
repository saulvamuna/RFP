<div>
    <button wire:click="$set('openPetition', true)" class="absolute top-0 w-full h-44 rounded-md"></button>
    <x-dialog-modal wire:model="openPetition" maxWidth="7xl">
        <x-slot name="title">

        </x-slot>
        <x-slot name="content">
            {{$petitionId}}
            <div class="grid grid-cols-5 h-[75vh]">
                <div id="contentEval" class="col-span-2 p-4 overflow-y-scroll text-lg">
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3 font-bold">
                        Solicitante:
                        <span class="font-normal">{{$user->name}}</span>
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        <div class="font-semibold">
                            Direccion de solicitante:
                            <span class="font-normal">{{$user->name}}</span>
                        </div>
                        <div class="font-semibold">
                            Area de solicitante:
                            <span class="font-normal">{{$user->name}}</span>
                        </div>
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->type_RP}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->type_SS}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        Capex
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->type_RC}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->suggested_suppliers}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->requirements_sst}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->which_requires}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->as_required}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->for_requires}}
                    </div>
                    <div class="bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                        {{$petition->when_required}}
                    </div>

                    @foreach ($files as $file)
                        @if ($file->extension === "pdf")
                            <a href="{{asset($file->path)}}" target="_blank" class="block bg-gray-200 w-full rounded-md py-1 px-3 mb-3">
                                Ver archivo {{$file->name}}
                            </a>
                        @endif
                        @if ($file->extension === "jpg")
                            <img class="w-full mb-4" src="{{asset($file->path)}}">
                        @endif
                    @endforeach
                </div>
                <div class="col-span-2 p-4">
                    <div class="bg-gray-300 w-full text-center text-lg rounded-md py-1 px-3 mb-3">Opciones de edicion</div>
                </div>
                <div class="col-span-1 p-4">
                    <div class="bg-gray-300 w-full text-center text-lg rounded-md py-1 px-3 mb-3">Acciones</div>
                    @if ($processNexts)
                        <button wire:click="nextProcess" class="bg-gray-300 w-full text-lg rounded-md py-1 px-3 mb-3 text-gray-100" style="background: {{$processNexts->color}}">
                            {{$processNexts->name}}
                        </button>
                    @endif
                    @if ($processBefores)
                        <button wire:click="beforeProcess" class="bg-gray-300 w-full text-lg rounded-md py-1 px-3 mb-3 text-gray-100" style="background: {{$processBefores->color}}">
                            {{$processBefores->name}}
                        </button>
                    @endif
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('openPetition', false)">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
