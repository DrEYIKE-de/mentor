<?php

namespace App\Http\Livewire\Forms\Cours;


use App\Models\Cours;
use App\Models\Matiere;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CoursForm extends Component
{ 
        public $search='matiere';
        public $action ='attach';
        public $name;
        public $text;
        public $itemId;
        public $unItemId;
        public $model;
        public $chap;
       

        protected $listeners=[
           
            'attach'=>'attachMat',
           
        ];
    
        
            
        
        public function CleanVars()
        {
            $this->model= null;   
            $this->name= null; 
            $this->directeur= null;   
        }
    
    
            public function attachMat($unItemId)
         {
            $this->unItemId=$unItemId;
           
            $this->model= DB::table("matieres")->find($this->unItemId)->name;
            $chap= DB::table("cours")->where('matiere_id',$this->unItemId)->get();
            if($chap)
            {
                $this->chap=count($chap)+1;
            }
            else
            {
                $this->chap=1;  
            }
         }
    
        //  public function attached($mout)
        //  {
        //     $this->text=$mout;

        //  }
    
        //     public function data($itemId)
        //     {
        
        //         $this->itemId=$itemId; 
        
        //         $model= DB::table("facultes")->find($this->itemId); 
     
        //             $this->model = Universite::find($model->universite_id)->name;
        //           $this->unItemId=$model->universite_id;
        //           $this->name= $model->name;
        //           $this->directeur=$model->directeur;
               
        //     }
            protected $rules=[
                
            'matiere_id'=>'required',
            'chap'=>'required',
            'name'=>'required|min:3',
            'text'=>'required|min:100',
                
            ];
                
              
        public function save()
        {
            $data=[
                'matiere_id'=> $this->unItemId,
                'chap'=>$this->chap,
                'name'=>$this->name,
                'text'=>$this->text,         
            ];
    
    
            $validatedData = Validator::make(
                $data,$this->rules)->validate();
    
              
                if($this->itemId)
                {
            
    
                Cours::find($this->itemId)->update($validatedData);
              
               
                session()->flash('facMessage', "Faculty ".$this->name ." update succesfuly and attach to " .$this->model ." university ");
    
                $this->CleanVars();
    
                }
               else{
                Cours::create($validatedData);
    
                session()->flash('facMessage', "Faculty ".$this->name." create succesfuly and attach to ". $this->model ." university ");
                $this->CleanVars();
               }
              
    
      }
       
    public function render()
    {
        return view('livewire.forms.cours.cours-form');
    }
}
