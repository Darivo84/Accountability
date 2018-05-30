@extends('layouts.admin')

@section('content')
    <h2>Create Post</h2>
    <br>
    <div class="col-md-8">

        <div class="errors">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
        </div>

        <form action="{{ url('/admin/news') }}" method="post" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="content">Content</label>
                    <textarea name="content" id="input" cols="10" rows="20">{{ old('content') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="photo_id">Cover Photo</label>
                <input type="file" name="photo_id" id="photo_id">
            </div>

            <input type="submit" value="Create" class="btn btn-primary pull-right">

        </form>
    </div>

@endsection