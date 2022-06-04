@extends('layouts.app')
<title> Créer Utilisateur </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Création d'un Utilisateur </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @include('admin.users.partials.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
