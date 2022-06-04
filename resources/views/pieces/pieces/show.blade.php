<title> Pièces En Stock </title>
@include('pieces.side')
@include('navbar')
        
            
                    <!-- Content Row -->
                    <div class='card-body bg-white  border border-light '>
                    
        
            <div class=" container pt-1 border rounded-3 mt-0 pb-3">
               <div class="table-responsive pt-2">
               <table id="example" class="table table-striped pt-2" style="width:100%">
                    <thead>
                        <tr style="color: black">
                            <th scope="col">Désignation</th>
                            <th scope="col">Quantité En stock</th>
                            <th scope="col">Unité</th>
                            <th scope="col">Date d'Acquisition </th>

                           
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pieces as $piece)
                            <tr>
                                <td style="color: black"> {{ $piece->designation}}</td>
                                <td> {{ ($piece->quantite) - ($piece->quantite_utiliser)}}</td>
                                <td> {{ $piece->unite }}</td>
                                <td> {{ $piece->date_acq}}</td>
                          </tr>
                        @endforeach
                      
                      
                      
                    </tbody>
                  </table>
                  {{ $pieces->links() }}
                </div>
            </div>   
                 
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        
            @include('footer')