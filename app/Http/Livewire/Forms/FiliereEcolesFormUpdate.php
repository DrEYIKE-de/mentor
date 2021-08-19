<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class FiliereEcolesFormUpdate extends Component
{
    public $search='filiere';
    public $action ='update';
    public $name;
    public $itemId;
    public $unItemId;
    public $model;
    public function render()
    {
        return view('livewire.forms.filiere-ecoles-form-update');
    }
}
