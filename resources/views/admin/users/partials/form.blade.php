@csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus
                                value="{{ old('name') }}  @isset($user) {{ $user->name }} @endisset">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}
                                @isset($user) {{ $user->email }} @endisset" required autocomplete="email"  pattern="[a-z0-9._%+-]+@poste.dz">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1 ">
                            <div class="col-12 offset-md-2" >
                            @foreach ( $roles as $role )
                                     <div class="form-check ">
                                         <input class="form-check-input" name="role_id" required 
                                         type="radio" value ="{{ $role->id}}" id="{{ $role->name }}">
                                         <label class="form-check-label" for="{{ $role->name }}">
                                             {{ $role->name }}
                                         </label>
                                     </div>
                                       @endforeach
                                    </div> 
                            
                        </div>


                        <div class="row mb-3">
                            <label for='Wilaya' class="col-md-4 col-form-label text-md-end"> {{ __('Wilaya (Si Dupw)') }}</label>
                            <div class="col-md-6">
                            <select id="Wilaya" class="form-select" name='Wilaya' required
                            value="{{ old('Wilaya') }}  @isset($user) {{ $user->Wilaya }} @endisset"> 
                                <option disabled selected>Selectionnez Votre Wilaya</option>
                                <option> 01-Adrar</option>  <option> 02- Chlef </option> <option> 03-Laghout </option> <option> 04- Oum El Bouaghi </option>
                                <option> 05-Batna </option> <option> 06-bejaya </option> <option> 07-Biskra </option> <option> 08-Bechar </option>
                                <option> 09-Blida </option> <option> 10-Bouira </option> <option> 11-Tamanrasset</option> <option> 12-Tebessa</option>
                                <option> 13-Tlemcen </option> <option> 14-Tiaret</option> <option> 15-Tizi Ouzou </option> <option> 16-Alger-Centre </option> <option> 16-Alger-Est</option> <option> 16-Alger-Ouest</option>
                                <option> 17-Djelfa</option> <option> 18-Jijel</option> <option> 19-Setif</option> <option> 20-Saida</option>
                                <option> 21-Skikda</option> <option> 22-Sidi Belabbas</option> <option> 23-Annaba</option> <option> 24-Guelma</option>
                                <option> 25-Consantine</option> <option> 26-Medea</option> <option> 27-Mostaganem </option> <option> 28-Msila</option>
                                <option> 29-Mascara</option> <option> 30-Ouargla </option> <option> 31-Oran </option> <option> 32-El Bayadh</option>
                                <option> 33-Illizi</option> <option> 34-Bordj Bou Arreridj </option> <option> 35-Boumerdas</option> <option> 36-El Taref</option>
                                <option> 37-Tindouf</option> <option> 38-Tissmsilet </option> <option> 39-El Oued</option> <option> 40-Khenchla</option>
                                <option> 41-Souk ahras</option> <option> 42-Tipaza</option> <option> 43-Mila</option> <option> 44-Ain Defla</option>
                                <option> 45-Naama</option> <option> 46-Ain Timouchent </option> <option> 47-Ghrdaia</option> <option> 48-Ghelizan</option>
                                <option> 49-El Maghair</option> <option> 50-El Mania </option> <option> 51-Ouled Djellal</option> <option> 52-Bordj badji Mokhtar</option>
                                <option> 53-Beni abbes</option> <option> 54-Timimoun</option> <option> 55-Tougourt</option> <option> 56-Djanet</option> <option> 57-In Sallah</option>
                                <option> 58-In Gazzam</option> 
                              </select>
                            </div>   
                         
                       </div>

                        <div class="d-flex bd-highlight md-3">
                            <div class="mx-1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>      
                            <a class="mx-1" href="{{ route('admin.users.index') }}">
                                <button type="button" class="btn btn-secondary">
                                    {{ __('Annuler') }}
                                </button>
                            </a>   
                            
                        </div>
                    </div>