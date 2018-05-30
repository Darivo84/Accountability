@extends('layouts.app')

<!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <br>
            @if (session('status'))
                <div class="p-reset-popup">
                <div class="row">
                    <div class="ex-mark-container col-md-3 col-xs-12 col-sm-12">
                            <i class="ex-mark fa fa-exclamation" aria-hidden="true"></i>
                    </div>
                    <div class="p-popup-msg col-md-9 col-xs-12">THANK YOU. PLEASE CHECK YOUR EMAIL FOR FURTHER INSTRUCTIONS</div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <button class="close-pop-up btn btn-purple pull-right">CLOSE</button>
                    </div>
                </div>

                <script>
                    $('.close-pop-up').click(function(){
                        $('.p-reset-popup').remove();
                    });
                </script>
            </div>
            @endif

            <div class="col-md-98 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>
                    <div class="panel-body">
                        <p style="font-size: 14px;">Please fill in your registered email below (required *) and press
                                                    the 'Submit' button. This will send you an email to the registered
                                                    address with further instructions on resetting your password. Should
                                                    you have any problems, please contact us on 0861 909090.

                                                    If you have your member # or username available, please complete the
                                                    additional fields provided below (optional).</p>
                        <br>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address <i
                                            style="font-size: 12px;" class="fa fa-asterisk"
                                            aria-hidden="true"></i></label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group{{ $errors->has('member_number') ? ' has-error' : '' }}">
                                <label for="member_number" class="col-md-4 control-label">Member Number</label>

                                <div class="col-md-6">
                                    <input id="member_number" type="text" class="form-control" name="member_number"
                                           value="{{ old('member_number') }}" required>

                                    @if ($errors->has('member_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('member_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username"
                                           value="{{ old('username') }}" required>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-purple">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
