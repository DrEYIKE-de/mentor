@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="pt-3 position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <span class="ml-2 badge badge-pill badge-secondary">{{ Auth::user()->username}}</span>
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
          </ul>

         
          <h6 class="px-3 mt-4 mb-1 sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Vos Formation(s)</span> <span class="badge badge-pill badge-primary">0</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          
          <ul class="mb-2 nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                {{-- noms des formations --}}
              </a>
            </li>
          </ul>
          
          <h6 class="px-3 mt-4 mb-1 sidebar-heading d-flex justify-content-between align-items-center text-muted">
            <span>Livres(s)</span> <span class="badge badge-pill badge-primary">0</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          
          
          <ul class="mb-2 nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                  {{-- noms des livres achetes --}}
              </a>
            </li>
            
            
       
           
          </ul>
            
              </ul>
            </div>
          </ul>
        </div>
        
        
      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="mb-2 btn-toolbar mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>


        
        <div class="container mt-3 ">
           <div class="row justify-content-center">
               <div class=" col-md-12">
                <form>    
                        <div class=" form-group row alert alert-info">
                            <label for="code" class="col-md-4 col-form-label text-md-right">
                                
                           Entrez votre code Etudiant
                        </label>
                            <div class=" col-md-6">
                                <input id="code" type="password" class="form-control  @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}">
                
                                <small id="code" class="form-text text-muted">
                                Ce code est delivré dans par votre Institution Académique partenaire à Mentor
                            </small>
                
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-0 form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Ouvrir mes cours
                                </button>
                            </div>
                        </div>
                       
                    </form>
               </div>
           </div>
        </div>  
        <hr class="mr-4">
      
        
        
      <livewire:formations.index-formations> 



          <hr class="mr-4">
          
          
          {{-- <livewire:Livres> --}}

            
      </main>
    </div>
  </div>


 

@endsection

