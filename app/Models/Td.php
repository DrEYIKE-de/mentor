<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Td extends Model
{
    use HasFactory;

    public function Cours()
    {
        return $this->belongsTo(Cours::class);
    }
   
}
