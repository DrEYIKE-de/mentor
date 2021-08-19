<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Universite;
use App\Models\Faculte;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FacultyForm extends Component
{
    public $search='universite';
    public $action ='attach';
    public $name;
    public $directeur;
    public $itemId;
    public $unItemId;
    public $model;



    protected $listeners=[
        'attach'=>'attachFac',
        'update'=>'data'
    ];

    
        
    
    public function CleanVars()
    {
        $this->model= null;   
        $this->name= null; 
        $this->directeur= null;   
    }


        public function attachFac($unItemId)
     {
        $this->unItemId=$unItemId;
       
        $this->model= DB::table("universites")->find($this->unItemId)->name;
     }


        public function data($itemId)
        {
    
            $this->itemId=$itemId; 
    
            $model= DB::table("facultes")->find($this->itemId); 
 
                $this->model = Universite::find($model->universite_id)->name;
              $this->unItemId=$model->universite_id;
              $this->name= $model->name;
              $this->directeur=$model->directeur;
           
        }
        protected $rules=[
            
        'universite_id'=>'required',
        'name'=>'required|min:3',
        'directeur'=>'required|min:6',
            
        ];
            
          
    public function save()
    {
        $data=[
            'universite_id'=> $this->unItemId,
            'name'=>$this->name,
            'directeur'=>$this->directeur,         
        ];


        $validatedData = Validator::make(
            $data,$this->rules)->validate();

          
            if($this->itemId)
            {
        

            Faculte::find($this->itemId)->update($validatedData);
          
           
            session()->flash('facMessage', "Faculty ".$this->name ." update succesfuly and attach to " .$this->model ." university ");

            $this->CleanVars();

            }
           else{
            Faculte::create($validatedData);

            session()->flash('facMessage', "Faculty ".$this->name." create succesfuly and attach to ". $this->model ." university ");
            $this->CleanVars();
           }
          

    }
    

    public function render()
    {
        return view('livewire.forms.faculty-form');
    }
}
