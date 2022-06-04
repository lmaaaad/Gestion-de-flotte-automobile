@extends('layouts.app')
<title> Modifier Utilisateur </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Modifier les informations d'un Utilisateur </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.update',$user->id) }}">
                        @method('PATCH')
                        @include('admin.users.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
