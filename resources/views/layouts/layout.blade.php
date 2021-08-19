<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="description" content="Mentor site ">
    <meta name="author" content="Dr Eyike Etame">
    <title>Mentor</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

      <!-- fonts  -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Piazzolla&family=Roboto&display=swap" rel="stylesheet">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  
  
    <style>
      body{ 
        font-family: 'Roboto', serif;  
      }
    </style>
</head>

  <body class="text-center">

    <div class="p-3 mx-auto rounded cover-container d-flex h-100 flex-column ">
      <header class="mb-auto masthead">
        <div class="inner ">
          
            <h1 class=" display-3 masthead-brand"><a href='/' class="nav-link text-dark">Mentor</a></h1>
       
            <blockquote class="text-center blockquote">
                <footer class="blockquote-footer disabled"> <cite title="Source Title">Tout le monde merite d'apprendre</cite></footer>
              </blockquote>
            
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center bg-light ">              
               <p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">    
                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="52" viewBox="0 0 512 512" width="52" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="512" y2="0"><stop offset="0" stop-color="#addcff"/><stop offset=".5028" stop-color="#eaf6ff"/><stop offset="1" stop-color="#eaf6ff"/></linearGradient><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="158.676" y2="353.324"><stop offset="0" stop-color="#5558ff"/><stop offset="1" stop-color="#00c0ff"/></linearGradient><g><circle cx="256" cy="256" fill="url(#SVGID_1_)" r="256"/><g><g><path d="m149.238 158.676h-35.391c-4.886 0-8.848 3.961-8.848 8.848v35.391c0 4.886 3.961 8.848 8.848 8.848h35.391c4.886 0 8.848-3.961 8.848-8.848v-35.391c0-4.887-3.961-8.848-8.848-8.848zm0 70.781h-35.391c-4.886 0-8.848 3.961-8.848 8.848v35.391c0 4.886 3.961 8.848 8.848 8.848h35.391c4.886 0 8.848-3.961 8.848-8.848v-35.391c0-4.887-3.961-8.848-8.848-8.848zm0 70.781h-35.391c-4.886 0-8.848 3.961-8.848 8.848v35.391c0 4.886 3.961 8.848 8.848 8.848h35.391c4.886 0 8.848-3.961 8.848-8.848v-35.391c0-4.886-3.961-8.848-8.848-8.848zm248.914-141.562h-213.523c-4.886 0-8.848 3.961-8.848 8.848v35.391c0 4.886 3.961 8.848 8.848 8.848h213.523c4.886 0 8.848-3.961 8.848-8.848v-35.391c0-4.887-3.961-8.848-8.848-8.848zm0 70.781h-213.523c-4.886 0-8.848 3.961-8.848 8.848v35.391c0 4.886 3.961 8.848 8.848 8.848h213.523c4.886 0 8.848-3.961 8.848-8.848v-35.391c0-4.887-3.961-8.848-8.848-8.848zm0 70.781h-213.523c-4.886 0-8.848 3.961-8.848 8.848v35.391c0 4.886 3.961 8.848 8.848 8.848h213.523c4.886 0 8.848-3.961 8.848-8.848v-35.391c0-4.886-3.961-8.848-8.848-8.848z" fill="url(#SVGID_2_)"/></g></g></g></svg>    
                  </button>
               </p>
                
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <div class="row">
                        <div class="col">
                            <div class="rounded card card-body">
                                <ul class="navbar-nav nav nav-pills ">
                                    <li class="nav-item ">
                                    <a class="nav-link {{ Request::path() === ('/') ? 'active bg-primary text-white' : ''  }}" href="/">Accueil<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link {{ Request::path() === ('Academies') ? 'active bg-success text-white' : ''  }}" href="{{ route('Academies') }}">Academies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::path() === ('partenaires') ? 'active bg-info text-white' : ''  }}" href="/partenaires">Partenaires</a>
                                    </li>
                
                                    <li class="nav-item">
                                    <a class="nav-link {{ Request::path() === ('bibliotheque') ? 'active bg-secondary' : ''  }}" href="/bibliotheque">Bibliotheque</a>
                                    </li>
                                    <li class="nav-item" style="border-right: 0.5px solid rgba(0, 0, 0, 0.384);" >
                                      <a class="nav-link pr-2 {{ Request::path() === ('contact') ? 'active bg-warning' : ''  }}" href="/contact">Contact</a>
                                  </li>
                                   
                               
                                  @if (Route::has('login'))
                                  @auth
                                  <li class="nav-item"> <a class="nav-link" href="{{ url('/home') }}">Dashboard</a> </li>
                                  @else
                                  <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}" >Login</a></li>
                                  
                                  @if (Route::has('register'))
                                  <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                                  
                                  @endif
                              @endif
              
                              @endif
                 
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            
        </div>
      </header> 

      @yield('content')


      <footer class="mt-auto mastfoot">
        <div class="inner">
        </div>
      </footer>
    </div>

      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- CSS only -->

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>


