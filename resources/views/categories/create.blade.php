@extends('layouts.app');

@section('content')
<div class="card card-default">
    <div class="card-header">
        Create Category
    </div>
    <div class="card-body">
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
        @endif
        <form action={{route('categories.store')}} method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name">
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
