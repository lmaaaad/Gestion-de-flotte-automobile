<title> Pièces </title>
@include('pieces.side')
@include('navbar')
        
            
                    <!-- Content Row -->
                    <div class='card-body bg-white  border border-light '>
                        <div class="card-header">
                    <div class="py-2 d-flex justify-start">
                      
                            <a href="{{ route('pieces.pieces.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                        </div>
                    </div>    
                        
        
            <div class=" container pt-1 border rounded-3 mt-0 pb-3">
               <div class="table-responsive pt-2">
               <table id="example" class="table table-striped pt-2 " style="width:100%">
                    <thead>
                        <tr style="color: black">
                            <th scope="col">Fournisseur</th>
                            <th scope="col">Désignation</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Quatité Utilisée</th>
                            <th scope="col">Unité</th>
                            <th scope="col">Prix Unitaire</th>
                            <th scope="col">Date d'Acquisition </th>
                            <th scope="col">Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pieces as $piece)
                            <tr>
                                <td style="color: black"> {{ $piece->fournisseur->name }} </td>
                                <td> {{ $piece->designation}}</td>
                                <td> {{ $piece->quantite}}</td>
                                <td> {{ $piece->quantite_utiliser}}</td>
                                <td> {{  $piece->unite }}</td>
                                <td> {{ $piece->prix}}</td>
                                <td> {{ $piece->date_acq}}</td>
                            
                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('pieces.pieces.edit',$piece->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>

                                     <form id="delete-user-form-{{ $piece->designation }}" action="{{ route('pieces.pieces.destroy',$piece->id) }}" method="POST">
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