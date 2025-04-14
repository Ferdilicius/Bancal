<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UseManager extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.use-manager', [
            'users' => $this->users,
        ])->layout('layouts.guest');
    }
}
