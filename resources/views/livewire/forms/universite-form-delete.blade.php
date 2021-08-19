<div>

    @if (session()->has('message'))
    <div class="alert alert-dismissible fade show alert-danger"  role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>{{ session('message') }}</strong> 
    </div>  
    @endif
             
      
      @livewire('search',['search'=>$search,'action'=>$action]) 
      
      @if ($itemId)
      <table class="table">
          <thead>
              <tr>
                  <th>Universite</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
               <tr>
                 
                  
                  <td scope="row">
                        Etes vous sur de vouloir supprimer l' {{ $search }} : <h4 class='display-4'>{{ $model }}</h4>    
                  </td> 
                  <td scope="row"><button type="button" class="btn btn-delete" wire:click='destroy'>Supprimer</button></td> 
                  
                            
              </tr>          
          </tbody>
      </table>
      
      
      @endif   
</div>
