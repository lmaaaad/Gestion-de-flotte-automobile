<title> Assurances </title>
@include('gestionv.side')
@include('navbar')
                    <!-- Content Row -->
                    <div class="py-3 d-flex justify-start">
                       
                        @cannot('is-observateur')           
                            <a href="{{ route('gestionv.assurances.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                            @endcannot    
                         
                         @cannot('is-dupw')
                              
                           
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
                             @endcannot 
                            </div>      
        
               
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
               <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>

                            <th scope="col">Vehicule</th>
                            <th scope="col">Wilaya</th>
                            <th scope="col">Assurez Chez</th>
                            <th scope="col">Date d'Assurance</th>
                            <th scope="col">Date d'Expiration</th>
@cannot('is-observateur')  <th scope="col">Action</th>         @endcannot
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($assurances as $assurance)
                        <tr>
                            <th scope="row">{{ $assurance->vehicule->Matricule}} </th>
                            <td> {{  $assurance->Wilaya  }} </td>
                            <td> {{ $assurance->fournisseur->name }}
                            <td> {{  $assurance->date  }} </td>
                            <td> {{ $assurance->expire }} </td>
                                @cannot('is-observateur')                
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
                            @endcannot   

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