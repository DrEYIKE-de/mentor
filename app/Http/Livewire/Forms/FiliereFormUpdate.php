<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

class FiliereFormUpdate extends Component
{
        public $search='filiere';
        public $action ='update';
        public $name;
        public $itemId;
        public $unItemId;
        public $model;
    
    public function render()
    {
        
    
        return view('livewire.forms.filiere-form-update');
    }
}
