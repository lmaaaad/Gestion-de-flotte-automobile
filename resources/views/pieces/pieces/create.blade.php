@extends('layouts.app')
<title> Créer Pièce</title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-black"> Ajouter Pièce </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pieces.pieces.store') }}">
                        @include('pieces.pieces.partial.form',['create'=>true])
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
