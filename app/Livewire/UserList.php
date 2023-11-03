<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public function getRoleName($role_id) {
    switch ($role_id) {
        case 1:
            return 'Administrador';
        case 2:
            return 'Editor';
        case 3:
            return 'Usuario';
        default:
            return 'Desconocido';
    }
}

    public function render()
    {
        $usersList = User::all();
        return view('livewire.users-list', compact('usersList'));
    }
}
