@extends('layouts.admin')

@section('content')

    <h2>Edit User</h2>

    <div class="col-md-8 clearfix">
        <div class="errors">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
        </div>

        <form action="{{ url('/admin/users/'. $user->id) }}" method="post" enctype="multipart/form-data">

            <input name="_method" type="hidden" value="PUT">

            {{csrf_field()}}

            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $user->first_name }}">
            </div>

            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $user->last_name }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
            </div>

            <div class="form-group col-md-6">
                <label for="password">password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="col-md-12">
                <hr>
            </div>

            <div class="form-group col-md-6">

                <label for="role_id">Role</label>

                <select name="role_id" id="role_id" class="form-control">

                    <option selected value="{{$user->role->id}}">{{$user->role->name}}</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach

                </select>

            </div>

            <div class="form-group col-md-6">

                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    @if($user->status === 'inactive' )
                        <option value="inactive" selected="selected">Inactive</option>
                        <option value="active">Active</option>
                    @endif
                    @if($user->status === 'pending' )
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="pending" selected="selected">Pending</option>
                    @endif
                    @if($user->status === 'active' )
                        <option value="inactive">Inactive</option>
                        <option value="active" selected="selected">Active</option>
                    @endif
                </select>
            </div>

                <input type="submit" value="Update" class="btn btn-primary pull-right">

        </form>

        <div style="width: 90px;" class="col-md-2 pull-right">

            <form class="deleteGroup" action="{{ url("admin/users/$user->id") }}" method="post">

                {{csrf_field()}}

                <div class="form-group pull-right">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>

            </form>
        </div>

    </div>

@endsection