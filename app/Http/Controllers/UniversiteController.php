<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Universite;
use App\Models\User;

class UniversiteController extends Controller
{
    public function index()
    {
         $universites= Universite::latest()->get();
        return view('universites.index',compact('universites'));
    }

    public function show(Universite $universite)
    {
        
       return view('universites.show',compact('universite'));
    }

   public function create(User $user)
   {
      return view('universites.create',compact('user'));
   }
   public function store()
   {
         
   }

}
