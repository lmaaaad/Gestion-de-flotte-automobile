@extends('layouts.app')
<title> Créer Assurance </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Ajouter Assurance </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.assurances.store') }}">
                        @include('gestionv.assurances.partials.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
