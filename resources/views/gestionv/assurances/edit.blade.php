@extends('layouts.app')
<title> Edit Assurance </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'une Assurance </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.assurances.update',$assurance->id) }}">
                        @method('PATCH')
                        @include('gestionv.assurances.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
