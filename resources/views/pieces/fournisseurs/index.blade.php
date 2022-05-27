<title> Fournisseurs </title>
@include('pieces.side')
@include('navbar')
       
                    <!-- Content Row -->
                    <div class='card-body bg-white  border border-light '>
                        <div class="card-header">
                    <div class="py-2 d-flex justify-start">
                   
                        
                            <a href="{{ route('pieces.fournisseurs.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                        </div>
                    </div>
        
               
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
               <table id="example" class="table table-striped" style="width:100%">
              <thead>
                      <tr style="color:black">
                        <th scope="col">Fournisseur</th>
                        <th scope="col">Type</th>
                        <th scope="col"> N°Contract</th>
                        <th scope="col">Tel </th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                       

                        

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($fournisseurs as $fournisseur)
                        <tr>
                            <th scope="row">{{ $fournisseur->name }}</th>
                            <td> {{  $fournisseur ->type  }} </td>
                            <td>{{ $fournisseur ->Ncontrat  }}</td>
                            <td>{{ $fournisseur->tel }}</td>
                            <td>{{ $fournisseur->email }}</td>



                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('pieces.fournisseurs.edit',$fournisseur->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>
                                     <a class="mx-1" href="{{ route('pieces.fournisseurs.show',$fournisseur->id) }}" ><button class="btn btn-sm btn-secondary" type="button">Detail</button>  </a>
                                     <form id="delete-user-form-{{ $fournisseur->name }}" action="{{ route('pieces.fournisseurs.destroy',$fournisseur->id) }}" method="POST">
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
                  {{ $fournisseurs->links() }}
                </div>
            </div>   
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
            @include('footer')