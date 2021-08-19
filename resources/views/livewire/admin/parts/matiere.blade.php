<div>
   
{{-- Matieres-Create-Update-Delete --}}   

<div class="col-md-12">

    <div class="my-3 alert bg-light text-dark alert-dismissible fade show" role="alert">
    <h6 class="alert-heading">Gestion des Matieres</h6>
    </div>    
    
    
    
    <div x-data="{ createMat: false }">
            <button class="btn btn-primary" @click="createMat = true">
            create Matiere
            </button>  
            <div class="col-md-12">
                <div x-show="createMat" @click.away="createMat = false">
                
               @livewire('forms.matieres.matiere-form')
                </div>
            </div>    
    </div>    
        
    <div x-data="{ updateMat: false }">
            <button class="btn btn-warning" @click="updateMat = true">
                Update Matiere
            </button>  
            <div class="col-md-12">
                <div x-show="updateMat" @click.away="updateMat = false">
                 @livewire('forms.matieres.matiere-form-update')
                </div>
            </div>  
    </div> 
        
    <div x-data="{ destroyMat: false }">
            <button class="btn btn-delete" @click="destroyMat = true">
            Delete Matiere
            </button>  
            <div class="col-md-12">
                <div x-show="destroyMat" @click.away="destroyMat = false">
                  @livewire('forms.matieres.matiere-form-delete') 
                </div>
            </div>  
    </div>
 </div>
    
    
    

</div>
