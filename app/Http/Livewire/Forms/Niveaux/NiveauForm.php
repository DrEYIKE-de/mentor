<?php

namespace App\Http\Livewire\Forms\Niveaux;


use App\Models\Niveau;
use App\Models\Filiere;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class NiveauForm extends Component
{
    public $search='filiere';
    public $action='attach';
    public $number;
    public $itemId;
    public $unItemId;
    public $items;
    public $model;


    protected $listeners=[
        'attach'=>'attachFil',
        'update'=>'data'
    ];

    protected $rules=[
        'filiere_id'=> 'required',
        'niveau'=>'required',
        ];
        
        
    
    public function CleanVars()
    {
        $this->model= null;   
        $this->number= null; 
        
    }
    
   

    public function attachFil($unItemId)
    {
        $this->unItemId=$unItemId;
     
        $this->model= DB::table("filieres")->find($this->unItemId)->name;
        $this->items= Filiere::find($this->unItemId)->niveaus()->pluck('niveau');
      
       
    }


         
    public function save()
    {
        
         
                $data=[
                    'filiere_id'=> $this->unItemId,
                    'niveau'=>$this->number,       
                ];
        


                $validatedData = Validator::make(
                    $data,$this->rules)->validate();
                    
                
               
                    Niveau::create($validatedData);
        
                    session()->flash('facMessage', "Niveau ".$this->number." create succesfuly and attach to ". $this->model ." university ");

                    $this->CleanVars();
            
            
          

    }
    public function render()
    {
       
        return view('livewire.forms.niveaux.niveau-form');
    }
}
