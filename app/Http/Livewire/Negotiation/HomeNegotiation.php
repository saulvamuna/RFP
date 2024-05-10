<?php

namespace App\Http\Livewire\Negotiation;

use App\Models\Area;
use App\Models\Petition;
use App\Models\Process;
use App\Models\User;
use App\Models\Zone;
use Livewire\Component;

class HomeNegotiation extends Component
{
    public $processes, $petitions, $users, $zones, $areas, $idPetition = [];

    protected $listeners  = ['processNegotiation' => 'process'];

    public function mount()
    {
        $this->process();
    }

    public function process()
    {
        $this->processes = Process::get();
        $this->petitions = Petition::get();
        $this->users = User::get();
        $this->areas = Area::get();
        $this->zones = Zone::get();

        // foreach ($this->petitions as $petition){
        //     $this->idPetition[] = $petition->id_process;
        // }

    }

    public function render()
    {
        return view('livewire.negotiation.home-negotiation');
    }
}
