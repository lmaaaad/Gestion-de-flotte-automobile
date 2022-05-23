@csrf

    <div class="row mb-12">

        <div class="col-6 mb-3">
           <label for="name" class="col-md-4 col-form-label ">{{ __('Matricule') }}</label>
           <input name="Matricule" type="text" class="form-control @error('name') is-invalid @enderror"  required autocomplete="Matricule" autofocus
           value="{{ old('Matricule') }}  @isset($vehicule) {{ $vehicule->Matricule }} @endisset">

              @error('Matricule')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

        <div class="col-6 mb-3">
            <label for="Marque" class="col-md-4 col-form-label ">{{ __('Marque') }}</label>
            <input id="Marque" type="Marque" class="form-control " name="Marque"  required autocomplete="Marque"
            value="{{ old('Marque') }}  @isset($vehicule) {{ $vehicule->Marque }} @endisset">

            @error('Marque')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  </div>


    <div class="row mb-12">
        <div class="col-6 mb-3">
            <label for="Modele" >{{ __('Modele') }}</label>
            <input name="Modele" type="texte" class="form-control" required
            value="{{ old('Modele') }}  @isset($vehicule) {{ $vehicule->Modele }} @endisset">
            
            @error('Modele')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6 mb-3">
            <label for='Couleur' >{{ __('Couleur') }}</label>
            <input name='Couleur' type='Couleur' class="form-control" required
            value="{{ old('Couleur') }}  @isset($vehicule) {{ $vehicule->Couleur }} @endisset">
            
            @error('Couleur')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
       </div>
   </div>

   <div class="row mb-12">  
       <div class="col-6 mb-3">
           <label for='Num_serie' clsss="col-md-4 col-form-label"> {{('N° de Chassis')}}</label>
           <input name='Num_serie' type='texte' class="form-control" required 
           value="{{ old('Num_serie') }}  @isset($vehicule) {{ $vehicule->Num_serie }} @endisset">
           
           @error('Num_serie')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
           @enderror
       </div>       
       <div class="col-6 mb-3">
           <label for='Date_ms' > {{ __('Date Mise en Circulation') }}</label>
           <input name='Date_ms' type='Date' class="form-control"  required
           value="{{ old('Date_ms') }}  @isset($vehicule) {{ $vehicule->Date_ms }} @endisset">
           
           @error('Date_ms')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       </div>
   </div>



     <div class="row mb-12">
         <div class="col-6 mb-3">
          <label for='Type' clsss="col-md-4 col-form-label "> {{ __('Type') }}</label>
            <select name='Type' type='texte' class="form-select" required
                value="{{ old('Type') }}  @isset($vehicule) {{ $vehicule->Type }} @endisset">
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
             <label for='Carburant' clsss="col-md-4 col-form-label"> {{ __('Carburant') }}</label>
             <select name='Carburant' type='texte' class="form-select" required
             value="{{ old('Carburant') }}  @isset($vehicule) {{ $vehicule->Carburant }} @endisset">
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
           <label for='Etat_Actuel' clsss="col-md-4 col-form-label"> {{ __('Etat Actuel') }}</label>
           <Select name='Etat_Actuel' type='texte' class="form-select" required
           value="{{ old('Etat_Actuel') }}  @isset($vehicule) {{ $vehicule->Etat_Actuel }} @endisset">
           <option selected disabled value=""> Etat de Vehicule </option>
           <option>Bon</option>
           <option>Moyen</option>
           <option>Mauvais</option>
           <option>En panne</option>
           <option>Reforme</option>
           <option>Vole</option>
           <option>Deteriore</option>
           <option>Incendie</option>
           <option>Vetuste</option>
       </select>
           @error('Etat_Actuel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
           @enderror
       </div>                              
      
           
  

  
    <div class="col-6 mb-3">
        <label for='Wilaya' clsss="col-md-4 col-form-label"> {{ __('Wilaya') }}</label>
        <select id="Wilaya" class="form-select" name='Wilaya' required
        value="{{ old('Wilaya') }}  @isset($vehicule) {{ $vehicule->Wilaya }} @endisset"> 
            <option disabled selected>Selectionnez Votre Wilaya</option>
            <option> 01-Adrar</option>  <option> 02- Chlef </option> <option> 03-Laghout </option> <option> 04- Oum El Bouaghi </option>
            <option> 05-Batna </option> <option> 06-bejaya </option> <option> 07-Biskra </option> <option> 08-Bechar </option>
            <option> 09-Blida </option> <option> 10-Bouira </option> <option> 11-Tamanrasset</option> <option> 12-Tebessa</option>
            <option> 13-Tlemcen </option> <option> 14-Tiaret</option> <option> 15-Tizi Ouzou </option> <option> 16-Alger-Centre </option> <option> 16-Alger-Est</option> <option> 16-Alger-Ouest</option>
            <option> 17-Djelfa</option> <option> 18-Jijel</option> <option> 19-Setif</option> <option> 20-Saida</option>
            <option> 21-Skikda</option> <option> 22-Sidi Belabbas</option> <option> 23-Annaba</option> <option> 24-Guelma</option>
            <option> 25-Consantine</option> <option> 26-Medea</option> <option> 27-Mostaganem </option> <option> 28-Msila</option>
            <option> 29-Mascara</option> <option> 30-Ouargla </option> <option> 31-Oran </option> <option> 32-El Bayadh</option>
            <option> 33-Illizi</option> <option> 34-Bordj Bou Arreridj </option> <option> 35-Boumerdas</option> <option> 36-El Taref</option>
            <option> 37-Tindouf</option> <option> 38-Tissmsilet </option> <option> 39-El Oued</option> <option> 40-Khenchla</option>
            <option> 41-Souk ahras</option> <option> 42-Tipaza</option> <option> 43-Mila</option> <option> 44-Ain Defla</option>
            <option> 45-Naama</option> <option> 46-Ain Timouchent </option> <option> 47-Ghrdaia</option> <option> 48-Ghelizan</option>
            <option> 49-El Maghair</option> <option> 50-El Mania </option> <option> 51-Ouled Djellal</option> <option> 52-Bordj badji Mokhtar</option>
            <option> 53-Beni abbes</option> <option> 54-Timimoun</option> <option> 55-Tougourt</option> <option> 56-Djanet</option> <option> 57-In Sallah</option>
            <option> 58-In Gazzam</option> 
          </select>
     
   </div>
</div>

   

    <div class="d-flex flex-row bd-highlight mb-3" >
        <a class="mx-1" href="{{ route('gestionv.vehicules.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
        <a class="mx-1" href="{{ route('gestionv.vehicules.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
    </div>