@extends('../layouts/admin')

@section('admin')

<div class="col-md-12">
            <div class="alert bg-light text-dark alert-dismissible fade show " role="alert" x-data="{isOpen:true}">
                <h6 class="alert-heading">Gestion des Utilisateurs</h6>
            </div>    
        
           <div x-data="{ userStatus: false }">
                <button class="btn btn-primary" @click="userStatus = true">
                     Update User
                </button>  
                <div class="col-md-12">
                    <div x-show="userStatus" @click.away="userStatus = false">
                        <livewire:users.users-status>
                       
                    </div>
                </div>    
            </div>    
            
          
            
            <div x-data="{ codeLinkUser: false }">
                    <button class="btn btn-delete" @click="codeLinkUser = true">
                       Delete User
                    </button>  
                    <div class="col-md-12">
                        <div x-show="codeLinkUser" @click.away="codeLinkUser = false">
                       
                        <livewire:users.code-link-user>
                                
                        </div>
                    </div>  
           
           
    </div>
    
    
        
        
</div>
    
@endsection