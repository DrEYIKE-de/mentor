<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CodeLinkUser extends Component
{  
    public $search ='user';
    public $action ='delete';
    public $itemId;
    public $model;
    public $test=true;
    public $name;

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
        $this->model= User::find($this->itemId);   
        $this->name= $this->model->name;
        $user= Auth::user();

        if($this->model->level<$user->level)
       {
           $this->test=false;
       }
    }
   
    public function destroy()
    {
       
       User::destroy($this->itemId);

        session()->flash('message', "L'utilisateur ".$this->model." deleted");
        $this->CleanVars();
       

    }
    public function render()
    {
        return view('livewire.users.code-link-user');
    }
}
