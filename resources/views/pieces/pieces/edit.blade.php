@extends('layouts.app')
<title> Edit Pieces </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'une Piece </div>

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
