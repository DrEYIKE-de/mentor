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
       
      
    
       <div class="container">
    
             <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">filiere liee à cette Matiere </h4>
                @livewire('search',['search'=>$search,'action'=>$action])
    
            </div>
        
         <div class="row">
             <div class="col-md-12">
                    
              <label>Filiere Name</label>
                  <input type="text" class="form-control @error('$model') form-control-danger @enderror"  placeholder="Ex. Geopolique" value='{{ $model}}' disabled required>
             </div>
         </div>
         <br/>
         @if ($model)
         
          
        @if (!empty($items)) 
         <div class="alert alert-primary" role="alert">
             <p class="alert-heading"> Choisir le niveau de la matiere , filiere: {{ $model}}</p>
         </div>
         <table class="table">
             <thead>
                 <tr>
                     <th>Filiere</th>
                     <th>Niveaux</th>
                     <th>Action</th>
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
                         <button type="button" class="btn btn-success" wire:click='link( {{ $item->id }})'>
                        attacher ce niveau</button>
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
     <strong>Pas de niveau pour la filiere: {{ $model }}</strong> 
     </div>  
     
 @endif   

@endif
          
      </div>
      
      
      <br/>
      
       
      @if (session()->has('MatMessage'))
      <div class="alert alert-dismissible fade show alert-success"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>{{ session('MatMessage') }}</strong> 
      </div>  
      @endif
      <form wire:submit.prevent='save'>
      <div class="card">
             <div class="card-body">
                  
           <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                      <label>Nom de la Matiere</label>
                      <input type="text" class="form-control @error('name') form-control-danger @enderror" name="name" placeholder="Maths, sciences" wire:model='name' value="{{ old('name') }}">
                    </div>
                </div>
             
                @error('name')
                <div class="alert-danger alert">
                  {{ $message }}
                </div>
                @enderror
            </div>
              
    
           
        <button type="submit" class="btn btn-primary">Create Matiere</button>
               
           </form>
             </div>
         </div>
    
        
    </div> 
