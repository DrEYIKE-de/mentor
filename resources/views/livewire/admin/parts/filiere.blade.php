<div>
   {{-- Filiere-Create-Update-Delete --}} 
<div class="col-md-12">
    <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
        <h6 class="alert-heading">Gestion des Filieres Liées aux Universités </h6>
    </div>

        <div x-data="{ createFil: false }">
            <button class="btn btn-primary" @click="createFil = true">
                    Create Filiere
                </button>  
                <div class="col-md-12">
                    <div x-show="createFil" @click.away="createFil = false">
                        <livewire:forms.filiere-form>
                    </div>
                </div>    
        </div>    
        
        <div x-data="{ updateFil: false }">
            <button class="btn btn-warning" @click="updateFil = true">
                    Update Filiere
                </button>  
                <div class="col-md-12">
                    
                    <div x-show="updateFil" @click.away="updateFil = false">
                        
                        @livewire('forms.filiere-form-update')
                    </div>
                </div>  
        </div> 
        <div x-data="{ FilDestroy: false }">
                    <button class="btn btn-delete" @click="FilDestroy = true">
                        Delete Filiere
                    </button>  
                    <div class="col-md-12">
                        <div x-show="FilDestroy" @click.away="FilDestroy = false">
                        @livewire('forms.filiere-form-delete') 
                        </div>
                    </div>  
        </div>
        </div>
    </div>
</div>




</div>
