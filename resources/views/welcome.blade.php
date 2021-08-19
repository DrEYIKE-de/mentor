@extends('layouts/layout')

@section('content')

<div class="container mt-4 ">
    <div class="p-3 mb-5 rounded shadow row alert alert-primary justify-content-around ">
        <div class="px-1 py-1 col-sm-12 col-md-12 col-lg-6 card-body" >
            
            <img src="{{ asset('images/garde.jpg') }}" class="float-left rounded shadow " style="width: 100%; height:auto; " >

        </div>
        <div class="pt-3 col-sm-12 col-md-12 col-lg-5">
          
            <div class="row">  
                <p class="text-center h3">
                    Hello  <span><strong>Mentor</strong></span> ,
                </p>
            </div>
          <hr class="mr-3">

            <div class="mt-2 row">
                <p class="text-justify" style="line-height: 1.7rem;">
                <mark>Mentor</mark> est une plateforme académique conçue dans le but d'améliorer 
                    l'accès aux formations professionelles des differentes universités, facultés et écoles de formation  au Cameroun.<br><br>
                    
                    Elle se veut aussi un grand répertoire où les étudiants retrouveront l'integralité de leurs cours et/ou
                     td corrigés, et pourront même se former à travers nos facultés libres partenaires pour acquérir ou améliorer  leurs compétences.
                </p>
            </div>
            <div class="row">
               
                <a class="btn btn-danger" href="/contact">En savoir plus</a>

            </div>
        </div>
    </div>
</div>

<hr/>

@endsection