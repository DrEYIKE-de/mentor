<div>
  {{-- Faculte-Create-Update-Delete  --}}


  
    <div class="col-md-12">
        <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
            <h6 class="alert-heading">Gestion des Facultes</h6>
        </div>
    
    
    
    
        <div x-data="{ createFac: false }">
            <button class="btn btn-primary" @click="createFac = true">
                    Create Faculte
                </button>  
                <div class="col-md-12">
                    <div x-show="createFac" @click.away="createFac = false">
                    
                        <livewire:forms.faculty-form>
                    </div>
                </div>    
            </div>    
            
            <div x-data="{ updateFac: false }">
            <button class="btn btn-warning" @click="updateFac = true">
                    Update Faculte
                </button>  
                <div class="col-md-12">
                    <div x-show="updateFac" @click.away="updateFac = false">
                    @livewire('forms.faculty-form-update')
                    </div>
                </div>  
            </div> 
            <div x-data="{ FacDestroy: false }">
                <button class="btn btn-delete" @click="FacDestroy = true">
                    Delete Faculte
                    </button>  
                    <div class="col-md-12">
                        <div x-show="FacDestroy" @click.away="FacDestroy = false">
                        <livewire:forms.faculty-form-delete> 
                        </div>
                    </div>  
                </div>
            </div>
    </div>
    </div>
    
</div>
