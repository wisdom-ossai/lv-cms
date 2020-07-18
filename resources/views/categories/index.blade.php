@extends('layouts.app');

@section('content')
<div class="d-flex justify-content-end align-items-center mb-3">
    <a href={{route('categories.create')}} class="btn btn-warning">Add</a>
</div>
<div class="card card-default">
    <div class="card-header">
        All Categories
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    {{ $category->name }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
