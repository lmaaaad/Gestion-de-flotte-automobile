@extends('layouts.app')
<title> Edit Entreti </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'une Entretiens </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('entretiens.entretiens.update',$entretien->id) }}">
                        @method('PATCH')
                        @include('entretiens.entretiens.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
