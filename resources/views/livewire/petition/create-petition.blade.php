<div>
    <div id="contentEval" class="overflow-y-scroll w-3/4 h-[86vh] pb-14 p-3 mx-auto">
        <form wire:submit.prevent="savePetition"  class="grid grid-cols-2 gap-x-8">
            <div class="p-2">
                <div class="text-center mb-3 text-2xl font-semibold">Tipos de solicitud</div>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div>
                        <select wire:model='typeSS' class="w-full rounded-lg h-10 border-gray-300">
                            <option class="hidden">-- Seleccione una opcion --</option>
                            <option value="Suministro">Suministro</option>
                            <option value="Servicio">Servicio</option>
                        </select>
                        <x-input-error for="typeSS"/>
                    </div>

                    <div>
                        <select wire:model='typeRP' class="w-full rounded-lg h-10 border-gray-300">
                            <option class="hidden">-- Seleccione una opcion --</option>
                            <option value="Regular">Regular</option>
                            <option value="Puntual">Puntual</option>
                        </select>
                        <x-input-error for="typeRP"/>
                    </div>
                </div>
                <div class="text-center mb-3 text-xl font-semibold">Presupuesto</div>

                <div class="flex justify-around mb-8" x-data="{ selectedCheckbox: null }">
                    <div class="flex w-auto rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#d3b861] py-1 px-3"
                        :class="{ 'bg-[#d3b861]': selectedCheckbox === 'capex' }">
                        <input class="hidden" type="checkbox" id="capex" wire:model="typeCO" value="capex"
                            @click="selectedCheckbox = 'capex'" :checked="selectedCheckbox === 'capex'">
                        <label for="capex" class="w-full h-full cursor-pointer">
                            <p class="text-lg">Capex</p>
                        </label>
                    </div>
                    <div class="flex w-auto rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#d3b861] py-1 px-3"
                        :class="{ 'bg-[#d3b861]': selectedCheckbox === 'opex' }">
                        <input class="hidden" type="checkbox" id="opex" wire:model="typeCO" value="opex"
                            @click="selectedCheckbox = 'opex'" :checked="selectedCheckbox === 'opex'">
                        <label for="opex" class="w-full h-full cursor-pointer">
                            <p class="text-lg">Opex</p>
                        </label>
                    </div>
                    <div class="flex w-auto rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#d3b861] py-1 px-3"
                        :class="{ 'bg-[#d3b861]': selectedCheckbox === 'ejecucion' }">
                        <input class="hidden" type="checkbox" id="ejecucion" wire:model="typeCO" value="ejecucion"
                            @click="selectedCheckbox = 'ejecucion'" :checked="selectedCheckbox === 'ejecucion'">
                        <label for="ejecucion" class="w-full h-full cursor-pointer">
                            <p class="text-lg">Sobre ejecucion</p>
                        </label>
                    </div>
                </div>
                <x-input-error for="typeCO"/>
                @if($typeCO === "capex")
                    <x-label for="suggestedSuppliers" class="font-extrabold text-gray-800 text-base">RN</x-label>
                    <x-input class="w-full" type="text" wire:model='typeRC'/>
                    <x-input-error for="typeRC"/>
                @elseif ($typeCO === "opex")
                    <x-label for="suggestedSuppliers" class="font-extrabold text-gray-800 text-base">CeCo</x-label>
                    <select wire:model='typeRC' class="w-full rounded-lg h-10 border-gray-300 ">
                        <option class="hidden">-- Seleccione una opcion --</option>
                    </select>
                    <x-input-error for="typeRC"/>
                    <x-label for="suggestedSuppliers" class="font-extrabold text-gray-800 text-base">Linea presupuestal</x-label>
                    <x-input class="w-full" type="text" wire:model='budgetLine'/>
                @endif
                <div class="grid grid-cols-2 gap-4 mb-3">
                    <div>
                        <x-label for="suggestedSuppliers" class="font-extrabold text-gray-800 text-base">Proveedores sugeridos</x-label>
                        <x-input class="w-full" type="text" wire:model='suggestedSuppliers'/>
                        <x-input-error for="suggestedSuppliers"/>
                    </div>
                    <div>
                        <x-label for="requirementsSST" class="font-extrabold text-gray-800 text-base">Requerimiento SST/SSA</x-label>
                        <select wire:model='requirementsSST' class="w-full rounded-lg h-10 border-gray-300">
                            <option class="hidden">-- Seleccione una opcion --</option>
                            <option value="Compra o uso de sustancias quimicas">Compra o uso de sustancias quimicas</option>
                            <option value="Disposicion de residuos especial y/o peligrosos">Disposicion de residuos especial y/o peligrosos</option>
                            <option value="Trabajo en alturas">Trabajo en alturas</option>
                            <option value="Trabajo en espacios confinados">Trabajo en espacios confinados</option>
                            <option value="Trabajo con energias peligrosas">Trabajo con energias peligrosas</option>
                            <option value="Trabajo en caliente">Trabajo en caliente</option>
                            <option value="Servicio de transporte de personal">Servicio de transporte de personal</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                        <x-input-error for="requirementsSST"/>
                    </div>
                </div>
                <div class="text-center mb-3 text-2xl font-semibold">Describe la necesidad</div>
                <div>
                    <x-label for="" class="font-semibold">¿Que se requiere?</x-label>
                    <textarea wire:model='whichRequires' class="w-full rounded-lg h-40 mb-4 border-gray-300"></textarea>
                    <x-input-error for="whichRequires"/>
                </div>
            </div>
            <div class="p-2">
                <div>
                    <x-label for="" class="font-semibold">¿Como se requiere?</x-label>
                    <textarea wire:model='asRequired' class="w-full rounded-lg h-40 mb-4 border-gray-300"></textarea>
                    <x-input-error for="asRequired"/>

                    <x-label for="" class="font-semibold">¿Para que se requiere?</x-label>
                    <textarea wire:model='forRequires' class="w-full rounded-lg h-40 mb-4 border-gray-300"></textarea>
                    <x-input-error for="forRequires"/>

                    <x-label for="" class="font-semibold">¿Para cuando se requiere?</x-label>
                    <x-input type="date" wire:model='whenRequired' class="w-full mb-8"/>
                    <x-input-error for="whenRequired"/>

                    <label for="files" class="w-full flex align-middle rounded-md py-2 px-4 bg-white cursor-pointer hover:bg-teal-200">
                        Adjunte un archivo
                        <svg class="mt-1 ml-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path d="M512 416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H192c20.1 0 39.1 9.5 51.2 25.6l19.2 25.6c6 8.1 15.5 12.8 25.6 12.8H448c35.3 0 64 28.7 64 64V416zM232 376c0 13.3 10.7 24 24 24s24-10.7 24-24V312h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V200c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H168c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"/>
                        </svg>
                    </label>
                    <input id="files" type="file" wire:model='files' class="hidden" multiple/>
                </div>
            </div>
            <button type="submit" class="absolute left-[45.5vw] bottom-14 bg-blue-500 py-1 px-4 rounded-md text-lg">Enviar solicitud</button>
        </form>
    </div>

</div>
