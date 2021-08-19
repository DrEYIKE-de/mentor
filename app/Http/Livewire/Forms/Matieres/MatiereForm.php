<?php

namespace App\Http\Livewire\Forms\Matieres;

use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Matiere;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MatiereForm extends Component
{
     public $search='filiere';
     public $action ='attach';
     public $name;
    public $number;
    public $itemId;
    public $unItemId;
    public $model;
    public $items;
    public $niveau;
    public $idMat;

    protected $listeners=[
        'attach'=>'attachMat',
        'update'=>'data'
    ];

    protected $rules=[
        'niveau_id'=> 'required',
        'name'=>'required',
        ];
        
        
    
    public function CleanVars()
    {
        $this->model= null;   
        $this->number= null; 
        $this->name= null;
    }

    public function attachMat($itemId)
    {
        $this->itemId=$itemId;
       
        $this->model= DB::table("filieres")->find($this->itemId)->name;
        $this->items= Filiere::find( $this->itemId)->niveaus()->get();
   
  
    }
   
    public function link($item)
    {
        $this->unItemId=$item;
        $niv= Niveau::find($this->unItemId);
        $this->niveau= $niv->niveau;
        $this->number= $niv->id;

        session()->flash('MatMessage', "vous avez selectionné le niveau ".$this->niveau." pour la filiere ". $this->model);

    }

    public function data($idMat)
    {
        $this->idMat=$idMat;
        $niv= Matiere::find($this->idMat);
        $model=Niveau::find($niv->niveau_id)->filiere_id;
        $this->model= Filiere::find($model)->name;
        $this->items= Filiere::find( $model)->niveaus()->get();
        $this->number= $niv->niveau_id;
        $this->name= $niv->name;

      

    }



    public function save()
    {
        
         
                $data=[
                    'niveau_id'=> $this->number,
                    'name'=>$this->name,       
                ];
        


                $validatedData = Validator::make(
                    $data,$this->rules)->validate();
                    
                
                  
                    if($this->idMat)
                    {
                        
        
                   Matiere::find($this->idMat)->update($validatedData);
                  
                   
                    session()->flash('facMessage', "Matiere ".$this->name ." update succesfuly and attach to ". $this->niveau ." de la filiere ".$this->model);
        
                    $this->CleanVars();
        
                    }
                   else{
                    Matiere::create($validatedData);
        
                    session()->flash('facMessage', "Matiere".$this->name." create succesfuly and attach to ". $this->niveau ." de la filiere ".$this->model);

                    $this->CleanVars();
                   }
            
          

    }

    public function render()
    {
        return view('livewire.forms.matieres.matiere-form');
    }
}
