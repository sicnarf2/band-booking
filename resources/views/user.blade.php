@extends('home')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/user/create')}}" class="btn btn-primary me-md-2" type="button">
        Add new user
    </button>
    </a>
  </div>
<table class="table table-bordered table-striped table">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Full Name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->username }}</td>
            <td>{{$user->email }}</td>
            <td>{{$user->full_name }}</td>

            <td>

                <button>edit</button>
                <a href="{{url('/user/delete'. $user->id)}}">
                <button>delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
