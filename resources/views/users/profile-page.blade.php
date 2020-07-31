@extends('layouts.app');

@section('content')
<div class="card card-default">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="w-75">User Profile</h6>
        <div class="w-25"><img width="50" height="50" style="border-radius: 50%" src="{{ Gravatar::src($user->email) }}"></div>
    </div>
    <div class="card-body">

        @include('partials.errors')

        <form action="{{route('users.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="email">Name</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ $user->email ?? ''}}">
            </div>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $user->name ?? ''}}">
            </div>
            <div class="form-group mb-3">
                <label for="about">About Me</label>
                <textarea class="form-control" type="text" id="about" name="about">{{ $user->about ?? ''}}</textarea>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success btn-sm">{{isset($user) ? 'Submit Update' : 'Submit' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
