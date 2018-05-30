@extends('layouts.app')

@section('content')
    <section class="terms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="clearfix">
                        <img src="{{ asset('images/purplelogo.png') }}" alt="">
                        <hr>
                        <div class="clearfix">
                            <h1 class="pull-left">PASSWORD RESET REQUEST</h1>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <h2 class="pull-left">Your password reset request cannot be processed</h2>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <p>Unfortunately your reset token is no longer available. It has either been used or
                               expired. You can restart the password reset process or contact us on 0861 909090 should
                               you need any assistance</p>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <a href="{{url('password/reset')}}" class="btn btn-purple">CANCEL</a>
                        </div>
                        <hr>
                    </header>
                </div>
            </div>

        </div>
    </section>
@endsection