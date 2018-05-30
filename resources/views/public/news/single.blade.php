@extends('layouts.app')
{{-- PAGE: NEWS --}}
@section('content')

    {{-- PAGE HEADER/BANNER --}}
    <section class="section-header header-news-single">
        <div class="container">
            <header>
                <h1>INDUSTRY NEWS</h1>
            </header>
        </div>
    </section>

    {{-- SECTION NEWS SINGLE --}}
    <section class="section-news-single">
        <div class="container">
            <div class="row">

                {{-- NEWS ARTICLE SINGLE --}}
                <article>

                    {{-- HEADER --}}
                    <header class="clearfix">
                        <div class="col-md-7 n-s-l">
                            <h3>{{ strtoupper($post->title) }}</h3>
                        </div>

                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                        <!-- Your share button code -->
                        <div class="col-md-5 clearfix n-s-r">
                            <ul class="pull-right">

                                <div class="fb-share-button" data-href="{{ Request::url() }}" data-layout="icon"
                                     data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore fa fa-facebook" target="_blank"
                                                                  href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&amp;src=sdkpreparse"></a>
                                </div>

                                <a href="https://twitter.com/home?status={{ $post->title . ' : ' . Request::url() }}"
                                   target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}&title={{ $post->title }}&summary=&source="
                                   target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="mailto:?Subject=Simple Share Buttons&amp;Body={{ Request::url() }} https://simplesharebuttons.com"><i
                                            class="fa fa-envelope" aria-hidden="true"></i></a>

                            </ul>
                            <p class="pull-right">SHARE THIS ARTICLE</p>
                        </div>
                    </header>

                    {{-- CONTENT --}}
                    <div class="n-s-content clearfix">
                        <div class="col-md-6">
                            <img src="{{ $post->photo->file }}" alt="">

                        </div>
                        {!! $post->content !!}
                    </div>

                    {{-- FOOTER --}}
                    <footer class="n-s-r-footer">
                        <a href="{{ URL::to( 'news/' . $next ) }}">Previous</a>
                        <a href="{{ URL::to( 'news/' . $previous ) }}" class="pull-right">Next</a>
                    </footer>
                </article>
            </div>
        </div>
    </section>
@endsection

