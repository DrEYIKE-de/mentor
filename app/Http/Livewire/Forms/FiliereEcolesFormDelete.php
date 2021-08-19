<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Filiere;

class FiliereEcolesFormDelete extends Component
{
    public $search ='filiere';
    public $action ='delete';
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
        $this->model= DB::table("filieres")->find($this->itemId)->name;   
    }
   
    public function destroy()
    {
        Filiere::destroy($this->itemId);
      
        session()->flash('message', "Filiere ".$this->model." deleted");
        $this->CleanVars();
    }
    
    public function render()
    {
        return view('livewire.forms.filiere-ecoles-form-delete');
    }
}
