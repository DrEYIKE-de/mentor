<?php

namespace App\Http\Livewire\Forms\Cours;

use App\Models\Cours;
use Livewire\Component;

class CoursFormDelete extends Component
{
    public $search='cour';
    public $action='delete';
    public $itemId;
    public $model;

    protected $listeners=[
        'delete'
    ];
 
   public function CleanVars()
    {
        $this->itemId=null;
        $this->model= null;   
   
    }
    public function delete($itemId)
    {
        $this->itemId=$itemId;
        $this->model= Cours::find($this->itemId)->name;   
    }
   
    public function destroy()
    {
        Cours::destroy($this->itemId);
        
        session()->flash('Cours', "Cours ".$this->model." deleted");
        $this->CleanVars();
    }


    public function render()
    {
        return view('livewire.forms.cours.cours-form-delete');
    }
}
