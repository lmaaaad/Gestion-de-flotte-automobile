<title> Taxes </title>
@include('gestionv.side')
@include('navbar')
                    <!-- Content Row -->
                    <div class="row py-3">
                        <p>  
                            <a href="{{ route('gestionv.taxes.create') }}" >
                                <button type="button" class="btn btn-success" ><img src="/pic/icon-add.png" id="add"> Ajouter </button>
                            </a>
                         </p>

                         
       
               
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
               <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>

                        <th scope="col">Nom</th>
                        <th scope="col">Vehicule</th>
                        <th scope="col">Date Taxe</th>
                        <th scope="col">Expiration Taxe</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($taxes as $taxe)
                        <tr>

                            <th scope='row'> {{ $taxe->nom }} </th>
                            <td>{{ $taxe->vehicule->Matricule}} </td>
                            <td> {{  $taxe->date  }} </td>
                            <td> {{ $taxe->expire }}
                            
                             <td> 
                                 <div class=" d-flex">
                                     <a class="mx-1" href="{{ route('gestionv.taxes.edit',$taxe->id) }}" ><button class="btn btn-sm btn-primary" type="button">Modifier</button>  </a>

                                     <form id="delete-user-form-{{ $taxe->id }}" action="{{ route('gestionv.taxes.destroy',$taxe->id) }}" method="POST">
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
                  {{ $taxes->links() }}
                </div>
            </div>   
           <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    
        @include('footer')