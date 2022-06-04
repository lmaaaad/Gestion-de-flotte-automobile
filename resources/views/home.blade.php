<!DOCTYPE html>
<title> Accueil </title>

<link href="{{ asset('home.css') }}" rel="stylesheet">
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
            
            <!-- Nav Item - Alerts -->

        

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
                        Déconnecter
                    </button>
                </form>
                </div>
            </li>
        
        </ul>  
    </nav>
    
  
</div>             
</div>
<nav class="navbar navbar-light navbar-custom col-xl-12 shadow" style="background-color: #00B1FF ;">
    <div id="below-nav-bar">
        <p> LOGICIEL DE GESTION DE FLOTTE AP  </p>
    </div>
   
    <div id="choissisez">
        <span> Choisissez Votre Section </span>
    </div>        
   </nav>
 <div class="container" >
     <div class="row">  
         @can('is-admin') 
        <a class="col-md-3 col-sm-6 p-2 pt-5" id='admin' href="{{ route('admin.users.index') }}">
             <div class=" bg-gradient bg-primary text-center p-2 rounded shadow" style="height: 130px;">
                <img src="pic/user.png" width="70px" height="70px">

                <div class="text-center" > Administration </div>

             </div>
             
            </a>
         @endcan

         <a class="col-md-3 col-sm-6 p-2 pt-5  " href="{{ route('gestionv.conducteurs.index') }}">
            <div class="bg-danger bg-gradient p-2 rounded shadow" style="height: 130px;">
               <img src="pic/car.png" width="70px" height="70px">
               <div class="text-center">    Gestion Véhicule </div>
            </div>
        </a>


        

         @cannot('is-observateur')
     
         <a class="col-md-3 col-sm-6 p-2 pt-5 " href="{{ route('pieces.fournisseurs.index') }}">
             <div class="bg-warning bg-gradient p-2 rounded shadow" style="height: 130px;">
                <img src="/pic/setting2.png" width="70px" height="70px">
                <div class="text-center" >  Maintenances  </div>
             </div>

            </a>
            @endcannot 

            <a class="col-md-3 col-sm-6 p-2 pt-5 " href="{{ route('affectations.affectations.index') }}">
             
                <div class="bg-info rounded shadow "style="height: 130px;">
                  <img src="pic/affectation.png" width="70px" height="70px">
                  <p class="text-center">  Missions </p>
                </div>
              </a>

         @cannot('is-observateur')
             
         @can('is-admin') 
         <a class="col-md-3 col-sm-6 p-2 " href="{{ route('entretiens.entretiens.index') }}">
            <div class="purple rounded shadow"style="height: 130px;">
               <img src="pic/maftah.png" width="70px" height="70px">
               <p class="text-center">    Entretien  </p>
            </div>
         @endcan   

         @can('is-dupw')
         <a class="col-md-3 col-sm-6 p-2 pt-5" href="{{ route('entretiens.entretiens.index') }}">
             <div class="purple rounded shadow"style="height: 130px;">
                <img src="pic/maftah.png" width="70px" height="70px">
                <p class="text-center">    Entretien  </p>
             </div>
            </a>
            @endcan



            @endcannot

         

            @cannot('is-observateur')

            <a class="col-md-3 col-sm-6 p-2 " href="{{ route('rapport') }}">
                <div class="bg-success bg-gradient rounded shadow"style="height: 130px;">
                   <img src="pic/rapport.png" width="70px" height="70px">
                   <p class="text-center "> Rapports </p>
                </div>
               </a>
               @endcannot
   
           
     </div>
     <footer class="sticky-footer text-muted text-right pt-4">
     <div class="copyright text-right text-grey pt-5">
         <span style="font-size: 15px">Copyright &copy;  2022 Algérie Poste. Tous droits réservés </span>
     </div>
 </footer>
 </div>

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
</body>

</html>