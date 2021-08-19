<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    public function Niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function Professeur()
    {
        return $this->belongsToMany(Professeur::class);
    }

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }


}
