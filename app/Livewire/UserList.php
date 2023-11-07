<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{

    public function render()
    {
        $usersList = User::all();
        return view('livewire.users-list', compact('usersList'));
    }
}
