@extends('layouts.app')

@section('content')
    <section class="terms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="clearfix">
                        <div class="clearfix">
                            <img src="{{ asset('images/purplelogo.png') }}" alt="">
                            <a href="{{ url('login') }}" class="btn btn-purple pull-right" target="_blank">LOGIN</a>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <h1 class="pull-left">SURVEY SUBMITTED SUCCESSFULLY</h1>
                        </div>
                        <hr>

                        <div>
                            <p>We wish to thank you for you valued time to complete out survey. <br>
                            Your input is greatly appreciated in helping Accountability Group to remain industry leaders.</p>
                            <a href="{{ url('/') }}" class="btn btn-purple">BACK TO HOME</a>
                        </div>

                    </header>
                </div>
            </div>

        </div>
    </section>
@endsection
