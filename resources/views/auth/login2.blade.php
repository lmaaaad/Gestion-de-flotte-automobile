<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">
    

    <title>{{ 'GESTION DE FLOTTE AP' }}</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="pic/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3> LOGICIEL DE  GESTION DU  PARC AUTOMOBILE </h3>
              <p class="mb-4">CONNECTEZ-VOUS POUR ACCÉDER À LA BASE DE DONNÉES</p>
            </div>
            <div></div>
            <div class="card-body">
            <form method="POST" action="{{ route('login') }}" >
              @csrf
              <div class="form-group first">
                <label for="email">Addresse Email</label>
                <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>             
                
              </div>
              <div class="form-group last mb-4">
                <label for="password">Mot de Passe</label>
                <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
               
              </div>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror  

              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              

              

              <button type="submit" class="btn btn-primary">
                {{ __('Se Connecter') }}
            </button>

             
            </form>
            </div>
          </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <
  </body>
</html>