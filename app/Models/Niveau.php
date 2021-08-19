<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    
    public function Filiere()
   {     
      
      return $this->belongsTo(Filiere::class);
   }

   public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }
}
