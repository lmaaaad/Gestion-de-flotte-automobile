@csrf



<div class="row mb-12">
   
   <div class="col-6 mb-3">
    <label for='Vehicule' class="col-md-9 col-form-label" style="color: black"> {{ __('Véhicule(Matricule)') }}</label>
               <select name='vehicule_id' type='texte' class="form-select" required
               value="{{ old('Vehicule') }} ">
               <option selected disabled value=""> Liste Véhicules  </option>
               @foreach($vehicules as $vehicule)
               
               <option value="{{ $vehicule->id }}" id="{{ $vehicule->Matricule }}"
                   @isset($entretien)
                  @if ($vehicule->id == $entretien->vehicule->id) selected @endif
                   @endisset>
                  {{ $vehicule->Matricule }}
           @endforeach
               @error('vehicule_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </select>
            </div>          
                <div class="col-6 mb-3">
                    <label for='discription' class="col-md-9 col-form-label" style="color: black" > {{ __('Description') }}</label>
                    <select name='discription' type='texte' class="form-control" required   style="color: black">
                 
                  
                    <option disabled value="" > Choisissez l'Entretien </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Vidange du moteur' )selected @endif> Vidange du moteur </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'vérification des liquides' )selected @endif> vérification des liquides </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Contrôle des freins' )selected @endif> Contrôle des freins </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Vérification des phares' )selected @endif> Vérification des phares </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Vérification de l’état de la batterie' )selected @endif> Vérification de l’état de la batterie </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Contrôle des essuie-glaces' )selected @endif> Contrôle des essuie-glaces </option>
                    <option disabled style="font-weight:bold ; color:black"> LES GRANDS ENTRETIENS </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Remplacement du filtre à huile' )selected @endif> Remplacement du filtre à huile </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Remplacement du filtre à air ' )selected @endif> Remplacement du filtre à air </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Remplacement du filtre à pollen ' )selected @endif> Remplacement du filtre à pollen </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Remplacement des bougies' )selected @endif> Remplacement des bougies </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Contrôle du pot d’échappement' )selected @endif> Contrôle du pot d’échappement </option>
                    <option  @if(isset($entretien) && $entretien->discription == 'Vérification des amortisseurs et des pneus' )selected @endif> Vérification des amortisseurs et des pneus </option>

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
        <label for='Fournisseur' class="col-md-9 col-form-label" style="color: black"> {{ __('Fournisseur') }}</label>
                   <select name='fournisseur_id' type='texte' class="form-select" required
                   value="{{ old('Fournisseur') }} ">
                   <option selected disabled value=""> Liste Fournisseurs  </option>
                   @foreach($fournisseurs as $fournisseur)
                   <option value="{{ $fournisseur->id }}" id="{{ $fournisseur->name }}"
                       @isset($entretien)
                      @if ($fournisseur->id == $entretien->fournisseur->id) selected @endif
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
        <a class=" col-form-label btn btn-secondary" href="{{ route('pieces.fournisseurs.create') }}" role="button">Créer un nouveau Fournisseur</a>
   </div>

</div>

<div class='row mb-12'>
    <div class="col-6 mb-3">
        <label for='date' class="col-md-9 col-form-label" style="color: black"> {{ __('Date') }}</label>
        <input name='date' type='date'  class="form-control" required
        value="@isset($entretien){{ $entretien->date }}@endisset">
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="col-6 mb-3">
        <label for='kilometrage' class="col-md-9 col-form-label" style="color: black" > {{ __('Kilométrage (KM)') }}</label>
        <input name='kilometrage' type='number' class="form-control" required  
        value="@isset($entretien){{ $entretien->kilometrage }}@endisset">
        
        @error('kilometrage')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
</div>

<div class='row mb-12'>
    <div class="col-6 mb-3">
        <label for='pieces' class="col-md-9 col-form-label" style="color: black" > {{ __('Pièces') }}</label>
        <select class="js-example-placeholder-multiple js-states form-control" multiple="multiple" name='pieces[]' id='piece' required  value="piece_id">

                 @foreach($pieces as $piece)
                    <option value="@isset($pieces){{ $piece->id }}@endisset "
                    @isset($piece_ids)            
                      @if (in_array($piece->id,$piece_ids)) selected @endif  
                    @endisset >
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
        <label for='cout' class="col-md-9 col-form-label" style="color: black" > {{ __('Coût (DA)') }}</label>
        <input name='cout' type='number' class="form-control" required  
        value="@isset($entretien){{ $entretien->cout }}@endisset">
        
        @error('cout')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>
   
</div>    
<div class='row mb-12'>
<div class="col-6 mb-4 ">
    <a class=" col-form-label btn btn-secondary" href="{{ route('pieces.pieces.create') }}" role="button">Créer une nouvelle Pièce</a>
</div>
</div>


<div class='row mb-12'>

<div class="d-flex flex-row bd-highlight mb-3" >
    <a class="mx-1" href="{{ route('entretiens.entretiens.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
    <a class="mx-1" href="{{ route('entretiens.entretiens.index') }}" ><button class="btn btn-sm btn-Primary" type="button">Annuler</button>  </a>
</div>
</div>

