<?php

namespace App\Http\Livewire\Petition;

use App\Models\File;
use App\Models\Petition;
use App\Models\Process;
use App\Models\User;
use Livewire\Component;

class ShowPetition extends Component
{
    public $petitionId, $processId, $petition, $process, $user, $next, $before, $processNexts, $processBefores, $files;
    public $openPetition = false;

    public function mount()
    {
        $this->petition = Petition::find($this->petitionId);
        $this->process = Process::find($this->processId);
        $this->user = User::find($this->petition->id_user);
        $this->files = File::where('id_petition', $this->petitionId)->get();
        $this->processPosition();
    }

    public function processPosition()
    {
        $this->processNexts = Process::find($this->process->nextProcess);
        $this->processBefores = Process::find($this->process->beforeProcess);
    }

    public function nextProcess()
    {
        $this->petition->id_process = $this->process->nextProcess;
        $this->petition->save();
        $this->openPetition = false;
        $this->emit('processNegotiation');
        $this->emit('alert', 'La peticion paso al sigueinte proceso correctamente');
    }

    public function beforeProcess()
    {
        $this->petition->id_process = $this->process->beforeProcess;
        $this->petition->save();
        $this->openPetition = false;
        $this->emit('processNegotiation');
        $this->emit('alert', 'La peticion volvio al proceso anterior correctamente');
    }

    public function render()
    {
        return view('livewire.petition.show-petition');
    }
}
