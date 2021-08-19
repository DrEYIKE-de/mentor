<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class UsersRoles extends Component
{
    public $search= "filiere";
    public $action = "update";
    
    public function render()
    {
        return view('livewire.users.users-roles');
    }
}
