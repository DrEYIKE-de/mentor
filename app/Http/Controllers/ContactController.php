<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
    public function store()
    {
       $data= request()->validate(
           [
            'name'=>'required|min:6',
            'email'=>'required|email',
            'message'=>'required'
           ]);

        Mail::to('test@test.com')->send(new contact($data));   
        
    }
}
