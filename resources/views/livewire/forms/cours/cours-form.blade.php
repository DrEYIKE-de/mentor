 <div>
  
    <div class="container">
        <div class="row-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="">Creer votre nouveau cours</h5>
                </div>
                <div class="card-body">

                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Matiere liee à ce cours</h4>
                        @livewire('search',['search'=>$search,'action'=>$action])
            
                    </div>
                    <form wire:submit.prevent='save'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Nom de la matiere</label>
                              <input type="text" class="form-control @error('$model') form-control-danger @enderror"  name="model" placeholder="Ex. Physique nucleaire" value='{{ $model}}' disabled>
                            </div> 
                     
                     @error('model')
                     <div class="alert-danger alert">
                       {{ $message }}
                     </div>
                     @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Titre du cours n° {{ $chap }} de la matiere <strong>{{ $model }}</strong></label>
                          <input type="text" class="form-control @error('$name') form-control-danger @enderror"  name="name" placeholder="Ex. l'atome" wire:model='name'>
                        </div> 
                 
                 @error('name')
                 <div class="alert-danger alert">
                   {{ $message }}
                 </div>
                 @enderror
                </div>
            </div>        
                <hr class="mr-3">
               
                
            
                
                
                        <button type="submit" class=" btn btn-primary">Create Lesson</button>
                        
                    </form>
                </div>
            </div>         
        </div>      
    </div>
    
    
</div> 
