<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class FacultyFormUpdate extends Component
{

    public $search='faculte';
    public $action ='update';
    public $name;
    public $directeur;
    public $itemId;
    public $model;

   
    public function render()
    {
        return view('livewire.forms.faculty-form-update');
    }
}
