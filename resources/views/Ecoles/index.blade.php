@extends('../layouts/layout')

@section('content')

   <div class="container px-3 py-3">
    <div class="row">
       <div class="col-8 mx-auto">
          <div class="alert alert-success my-3">
           <h3>Ecoles de formations </h3>
          </div>
       </div>
    </div>
 </div>

 <div class="container">
   <div class="row shadow  p-3 mb-5 bg-light !spacing">
        @foreach ($ecoles as $ecole)
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">
                                    Ecole de formations
                                </strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="ecoles/{{ $ecole->id }}">{{ $ecole->name  }}</a>
                                </h3>
                                <div class="mb-1 text-muted"> 
                                    {{ $ecole->created_at }}
                                </div>
                                    <p class="card-text mb-auto text-justify"> {{ substr( $ecole->description, 0, 80 ) }}...</p>
                                    <a href="universites/{{ $ecole->id }}">Voir Plus</a>
                        </div>  
                        {{-- <img class="card-img-left flex-auto d-none d-md-block"> --}}
                </div>
            </div>
    @endforeach        
   </div>
</div>

@endsection
