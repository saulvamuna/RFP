<?php

namespace App\Http\Livewire\Negotiation;

use App\Models\Process;
use Livewire\Component;

class CreateNegotiation extends Component
{
    public $nameProcess, $colorProcess, $processes;
    public $openCreateProcess = false;


    public function saveProcess()
    {
        Process::create([
            'name' => $this->nameProcess,
            'color' => $this->colorProcess,
        ]);

        $this->emit('processNegotiation');
        $this->emit('alert', 'El proceso se a creado correctamente');
        $this->reset('nameProcess', 'colorProcess');
        $this->openCreateProcess = false;
    }

    public function render()
    {
        return view('livewire.negotiation.create-negotiation');
    }
}
