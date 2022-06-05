<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">

             <a id='logo-orig' class="navbar-brand " href="#" > 
                <img src='/pic/logo-head.png' style="height:70px; padding-top:8px; width:160px" alt=algerie-poste-logo>
            </a>
            <!-- Sidebar Toggle (Topbar) -->
            

            <!-- Topbar Search -->
           

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                

                <!-- Nav Item - Alerts -->
                
                 <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
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
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('gestionv.assurances.index') }}">
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
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @include("partials.alerte")
        <div class="container-fluid">
        <a href="{{ route('home') }}" style="height: 20px;  weight:20px">
            <i class="fa fa-arrow-circle-left fa-5" aria-hidden="true"></i>
            Accueil
        </a>        
        <div class="pt-5">
        <main>
            @yield('content')
        </main>


@push('scripts') 
<!-- <script type="text/javascript">
    var path="{{ route('autocomplete') }}";
    $('input'.typehead).typehead({
        source: function(query,process){
            return $.get(path,{query:query},function(data))
                return process(data)
            });
        }
    });
</script>    
-->
@endpush        