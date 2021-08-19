<?php

namespace App\Http\Livewire\Formations;

use App\Models\Code;
use App\Models\Filiere;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class IndexFormations extends Component
{


    public function render()
    {

        $user=Auth::user();

      
        // if(!count($user->codes))
        // {
        //     echo 'pas de codes,Veuillez en inserer un et les cours apparaitront ici ';
        // }
        // else 
        // {
          
        //  $code=Code::find($user->codes->first()->id)->code;
     

        //  $filieres=Filiere::has('codes')->get();
        //  $codeFil=[];

        //  foreach($filieres as $filiere){

        //      foreach($filiere->codes as $filCode)
        // {

        //  array_push($codeFil,$filCode->code);

        // }}

        // }
    
    
        //  if(in_array($code,$codeFil))
        // {
        //     echo 'yes';
        // }
        // else{
        //     echo "Aucune filiere academique rattaché à votre code";
        // }
   


  
     
        return view('livewire.formations.index-formations');
    }
}
