<div class="p-4">
    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
        {{--
        <x-input type="text" wire:model="searchPetition" /> --}}

        <table id="petitionTable" class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Id
                            <button wire:click="order('id')">
                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </button>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Fecha solicitud
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Fecha inicio
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Estado
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            ¿Que se requiere?
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nombre responsable
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Dias abierto
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Presupuesto
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Acciones
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petitions as $petition)
                    @if ($petition->process->name === 'inicio')
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$petition->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$petition->created_at}}
                            </td>
                            <td class="px-6 py-4">
                                {{$petition->acceptability_date}}
                            </td>
                            <td class="px-6 py-4">
                                {{$petition->process->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$petition->which_requires}}
                            </td>
                            <td class="px-6 py-4">
                                {{$petition->user->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$petition->type_CO}}
                            </td>
                            <td class="px-6 py-4">
                                {{$petition->type_CO}}
                            </td>
                            <td class="px-6 py-4 text-right flex gap-x-1">
                                <button wire:click="acceptPetition({{$petition->id}})"
                                    class="bg-green-500 hover:bg-green-600 py-1 px-3 rounded-md text-center text-gray-100">Aceptar</button>
                                @livewire('petition.decline-petition', ['userId' => $petition->id_user], key(time()
                                .$petition->id))
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
