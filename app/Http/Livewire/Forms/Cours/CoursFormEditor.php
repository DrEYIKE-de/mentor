<?php

namespace App\Http\Livewire\Forms\Cours;

use Livewire\Component;

class CoursFormEditor extends Component
{
    public $text;


   public function attached($item)
   {
  
    $this->emit('attached',$item);
   
   }
    public function render()
    {
        return view('livewire.forms.cours.cours-form-editor');
    }
}
