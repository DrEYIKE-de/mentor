<div>
    
{{-- Universite-Create-Update-Delete --}}


   
<div class="col-md-12">
    <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
        <h6 class="alert-heading">Gestion des Universites</h6>
    </div>




    <div x-data="{ createUni: false }">
        <button class="btn btn-primary" @click="createUni = true">
                Create University
            </button>  
            <div class="col-md-12">
                <div x-show="createUni" @click.away="createUni = false">
                
                    <livewire:forms.universite-form>
                </div>
            </div>    
        </div>    
        
        <div x-data="{ updateUni: false }">
        <button class="btn btn-warning" @click="updateUni = true">
                Update University
            </button>  
            <div class="col-md-12">
                <div x-show="updateUni" @click.away="updateUni = false">
                @livewire('forms.universite-form-update')
                </div>
            </div>  
        </div> 
        <div x-data="{ uniDestroy: false }">
            <button class="btn btn-delete" @click="uniDestroy = true">
                Delete University
                </button>  
                <div class="col-md-12">
                    <div x-show="uniDestroy" @click.away="uniDestroy = false">
                    <livewire:forms.universite-form-delete> 
                    </div>
                </div>  
        </div>
       
</div>





