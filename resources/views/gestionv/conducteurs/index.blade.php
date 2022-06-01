<title> Conducteurs </title>

@include('gestionv.side')
@include('navbar')
                    <!-- Content Row -->
                    <div class='card-body bg-white  border border-light '>
                     <div class="card-header">
                    <div class="py-2 d-flex justify-start">
                      @cannot('is-observateur') 
                            <a href="{{ route('gestionv.conducteurs.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                          @endcannot
                
@cannot('is-dupw')
  

                         <div class="dropdown col align-self-end p-1 mx-5 text-right align-self-end">
                            <button class="btn btn-primary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Séléctionnez Votre Wilaya
                            </button>
                            <div class="dropdown-menu animated--fade-in scrollable"
                                aria-labelledby="dropdownMenuButton">
                                @foreach ($wilayas as $wilaya)
                                <a class="dropdown-item" href="{{ route('gestionv.conducteurs.index',['wilaya_id'=>$wilaya->id] ) }}">{{ $wilaya->name }}</a>
                                @endforeach
                            </div>
                           
                        </div>
                       
                        @endcannot
                   </div>
                  </div>
                   

               
            <div class=" container pt-1 border rounded-3 mt-0 pb-3">
               <div class="table-responsive pt-2">
               <table id="example" class="table table-striped pt-2" style="width:100%">
                    <thead>
                      <tr style="color: black">

                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Véhicule</th>
                                <th scope="col">Tel </th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Wilaya</th>
@cannot('is-observateur')      <th scope="col">Action</th>  @endcannot
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($conducteurs as $conducteur)
                        <tr>
                            <th scope="row">{{ $conducteur->Nom }} </th>
                            <td> {{  $conducteur->Prenom  }} </td>
                            <td> {{ $conducteur->vehicule->Matricule }}
                            <td>{{ $conducteur->tel  }}</td>
                            <td>{{ $conducteur->Adresse }}</td>
                            <td> {{ $conducteur->wilaya->name }} </td>
                            @cannot('is-observateur') 
                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('gestionv.conducteurs.edit',$conducteur->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>

                                     <form id="delete-user-form-{{ $conducteur->Nom }}" action="{{ route('gestionv.conducteurs.destroy',$conducteur->id) }}" method="POST">
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
      </div>
            @include('footer')