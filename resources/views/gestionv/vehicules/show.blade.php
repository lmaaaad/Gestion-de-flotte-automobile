@extends('layouts.app')
<title> Details Vehicule </title>
@section('content')
 <div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center"> Détails Sur  <span class="fw-bold"> {{ $vehicule->Matricule }} </span> </div>
                <div class="card-body">
                    <div class="row mb-12">

                        <div class="col-6 mb-3">
                           <label for="name" class="col-md-4 col-form-label ">{{ __('Matricule') }}</label>
                           <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $vehicule->Matricule }}</p>
        
                      </div>
                
                        <div class="col-6 mb-3">
                            <label for="Marque" class="col-md-4 col-form-label ">{{ __('Marque') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $vehicule->Marque }}</p>
                
                        </div>
                  </div>
                
                
                    <div class="row mb-12">
                        <div class="col-6 mb-3">
                            <label for="Modele" >{{ __('Modele') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $vehicule->Modele }}</p>
               
                        </div>
                
                        <div class="col-6 mb-3">
                            <label for='Couleur' >{{ __('Couleur') }}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $vehicule->Couleur }}</p>
           
                       </div>
                   </div>
                
                   <div class="row mb-12">  
                       <div class="col-6 mb-3">
                           <label for='Num_serie' clsss="col-md-4 col-form-label" style="color: black"> {{('N° de Chassis')}}</label>
                           <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $vehicule->Num_serie }}</p>
                           
                  
                       </div>       
                       <div class="col-6 mb-3">
                           <label for='Date_ms' > {{ __('Date Mise en Circulation') }}</label>
                           <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $vehicule->Date_ms }}</p>
        
                       </div>
                   </div>
                
                
                
                     <div class="row mb-12">
                         <div class="col-6 mb-3">
                          <label for='Type' clsss="col-md-4 col-form-label "> {{ __('Type') }}</label>
                          <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $vehicule->Type }}</p>
                        
                         </div>   
                         <div class="col-6 mb-3">
                             <label for='Carburant' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Carburant') }}</label>
                             <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $vehicule->Carburant }}</p>
                            
                         </div>
                     </div>
                
                   <div class="row mb-12">
                       <div class="col-6 mb-3">
                           <label for='Etat_Actuel' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Etat Actuel') }}</label>
                           <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $vehicule->Etat_Actuel }}</p>
                     
                       </div>                              
                      
                           
                  
                
                  
                    <div class="col-6 mb-3">
                        <label for='Wilaya' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Wilaya') }}</label>
                        <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $vehicule->wilaya->name }}</p> 
                          
                     
                   </div>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <a class="mx-1" href="{{ route('gestionv.vehicules.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Retour</button>  </a>
                </div>
                        
                
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
