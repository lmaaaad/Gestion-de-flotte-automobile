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
                            <label for='wilaya_id' class="col-md-4 col-form-label text-md-end"> {{ __('Wilaya (Si Dupw)') }}</label>
                            <div class="col-md-6">
                            <select id="wilaya_id" class="form-select" name='wilaya_id' required> 
                            @foreach ($wilayas as $wilaya)
                            <option value="{{ $wilaya->id }}"  @isset($user->wilaya) @if ($user->wilaya->id == $wilaya_id)
                                selected
                            @endif 
                            @endisset >
                            {{ $wilaya->name }}
                        </option>
                            @endforeach 
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