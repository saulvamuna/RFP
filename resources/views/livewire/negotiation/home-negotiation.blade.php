<div class="overflow-x-scroll pb-3">
    <div class="w-full flex gap-2 mt-2 pl-6">
        @foreach ($processes as $process)
            @if ($process->id != 1)
                <div class="mx-auto w-72 shrink-0">
                    <div class="group flex justify-between w-full bg-white h-10 rounded-t-md border-t-4 mb-2"
                        style="border-color: {{ $process->color }};">
                        <div class="flex mt-1 pl-4">
                            <div class="text-yellow-500 font-semibold" style="color: {{ $process->color }};">
                                {{ $process->name }}</div>
                        </div>
                        <div class="flex mt-1 pr-2">
                            @livewire('negotiation.show-negotiation', ['processColor' => $process->color, 'processId' => $process->id], key(time() . $process->id))
                        </div>
                    </div>
                    <div id="contentEval"
                        class="w-full bg-gray-200 overflow-y-scroll h-[82vh] border border-gray-400 border-opacity-60 rounded-sm p-4">
                        @foreach ($petitions as $petition)
                            @if ($process->id == $petition->id_process)
                                @foreach ($users as $user)
                                    @if ($user->id == $petition->id_user)
                                        @foreach ($areas as $area)
                                            @if ($area->id == $user->id_area)
                                                @foreach ($zones as $zone)
                                                    @if ($zone->id == $area->id_zone)
                                                        <div
                                                            class="bg-gray-50 rounded-md hover:shadow-lg mb-2 relative w-full h-44">
                                                            <div
                                                                class="bg-gray-300 rounded-t-md px-2 text-xs py-1 flex justify-between">
                                                                {{ $zone->name }}
                                                                <div
                                                                    class="bg-teal-500 text-gray-100 rounded-full ml-2 px-2 text-xs w-fit">
                                                                    {{ $area->name }}
                                                                </div>
                                                            </div>
                                                            <div class="pl-2 pb-6">

                                                                <div class="font-semibold text-md">{{ $user->name }}
                                                                </div>
                                                                <div class="pl-6 text-sm mt-2 font-medium">
                                                                    tipo RP:
                                                                    <div class="pl-6 text-xs">{{ $petition->type_RP }}
                                                                    </div>
                                                                </div>
                                                                <div class="pl-6 text-xs mt-2 font-medium">
                                                                    tipo SS:
                                                                    <div class="pl-6 text-xs">{{ $petition->type_SS }}
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="bg-teal-500 text-gray-100 rounded-full ml-2 px-2 text-sm w-fit mt-2">
                                                                    Aprobado: {{ $petition->created_at }}
                                                                </div>
                                                            </div>
                                                            @livewire('petition.show-petition', ['petitionId' => $petition->id, 'processId' => $process->id], key(time() . $petition->id))
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
        <div class="mx-auto w-72 shrink-0">
            @livewire('negotiation.create-negotiation')
        </div>
    </div>
</div>

{{-- busqueda de proveedores
cotizacion
revision tecnica
negociacion
pendiente SOLPED
pendiente PO
finalizado --}}
