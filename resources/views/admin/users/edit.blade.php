@extends('layouts.app')
<title> Edit User </title>
@section('content')
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"> Edit </div>

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
