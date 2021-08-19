<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;

use App\Models\Universite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UniversiteForm extends Component
{
    public $user_id;

   
    public $name;

    public $rector;

    public $address;
    public $description;

    public $avatar;
    public $image;


    public $itemId;
    
    public $search='universite';


    protected $listeners=[
       
        'update'=>'dataUni'
    ];

         

    protected $rules=[
        'user_id'=> '',
        'name'=>'required|min:3',
        'rector'=>'required|min:6',
        'address'=>'required|min:4',
        'description'=>'required',
        'avatar'=> '',
        'image'=> ''
        ];

         
        public function dataUni($itemId)
        {
    
            $this->itemId=$itemId; 
    
            $model= DB::table("universites")->find($this->itemId); 

                $this->name=$model->name;
                $this->rector=$model->rector;
                $this->address=$model->address;
                $this->description=$model->description;   
        }
         
    
    
   
    public function CleanData()
    {
       $this->name=null;
       $this->rector=null;
       $this->address=null;
       $this->description=null;
       $this->avatar=null;
       $this->image=null;
    }
    

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save()
    {

        $data=[
            'user_id'=>Auth::user()->id,
            'name'=>$this->name,
            'rector'=>$this->rector,
            'address'=>$this->address,
            'description'=>$this->description,
            'avatar'=>'one beer please',
            'image'=>'one beer please',
            
        ];
        $validatedData = Validator::make(
            $data,$this->rules)->validate();

           if($this->itemId)
           {

            Universite::find($this->itemId)->update($validatedData);

            session()->flash('message', "University $this->name update succesfuly ");
            $this->CleanData();
           }
           else{

        
            Universite::create($validatedData);

            session()->flash('message', 'New university created successfully :'. $this->name);

            $this->CleanData();
           }
      
    }

    public function render()
    {
        return view('livewire.forms.universite-form');
    }
}
