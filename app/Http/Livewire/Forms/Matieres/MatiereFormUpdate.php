<?php

namespace App\Http\Livewire\Forms\Matieres;

use Livewire\Component;

class MatiereFormUpdate extends Component
{
    public $search='matiere';
    public $action ='update';
    public $name;
   public $number;
   public $itemId;
   public $unItemId;
   public $model;
   public $items;
   public $niveau;
   public $idMat;
    public function render()
    {
        return view('livewire.forms.matieres.matiere-form-update');
    }
}
