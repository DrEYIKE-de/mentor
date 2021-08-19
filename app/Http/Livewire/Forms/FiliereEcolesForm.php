<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Ecole;
use App\Models\Filiere;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class FiliereEcolesForm extends Component
{
    public $search='ecole';
    public $action='attach';
    public $name;
    public $itemId;
    public $unItemId;
    public $model;
   
    
    protected $listeners=[
        'attach',
        'update'=>'dataFil'
    ];

    protected $rules=[
        'name'=>'required|min:3', 
        'filiereable_id'=> 'required',
        'filiereable_type'=> 'required',
        ];
        
   
    public function CleanVars()
    {
        $this->model= null;   
        $this->name= null; 
    }

    public function attach($unItemId)
    {
        $this->unItemId=$unItemId;

        $this->model= DB::table($this->search."s")->find($this->unItemId)->name;
      
    }


    public function dataFil($itemId)
        {
    
            $this->itemId=$itemId; 
    
            $model= DB::table("filieres")->find($this->itemId); 
 
              $this->model = Ecole::find($model->filiereable_id)->name;
              $this->unItemId=$model->filiereable_id;
              $this->name= $model->name;
        }
         
    public function save()
    {
        $data=[   
            'name'=>$this->name,
            'filiereable_id'=> $this->unItemId,
            'filiereable_type'=> "App\Models\Ecole"    
        ];


        $validatedData = Validator::make(
            $data,$this->rules)->validate();


            if($this->itemId)
            {
        
            Filiere::find($this->itemId)->update($validatedData);
          
           
            session()->flash('filMessage', "Filiere ".$this->name ." update succesfuly and attach to " .$this->model ." Ecole");

            $this->CleanVars();

            }

           else
           {

            Filiere::create($validatedData);

            session()->flash('filMessage', "Filiere ".$this->name." create succesfuly and attach to ". $this->model ." Ecole ");
            $this->CleanVars();

           }
          

    }
   
    public function render()
    {
        return view('livewire.forms.filiere-ecoles-form');
    }
}
