
<div class='container-fluid'>
  
 

 
    
  @if (session()->has('message'))
  <div class="alert alert-dismissible fade show alert-success"  role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <strong>{{ session('message') }}</strong> 
  </div>  
  @endif
           

  

  <div class="row">
    
    <div class="col-md-8">
      <div class="card card-user">
        
        <div class="card-header">
          <h5 class="card-title">1- Profil de l'université</h5>
        </div>
        
        <hr class="mr-3">
        <div class="card-body">
          
          {{-- Debut du form --}}
          
         <form enctype="multipart/form-data" wire:submit.prevent='save'>
        
         

            <div class="row">
                <div class="col">
                    <p class="text-dark">Nom de l'Universite</p>
                </div>
            </div>
            
            
            <div class="row">
              <div class="pr-1 col-md-10">
                <div class="form-group @error('name')
                has-danger
                @enderror">
                  <label>Name</label>
                  <input type="text" class="form-control @error('name')
                  form-control-danger 
                  @enderror" placeholder="Ex.  Soa,Ngoa-Ekele" wire:model='name' name="name" value="{{ old('name') }}">
                </div>
                
                @error('name')
                    <div class="alert-danger alert">
                      {{ $message }}
                    </div>
                @enderror
              </div>
            </div> 

            <hr class="mr-3">
            
            <div class="row">
                <div class="col">
                    <p class="text-dark">Photos de l'universite</p>
                </div>
            </div>

            <div class="row">
                <div class="pr-1 col-md-10">
                    
                        <div class="form-group">
                          <label for="exampleFormControlFile1"> Image de garde</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" wire:model='image'>
                        </div>
                </div> 
            </div>
            
            <div class="row">
                <div class="pr-1 col-md-10">
                    
                    <div class="form-group">
                        <label for="my-input">Image Avatar</label>
                        <input  type="file" id="my-input" class="form-control-file" name="" wire:model='avatar' >
                    </div>
       
                </div> 
            </div>
           

            <hr class="mr-3">
            
            <div class="row">
                <div class="col">
                    <p class="text-dark">Nom du Recteur</p>
                </div>
            </div>
            
            
            <div class="row">                
              
              <div class="col-md-12">
                <div class="form-group">
                  <label> Name</label>
                  <input type="text" class="form-control @error('rector')
                  form-control-danger 
                  @enderror" name="recteur" placeholder="Dr Alexandre Baleck" wire:model='rector' value="{{ old('rector') }}">
                </div>
              </div>
            </div>
            @error('rector')
            <div class="alert-danger alert">
              {{ $message }}
            </div>
            @enderror
            <hr class="mr-3">
            
            <div class="row">
                <div class="col">
                    <p class="text-dark">Localisation</p>
                </div>
            </div>
            
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Addresse de l'universite</label>
                  <input type="text" class="form-control @error('address')
                  form-control-danger 
                  @enderror" placeholder="13455 Yaounde-Cameroun" value="Melbourne, Australia" value="{{ old('address') }}" wire:model='address'>
                </div>
              </div>
            </div>
            
            @error('address')
            <div class="alert-danger alert">
              {{ $message }}
            </div>
            @enderror
            
            <hr class="mr-3">
            
            <div class="row">
                <div class="col">
                    <p class="text-dark">Description de l'universite</p>
                </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>About University</label>
                  <textarea class="form-control textarea @error('description')
                  form-control-danger 
                  @enderror" wire:model='description'>{{ old('description') }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
               <div class="ml-auto mr-auto col-md-6">
                  <button type="submit" class="btn-round btn btn-success">
                    Creer cette université
                  </button>
               </div>
             </div>
        </form>
       
        </div>    
      </div> 
    </div>
 




    <div class="col-md-4">
      <div class="card card-user">
        
          <div class="image">
            {{-- <img src="../assets/img/damir-bosnjak.jpg" alt="..."> --}}
          </div>
            
          <div class="card-body">
              <div class="author">
                <a href="#">
                  {{-- <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="..."> --}}
                  <h5 class="title">Université</h5>
                  {{ $name }}
                </a>
              </div>
              <hr class="mr-3">
              <h6 class="mb-2 card-subtitle text-muted">Recteur : {{ $rector }}</h6>
              <hr class="mr-3">
              <blockquote class="blockquote">
                  
                <p class="mb-0">Adresse: {{ $address }}</p>
              </blockquote>
              <hr class="mr-3">
              
              <p class="description">
                {{ $description}}
              </p>
              
          </div>
       
       
      </div>
    </div>
  </div>
    
   
</div>

 


