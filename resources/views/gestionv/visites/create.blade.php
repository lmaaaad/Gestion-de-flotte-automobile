@extends('layouts.app')
<title> Creer Visite </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Ajouter Visite </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.visites.store') }}">
                        @include('gestionv.visites.partials.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
