<title> Assurances </title>
@include('gestionv.side')
@include('navbar')
                    <!-- Content Row -->
                    <div class="row py-3">
                       
                        <p>  
                            <a href="{{ route('gestionv.assurances.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                         </p>
        
               
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
               <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>

                        <th scope="col">Vehicule</th>
                        <th scope="col">Assurez Chez</th>
                        <th scope="col">Date d'Assurance</th>
                        <th scope="col">Date d'Expiration</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($assurances as $assurance)
                        <tr>
                            <th scope="row">{{ $assurance->vehicule->Matricule}} </th>
                            <td> {{ $assurance->fournisseur->name }}
                            <td> {{  $assurance->date  }} </td>
                            <td> {{ $assurance->expire }}
                            
                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('gestionv.assurances.edit',$assurance->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>

                                     <form id="delete-user-form-{{ $assurance->id }}" action="{{ route('gestionv.assurances.destroy',$assurance->id) }}" method="POST">
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
                  {{ $assurances->links() }}
                </div>
            </div>   
                 
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
@include('footer')