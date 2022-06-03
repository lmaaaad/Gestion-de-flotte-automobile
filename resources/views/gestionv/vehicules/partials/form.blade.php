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
           <label for='Date_ms' style="color: black" > {{ __('Date de Mise en Circulation') }}</label>
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
            <select name='Type' type='texte' class="form-select" required
                value="@isset($vehicule){{ $vehicule->Type }}@endisset">
                <option selected disabled value=""> Type de Vehicule </option>
                
                <option>Voiture</option>
                <option>Bus</option>
                <option>Van</option>
                <option>Camion</option>
                <option>Moto</option>
                <option>Ambulance</option>

            </select>
             @error('Type')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
             @enderror
         </div>   
         <div class="col-6 mb-3">
             <label for='Carburant' class="col-md-4 col-form-label" style="color: black"> {{ __('Carburant') }}</label>
             <select name='Carburant' type='texte' class="form-select" required
             value="@isset($vehicule){{ $vehicule->Carburant }}@endisset">
             
             <option selected disabled value=""> Type de Carburant </option>
            
                <option>Essence</option>
                <option>Gasoil</option>
                <option>Gaz</option>
                
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
           value="@isset($vehicule){{ $vehicule->Etat_Actuel }}@endisset">
           <option selected disabled value=""> Etat de Véhicule </option>
           
           <option>Bon</option>
           <option>Moyen</option>
           <option>Mauvais</option>
           <option>En panne</option>
           <option>Réformé</option>
           <option>Volé</option>
           <option>Déterioré</option>
           <option>Incendié</option>
           <option>Vétuste</option>
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