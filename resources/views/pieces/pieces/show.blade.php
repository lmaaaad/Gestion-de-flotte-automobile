<title> Pieces En Stock </title>
@include('pieces.side')
@include('navbar')
        
            
                    <!-- Content Row -->
                    <div class="row py-3">
        
            <div class="container pt-1 border rounded-3 mt-0">
               <div class="table-responsive">
               <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Designation</th>
                            <th scope="col">Quantite En stock</th>
                            <th scope="col">Quatité Utilisée</th>
                            <th scope="col">Date d'Acquisition </th>

                           
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pieces as $piece)
                            <tr>
                                <td> {{ $piece->designation}}</td>
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