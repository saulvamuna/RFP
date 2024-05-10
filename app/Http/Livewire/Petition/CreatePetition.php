<?php

namespace App\Http\Livewire\Petition;

use App\Models\File;
use App\Models\Petition;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePetition extends Component
{
    use WithFileUploads;

    public $typeSS, $typeRP, $typeCO, $suggestedSuppliers, $requirementsSST, $whichRequires, $asRequired, $forRequires, $whenRequired, $files = [], $para;

    protected $rules = [
        'typeSS'                => 'required',
        'typeRP'                => 'required',
        'typeCO'                => 'required',
        'suggestedSuppliers'    => 'required',
        'requirementsSST'       => 'required',
        'whichRequires'         => 'required',
        'asRequired'            => 'required',
        'forRequires'           => 'required',
        'whenRequired'          => 'required',
    ];

    public function savePetition()
    {
        $this->validate();
        $petition = Petition::create([
            'type_RP' => $this->typeRP,
            'type_SS' => $this->typeSS,
            'type_CO' => $this->typeCO,
            'type_RC' => 'vacio',
            'budgetLine' => 'vacio',
            'suggested_suppliers' => $this->suggestedSuppliers,
            'requirements_sst' => $this->requirementsSST,
            'which_requires' => $this->whichRequires,
            'as_required' => $this->asRequired,
            'for_requires' => $this->forRequires,
            'when_required' => $this->whenRequired,
            'acceptability_date' => null,
            'id_user' => auth()->user()->id,
            'id_process' => '1',
        ]);

        foreach ($this->files as $key => $file) {
            File::create([
                'name' => $file->getClientOriginalName(),
                'extension' => $file->extension(),
                'path' => 'storage/'.$file->store('files', 'public'),
                'id_petition' => $petition->id,
            ]);
        }

        $this->reset('typeSS', 'typeRP', 'typeCO', 'suggestedSuppliers', 'requirementsSST', 'whichRequires', 'asRequired', 'forRequires', 'whenRequired', 'files');
    }

    public function render()
    {
        return view('livewire.petition.create-petition');
    }
}
