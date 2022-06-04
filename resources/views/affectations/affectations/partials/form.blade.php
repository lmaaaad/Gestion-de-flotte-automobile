@csrf

    <div class="row mb-12">

        <div class="col-6 mb-3">
            <label for="name" class="col-md-4 col-form-label "style="color: black">{{ __('Conducteur') }}</label>
            <select class="form-select" name="conducteur_id" required id="name">
                <option value="option_select" disabled selected>Nom du Conducteur</option>
                @foreach($conducteurs as $conducteur)
                    <option value="{{ $conducteur->id }}" id="{{ $conducteur->name }}"
                        @isset($affectation)
                       @if ($conducteur->id == $affectation->conducteur->id) selected @endif
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
            <label for="affecte_par" class="col-md-4 col-form-label "style="color: black">{{('Affecté Par')}}</label>
            <input name="affecte_par" type="text" class="form-control" required
            value="@isset($affectation){{ $affectation->affecte_par }}@endisset">
            
            @error('affecte_par')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-12">  
        <div class="col-6 mb-3">
            <label for='depart' class="col-md-4 col-form-label" style="color: black" > {{('Départ')}}</label>
            <input name='depart' type='texte' class="form-control" required
            value="@isset($affectation){{ $affectation->depart }}@endisset">
            
            @error('depart')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
       </div>
    
    
           <div class="col-6 mb-3">
               <label for='arrivee' class="col-md-4 col-form-label" style="color: black"> {{('Arrivée')}}</label>
               <input name='arrivee' type='texte' class="form-control" required
               value="@isset($affectation){{ $affectation->arrivee }}@endisset">
               
               @error('arrivee')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
               @enderror
           </div>       
           
       </div>

    <div class="row  mb-12">
        <div class="col-6 mb-3">
            <label for="" class="col-md-4 col-form-label "style="color: black">{{('Date Aller')}}</label>
            <input name="date" type="date" class="form-control" required
            value="@isset($affectation){{$affectation->date}}@endisset">
            
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6 mb-3">
            <label for='date_retour' class="col-md-6 col-form-label" style="color: black"> {{ __('Date Retour') }}</label>
            <input name='date_retour' type='date' class="form-control" required
            value="@isset($affectation){{ $affectation->date_retour }}@endisset">
            
            @error('date_retour')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
        </div>

        
   </div>

  
   <div class="row mb-12">  
    <div class="col-6 mb-3">
        <label for='wilaya_id' class="col-md-4 col-form-label" style="color: black"> {{ __('Wilaya') }}</label>
        <select id="wilaya_id" class="form-select" name='wilaya_id' required>
        @foreach ($wilayas as $wilaya)
        <option value="{{ $wilaya->id }}" @isset($affectation) @if ($affectation->wilaya->id == $wilaya->id)
            selected
        @endif @endisset >
        {{ $wilaya->name }}
    </option>
        @endforeach 

             
          </select>
     
   </div> </div> 

    <a class="d-flex flex-row bd-highlight mb-3" >
        <a class="mx-1" href="{{ route('affectations.affectations.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
        <a class="mx-1" href="{{ route('affectations.affectations.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
    </a>