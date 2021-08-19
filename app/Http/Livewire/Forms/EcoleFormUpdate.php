<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class EcoleFormUpdate extends Component
{
    public $user_id;

    public $name;

    public $rector;

    public $address;
    public $description;

    public $avatar;
    public $image;
    
    public $itemId;

    public $search='ecole';
    public $action='update';



    public $model;
    public function render()
    {
        return view('livewire.forms.ecole-form-update');
    }
}
