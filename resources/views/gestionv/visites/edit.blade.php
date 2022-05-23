@extends('layouts.app')
<title> Edit Visites </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'une Visite </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.visites.update',$visite->id) }}">
                        @method('PATCH')
                        @include('gestionv.visites.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
