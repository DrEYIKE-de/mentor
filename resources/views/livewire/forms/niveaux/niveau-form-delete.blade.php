<div>
    @if (session()->has('facMessage'))
    <div class="alert alert-dismissible fade show alert-success"  role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>{{ session('facMessage') }}</strong> 
    </div>  
    @endif
     
    @if (session()->has('fouMessage'))
    <div class="alert alert-dismissible fade show alert-delete"  role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <strong>{{ session('fouMessage') }}</strong> 
    </div>  
    @endif
  
     <div class="container">
  
           <div class="alert alert-primary" role="alert">
              <h4 class="alert-heading">Rechercher la filiere</h4>
              @livewire('search',['search'=>$search,'action'=>$action])
  
          </div>
        
            <div class="row">
                <div class="col-md-12">
                       <div class="form-group">
                         <label>Filiere Name</label>
                         <input type="text" class="form-control @error('$model') form-control-danger @enderror"  placeholder="Ex. Ngoa" value='{{ $model}}' disabled required>
                       </div> 
                </div>
            </div>
          
         
          
          @if ($model)
         
          
                        @if (!empty($items))
                        <div class="alert alert-primary" role="alert">
                            <p class="alert-heading">Niveau(x) existant(s) de la filiere: {{ $model}}</p>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Filiere</th>
                                    <th>Niveaux</th>
                                    <th>Action Irreversible</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $items as $item)
                                <tr>
                                    <td scope="row">
                                      {{ $model }}
                                    </td> 
                                    <td scope="row">
                                    {{ $item->niveau }}
                                    </td>  
                                  
                                    <td scope="row">
                                        <button type="button" class="btn btn-delete" wire:click='destroy( {{ $item->id }})'>
                                        Supprimer</button>
                                    </td>     
                                </tr>
                                @endforeach          
                            </tbody>
                        </table>
                    @else
                    
                    <div class="alert alert-dismissible fade show alert-danger"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>No Level associated to this Filiere {{ $model }}</strong> 
                    </div>  
                    
                @endif   
      
          @endif
          
</div>
