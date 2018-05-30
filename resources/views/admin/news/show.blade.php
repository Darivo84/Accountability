@extends('layouts.admin')

@section('content')

    <header class="show-header clearfix">

        <h2 class="pull-left">
            {{ $post->title }}
        </h2>

        <div class="control-options">
            <form class="header-delete-form pull-right deleteGroup" action="{{ url("admin/news/$post->id") }}" method="post">

                {{csrf_field()}}

                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Delete">

            </form>
            <a href="{{ url('admin/news/' . $post->id . '/edit ') }}" class="btn btn-success pull-right">Edit</a>
        </div>


    </header>


    <table class="table">

        <tbody>
        <tr>
            <td>ID</td>
            <td>{{ $post->id }}</td>
        </tr>

        <tr>
            <td>Title</td>
            <td>{{ $post->title }}</td>
        </tr>

        <tr>
            <td>Date</td>
            <td>{{ $post->date }}</td>
        </tr>

        <tr>
            <td>Content</td>
            <td>{!! $post->content !!}</td>
        </tr>

        <tr>
            <td class="td-title">Published by</td>
            <td>{{ $post->user->first_name }}</td>
        </tr>

        </tbody>

    </table>

@endsection
