<?php

namespace App\Http\Livewire\Forms;

use App\Models\Universite;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class UniversiteFormUpdate extends Component
{

   

    public $user_id;

    public $name;

    public $rector;

    public $address;
    public $description;

    public $avatar;
    public $image;
    
    public $itemId;

    public $search='universite';
    public $action='update';



    public $model;
   

    public function render()
    {
       

        return view('livewire.forms.universite-form-update');
    }
}
