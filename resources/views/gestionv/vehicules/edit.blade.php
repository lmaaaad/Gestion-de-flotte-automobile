@extends('layouts.app')
<title> Modidfier Véhicule </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Modifier les informations d'un Véhicule </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.vehicules.update',$vehicule->id) }}">
                        @method('PATCH')
                        @include('gestionv.vehicules.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
