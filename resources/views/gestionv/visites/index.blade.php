<title> Visites </title>

@include('gestionv.side')
@include('navbar')
       
                    <!-- Content Row -->
                    <div class="row py-3">
                        <p>  
                            <a href="{{ route('gestionv.visites.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                         </p>

                         

               
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>

                        <th scope='col'>Vehicule</th>
                        <th scope="col">Date visite</th>
                        <th scope="col">Prochaine Visite</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($visites as $visite)
                        <tr>
                            <th scope="row">{{ $visite->vehicule->Matricule}} </th>
                            <td> {{  $visite->date  }} </td>
                            <td> {{ $visite->prochaine }}
                            
                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('gestionv.visites.edit',$visite->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>

                                     <form id="delete-user-form-{{ $visite->id }}" action="{{ route('gestionv.visites.destroy',$visite->id) }}" method="POST">
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
                  {{ $visites->links() }}
                </div>
            </div>   
             <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
 @include('footer')