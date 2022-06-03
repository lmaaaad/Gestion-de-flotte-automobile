@csrf
@cannot('is-observateur') 

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='Vehicule'> {{ __('Vehicule(Matricule)') }}</label>
                   <select name='vehicule_id' type='texte' class="form-select" required>
                  
                   <option value=""> Liste Vehicules  </option>
                   @foreach($vehicules as $vehicule)
                   
                   <option value="{{ $vehicule->id }}" id="{{ $vehicule->Matricule }}"
                       @isset($taxe)
                      @if ($vehicule->id == $taxe->vehicule->id) selected @endif
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
        <label for="nom">{{ __('Nom') }}</label>
        <input name="nom" type="text" class="form-control @error('noms') is-invalid @enderror"  required autocomplete="nom" autofocus
        value="@isset($taxe){{ $taxe->nom }}@endisset">
 
           @error('nom')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
    </div>
<div class="row mb-12">     
    <div class="col-6 mb-3">
        <label for='date' clsss="col-md-4 col-form-label" style="color: black" > {{ __("Date Taxe") }}</label>
        <input name='date' type='date' class="form-control" required placeholder="Entre 1 et 365 jours" 
        value="@isset($taxe){{ $taxe->date }}@endisset">
        
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
   <div class="col-6 mb-3">
    <label for='expire' clsss="col-md-4 col-form-label" style="color: black" > {{ __("Expiration Taxe") }}</label>
    <input name='expire' type='date' class="form-control" required placeholder="Entre 1 et 365 jours" 
    value="@isset($taxe){{ $taxe->expire }}@endisset">
    
    @error('expire')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror
 </div>
</div>

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='rappel' clsss="col-md-4 col-form-label" style="color: black" > {{ __('Rappel Avant (jours)') }}</label>
        <input name='rappel' type='number' class="form-control" required placeholder="Entre 1 et 365 jours" 
        value="@isset($taxe){{ $taxe->rappel }}@endisset">
        
        @error('rappel')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>

   <div class="col-6 mb-3">
    <label for='wilaya_id' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Wilaya') }}</label>
    <select id="wilaya_id" class="form-select" name='wilaya_id' required>
    @foreach ($wilayas as $wilaya)
    <option value="{{ $wilaya->id }}"@isset($taxe) @if ($taxe->wilaya->id == $wilaya->id)
        selected
    @endif @endisset >
    {{ $wilaya->name }}
</option>
    @endforeach 

         
      </select>
 
</div>
   
</div>




<div class="d-flex flex-row bd-highlight mb-3" >
    <a class="mx-1" href="{{ route('gestionv.taxes.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('gestionv.taxes.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
</div>

@endcannot