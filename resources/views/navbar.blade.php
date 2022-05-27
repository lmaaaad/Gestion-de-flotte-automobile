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
            Home
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