<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'GESTION DE FLOTTE AP' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style> 

    body{
    background-image:url('/pic/background1.jpg');
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;   
    background-size:cover;
    }
    .left-side
    {
    filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
    left: 5%;
    max-width: 20%;
    font-family:'Open Sans' ;
    font-style: oblique;
    font-weight:bold;
    font-size: 40px;
    color: rgba(254,254,254,1);
    }
    #right-side-up
    {
        left: 50%;
        max-width: 50%;
    position: fixed;
    overflow: visible;
    width: 605px;
    height: 145px;
    top:200px;
    text-align: center;
    font-family: "Open Sans";
    font-style: normal;
    font-weight: bold;
    font-size: 25px;
    color: rgba(0,2,65,1);
    }
    }
    </style>
</head>
<body>
    
    <div class="position-absolute top-50  translate-middle-y left-side"> LOGICIEL DE <br> GESTION DU <br> PARC AUTOMOBILE  </div>
    <div id=right-side-up>
        <span>CONNECTEZ-VOUS POUR ACCÉDER <br>À LA BASE DE DONNÉES <span>
    </div> 
  <div class="container position-fixed  top-50 bottom-50 start-50">
    <div class="col-md-6">

            <div class="card">
                  
                <div class="card-header text-center" style="background-color :#00B1FF">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Username or Email Adress" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                              
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<main class="py-4">
    @yield('content')
</main>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>