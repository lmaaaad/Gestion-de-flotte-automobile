<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom table with datatable -->
   <link 
        
        rel="stylesheet" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" >   
    <!-- Custom styles for this template-->
     <link href="/rapport.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
   
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
               
                <div class="sidebar-brand-text">Maintenance</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('pieces.fournisseurs.index') }}">
                    <i class="fas fa-user pl-1"></i>
                    <span class="pl-2 ">Fournisseurs </span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-user pl-1"></i>
                    <span class="pl-2 "> Pièces</span>
            </a> 

                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('pieces.pieces.index') }}"> Général </a>
                            <a class="collapse-item" href="{{ route('piece') }}">En Stock</a>
    
                            <div class="collapse-divider"></div>
    
                        </div>
                    </div>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline" >
                <button class="rounded-circle border-0" id="sidebarToggle"> </button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <main>
            @yield('content')
        </main>