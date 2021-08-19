<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Faculte;

class FacultyFormDelete extends Component
{
    public $search='faculte';
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
        $this->model= DB::table("facultes")->find($this->itemId)->name;   
    }
   
    public function destroy()
    {
        Faculte::destroy($this->itemId);
        
        session()->flash('Message', "Faculte ".$this->model." deleted");
        $this->CleanVars();
    }


    public function render()
    {
        return view('livewire.forms.faculty-form-delete');
    }
}
