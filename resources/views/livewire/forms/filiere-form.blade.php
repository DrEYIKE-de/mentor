<div>
  

@if (session()->has('filMessage'))
  <div class="alert alert-dismissible fade show alert-success"  role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <strong>{{ session('filMessage') }}</strong> 
  </div>  
  @endif
   
  
   <div class="container">
    <form wire:submit.prevent='save'>
         <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Faculte liee à cette filiere </h4>
            
            @livewire('search',['search'=>$search,'action'=>$action])


        </div>

   
          <div class="row">
              <div class="col-md-12">
                      <div class="form-group">
                        <label>Faculty Name to link</label>
                        <input type="text" class="form-control "  placeholder="Ex.Faculty of sciences" value='{{ $model}}' disabled>
                      </div> 
              </div>
          </div>
          
     <div class="card">
         <div class="card-body">
              
       <div class="row">
             <div class="col-md-12">
                <div class="form-group">
                  <label>Filiere Name</label>
                  <input type="text" class="form-control @error('name') form-control-danger @enderror" name="name" placeholder="Ex. Sciences of earth " wire:model='name' value="{{ old('name') }}">
                </div>
            </div>
         
            @error('name')
            <div class="alert-danger alert">
              {{ $message }}
            </div>
            @enderror
        </div>
          
        <br>

       
        <button type="submit" class="btn btn-primary">Create Filiere</button>
           
       </form>
         </div>
    </div>

    
</div>
