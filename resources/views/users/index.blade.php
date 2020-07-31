@extends('layouts.app');

@section('content')
<div class="d-flex justify-content-end align-items-center mb-3">
</div>
<div class="card card-default">
    <div class="card-header">
        All Users
    </div>
    <div class="card-body">
        @if(sizeOf($users))
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div style="width: 20%">
                    <span class="font-weight-bold">Avatar</span>
                </div>
                <div  style="width: 30%">
                    <span class="font-weight-bold">Name</span>
                </div>
                <div  style="width: 25%">
                    <span class="font-weight-bold">Email</span>
                </div>
                <div  style="width: 20%">
                    <span class="font-weight-bold">Role</span>
                </div>
                <div class="d-flex justify-content-end align-items-center" style="width: 5%">
                    <span class="font-weight-bold">. . .</span>
                </div>
            </li>
            @foreach($users as $user)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div  style="width: 20%">
                  <img width="40" height="40" style="border-radius: 50%" src="{{ Gravatar::src($user->email) }}">
                </div>
                <div  style="width: 30%">
                    <span>{{ $user->name }}</span>
                </div>
                <div  style="width: 25%">
                    <span>{{ $user->email }}</span>
                </div>
                <div  style="width: 20%">
                    <span>{{ $user->role }}</span>
                </div>
                <div class="d-flex justify-content-end align-items-center" style="width: 5%">
                    @if($user->role === 'admin')
                    <a type="button" class="text-danger" title="Remove admin right" onclick="handleUnmakeClicked({{$user->id}})"><i class="fa fa-lock"></i></a>
                    @else
                    <a type="button" class="text-success" title="Make admin" onclick="handleMakeClicked({{$user->id}})"><i class="fa fa-unlock"></i></a>
                    @endif
                </div>
            </li>
            @endforeach
        </ul>
        @else
        <div>
            <p class="text-center font-weight-bold">No user Available</p>
        </div>
        @endif

    </div>
</div>

<div class="modal fade" id="makeConfirmation" tabindex="-1" role="dialog" aria-labelledby="makeConfirmationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="makeUserForm">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="makeConfirmationLabel">Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center font-weight-bold">Are you sure you want to make this user an admin?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm">Yes Proceed</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="unmakeConfirmation" tabindex="-1" role="dialog" aria-labelledby="unmakeConfirmationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="POST" id="unmakeUserForm">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="unmakeConfirmationLabel">Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center font-weight-bold">Are you sure you want to remove admin right for this user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Yes Remove</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function handleMakeClicked(id) {
        $('#makeConfirmation').modal('show')
        var form = document.getElementById('makeUserForm');
        form.action = '/users/' + id

    }

    function handleUnmakeClicked(id) {
        var form = document.getElementById('unmakeUserForm');
        form.action = '/users/' + id
        $('#unmakeConfirmation').modal('show')
    }
</script>
@endsection
