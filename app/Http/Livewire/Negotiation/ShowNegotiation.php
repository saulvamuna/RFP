<?php

namespace App\Http\Livewire\Negotiation;

use App\Models\Process;
use Livewire\Component;

class ShowNegotiation extends Component
{
    public $processId, $processColor, $processes, $process, $nextProcess, $beforeProcess;
    public $openShowProcess = false;

    public function mount()
    {
        $this->process();
        $this->process = Process::find($this->processId);
        $this->nextProcess = $this->process->nextProcess;
        $this->beforeProcess = $this->process->beforeProcess;
    }
    public function process()
    {
        $this->processes = Process::get();
    }

    public function save()
    {
        $this->process->nextProcess = $this->nextProcess;
        $this->process->beforeProcess = $this->beforeProcess;
        $this->process->save();
        $this->openShowProcess = false;
        $this->process();
        $this->emit('processNegotiation');
        $this->emit('alert', 'El proceso se a editado correctamente');
    }

    public function render()
    {
        return view('livewire.negotiation.show-negotiation');
    }
}
