@extends('layouts.app')
<title> Détails Entretiens </title>
@section('content')
 <div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Détails Entretiens </div>
                <div class="card-body">
                    <div class="row mb-12">
   
                        <div class="col-6 mb-3">
                             <label for='vehicule_id' class="col-md-9 col-form-label" style="color: black"> {{ __('Véhicule') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{  $entretiens->vehicule->Matricule }}  </p>
                        </div>          
                        <div class="col-6 mb-3">
                              <label for='discription' class="col-md-9 col-form-label" style="color: black" > {{ __('Description') }}</label>
                         <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->discription }}</p>
                               
                        </div>           
                     </div>
                        
                     
                     <div class="row mb-12">
                         <div class="col-6 mb-3">
                             <label for='Fournisseur' class="col-md-9 col-form-label" style="color: black"> {{ __('Fournisseur') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->fournisseur->name }} </p>
                        </div>
                        <div class="col-6 mb-3">
                            <label for='date' class="col-md-9 col-form-label" style="color: black"> {{ __('Date') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->date }} </p>
                           
                        </div>
                     </div>
                     
                     <div class='row mb-12'>
                         <div class="col-6 mb-3">
                             <label for='kilometrage' class="col-md-9 col-form-label" style="color: black" style="color: black" > {{ __('Kilométrage') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{  $entretiens->kilometrage }}    </p>                        
                        </div>
                        <div class="col-6 mb-3">
                            <label for='piece_id' class="col-md-9 col-form-label" style="color: black"> {{ __('Pièces') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > 
                                @foreach ($entretiens->pieces as $p )
                                    
                                
                                {{ $p->designation  }} <br>
                                @endforeach
                            </p>                               
                        </div>
                     </div>
                     
                     <div class='row mb-12'>
                         <div class="col-6 mb-3">
                             <label for='cout' class="col-md-9 col-form-label" style="color: black" style="color: black" > {{ __('Coût (DA)') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->cout }} </p>
                           
                        </div>
                        
                        

                </div>
                <div class="d-flex flex-row bd-highlight mb-3" >
   
                    <a class="mx-1" href="{{ route('entretiens.entretiens.index') }}" ><button class="btn btn-sm btn-Primary" type="button">Retour</button>  </a>
                </div>
            </div>
        </div>
    </div>
 </div>
 
@endsection
