@extends('layouts.app')
<title> Create new fournisseur </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Ajouter Un Nouveau Fournisseur </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pieces.fournisseurs.store') }}">
                        @include('pieces.fournisseurs.partials.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
