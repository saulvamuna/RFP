<?php

namespace App\Http\Livewire\Petition;

use App\Mail\DeclineMailable;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DeclinePetition extends Component
{
    public $userId, $nameDecline, $emailDecline, $descriptionDecline;
    public $openDeclinePetition = false;

    public function mount()
    {
        $user = User::find($this->userId);
        $this->emailDecline = $user->email;
        $this->nameDecline = $user->name;
    }

    public function email()
    {
        Mail::to($this->emailDecline)
        ->send(new DeclineMailable);

        $this->openDeclinePetition = false;
    }

    public function sendDecline()
    {
        return redirect()->route('decline-mail');
    }

    public function render()
    {
        return view('livewire.petition.decline-petition');
    }
}
