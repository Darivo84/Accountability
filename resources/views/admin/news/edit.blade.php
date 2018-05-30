@extends('layouts.admin')

@section('content')
    <header class="show-header">
        <h2>Edit Post</h2>
    </header>


    <div class="col-md-3 no-padding">
        <img class="img-thumbnail edit-page-img" src="{{ $post->photo->file }}" alt="">
    </div>

    <div class="col-md-8">

        <div class="errors">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
        </div>

        <form action="{{ url('/admin/news/' . $post->id) }}" method="post" enctype="multipart/form-data">

            <input name="_method" type="hidden" value="PUT">

            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control full-input" value="{{ $post->title }}">
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="content">Content</label>
                    <textarea name="content" id="input" cols="10" rows="10">{{ $post->content }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="photo_id">Cover Photo</label>
                <input type="file" name="photo_id" id="photo_id">
            </div>

            <input type="submit" value="Update" class="btn btn-primary pull-right">

        </form>

        <div style="width: 90px;" class="col-md-6 pull-right">

            <form class="deleteGroup" action="{{ url("admin/news/$post->id") }}" method="post">

                {{csrf_field()}}

                <div class="form-group pull-right">
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>

            </form>
        </div>

    </div>

@endsection