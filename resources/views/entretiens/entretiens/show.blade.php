@extends('layouts.app')
<title> Details Entretiens </title>
@section('content')
 <div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Details Entretiens </div>
                <div class="card-body">
                    <div class="row mb-12">
   
                        <div class="col-6 mb-3">
                             <label for='vehicule_id'> {{ __('Vehicule') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{  $entretiens->vehicule->Matricule }}  </p>
                        </div>          
                        <div class="col-6 mb-3">
                              <label for='discription' clsss="col-md-4 col-form-label" > {{ __('Description') }}</label>
                         <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->discription }}</p>
                               
                        </div>           
                     </div>
                        
                     
                     <div class="row mb-12">
                         <div class="col-6 mb-3">
                             <label for='Fournisseur'> {{ __('Fournisseur') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->fournisseur->name }} </p>
                        </div>
                        <div class="col-6 mb-3">
                            <label for='date' clsss="col-md-4 col-form-label"> {{ __('Date') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->date }} </p>
                           
                        </div>
                     </div>
                     
                     <div class='row mb-12'>
                         <div class="col-6 mb-3">
                             <label for='kilometrage' clsss="col-md-4 col-form-label" style="color: black" > {{ __('Kilometrage') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" > {{  $entretiens->kilometrage }}    </p>                        
                        </div>
                        <div class="col-6 mb-3">
                            <label for='piece_id'> {{ __('Pieces') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $entretiens->pieces }} </p>                               
                        </div>
                     </div>
                     
                     <div class='row mb-12'>
                         <div class="col-6 mb-3">
                             <label for='cout' clsss="col-md-4 col-form-label" style="color: black" > {{ __('Cout (DA)') }}</label>
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
