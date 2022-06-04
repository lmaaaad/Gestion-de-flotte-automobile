@csrf
@cannot('is-observateur') 

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='Vehicule' class="col-md-9 col-form-label text-black"> {{ __('Véhicule(Matricule)') }}</label>
                   <select name='vehicule_id' type='texte' class="form-select" required
                   value="{{ old('Vehicule') }} ">
                   <option selected disabled value=""> Liste Véhicules  </option>
                   @foreach($vehicules as $vehicule)
                   
                   <option value="{{ $vehicule->id }}" id="{{ $vehicule->Matricule }}"
                       @isset($visite)
                      @if ($vehicule->id == $visite->vehicule->id) selected @endif
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
        <label for='date' class="col-md-9 col-form-label" style="color: black" > {{ __("Date de la Visite Technique") }}</label>
        <input name='date' type='date' class="form-control" required  
        value="@isset($visite){{ $visite->date }}@endisset">
        
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
</div>  
<div class="row mb-12">     
    <div class="col-6 mb-3">
        <label for='date' class="col-md-9 col-form-label" style="color: black" > {{ __("Prochaine Visite Technique ") }}</label>
        <input name='prochaine' type='date' class="form-control" required 
        value="@isset($visite){{ $visite->prochaine }}@endisset">
        
        @error('prochaine')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
   <div class="col-6 mb-3">
    <label for='rappel' class="col-md-9 col-form-label" style="color: black" > {{ __('Rappel Avant (jours)') }}</label>
    <input name='rappel' type='number' class="form-control" required placeholder="Entre 1 et 365 jours" 
    value="@isset($visite){{ $visite->rappel }}@endisset">
    
    @error('rappel')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror
</div>
<div class="col-6 mb-3">
    <label for='wilaya_id' class="col-md-6 col-form-label" style="color: black"> {{ __('Wilaya') }}</label>
    <select id="wilaya_id" class="form-select" name='wilaya_id' required>
    @foreach ($wilayas as $wilaya)
    <option value="{{ $wilaya->id }}"  @isset($visite) @if ($visite->wilaya->id == $wilaya->id)
        selected
    @endif @endisset >
    {{ $wilaya->name }}
</option>
    @endforeach 

         
      </select>
 
</div>
</div>







<div class="d-flex flex-row bd-highlight mb-3" >
    <a class="mx-1" href="{{ route('gestionv.visites.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('gestionv.visites.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
</div>
@endcannot

