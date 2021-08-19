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
          <form wire:submit.prevent='save'>
            <div class="row">
                <div class="col-md-12">
                       <div class="form-group">
                         <label>Filiere Name</label>
                         <input type="text" class="form-control @error('$model') form-control-danger @enderror"  placeholder="Ex. Ngoa" value='{{ $model}}' disabled required>
                       </div> 
                </div>
            </div>
          
         
          
          @if ($model)
         
          
                        @if (!$items)
                        <div class="alert alert-dismissible fade show alert-danger"  role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <strong>No Level associated to this Filiere {{ $model }}</strong> 
                          </div> 
                    @else
                    <div class="alert alert-primary" role="alert">
                      <p class="alert-heading">Niveau(x) existant(s) de la filiere: {{ $model}}</p>
                  </div>
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Filiere</th>
                              <th>Niveaux</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach( $items as $item)
                          <tr>
                              <td scope="row">
                                {{ $model }}
                              </td> 
                              <td scope="row">
                              {{ $item }}
                              </td>              
                          </tr>
                          @endforeach          
                      </tbody>
                  </table>
                @endif   
      
          @endif
          
          
       
  
  
       <div class="card">
           <div class="card-body">
                
         <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                    <label>Level's number</label>
                    <input type="number" class="form-control @error('number') form-control-danger @enderror" name="number" placeholder="ajouter un niveau"  min='1' max='7' wire:model='number' value="{{ old('number') }}"required >
                    @error('number')
                    <div class="alert-danger alert">
                        {{ $message }}
                    </div>
                    @enderror
             </div>
                  </div>
              </div>
           
             
           

         
      <button type="submit" class="btn btn-primary">Create Filiere Level</button>
             
         </form>
           </div>
       </div>
  
      
</div>
