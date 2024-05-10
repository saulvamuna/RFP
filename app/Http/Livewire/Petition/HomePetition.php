<?php

namespace App\Http\Livewire\Petition;

use App\Models\Petition;
use App\Models\Process;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class HomePetition extends Component
{
    use WithPagination;

    public $petitions, $orderDirection = 'asc', $searchPetition;

    public function mount()
    {
        $this->petition();
    }

    public function petition()
    {
        $this->petitions = Petition::orderBy('id', $this->orderDirection)->with('process')->with('user')->get();
    }

    public function order($value)
    {
        if($value === 'id'){
            $this->orderDirection = $this->orderDirection === 'asc' ? 'desc' : 'asc';
        }
        $this->petition();
    }

    public function acceptPetition($petition)
    {
        $selectPetition = Petition::find($petition);
        $process = Process::skip(1)->take(1)->first();
        $fecha =  Carbon::now();

        $selectPetition->acceptability_date = $fecha;
        $selectPetition->id_process = $process->id;
        $selectPetition->save();
        $this->petition();
        $this->emit('alert', 'La peticion ha sido aceptada correctamente');
    }

    public function render()
    {
        return view('livewire.petition.home-petition');
    }
}
