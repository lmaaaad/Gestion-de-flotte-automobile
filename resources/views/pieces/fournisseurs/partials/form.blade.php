@csrf

    <div class="row mb-12">

        <div class="col-6 mb-3">
           <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>
           <input name="name" type="text" name='name' class="form-control @error('name') is-invalid @enderror"  required autocomplete="name" autofocus
           value="{{ old('name') }}  @isset($fournisseur) {{ $fournisseur->name }} @endisset">

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
      </div>

        <div class="col-6 mb-3">
            <label for="email" class="col-md-4 col-form-label ">{{ __('E-mail') }}</label>
            <input id="email" type="email" class="form-control " name="email"  required autocomplete="email"
            value="{{ old('email') }}  @isset($fournisseur) {{ $fournisseur->email }} @endisset">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  </div>


    <div class="row mb-12">
        <div class="col-6 mb-3">
            <label for="ville" class="col-md-4 col-form-label ">{{ __('Ville') }}</label>
            <input name="ville" type="texte" class="form-control" required
            value="{{ old('ville') }}  @isset($fournisseur) {{ $fournisseur->ville }} @endisset">
            
            @error('ville')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6 mb-3">
            <label for='tel' clsss="col-md-4 col-form-label" style="color: black" > {{ __('Telephone') }}</label>
            <input name='tel' type='tel' class="form-control" required  pattern="[0]{1}[5-7]{1}[0-9]{8}" placeholder="exp:0567879829" aria-label="10-digit area code" size="2"
            value="{{ old('tel') }}  @isset($fournisseur) {{ $fournisseur->tel }} @endisset">
            
            @error('tel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
       </div>
   </div>

   <div class="row mb-12">  
       <div class="col-6 mb-3">
           <label for='NRC' clsss="col-md-4 col-form-label" style="color: black"> {{('N° R Commerce')}}</label>
           <input name='NRC' type='texte' class="form-control" pattern="[0-9]{15}" required pattern=""
           value="{{ old('NRC') }}  @isset($fournisseur) {{ $fournisseur->NRC }} @endisset">
           
           @error('NRC')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
           @enderror
       </div>       
       <div class="col-6 mb-3">
           <label for='Ncontrat' clsss="col-md-4 col-form-label" style="color: black"> {{ __('N° Contrat') }}</label>
           <input name='Ncontrat' type='texte' class="form-control" pattern="[0-9]{15}" required
           value="{{ old('Ncontrat') }}  @isset($fournisseur) {{ $fournisseur->Ncontrat }} @endisset">
           
           @error('Ncontrat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       </div>
   </div>



     <div class="row mb-12">
         <div class="col-6 mb-3">
          <label for='type' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Type') }}</label>
            <select name='type' type='text' class="form-select" required
                value="{{ old('type') }}  @isset($fournisseur) {{ $fournisseur->type }} @endisset">
                <option selected disabled value=""> Choisir </option>
                <option>Grossiste</option>
                <option>Détaillant</option>
                <option>Prestataire</option>
                <option>Sous traitant</option>
                <option>Centrale d'achat</option>
            </select>
             @error('type')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
             @enderror
         </div>   
         <div class="col-6 mb-3">
             <label for='datedeb' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Date debut contrat') }}</label>
             <input name='datedeb' type='date'  class="form-control" required
             value="{{ old('datedeb') }}  @isset($fournisseur) {{ $fournisseur->datedeb }} @endisset">
             @error('datedeb')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
             @enderror
         </div>
     </div>

   <div class="row mb-12">
       <div class="col-6 mb-3">
           <label for='datefin' clsss="col-md-4 col-form-label" style="color: black"> {{ __('Date fin Contrat') }}</label>
           <input name='datefin' type='date' class="form-control" required
           value="{{ old('datefin') }}  @isset($fournisseur) {{ $fournisseur->datefin }} @endisset">
           @error('datefin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
           @enderror
       </div>                              
       <div class="col-6 mb-3">
           <label for='NIF' clsss="col-md-4 col-form-label" style="color: black"> {{ __('NIF(Num ID FISCAL)') }}</label>
           <input name='NIF' type='texte' class="form-control" pattern="[0-9]{15}" required
           value="{{ old('NIF') }}  @isset($fournisseur) {{ $fournisseur->NIF }} @endisset">
           @error('NIF')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
       </div>
   </div>

   

    <div class="d-flex flex-row bd-highlight mb-3" >
        <a class="mx-1" href="{{ route('pieces.fournisseurs.index') }}" ><button class="btn btn-sm btn-success" type="submit">Enregistrer</button>  </a>
        <a class="mx-1" href="{{ route('pieces.fournisseurs.index') }}" ><button class="btn btn-sm btn-secondary" type="button">Annuler</button>  </a>
    </div>