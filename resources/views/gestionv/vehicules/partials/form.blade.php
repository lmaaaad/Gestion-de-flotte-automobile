@csrf
@cannot('is-observateur') 
    <div class="row mb-12">

        <div class="col-6 mb-3">
           <label for="name" class="col-md-4 col-form-label text-black">{{ __('Matricule') }}</label>
           <input name="Matricule" type="text" class="form-control"  required autocomplete="Matricule" autofocus
           value="@isset($vehicule){{ $vehicule->Matricule }}@endisset">

              @error('Matricule')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

        <div class="col-6 mb-3">
            <label for="Marque" class="col-md-4 col-form-label text-black ">{{ __('Marque') }}</label>
            <input id="Marque" type="Marque" class="form-control " name="Marque"  required autocomplete="Marque"
            value="@isset($vehicule){{ $vehicule->Marque }}@endisset">

            @error('Marque')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  </div>


    <div class="row mb-12">
        <div class="col-6 mb-3">
            <label for="Modele"  style="color: black">{{ __('Modèle') }}</label>
            <input name="Modele" type="texte" class="form-control" required
            value="@isset($vehicule){{ $vehicule->Modele }}@endisset">
            
            @error('Modele')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6 mb-3">
            <label for='Couleur' style="color: black" >{{ __('Couleur') }}</label>
            <input name='Couleur' type='Couleur' class="form-control" required
            value="@isset($vehicule){{ $vehicule->Couleur }}@endisset">
            
            @error('Couleur')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
       </div>
   </div>

   <div class="row mb-12">  
       <div class="col-6 mb-3">
           <label for='Num_serie' class="col-md-9 col-form-label" style="color: black"> {{('N° de Chassis')}}</label>
           <input name='Num_serie' type='texte' class="form-control" required 
           value="@isset($vehicule){{ $vehicule->Num_serie }}@endisset">
           
           @error('Num_serie')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
           @enderror
       </div>       
       <div class="col-6 mb-3">
           <label for='Date_ms' class="col-md-9 col-form-label" style="color: black" > {{ __('Date de Mise en Circulation') }}</label>
           <input name='Date_ms' type='Date' class="form-control"  required
           value="@isset($vehicule){{ $vehicule->Date_ms }}@endisset">
           
           @error('Date_ms')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       </div>
   </div>



     <div class="row mb-12">
         <div class="col-6 mb-3">
          <label for='Type' class="col-md-4 col-form-label text-black"> {{ __('Type') }}</label>
            <select name='Type' type='texte' class="form-select" required>

                

                <option  value=""> Type de Véhicule </option>
                
                <option  @if(isset($vehicule) && $vehicule->Type == 'Voiture' ) selected @endif >Voiture</option>
                <option  @if(isset($vehicule) && $vehicule->Type == 'Bus' )selected @endif>Bus</option>
                <option  @if(isset($vehicule) && $vehicule->Type == 'Van' )selected @endif>Van</option>
                <option  @if(isset($vehicule) && $vehicule->Type == 'Camion' )selected @endif>Camion</option>
                <option  @if(isset($vehicule) && $vehicule->Type == 'Moto' )selected @endif>Moto</option>
                <option  @if(isset($vehicule) && $vehicule->Type == 'Ambulance' )selected @endif>Ambulance</option>

            </select>
             @error('Type')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
             @enderror
         </div>   
         <div class="col-6 mb-3">
             <label for='Carburant' class="col-md-4 col-form-label" style="color: black"> {{ __('Carburant') }}</label>
             <select name='Carburant' type='texte' class="form-select" required>
             
             <option   value="" disabled> Type de Carburant </option>
            
                <option @if(isset($vehicule) && $vehicule->Carburant == 'Essence' ) selected @endif>Essence</option>
                <option @if(isset($vehicule) && $vehicule->Carburant == 'Gasoil' ) selected @endif>Gasoil</option>
                <option @if(isset($vehicule) && $vehicule->Carburant == 'Gaz' ) selected @endif>Gaz</option>
                
            </select>
             @error('Carburant')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
             @enderror
         </div>
     </div>

   <div class="row mb-12">
       <div class="col-6 mb-3">
           <label for='Etat_Actuel' class="col-md-4 col-form-label" style="color: black"> {{ __('Etat Actuel') }}</label>
           <Select name='Etat_Actuel' type='texte' class="form-select" required
           value=""  >

          
           <option disabled  value="" > Etat de Véhicule </option>
     
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Bon' ) selected @endif>Bon</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Moyen' ) selected @endif>Moyen</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Mauvais' ) selected @endif>Mauvais</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'En panne' ) selected @endif>En panne</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Réformé' ) selected @endif>Réformé</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Volé' ) selected @endif>Volé</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Déterioré' ) selected @endif>Déterioré</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'EsseIncendiénce' ) selected @endif>Incendié</option>
           <option @if(isset($vehicule) && $vehicule->Etat_Actuel == 'Vétuste' ) selected @endif>Vétuste</option>
       </select>
           @error('Etat_Actuel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
           @enderror
       </div>                              
      
           
  

  
       <div class="col-6 mb-3">
        <label for='wilaya_id' class="col-md-4 col-form-label" style="color: black"> {{ __('Wilaya') }}</label>
        <select id="wilaya_id" class="form-select" name='wilaya_id' required>
        @foreach ($wilayas as $wilaya)
        <option value="{{ $wilaya->id }}"@isset($vehicule) @if ($vehicule->wilaya->id == $wilaya->id)
            selected
        @endif @endisset >
        {{ $wilaya->name }}
    </option>
        @endforeach 

             
          </select>
     
   </div>
</div>

   

    <div class="d-flex flex-row bd-highlight mb-3" >
        <a class="mx-1" href="{{ route('gestionv.vehicules.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
        <a class="mx-1" href="{{ route('gestionv.vehicules.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
    </div>
    @endcannot