@extends('layouts.app')
<title> Creer nouvelle piece</title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Creer Nouvelle piece </div>

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
