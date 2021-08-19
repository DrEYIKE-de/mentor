@extends('../layouts/layout')

@section('content')

   <div class="container px-3 py-3">
      <div class="row">
         <div class="col-8 mx-auto">
            <div class="alert alert-success my-3">
             <h3>Universites </h3>
            </div>
         </div>
      </div>
   </div>

   <div class="container">
      <div class="row mb-2 shadow  p-3 mb-5 bg-light !spacing ">
         @foreach ($universites as $universite)
         <div class="col-md-6">
           <div class="card flex-md-row mb-4 box-shadow h-md-250">
             <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">Université</strong>
               <h3 class="mb-0">
                 <a class="text-dark" href="universites/{{ $universite->id }}">{{ $universite->name  }}</a>
               </h3>
               <div class="mb-1 text-muted"> {{ $universite->created_at }}</div>
               <p class="card-text mb-auto text-justify"> {{ substr( $universite->description, 0, 80 ) }}...</p>
               <a href="universites/{{ $universite->id }}">Voir Plus</a>
             </div>

             {{-- <img class="card-img-left flex-auto d-none d-md-block"> --}}
           </div>
         </div>
         @endforeach      
      </div>
   </div>
   

@endsection
