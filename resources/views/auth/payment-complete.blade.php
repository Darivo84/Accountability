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
                            <h1 class="pull-left">PAYMENT SUCCESSFUL</h1>

                        </div>
                        <div class="clearfix">
                            <p>We wish to thank you for your payment.</p>
                            <p>Your account will be activated once payment has been confirmed.</p>
                            <a href="{{url('/')}}" class="btn btn-purple">HOME</a>
                        </div>


                    </header>
                </div>
            </div>

        </div>
    </section>
@endsection