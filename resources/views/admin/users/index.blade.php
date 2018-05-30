@extends('layouts.admin')

@section('content')

    @if(Session::has('user_deleted'))
        <p class="alert alert-success">{{ session('user_deleted') }}</p>
    @endif
    <h2>Users</h2>

    <table class="table table-striped">
        <thead class="thead-inverse">
        <tr class="bg-primary">
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
            <td>Status</td>
            <td style="background: rgba(221, 221, 221, 1);color: #838383;">Options</td>
            <td style="background: rgba(221, 221, 221, 1);color: #333;"></td>
        </tr>
        </thead>
        <tbody>
        @if(count($users) > 0)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td style="color: cornflowerblue">{{ ucwords($user->first_name) . ' ' . ucwords($user->last_name)}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td class="toggle-state{{ $user->id }}">{{ $user->status == 'active' ? 'Active' : "Inactive" }}</td>
                    <td style="width: 55px;">
                        <a href="{{ url('admin/users/' . $user->id . '/edit ') }}" class="btn btn-success">Edit</a>
                    </td>
                    <td style="width: 55px;">
                        <a href="{{ url('admin/users/' . $user->id) }}" class="btn btn-primary">View</a>
                    </td>

                </tr>
            @endforeach
        @else
            No users found!
        @endif
        </tbody>
    </table>
    <div class="text-center">
        {{ $users->links() }}
    </div>
@endsection
