<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function Universite()
   {
         
          return $this->belongsTo(Universite::class);

   }

   public function filieres()
   {     
      
      return $this->morphMany(Filiere::class,'filiereable');
   }
   
}
