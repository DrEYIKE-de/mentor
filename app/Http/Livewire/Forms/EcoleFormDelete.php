<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Ecole;
use Illuminate\Support\Facades\DB;

class EcoleFormDelete extends Component
{
    public $search='ecole';
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
        $this->model= DB::table("ecoles")->find($this->itemId)->name;   
    }

    public function destroy()
    {
       Ecole::destroy($this->itemId);
       
        session()->flash('Message', "Ecole".$this->model." deleted");
        $this->CleanVars();
    }
    public function render()
    {
        return view('livewire.forms.ecole-form-delete');
    }
}
