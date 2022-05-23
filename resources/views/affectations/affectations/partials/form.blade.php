@csrf

    <div class="row mb-12">

        <div class="col-6 mb-3">
            <label for="name" class="col-md-4 col-form-label ">{{ __('Conducteur') }}</label>
            <select class="form-select" name="conducteur_id" required id="name">
                <option value="option_select" disabled selected>le nom de Conducteur</option>
                @foreach($conducteurs as $conducteur)
                    <option value="{{ $conducteur->id }}" id="{{ $conducteur->name }}"
                        @isset($user)
                       @if ($conducteur->id == $conducteur->name) checked @endif
                        @endisset>
                       {{ $conducteur->Nom }}  {{ $conducteur->Prenom }}
                @endforeach
            </select>
                @error('conducteur_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

           
          </div>
    

          <div class="col-6 mb-3">
            <label for="affecte_par" class="col-md-4 col-form-label ">{{('Affecte Par')}}</label>
            <input name="affecte_par" type="text" class="form-control" required
            value="{{ old('affecte_par') }}">
            
            @error('affecte_par')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row  mb-12">
        <div class="col-6 mb-3">
            <label for="" class="col-md-4 col-form-label ">{{('Date Aller')}}</label>
            <input name="date" type="date" class="form-control" required
            value="{{ old('date') }}  @isset($affectation) {{$affectation->date}} @endisset">
            
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6 mb-3">
            <label for='date_retour' clsss="col-md-4 col-form-label"> {{ __('Date Retour') }}</label>
            <input name='date_retour' type='date' class="form-control" required
            value="{{ old('date_retour') }}  @isset($affectation) {{ $affectation->date_retour }} @endisset">
            
            @error('date_retour')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
        </div>

        
   </div>

   <div class="row mb-12">  
    <div class="col-6 mb-3">
        <label for='depart' clsss="col-md-4 col-form-label" > {{('Depart')}}</label>
        <input name='depart' type='texte' class="form-control" required
        value="{{ old('depart') }}  @isset($affectation) {{ $affectation->depart }} @endisset">
        
        @error('depart')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
   </div>


       <div class="col-6 mb-3">
           <label for='arrivee' clsss="col-md-4 col-form-label"> {{('Arrivee')}}</label>
           <input name='arrivee' type='texte' class="form-control" required
           value="{{ old('arrivee') }}  @isset($affectation) {{ $affectation->arrivee }} @endisset">
           
           @error('arrivee')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
           @enderror
       </div>       
       
   </div>

    <a class="d-flex flex-row bd-highlight mb-3" >
        <a class="mx-1" href="{{ route('affectations.affectations.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
        <a class="mx-1" href="{{ route('affectations.affectations.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
    </a>