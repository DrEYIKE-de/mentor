<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Universite;
use Illuminate\Support\Facades\DB;

class UniversiteFormDelete extends Component
{
    public $search='universite';
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
        $this->model= DB::table("universites")->find($this->itemId)->name;   
    }

    public function destroy()
    {
        Universite::destroy($this->itemId);
      
        session()->flash('message', "Universite ".$this->model." deleted");
        $this->CleanVars();
    }


    public function render()
    {
        return view('livewire.forms.universite-form-delete');
    }
}
