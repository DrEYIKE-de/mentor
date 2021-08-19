<?php

namespace App\Http\Livewire\Forms\Cours;

use Livewire\Component;

class CoursFormUpdate extends Component
{
    public $search='cour';
    public $action ='update';
    public $name;
    public $pdf;
    public $image;
    public $itemId;
    public $unItemId;
    public $model;
    public $chap;


    public function render()
    {
       
        return view('livewire.forms.cours.cours-form-update');
    }
}
