<?php

namespace App\Http\Livewire\Forms\Niveaux;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Niveau;
use App\Models\Filiere;

class NiveauFormDelete extends Component
{
    public $search='filiere';
    public $action='delete';
    public $number;
    public $itemId;
    public $unItemId;
    public $items;
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
        $this->items= Filiere::find( $this->itemId)->niveaus()->get();
   
  
    }
   
    public function destroy($item)
    {
        $this->unItemId=$item;
       
       
        Niveau::destroy($this->unItemId);
        session()->flash('facMessage', "Filiere ".$this->model ." delete Niveau ". $this->items->niveau );
            $this->CleanVars();
        $this->CleanVars();

    }

    public function render()
    {
        return view('livewire.forms.niveaux.niveau-form-delete');
    }
}
