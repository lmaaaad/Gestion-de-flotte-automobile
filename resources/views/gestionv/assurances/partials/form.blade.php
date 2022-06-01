@csrf
@cannot('is-observateur') 

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='Vehicule' style="color: black"> {{ __('Véhicule(Matricule)') }}</label>
                   <select name='vehicule_id' type='texte' class="form-select" required
                   value="{{ old('Vehicule') }} ">
                   <option selected disabled value=""> Liste Véhicules  </option>
                   @foreach($vehicules as $vehicule)
                   
                   <option value="{{ $vehicule->id }}" id="{{ $vehicule->Matricule }}"
                       @isset($assurance)
                      @if ($vehicule->id == $assurance->vehicule->id) selected @endif
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
        <label for='Fournisseur' style="color: black" > {{ __('Fournisseur') }}</label>
                   <select name='fournisseur_id' type='texte' class="form-select" required
                   value="{{ old('Fournisseur') }} ">
                   <option selected disabled value=""> Liste Fournisseurs  </option>
                   @foreach($fournisseurs as $fournisseur)
                   <option value="{{ $fournisseur->id }}" id="{{ $fournisseur->name }}"
                       @isset($assurance)
                      @if ($fournisseur->id == $assurance->fournisseur->id) selected @endif
                       @endisset>
                      {{ $fournisseur->name }}
               @endforeach
                   @error('Fournisseur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </select>
               </div>
            </div>           

<div class="row mb-12">     
    <div class="col-6 mb-3">
        <label for='date' class="col-md-9 col-form-label" style="color: black" > {{ __("Date d'Assurance") }}</label>
        <input name='date' type='date' class="form-control" required placeholder="Entre 1 et 365 jours" 
        value="@isset($assurance){{ $assurance->date }}@endisset">
        
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
   <div class="col-6 mb-3">
    <label for='expire' class="col-md-9 col-form-label" style="color: black" > {{ __("Expiration d'Assurance") }}</label>
    <input name='expire' type='date' class="form-control" required placeholder="Entre 1 et 365 jours" 
    value="@isset($assurance){{ $assurance->expire }}@endisset">
    
    @error('expire')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror
 </div>
</div>

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='rappel' class="col-md-9 col-form-label" style="color: black" > {{ __('Rappel Avant (jours)') }}</label>
        <input name='rappel' type='number' class="form-control" required placeholder="Entre 1 et 365 jours" 
        value="@isset($assurance){{ $assurance->rappel }}@endisset">
        
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
    <option value="{{ $wilaya->id }}"  @isset($assurance) @if ($assurance->wilaya->id == $wilaya->id)
        selected
    @endif @endisset >
    {{ $wilaya->name }}
</option>
    @endforeach 

         
      </select>
 
</div>
   
</div>




<a class="d-flex flex-row bd-highlight mb-3" >
    <a class="mx-1" href="{{ route('gestionv.assurances.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('gestionv.assurances.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
</a>

@endcannot