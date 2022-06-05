<!DOCTYPE html>
@include("partials.alerte")
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
     <link href="/rapport.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


   
    
</head>
<body id="page-top">

    <!-- Page Wrapper -->
<div id="wrapper">
 
    <nav class="navbar navbar-expand navbar-light bg-white topbar col-xl-12 mb-4 static-top shadow">
        <div class="sidebar-brand d-flex align-items-center justify-content-center">
            <a id='logo-orig' class="navbar-brand ps-0 " href="#" > 
                <img src='/pic/logo-head.png' style="height:70px; padding-top:8px; width:180px" alt=algerie-poste-logo>
            </a>
        </div>    
        

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
        
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                
                <!-- Dropdown - Messages -->
                
            </li>
        
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">+3</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Notifications
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('gestionv.assurances.index')  }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">juillet 5, 2022</div>
                            <span class="font-weight-bold">Renouvellement assurance véhicule avec plaque d'immatriculation 11233 119 15</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('gestionv.visites.index')  }}">
                        <div class="mr-3">
                             <div class="icon-circle bg-primary">
                                 <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">juillet 7, 2022</div>
                           <span class="font-weight-bold"> Renouvellement assurance véhicule avec plaque d'immatriculation 11123 318 16  </span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('gestionv.visites.index')  }}">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">juillet 8, 2022</div>
                            <span class="font-weight-bold"> 2 jours avant la prochaine visite technique de véhicule avec plaque d'immatriculation 11123 318 16 </span> 
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Afficher toutes les notifications</a>
                </div>
            </li>

        

            <div class="topbar-divider d-none d-sm-block"></div>
        
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small text-uppercase">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle"
                        src="/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                   <form action="{{ route("logout") }}" method="POST">
                    @csrf

                    <button class="dropdown-item" type="submit">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Deconnecter
                    </button>
                </form>
                </div>
            </li>
        
        </ul>  
    </nav>
   </div>    
  </div>
</div>             

        <main class="py">
            @include("partials.alerte")
            @yield('content')
        </main>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".js-example-placeholder-multiple").select2({
    placeholder: "Selectionner une piece"
    });
    </script>

</body>

</html>
