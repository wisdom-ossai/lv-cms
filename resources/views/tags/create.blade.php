@extends('layouts.app');

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($tag) ? 'Update Tag' : 'Create Tag'}}
    </div>
    <div class="card-body">
        @include('partials.errors')
        <form action={{isset($tag) ? route('tags.update', $tag->id) : route('tags.store')}} method="POST">
            @csrf
            @if(isset($tag))
            @method('PUT')
            @endif
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ $tag->name ?? ''}}">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success btn-sm">{{isset($tag) ? 'Submit Update' : 'Submit' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
