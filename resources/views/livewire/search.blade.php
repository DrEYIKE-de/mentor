<div>
  
  {{-- Barre de recherche --}}
        <div class="input-group no-border"> 
          <input type="text" value="" class="form-control" placeholder="Search {{ $search }} to {{ $action }}" wire:model='searchName'>     
          <div class="input-group-append">
            <div class="input-group-text">
              @if($spin==true)
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              @else
              <i class="nc-icon nc-zoom-split"></i>
              @endif
            </div>
          </div>
        </div>
       
    
      
      @if ($searchLost)
      
      
      <div class="alert alert-dismissible fade show alert-danger"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>No results for {{ $searchName }}</strong> - please you need to verify your entry.
      </div>
      @endif
      
        
       
       <div class="row">
        <div class="col-md-8">
            <ul class="list-unstyled">
               @foreach ($searchResults as $result)
               <li>
                 <div class="card">
                    <div class="card-body justify-content-around">
                     
                     @if ($action=='attach')
                     {{ $search }} : {{$result->name}} 
                     <button type="button" class="btn btn-primary" 
                     wire:click="attach({{ $result->id }})">
                       Attach 
                      </button> 

                      @elseif ($action=='update')
                     {{ $search }} : {{$result->name}} 
                     <button type="button" class="btn btn-primary" 
                     wire:click="update({{ $result->id }})">
                        Update
                      </button> 

                     @else
                     {{ $search }} : {{$result->name}} 
                     <button type="button" class="btn btn-delete" 
                     wire:click="delete({{ $result->id }})">
                       Delete
                      </button> 
                     @endif

                    </div>
                </div>
                 
               </li>
               @endforeach
            </ul>
        </div>
    </div>
    
    
   

    
</div>
