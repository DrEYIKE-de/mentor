
<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="">
 
  <title>
  Admin-Mentor
  </title>
  
  {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> --}}
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    
    
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <!-- The "defer" attribute is important to make sure Alpine waits for Livewire to load first. -->

    
  @livewireStyles

  
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="{{ route('admin') }}" class="simple-text logo-mini">
          
            <div class="logo-image-small">
            <!-- logo -->
            </div>  
              
        </a>
        <a href="{{ route('home') }}" class="simple-text logo-normal">
          Mentor
          
        </a>
      </div>
      
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::path()==='admin' ? 'active' : '' }}">
            <a href="{{ route('admin') }}">
              <i class="nc-icon nc-laptop"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="{{ Request::path()==='admin/users' ? 'active' : '' }} ">
            <a href="{{ route('admin.users') }}">
              <i class="nc-icon nc-single-02"></i>
              <p>Users</p>
            </a>
          </li>
          
         
     
          <li class="{{ Request::path()==='admin/universites' ? 'active' : '' }}">  
            <a href="{{ route('admin.universites') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Universites</p>
            </a>
          </li>

          
        
        <li class="{{ Request::path()==='admin/ecoles' ? 'active' : '' }}">        
          <a href="{{ route('admin.ecoles') }}">
              <i class="nc-icon nc-hat-3"></i>
            <p>Ecoles</p>
          </a>
        </li>
       

          <li class="{{ Request::path()==='admin/facultes' ? 'active' : '' }}">  
            <a href="{{ route('admin.facultes') }}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Facultes</p>
            </a>
          </li>

          <hr class="mr-3">
          <div x-data="{ Fil: false }">
              <button class="btn btn-primary" @click="Fil = true">
               
               <span class=""><i class="nc-icon nc-layout-11"></i>  Filieres</span> 
                </button>  
                <div class="col-md-12">
                    <div x-show="Fil" @click.away="Fil = false">
                      
                          <li class="{{ Request::path()==='admin/filieres-Universites' ? 'active' : '' }}">  
                            <a href="{{ route('admin.filieres-Universites') }}">
                              <p>Filieres - universites</p>
                            </a>
                        </li>

                        <li class="{{ Request::path()==='admin/filieres-Ecoles' ? 'active' : '' }}">  
                          <a href="{{ route('admin.filieres-Ecoles') }}">
                            <p>Filieres - Ecoles</p>
                          </a>
                      </li>
                    </div>
                </div>    
        </div>
        <hr class="mr-3">
        
        <li class="{{ Request::path()==='admin/niveaux' ? 'active' : '' }}">  
          <a href="{{ route('admin.niveaux') }}">
            <i class="nc-icon nc-bookmark-2"></i>
            <p>Niveaux</p>
          </a>
      </li>
      
          <li class="{{ Request::path()==='admin/matieres' ? 'active' : '' }}">  
            <a href="{{ route('admin.matieres') }}">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Matieres</p>
            </a>
        </li>
       
      
          <li class="{{ Request::path()==='admin/cours' ? 'active' : '' }}"> 
            <a href="{{ route('admin.cours') }}">
              <i class="nc-icon nc-paper"></i>
              <p>Cours</p>
            </a>
          </li>
          <hr class="mr-3">
          <li class="{{ Request::path()==='admin/bibliotheque' ? 'active' : '' }}">        
            <a href="{{ route('admin.bibliotheque') }}">
              <i class="nc-icon nc-book-bookmark"></i>
              <p>BiblioTheques</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Tableau de Bord</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
              
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block"></span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  
                  <a class="dropdown-item" href="#">
                    <i class="nc-icon nc-badge"></i><span class="mr-3"> Profile</span>
        
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>
                  
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      @yield('admin')
      </div>
      <footer class="footer footer-black footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="ml-auto credits">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with  <i class="fa fa-heart heart"></i>    Creative Tim, Mentor
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  
  <!-- jQuery and JS bundle w/ Popper.js -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  --}}
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  

  
  @livewireScripts
  
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
   
      tinymce.init({
          selector:'textarea#texteditor',
          plugins: "emoticons hr image link lists charmap table", 
    toolbar: "formatgroup paragraphgroup insertgroup",
    toolbar_groups: {
        formatgroup: {
            icon: 'format',
            tooltip: 'Formatting',
            items: 'bold italic underline strikethrough | forecolor backcolor | superscript subscript | removeformat'
        },
        paragraphgroup: {
            icon: 'paragraph',
            tooltip: 'Paragraph format',
            items: 'h1 h2 h3 | bullist numlist | alignleft aligncenter alignright | indent outdent'
        },
        insertgroup: {
            icon: 'plus',
            tooltip: 'Insert',
            items: 'link image emoticons charmap hr'
        }
    },
    skin: 'outside',
    toolbar_location: 'bottom',
    menubar: false
      }); 
      
        
  </script>


</body>

</html>