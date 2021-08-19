<?php

namespace App\Http\Livewire\Forms\Matieres;

use Livewire\Component;
use App\Models\Matiere;
use Illuminate\Support\Facades\DB;


class MatiereFormDelete extends Component
{
    public $search='matiere';
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
        $this->model= DB::table($this->search."s")->find($this->itemId)->name;   
    }

    public function destroy()
    {
        Matiere::destroy($this->itemId);
      
        session()->flash('message', "Matiere ".$this->model." deleted");
        $this->CleanVars();
    }

    public function render()
    {
        return view('livewire.forms.matieres.matiere-form-delete');
    }
}
