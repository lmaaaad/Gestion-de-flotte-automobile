@csrf

    <div class="row mb-12">

        <div class="col-6 mb-3">
            <label for="name" class="col-md-6 col-form-label ">{{ __('Fournisseur') }}</label>
            <select class="form-select" name="fournisseur_id" required id="name">
                <option value="option_select" disabled selected>Nom de Fournisseur</option>
                @foreach($fournisseurs as $fournisseur)
                    <option value="{{ $fournisseur->id }}" id="{{ $fournisseur->name }}"
                        @isset($piece)
                       @if ($fournisseur->id == $piece->fournisseur->id) selected @endif
                        @endisset>
                       {{ $fournisseur->name }}
                @endforeach
            </select>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

           
          </div>

         
            <div class="col-6 mt-4">
        <a class="col-form-label btn btn-secondary" href="{{ route('pieces.fournisseurs.create') }}" role="button">Creer nouveau fournisseur</a>
  
          </div>    

        </div>
    
    <div class="row mb-12">
        <div class="col-6 mb-3">
            <label for='designation' class="col-md-6 col-form-label"> {{('Designation')}}</label>
            <input name='designation' type='texte' class="form-control" required
            value="@isset($piece){{ $piece->designation }}@endisset">
            
            @error('designation')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
            @enderror
        </div>         

        <div class="col-6 mb-3">
            <label for="marque" class="col-md-9 col-form-label ">{{ __('Marque')}}</label>
            <input name="marque" type="texte" class="form-control" required
            value="@isset($piece){{$piece->marque}}@endisset">
            
            @error('marque')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       </div>
    </div>

    <div class="row mb-12">
        
        <div class="col-6 mb-3">
            <label for='quantite' class="col-md-9 col-form-label" style="color: black" > {{('Quantite ')}}</label>
            <input name='quantite' type='number' class="form-control" required 
            value="@isset($piece){{ $piece->quantite }}@endisset">
            
            @error('quantite')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
       </div>        
        
        <div class="col-6 mb-3">
            <label for='quantite_utiliser' class="col-md-9 col-form-label" style="color: black" > {{('Quantite Utiliser')}}</label>
            <input name='quantite_utiliser' type='number' class="form-control" required 
            value="@isset($piece){{ $piece->quantite_utiliser }}@endisset">
            
            @error('quantite_utiliser')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
       </div>

   </div>

   <div class="row mb-12">  

    <div class="col-6 mb-3">
        <label for="unite" class="col-md-9 col-form-label">{{ __('Unite')}}</label>
            <input name="unite" type="texte" class="form-control" placeholder="Exp: paire / kg / Boite de 100 ..." required
            value="@isset($piece){{$piece->unite}}@endisset">
            
            @error('unite')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       <div class="col-6 mb-3">
           <label for='prix' class="col-md-9 col-form-label" style="color: black"> {{('Prix Unitaire (DA)')}}</label>
           <input name='prix' type='texte' class="form-control" required
           value="@isset($piece){{ $piece->prix }}@endisset">
           
           @error('prix')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
           @enderror
       </div>       
          
   </div>


   <div class="row mb-12">  

   <div class="col-6 mb-3">
      
    <label for='date_acq' class="col-md-9 col-form-label" style="color: black"> {{ __("Date d'Acquisition") }}</label>
    <input name='date_acq' type='date' class="form-control" required
    value="@isset($piece){{ $piece->date_acq }}@endisset">
    @error('dateprix')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
    @enderror
</div>
</div>

    <a class="d-flex flex-row bd-highlight mb-3" >
        <a class="mx-1" href="{{ route('pieces.pieces.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
        <a class="mx-1" href="{{ route('pieces.pieces.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
    </a>