<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  	<title>{{ 'GESTION DE FLOTTE AP' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img class="pb-4" src="/pic/logo-head.png" >
								<h4>LOGICIEL DE  GESTION DU  PARC AUTOMOBILE</h4>
								<p>CONNECTEZ-VOUS POUR ACCÉDER À LA BASE DE DONNÉES</p>
								
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Se connecter</h3>
			      		</div>
								
			      	</div>
					  <form method="POST" action="{{ route('login') }}" >
						@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">Addresse email</label>
							  <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus placeholder="username@poste.dz">			      		</div>
							  @error('email')
							  <span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror   

							  <div class="form-group mb-3">
		            	<label class="label" for="password">Mot de Passe</label>
						<input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
						@error('password')
						<span class="invalid-feedback" role="alert">
						  <strong>{{ $message }}</strong>
					  </span>
				  @enderror   

          
					</div>
          
		            <div class="form-group">
						
		            	<button type="submit" class="form-control btn btn-primary submit px-3">	{{ __('Se Connecter') }}</button>
		            </div>
					<div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
						<a class="text-primary" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
						 </div>
		            </div>
                
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

