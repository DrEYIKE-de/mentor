@extends('../layouts/layout')

@section('content')
    

    <div class="container">
       <div class="row">  
            <div class="mx-2 my-2 col card ">
                  <div class="card-body ">
                     <h1 class='display-4'>Presentation de l'universite</h1>

                    <h5 class="card-title"><em class=""> {{ $universite->name}} </em>
                               
                     </h5>
                    
                     <p class="card-text ">
                        Recteur :   <strong> {{ $universite->recteur }}</strong>
                     </p>
                     <hr class="mr-3">
                     <h3>Description Sommaire de l'universite</h3>
                    <p class="card-text">
                       {{ $universite->description }}
                     </p>
                    <hr class="">

                    <ul class="">
                     @foreach ($universite->facultes as $faculte)
                         <li class="">
                            {{ $faculte->name }}
                            <ul class="">
                               @foreach ($faculte->filieres as $filiere)
                                 <li class="">
                                    <a href="/home" class="">{{ $filiere->name }}</a>
                                 </li>
                               @endforeach
                            </ul>
                         </li>
                     @endforeach
                  </ul>
                </div>
             </div>                  
       </div> 
    </div>


@endsection