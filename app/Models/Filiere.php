<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    public function filiereable()
   {     
      
      return $this->morphTo();
   }


   public function niveaus()
   {     
      
      return $this->hasMany(Niveau::class);
   }

  
   public function codes()
   {
     return $this->morphToMany(Code::class,'codable');
   }

}
