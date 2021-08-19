@extends('../layouts/layout')

@section('content')
    
    <div class="container">
       <div class="row">  
            <div class="col card mx-2 my-2 ">
                  <div class="card-body ">
                     <h1 class='display-4'>Ecole de Formation</h1>

                    <h5 class="card-title"><em class=""> {{ $ecole->name}} </em>
                               
                     </h5>
                    
                     <p class="card-text ">
                        Directeur :   <strong> {{ $ecole->directeur }}</strong>
                     </p>
                     <hr class="mr-3">
                     <h3>Description Sommaire de l'ecole</h3>
                    <p class="card-text">
                       {{ $ecole->description }}
                     </p>
                     <ul class="">
                        @foreach ($ecole->filieres as $filiere)
                           <li class="">
                              <a href="/home" class="">{{ $filiere->name }}</a>
                           </li>
                        @endforeach
                     </ul>
                </div>
             </div>                  
       </div> 
    </div>


@endsection