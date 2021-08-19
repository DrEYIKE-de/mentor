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
            <h4 class="alert-heading">Universite liee à cette faculte </h4>
            @livewire('search',['search'=>$search,'action'=>$action])

        </div>
     <form wire:submit.prevent='save'>
     <div class="row">
         <div class="col-md-12">
                <div class="form-group">
                  <label>Universite Name to link</label>
                  <input type="text" class="form-control @error('$model') form-control-danger @enderror"  name="model" placeholder="Ex. Ngoa" value='{{ $model}}' disabled>
                </div> 
         </div>
         @error('model')
         <div class="alert-danger alert">
           {{ $message }}
         </div>
         @enderror
     </div>


     <div class="card">
         <div class="card-body">
              
       <div class="row">
             <div class="col-md-12">
                <div class="form-group">
                  <label>Faculty Name</label>
                  <input type="text" class="form-control @error('name') form-control-danger @enderror" name="name" placeholder="Faculty of sciences" wire:model='name' value="{{ old('name') }}">
                </div>
            </div>
         
            @error('name')
            <div class="alert-danger alert">
              {{ $message }}
            </div>
            @enderror
        </div>
          <div class="row">                
                <div class="col-md-12">
                    <div class="form-group">
                        <label> Director's name</label>
                        <input type="text" class="form-control @error('directeur')form-control-danger @enderror" name="directeur" placeholder="Dr Alexandre Baleck" wire:model='directeur' value="{{ old('directeur') }}">
                    </div>
                </div>
                @error('directeur')
                <div class="alert-danger alert">
                    {{ $message }}
                </div>
                @enderror
         </div>
        <br>

       
    <button type="submit" class="btn btn-primary">Create Faculty</button>
           
       </form>
         </div>
     </div>

    
</div>

