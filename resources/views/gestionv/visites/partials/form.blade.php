@csrf
@cannot('is-observateur') 

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='Vehicule'> {{ __('Vehicule(Matricule)') }}</label>
                   <select name='vehicule_id' type='texte' class="form-select" required
                   value="{{ old('Vehicule') }} ">
                   <option selected disabled value=""> Liste Vehicules  </option>
                   @foreach($vehicules as $vehicule)
                   
                   <option value="{{ $vehicule->id }}" id="{{ $vehicule->Matricule }}"
                       @isset($user)
                      @if ($vehicule->id == $vehicule->Matricule) checked @endif
                       @endisset>
                      {{ $vehicule->Matricule }}
               @endforeach
                   @error('Fournisseur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </select>
    </div>
    <div class="col-6 mb-3">
        <label for='date' clsss="col-md-4 col-form-label" style="color: black" > {{ __("Date Visite technique") }}</label>
        <input name='date' type='date' class="form-control" required  
        value="{{ old('date') }}  @isset($visite) {{ $visite->date }} @endisset">
        
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
    
<div class="row mb-12">     
    <div class="col-6 mb-3">
        <label for='date' clsss="col-md-4 col-form-label" style="color: black" > {{ __("Prochaine visite technique ") }}</label>
        <input name='prochaine' type='date' class="form-control" required 
        value="{{ old('prochaine') }}  @isset($visite) {{ $visite->prochaine }} @endisset">
        
        @error('prochaine')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
   <div class="col-6 mb-3">
    <label for='rappel' clsss="col-md-4 col-form-label" style="color: black" > {{ __('Rappel Avant (jours)') }}</label>
    <input name='rappel' type='number' class="form-control" required placeholder="Entre 1 et 365 jours" 
    value="{{ old('rappel') }}  @isset($visite) {{ $visite->rappel }} @endisset">
    
    @error('rappel')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror
</div>
<div class="col-6 mb-3">
            <label for='Wilaya' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Wilaya') }}</label>
            <select id="Wilaya" class="form-select" name='Wilaya' required
            value="{{ old('Wilaya') }}  @isset($visites) {{ $visites->Wilaya }} @endisset"> 
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
    <a class="mx-1" href="{{ route('gestionv.visites.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('gestionv.visites.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
</div>
@endcannot

