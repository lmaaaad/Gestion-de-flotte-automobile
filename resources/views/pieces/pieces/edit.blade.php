@extends('layouts.app')
<title> Modifier Pièce </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Modifier les informations d'une Pièce </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pieces.pieces.update',$piece->id) }}">
                        @method('PATCH')
                        @include('pieces.pieces.partial.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
