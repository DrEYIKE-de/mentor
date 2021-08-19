<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ecole;
use App\Models\Filiere;

class EcoleController extends Controller
{
    public function index()
    {
        $ecoles=Ecole::latest()->get();

        return view('Ecoles.index',compact('ecoles'));
    }


    public function show(Ecole $ecole)
    {    
       return view('Ecoles.show',compact('ecole'));
    }
}
