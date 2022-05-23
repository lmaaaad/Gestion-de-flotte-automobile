<title> Vehicules </title>

@include('gestionv.side')
@include('navbar')
            
                    <!-- Content row -->
                    <div class="py-3 d-flex justify-content-around">
                       
                            <a href="{{ route('gestionv.vehicules.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>

                    <div class="dropdown col align-self-end p-1 mx-5 text-right align-self-end">
                            <button class="btn btn-primary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Selectionnez Votre Wilaya
                            </button>
                            <div class="dropdown-menu animated--fade-in scrollable"
                                aria-labelledby="dropdownMenuButton">
                                @foreach ($wilaya as $wilaya)
                                <a class="dropdown-item" href="#">{{ $wilaya->name }}</a>
                                @endforeach
                            </div>
                        </div>      
                </div>     

            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th >Matricule</th>
                        <th >Marque</th>
                        <th >Modele</th>
                        <th >Etat Actuel</th>
                        <th >Action</th>
                       

                        

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicules as $vehicule)
                        <tr>
                            <td scope="row">{{ $vehicule->Matricule }}</td>
                            <td>{{ $vehicule->Marque  }}</td>
                            <td>{{ $vehicule->Modele }}</td>
                            <td>{{ $vehicule->Etat_Actuel }}</td>
                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('gestionv.vehicules.edit',$vehicule->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>
                                     <a class="mx-1" href="{{ route('gestionv.vehicules.show',$vehicule->id) }}" ><button class="btn btn-sm btn-secondary" type="button">Detail</button>  </a> 
                                     <form id="delete-user-form-{{ $vehicule->Matricule }}" action="{{ route('gestionv.vehicules.destroy',$vehicule->id) }}" method="POST">
                                       
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