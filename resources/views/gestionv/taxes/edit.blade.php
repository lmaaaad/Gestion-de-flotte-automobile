@extends('layouts.app')
<title> Edit taxes </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Modifier les informations d'un Taxe </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionv.taxes.update',$taxe->id) }}">
                        @method('PATCH')
                        @include('gestionv.taxes.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
