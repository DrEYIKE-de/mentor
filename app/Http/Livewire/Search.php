<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    
   use WithPagination;
   
    public $search;
    public $action;
    public $spin=false;
    public $searchLost=false;
    public $itemId;
    public $unItemId;
    public $searchName;

   

    public function CleanVars()
    {
        $this->itemId=null;
        $this->model= null; 
        $this->searchName= null;   
    }
  
    public function attach($unItemId)
    {
        $this->unItemId=$unItemId;

        $this->emit('attach',$this->unItemId);
        $this->CleanVars();
    }
    
    public function update($itemId)
    {
        $this->itemId=$itemId;

        $this->emit('update',$this->itemId);
        $this->CleanVars();
      
    }
    
       public function delete($itemId)
    {
        $this->itemId=$itemId;
        
        $this->emit('delete',$this->itemId);
        $this->CleanVars();
    }
      
      
    public function render()
    {
        $searchResults=[];
      
        if($this->searchName)
        {
            $this->spin=true;
                if(strlen($this->searchName)>=3)
            {
                $searchResults= DB::table($this->search."s")->where('name','like','%'.$this->searchName.'%')->get();
                $array=$searchResults->toArray();
            
                if(empty($array))
                {
                    $this->searchLost=true;
                }
                else
                {
                    $this->searchLost=false;  
                }
            }
           
        }
        else
        {
            $this->spin=false; 
        }

        return view ('livewire.search'
        ,
    [
        'searchResults'=> $searchResults,
    ]
);
    }

    


   
     
           
}




