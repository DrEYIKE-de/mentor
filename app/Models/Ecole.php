<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

  protected $guarded=[];
    public function filieres()
   {     
      
      return $this->morphMany(Filiere::class,'filiereable');
   }
}
