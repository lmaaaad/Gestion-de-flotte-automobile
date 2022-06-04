@extends('layouts.app')
<title> Créer Taxe </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Ajouter Taxe </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.taxes.store') }}">
                        @include('gestionv.taxes.partials.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
