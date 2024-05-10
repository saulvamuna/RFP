<?php

namespace App\Http\Livewire\Petition;

use Livewire\Component;

class MailPetition extends Component
{
    public $userName, $emailUser, $descriptionDecline;
    public function render()
    {
        return view('livewire.petition.mail-petition');
    }
}
