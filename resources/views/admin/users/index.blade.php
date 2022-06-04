<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>

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
               
    
                <div class="sidebar-brand-text fw-bolder">Administration</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.users.index') }}">
                    <i class="fas fa-user pl-1"></i>
                    <span class="pl-2 ">Administration </span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline" >
                <button class="rounded-circle border-0" id="sidebarToggle"> </button>
            </div>
        </ul>
        <!-- End of Sidebar -->

@include('navbar')
                    <!-- Content Row -->
                    <div class='card-body bg-white border border-light '>
                        <div class="card-header">
                       <div class="py-2 d-flex justify-start">
                         
                            <a href="{{ route('admin.users.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                       

                            

                        </div>
                    </div>
            <div class=" container pt-1 border rounded-3 mt-0 pb-3">
                <div class="table-responsive pt-2">
                <table id="example" class="table table-striped pt-2" style="width:100%">
                     <thead>
                       <tr style="color: black">

                         <th scope="col">Nom</th>
                         <th scope="col">Email</th>
                         <th scope="col">Rôle </th>
              
                        <th scope="col">Wilaya </th>
          
                         
                         <th scope="col">Action</th>
                        
 
                         
 
                       </tr>
                     </thead>
                     <tbody>
                         @foreach ($users as $user)
                         <tr>

                             <td scope="row" style="color: black"> {{  $user ->name  }} </td>
                             <td>{{ $user ->email  }}</td>
                             <td> 
                                 {{ $user->role->name ?? '' }}
                             </td>
                            <td> {{  $user->wilaya->name ?? ''  }} </td>
                              <td> 
                                  <div class=" d-flex">
                                      <a class="mx-1" href="{{ route('admin.users.edit',$user->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>
 
                                      <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                          @csrf
                                          @method("DELETE")
                                          <button type="submit" class="mx-1 btn btn-sm btn-danger">
                                              Supprimer
                                           </button>
                                      </form>    
                                     </div>    
                             </td>
                           </tr>
                         @endforeach
                       
                       
                       
                     </tbody>
                   </table>
                    
                 </div>
             </div>   
                        
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
            @include('footer')