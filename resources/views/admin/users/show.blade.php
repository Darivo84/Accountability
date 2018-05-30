@extends('layouts.admin')

@section('content')

    <header class="show-header clearfix">
        <h2 class="pull-left">
            {{ $user->first_name }}
        </h2>

        <div class="control-options">
            <form class="header-delete-form pull-right deleteGroup" action="{{ url("admin/users/$user->id") }}"
                  method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
            <a href="{{ url('admin/users/' . $user->id . '/edit ') }}" class="btn btn-success pull-right">Edit</a>
        </div>
    </header>
    <table class="table">
        <tbody>
        <tr>
            <td>First Name</td>
            <td>{{ $user->first_name }}</td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td>{{ $user->last_name }}</td>
        </tr>

        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>

        <tr>
            <td>Role</td>
            <td>{{ $user->role->name }}</td>
        </tr>

        <tr>
            <td>Mobile</td>
            <td>{{ !empty($user->companyDetail->contactDetail->mobile) ? $user->companyDetail->contactDetail->mobile : 'na' }}</td>
        </tr>

        <tr>
            <td>Role</td>
            <td>{{ $user->role->name }}</td>
        </tr>

        <tr>
            <td>Status</td>
            <td class="toggle-state">{{ $user->status == 'active' ? 'Active' : "Inactive" }}</td>
        </tr>

        <tr>
            <td>Created At</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
        </tr>

        <tr>
            <td>Updated At</td>
            <td>{{ $user->updated_at->diffForHumans() }}</td>
        </tr>
        </tbody>
    </table>

@endsection
