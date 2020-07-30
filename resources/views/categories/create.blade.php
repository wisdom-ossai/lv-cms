@extends('layouts.app');

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($category) ? 'Update Category' : 'Create Category'}}
    </div>
    <div class="card-body">

        @include('partials.errors')

        <form action={{isset($category) ? route('categories.update', $category->id) : route('categories.store')}} method="POST">
            @csrf
            @if(isset($category))
            @method('PUT')
            @endif
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" value={{ $category->name ?? ''}}>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-success btn-sm">{{isset($category) ? 'Submit Update' : 'Submit' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
