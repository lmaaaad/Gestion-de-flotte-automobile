@cannot('is-observateur') 
@extends('layouts.app')
<title> Edit Affectations </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'une Affectation </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('affectations.affectations.update',$affectation->id) }}">
                        @method('PATCH')
                        @include('affectations.affectations.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
@endcannot
