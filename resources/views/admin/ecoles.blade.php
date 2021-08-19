@extends('../layouts/admin')

@section('admin')

<div>
  
    <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
        <h6 class="alert-heading">Gestion des Ecoles</h6>
        
    </div>

 
    
   
<div class="container">

        <div x-data="{ createEco: false }">
               <button class="btn btn-primary" @click="createEco = true">
                    Create Ecole
                </button>  
                <div class="col-md-12">
                    <div x-show="createEco" @click.away="createEco = false">
                      
                       @livewire('forms.ecole-form')
                    </div>
                </div>    
            </div>    
            
            <div x-data="{ updateEco: false }">
               <button class="btn btn-warning" @click="updateEco = true">
                    Update Ecole
                </button>  
                <div class="col-md-12">
                    <div x-show="updateEco" @click.away="updateEco = false">
                        @livewire('forms.ecole-form-update')
                    </div>
                </div>  
            </div> 
          <div x-data="{ DestroyEco: false }">
               <button class="btn btn-delete" @click="DestroyEco = true">
                   Delete Ecole
                </button>  
                <div class="col-md-12">
                    <div x-show="DestroyEco" @click.away="DestroyEco = false">
                        @livewire('forms.ecole-form-delete')
                    </div>
                </div>  
            </div>
     
</div>
            
      

       
 
@endsection