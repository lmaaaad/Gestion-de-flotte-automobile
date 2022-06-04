@extends('layouts.app')
<title> Modifier Fournisseur </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Modifier les informations d'un Fournisseur </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pieces.fournisseurs.update',$fournisseur->id) }}">
                        @method('PATCH')
                        @include('pieces.fournisseurs.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
