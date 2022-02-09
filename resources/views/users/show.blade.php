@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                User Information
            </div>
            <div class="card-body">

                @if ($user->photo)
                    <div>
                        <img alt="Post image" width="200" src="{{ asset('storage/users_photos/' . $user->photo) }}">
                    </div>
                @endif

                <div><strong>Name:</strong> {{ $user->name }} </div>
                <div><strong>Email:</strong> {{ $user->email }} </div>
            </div>
        </div>
    </div>
@endsection
