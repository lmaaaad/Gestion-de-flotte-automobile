@csrf


<div class="row mb-12">

    <div class="col-6 mb-3">
       <label for="name" class="col-md-4 col-form-label ">{{ __('Nom') }}</label>
       <input name="Nom" type="text" class="form-control @error('name') is-invalid @enderror"  required autocomplete="Nom" autofocus
       value="{{ old('Nom') }}  @isset($vehicule) {{ $vehicule->Nom }} @endisset">

          @error('Nom')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

    <div class="col-6 mb-3">
        <label for="Prenom" class="col-md-4 col-form-label ">{{ __('Prenom') }}</label>
        <input id="Prenom" type="Prenom" class="form-control " name="Prenom"  required autocomplete="Prenom"
        value="{{ old('Prenom') }}  @isset($vehicule) {{ $vehicule->Prenom }} @endisset">

        @error('Prenom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='tel' clsss="col-md-4 col-form-label" > {{ __('Telephone') }}</label>
        <input name='tel' type='tel' class="form-control" required  pattern="[0]{1}[5-7]{1}[0-9]{8}" placeholder="exp:0567879829" aria-label="10-digit area code"
        value="{{ old('tel') }}  @isset($vehicule) {{ $vehicule->tel }} @endisset">
        
        @error('tel')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
    <div class="col-6 mb-3">
        <label for='Adresse' clsss="col-md-4 col-form-label" > {{ __('Adresse') }}</label>
        <input name='Adresse' type='Adresse' class="form-control" required
        value="{{ old('Adresse') }}  @isset($vehicule) {{ $vehicule->Adresse }} @endisset">
        
        @error('Adresse')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
</div>

<div class="row mb-12">
    <div class="col-6 mb-3">
   <label for='Vehicule'> {{ __('Vehicule(Matricule)') }}</label>
              <select name='vehicule_id' type='texte' class="form-select" required
              value="{{ old('Vehicule') }} ">
              
              <option selected disabled value=""> Liste Vehicules</option>
              @foreach($vehicules as $vehicule)
              <option value="{{ $vehicule->id }}" id="{{ $vehicule->Matricule }}"
                  @isset($user)
                 @if ($vehicule->id == $vehicule->Matricule) checked @endif
                  @endisset>
                 {{ $vehicule->Matricule }}
                 
          @endforeach
              @error('Vehicule')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
               </select>
          </div>

        </div>
           



<div class="d-flex flex-row bd-highlight mb-3" >
    <a class="mx-1" href="{{ route('gestionv.conducteurs.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('gestionv.conducteurs.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
</div>

