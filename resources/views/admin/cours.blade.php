@extends('../layouts/admin')

@section('admin')
<div>
  
    <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
        <h6 class="alert-heading">Gestion des Cours</h6>
        
    </div>

<div class="container">

        <div x-data="{ createco: false }">
               <button class="btn btn-primary" @click="createco = true">
                   Create lesson
                </button>  
                <div class="col-md-12">
                    <div x-show="createco" @click.away="createco = false">
                      
                     @livewire('forms.cours.cours-form')
                    </div>
                </div>    
            </div>    
            
            <div x-data="{ updateco: false }">
               <button class="btn btn-warning" @click="updateco = true">
                    Update Lesson
                </button>  
                <div class="col-md-12">
                    <div x-show="updateco" @click.away="updateco = false">
                     @livewire('forms.cours.cours-form-update')
                        
                    </div>
                </div>  
            </div> 
          <div x-data="{ Destroyco: false }">
               <button class="btn btn-delete" @click="Destroyco = true">
                   Delete Lesson
                </button>  
                <div class="col-md-12">
                    <div x-show="Destroyco" @click.away="Destroyco = false">
                     @livewire('forms.cours.cours-form-delete')
                        
                    </div>
                </div>  
            </div>
     
</div>
            
      
@endsection