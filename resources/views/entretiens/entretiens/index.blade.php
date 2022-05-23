<!DOCTYPE html>

<html lang="en">

<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Entretiens</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom table with datatable -->
   <link 
        
        rel="stylesheet" href=" https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" >   
    <!-- Custom styles for this template-->
    <link href="/rapport.css" rel="stylesheet">
   
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <a id='logo-orig' class="navbar-brand ps-0 " href="#" > 
                    <img src='/pic/logo-orig.png' alt=algerie-poste-logo>
                </a>
    
                <div class="sidebar-brand-text">Entretiens</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('entretiens.entretiens.index') }}">
                    <i><img src="/pic/maftah.png" style='height:30px;'></i>
                    <span class="pl-2 ">Entretiens </span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

      @include('navbar')
                    <!-- Content Row -->
             
                    <div class="row py-3">
                        <p>  
                            <a href="{{ route('entretiens.entretiens.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                         </p>

                         
               
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
               <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>

                        <th scope="col">Vehicule</th>
                        <th scope="col">Fournisseur</th>
                        <th scope="col">Description</th>
                        <th scope="col">Cout (DA)</th>
                        <th scope="col">Action</th>
                       

                        

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($entretiens as $entretien)
                        <tr>

                            <th scope="row"> {{  $entretien->vehicule->Matricule  }} </th>
                            <td>{{ $entretien->fournisseur->name  }}</td>
                            <td> {{ $entretien->discription}}</td>
                            <td> {{ $entretien->cout}}</td>



                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('entretiens.entretiens.edit',$entretien->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>
                                     <a class="mx-1" href="{{ route('entretiens.entretiens.show',$entretien->id) }}" ><button class="btn btn-sm btn-secondary" type="button">Detail</button>  </a>
                                     <form id="delete-user-form-{{ $entretien->id }}" action="{{ route('entretiens.entretiens.destroy',$entretien->id) }}" method="POST">
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
                  {{ $entretiens->links() }}
                </div>
            </div>   
              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
@include('footer')