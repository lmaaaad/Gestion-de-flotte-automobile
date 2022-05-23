@extends('layouts.app')
<title> Edit Conducteur </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'un Conducteur </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.conducteurs.update',$conducteur->id) }}">
                        @method('PATCH')
                        @include('gestionv.conducteurs.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
