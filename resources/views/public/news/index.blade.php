@extends('layouts.app')
{{-- PAGE: NEWS --}}
@section('content')

    {{-- PAGE HEADER/BANNER --}}
    <section class="section-header header-news">
        <div class="container">
            <header>
                <h1>INDUSTRY NEWS</h1>
            </header>
        </div>
    </section>

    {{-- SECTION NEWS --}}
    <section class="section-news">
        <div class="container">
            @foreach(array_chunk($news_posts->all(), 2) as $row)
                <div class="row">
                    {{-- NEWS ARTICLE SINGLE --}}
                    @foreach($row as $post)
                        <div class="col-md-6">
                            <article class="clearfix">
                                <div class="content clearfix">
                                    <figure>
                                        <img src="{{ $post->photo->file }}" alt="">
                                    </figure>
                                    <h3>{{ strtoupper($post->title) }}</h3>
                                    <hr>
                                    {!! str_limit($post->content, 300) !!}
                                </div>
                                <a href=" {{ url('news/' . $post->id) }} " class="btn btn-circle pull-right">READ
                                                                                                             MORE</a>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    <div class="text-center">
        {{ $news_posts->links() }}
    </div>
@endsection