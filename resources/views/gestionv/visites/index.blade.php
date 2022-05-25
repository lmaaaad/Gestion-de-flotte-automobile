<title> Visites </title>

@include('gestionv.side')
@include('navbar')
       
                    <!-- Content Row -->
                    <div class="py-3 d-flex justify-start">
                        @cannot('is-observateur') 
                            <a href="{{ route('gestionv.visites.create') }}" >
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

                        <th scope='col'>Vehicule</th>
                        <th scope="col">Wilaya</th>
                        <th scope="col">Date visite</th>
                        <th scope="col">Prochaine Visite</th>
                        @cannot('is-observateur')     <th scope="col">Action</th>@endcannot
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($visites as $visite)
                        <tr>
                            <th scope="row">{{ $visite->vehicule->Matricule}} </th>
                            <td> {{ $visite->Wilaya }}
                            <td> {{  $visite->date  }} </td>
                            <td> {{ $visite->prochaine }}</td>
                            @cannot('is-observateur') 
                            
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