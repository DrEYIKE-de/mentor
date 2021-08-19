@extends('../layouts/admin')

@section('admin')
<div>
  
    <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
        <h6 class="alert-heading">Gestion des Niveaux d'une filiere</h6>
        
    </div>

 
    
   
<div class="container">

        <div x-data="{ createEco: false }">
               <button class="btn btn-primary" @click="createEco = true">
                   Add Level to Filiere
                </button>  
                <div class="col-md-12">
                    <div x-show="createEco" @click.away="createEco = false">
                      
                     @livewire('forms.niveaux.niveau-form')
                    </div>
                </div>    
            </div>    
            
          <div x-data="{ DestroyEco: false }">
               <button class="btn btn-delete" @click="DestroyEco = true">
                   Delete Level to Filiere
                </button>  
                <div class="col-md-12">
                    <div x-show="DestroyEco" @click.away="DestroyEco = false">
                        @livewire('forms.niveaux.niveau-form-delete')
                    </div>
                </div>  
            </div>
     
</div>
            
      

@endsection