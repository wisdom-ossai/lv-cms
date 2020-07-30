@extends('layouts.app');

@section('content')
<div class="d-flex justify-content-end align-items-center mb-3">
    <a href="{{route('posts.create')}}" class="btn btn-warning">Add</a>
</div>
<div class="card card-default">
    <div class="card-header">
        All Posts
    </div>
    <div class="card-body">
        @if(sizeOf($posts))
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div style="width: 12%;">
                    <span class="font-weight-bold">Image</span>
                </div>
                <div style="width: 20%;">
                    <span class="font-weight-bold">Title</span>
                </div>
                <div style="width: 45%;">
                    <span class="font-weight-bold">Description</span>
                </div>
                <div style="width: 13%;">
                    <span class="font-weight-bold">Category</span>
                </div>
                <div style="width: 10%;">
                    <span class="font-weight-bold">. . .</span>
                </div>
            </li>
            @foreach($posts as $post)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="ml-auto" style="width: 12%;">
                    <span><img src="{{ asset('storage/' . $post->img_url) }}" width="65px" height="65px" alt=""></span>
                </div>
                <div class="mr-2" style="width: 20%;">
                    <span>{{ $post->title }}</span>
                </div>
                <div class="mr-2" style="width: 45%;">
                    <span>{{ $post->description }}</span>
                </div>
                <div class="mr-2" style="width: 13%;">
                    <span>{{ $post->category->name }}</span>
                </div>
                <div class="d-flex justify-content-end align-items-center" style="width: 10%;">
                    @if($post->trashed())
                    <a type="button" class="text-success mr-2" title="Restore Post" onclick="handleRestorePostClicked({{$post->id}})"><i class="fa fa-reply"></i></a>
                    <a type="button" class="text-danger" title="Delete Post Permanentely" onclick="handleDeletePostClicked({{$post->id}})"><i class="fa fa-trash-o"></i></a>
                    @else
                    <a href="{{route('posts.edit', $post->id )}}" class="text-info mr-2" title="Edit Post"><i class="fa fa-pencil-square-o"></i></a>
                    <a type="button" class="text-danger" title="Move Post to Recycle Bin" onclick="handleArchivePostClicked({{$post->id}})"><i class="fa fa-trash"></i></a>
                    @endif
                </div>
            </li>

            @endforeach
        </ul>
        @else
        <div>
            <p class="text-center font-weight-bold">No Post Avaiable</p>
        </div>
        @endif
    </div>
</div>

<div class="modal fade" id="archiveconfirmation" tabindex="-1" role="dialog" aria-labelledby="archiveconfirmationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="archivePostForm">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="archiveconfirmationLabel">Confirm Archive</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center font-weight-bold">Are you sure you want to move this post to recycle bin?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Yes Move</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="restoreconfirmation" tabindex="-1" role="dialog" aria-labelledby="restoreconfirmationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="restorePostForm">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="restoreconfirmationLabel">Confirm Restore</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center font-weight-bold">Are you sure you want to restore this post?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm">Restore</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="permDeleteconfirmation" tabindex="-1" role="dialog" aria-labelledby="permDeleteconfirmationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="deletePostForm">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permDeleteconfirmationLabel">Confirm Permanently Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center font-weight-bold">Are you sure you want to Permanently delete this post?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function handleDeletePostClicked(id) {
        var deleteForm = document.getElementById('deletePostForm');
        deleteForm.action = '/posts/' + id
        $('#permDeleteconfirmation').modal('show')
    }

    function handleRestorePostClicked(id) {
        var restoreForm = document.getElementById('restorePostForm');
        restoreForm.action = '/restore/' + id
        $('#restoreconfirmation').modal('show')
    }

    function handleArchivePostClicked(id) {
        var archiveForm = document.getElementById('archivePostForm');
        archiveForm.action = '/posts/' + id
        $('#archiveconfirmation').modal('show')
    }
</script>
@endsection
