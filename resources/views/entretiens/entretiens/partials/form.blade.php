@csrf



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
                    <label for='discription' clsss="col-md-4 col-form-label" style="color: black" > {{ __('Description') }}</label>
                    <select name='discription' type='texte' class="form-control" required  
                    value="{{ old('discription') }}">
                    <option disabled selected > Choisissez l'entretien </option>
                    <option disabled style="font-weight:bold; color:black" > LES PETITS ENTRETIENS </option>
                    <option> La vidange du moteur, </option>
                    <option> La vérification des liquides </option>
                    <option> Le contrôle des freins </option>
                    <option> La vérification des phares </option>
                    <option> La vérification de l’état de la batterie </option>
                    <option> Le contrôle des essuie-glaces </option>
                    <option disabled style="font-weight:bold ; color:black"> LES GRANDS ENTRETIENS </option>
                    <option> Le remplacement du filtre à huile </option>
                    <option> Le replacement du filtre à air </option>
                    <option> Le remplacement filtre à pollen </option>
                    <option> Le remplacement des bougies </option>
                    <option> Le contrôle du pot d’échappement </option>
                    <option> La vérification des amortisseurs et des pneus </option>

                    @error('discription')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </select>
               </div>           
</div>
   

<div class="row mb-12">
    <div class="col-6 mb-3">
        <label for='Fournisseur'> {{ __('Fournisseur') }}</label>
                   <select name='fournisseur_id' type='texte' class="form-select" required
                   value="{{ old('Fournisseur') }} ">
                   <option selected disabled value=""> Liste Fournisseurs  </option>
                   @foreach($fournisseurs as $fournisseur)
                   <option value="{{ $fournisseur->id }}" id="{{ $fournisseur->name }}"
                       @isset($user)
                      @if ($fournisseur->id == $fournisseur->name) checked @endif
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
                      

 
    <div class="col-6 mt-4 ">
        <a class=" col-form-label btn btn-secondary" href="{{ route('pieces.fournisseurs.create') }}" role="button">Creer nouveau fournisseur</a>
   </div>

</div>

<div class='row mb-12'>
    <div class="col-6 mb-3">
        <label for='date' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Date') }}</label>
        <input name='date' type='date'  class="form-control" required
        value="{{ old('date') }} ">
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="col-6 mb-3">
        <label for='kilometrage' clsss="col-md-4 col-form-label" style="color: black" style="color: black" > {{ __('Kilometrage (KM)') }}</label>
        <input name='kilometrage' type='number' class="form-control" required  
        value="{{ old('kilometrage') }}  ">
        
        @error('kilometrage')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
</div>

<div class='row mb-12'>
    <div class="col-6 mb-3">
        <label for='pieces' style="color: black"> {{ __('Pieces') }}</label>
        <select class="js-example-placeholder-multiple js-states form-control" multiple="multiple" name='pieces[]' id='pieces' required  value="{{ old('piece_id') }} ">

                   @foreach($pieces as $piece)
                   <option value="{{ $piece->id }}" id="{{ $piece->designation }}"   
                    @isset($piece_ids)            
                      @if (in_array($piece->id,$piece_ids)) selected @endif  @endisset >
                      {{ $piece->designation }}
               @endforeach
                   @error('pieces')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </select>
               </div>

    <div class="col-6 mb-3">
        <label for='cout' clsss="col-md-4 col-form-label" style="color: black" style="color: black" > {{ __('Cout (DA)') }}</label>
        <input name='cout' type='number' class="form-control" required  
        value="{{ old('cout') }}  ">
        
        @error('cout')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
   
</div>    
<div class='row mb-12'>
<div class="col-6 mb-4 ">
    <a class=" col-form-label btn btn-secondary" href="{{ route('pieces.pieces.create') }}" role="button">Creer nouveau Piece</a>
</div>
</div>


<div class='row mb-12'>

<div class="d-flex flex-row bd-highlight mb-3" >
    <a class="mx-1" href="{{ route('entretiens.entretiens.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('entretiens.entretiens.index') }}" ><button class="btn btn-sm btn-Primary" type="button">Annuler</button>  </a>
</div>
</div>

