@extends('layouts.admin')

@section('content')
    <h2>Create User</h2>
    <br>
    <div class="col-md-8">

        <div class="errors">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
        </div>

        <form action="{{ url('/admin/users') }}" method="post" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="password">password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="telephone">Land Line</label>
                <input type="text" name="telephone" id="telephone" class="form-control" value="{{ old('telephone') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}">
            </div>


            <div class="col-md-12">
                <hr>
            </div>

            <div class="form-group col-md-6">
                <label for="role_id">Role</label>
                <select name="role_id" id="role_id" class="form-control">

                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="inactive">Inactive</option>
                    <option value="active">Active</option>
                </select>
            </div>

            <div class="form-group col-md-12">
                <input type="submit" value="Create" class="btn btn-primary pull-right">
            </div>

        </form>
    </div>

@endsection