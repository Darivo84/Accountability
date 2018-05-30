@extends('layouts.app')
{{-- PAGE: LOGIN --}}
@section('content')

    {{-- SECTION LOGIN --}}
    <section class="section-login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <img src="{{ asset('images/purplelogo.png') }}" alt="Purple Accountability logo">
                    </header>
                </div>
            </div>
        </div>

        {{-- SUCCESS MESSAGE ON COMPANY CREATION COMPLETE--}}
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   @if (session('status'))
                       <div class="text-center alert alert-success">
                           {{ session('status') }}
                       </div>
                   @endif
               </div>
           </div>
       </div>

        {{-- LOGIN FORM CONTAINER --}}
        <div class="login-form-container">
            <div class="container">

                <h1>MEMBER LOGIN</h1>

                <div class="row">
                    <div class="col-md-6">

                        {{-- LOGIN FORM START --}}
                        <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="white-text">E-Mail Address</label>
                                <input id="email" type="email" class="full-input" name="email"
                                       value="{{ old('email') }}"
                                       required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="white-text">Password</label>
                                <input id="password" type="password" class="full-input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label class="white-text">
                                        <input type="checkbox" name="remember"> <span>Remember Me</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default text-black">
                                    LOGIN
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-md-6 ">
                        <div class="figure">
                            <img class="login-add" src="{{ asset('images/voucher.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- DISCLAIMER --}}
        <div class="disclaimer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>DISCLAIMER</h2>

                        <p>
                            Please note that the information that you are about to view is for your information only.
                            Should you be
                            found guilty of distributing this information to non-members, your contract with
                            Accountability will be
                            terminated.
                        </p>

                        <p>Your membership details will be published as a defaulter and you will be prosecuted to the
                            full extent of the law.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{--

<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

--}}