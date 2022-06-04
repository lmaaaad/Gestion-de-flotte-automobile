@extends('layouts.app')
<title> Détails Fournisseur </title>
@section('content')
 <div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Détails Sur <span class=" fw-bold">{{ $fournisseur->name }} </span></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pieces.fournisseurs.show',$fournisseur->id) }}">
                        <div class="row mb-12">

                            <div class="col-6 mb-3">
                               <label for="name" class="col-md-4 col-form-label text-black">{{ __('Name') }}</label>
                                <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $fournisseur->name }}</p>
                    
                                  
                          </div>
                    
                            <div class="col-6 mb-3">
                                <label for="email" class="col-md-4 col-form-label text-black">{{ __('Email') }}</label>
                                <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $fournisseur->email }} </p>
                    
                                
                            </div>
                      </div>
                    
                    
                        <div class="row mb-12">
                            <div class="col-6 mb-3">
                                <label for="ville" class="col-md-4 col-form-label text-black">{{ __('Ville') }}</label>
                                <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $fournisseur->ville }} </p>
                            </div>
                    
                            <div class="col-6 mb-3">
                                <label for='tel' class="col-md-4 col-form-label text-black" > {{ __('Téléphone') }}</label>
                                <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $fournisseur->tel }} </p>
                                
                                
                           </div>
                       </div>
                    
                       <div class="row mb-12">  
                           <div class="col-6 mb-3">
                            <label for='NRC' style="color: black"> {{('N° R Commerce')}}</label>
                            <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $fournisseur->NRC }} </p>
                               
                           </div>       
                           <div class="col-6 mb-3">
                               <label for='Ncontrat'style="color: black" > {{ __('N° Contrat') }}</label>
                               <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $fournisseur->Ncontrat }} </p>
                               
                             
                           </div>
                       </div>
                    
                    
                    
                         <div class="row mb-12">
                             <div class="col-6 mb-3">
                              <label for='type' style="color: black" > {{ __('Type') }}</label>
                              <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $fournisseur->type }} </p>

                             </div>   
                             <div class="col-6 mb-3">
                                 <label for='datedeb' style="color: black"> {{ __('Date de Début de Contrat') }}</label>
                                 <br> <p class=" text-black border border-primary rounded-3 p-2" > {{ $fournisseur->datedeb }} </p>
                                
                             </div>
                         </div>
                    
                       <div class="row mb-12">
                           <div class="col-6 mb-3">
                               <label for='datefin' style="color: black" > {{ __('Date de Fin de Contrat') }}</label>
                               <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $fournisseur->datefin }} </p>
                             
                           </div>                              
                           <div class="col-6 mb-3">
                               <label for='NIF'  style="color: black"> {{ __('NIF(Num ID FISCAL)') }}</label>
                               <br> <p class=" text-black border border-primary rounded-3 p-2" >{{ $fournisseur->NIF }} </p>
                               
                           </div>
                       </div>
                       <div class="d-flex flex-row bd-highlight mb-3" >
                        
                        <a class="mx-1" href="{{ route('pieces.fournisseurs.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Retour</button>  </a>
                    </div>
                    
                       
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
