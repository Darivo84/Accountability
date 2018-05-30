@extends('layouts.admin')

@section('content')

    @if(Session::has('post_deleted'))
        <p class="alert alert-success">{{ session('post_deleted') }}</p>
    @endif
    <h2>News Posts</h2>

    <table class="table table-striped">
        <thead class="thead-inverse">
        <tr class="bg-primary">
            <td>ID</td>
            <td>Cover Picture</td>
            <td>title</td>
            <td>Date</td>
            <td>Published By</td>
            <td style="background: rgba(221, 221, 221, 1);color: #838383;">Options</td>
            <td style="background: rgba(221, 221, 221, 1);color: #333;"></td>
        </tr>
        </thead>
        <tbody>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img class="tbl-row-thumb img-thumbnail" src="{{ $post->photo ? $post->photo->file : 'No Photo' }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->date }}</td>
                    <td>{{ $post->user->first_name }}</td>

                    <td style="width: 55px;">
                        <a href="{{ url('admin/news/' . $post->id . '/edit ') }}" class="btn btn-success">Edit</a>
                    </td>
                    <td style="width: 55px;">
                        <a href="{{ url('admin/news/' . $post->id) }}" class="btn btn-primary">View</a>
                    </td>

                </tr>
            @endforeach
        @else
            <tr><td>No posts found!</td></tr>
        @endif
        </tbody>
    </table>

@endsection
