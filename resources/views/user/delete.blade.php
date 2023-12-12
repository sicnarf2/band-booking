
@section('content')
<!-- Modal -->
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <!-- Button trigger modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteUserModal">Delete User - {{$user->full_name}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('$user->id')}}" method="POST">
            @csrf
            @method('DELETE')
            <div class='modal-body'>
                Are you sure you want to delete this user?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary">DELETE THIS FUCKING USER</button>
            </div>
        </form>
    </div>
</div>
