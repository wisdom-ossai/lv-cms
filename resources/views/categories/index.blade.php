@extends('layouts.app');

@section('content')
<div class="d-flex justify-content-end align-items-center mb-3">
    <a href="{{route('categories.create')}}" class="btn btn-warning">Add</a>
</div>
<div class="card card-default">
    <div class="card-header">
        All Categories
    </div>
    <div class="card-body">
        @if(sizeOf($categories))
        <ul class="list-group">
            @foreach($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="w-50">
                    <span>{{ $category->name }}</span>
                </div>
                <div class="w-25">

                </div>
                <div class="w-25 d-flex justify-content-end align-items-center">
                    <a href="{{route('categories.edit', $category->id )}}" class="text-primary mr-2" title="Edit Category"><i class="fa fa-pencil-square-o"></i></a>
                    <a type="button" class="text-danger" title="Delete todo" onclick="handleDeletClicked({{$category->id}})"><i class="fa fa-trash"></i></a>
                </div>
            </li>

            @endforeach
        </ul>
        @else
        <div>
            <p class="text-center font-weight-bold">No Category Available</p>
        </div>
        @endif

    </div>
</div>

<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deleteCategoryForm">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center font-weight-bold">Are you sure you want to delete this category?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Yes Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    function handleDeletClicked(id) {
        console.log(id);
        var form = document.getElementById('deleteCategoryForm');
        form.action = '/categories/' + id
        $('#confirmation').modal('show')
    }
</script>
@endsection
