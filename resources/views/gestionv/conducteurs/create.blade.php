@extends('layouts.app')
<title> Créer Conducteur </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Ajouter Conducteur </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.conducteurs.store') }}">
                        @include('gestionv.conducteurs.partials.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
