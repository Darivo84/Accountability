@extends('layouts.app')
{{-- PAGE: REGISTER-3 --}}
@section('content')

    <section class="section-register">
        <div class="container">
            <div class="row">

                {{-- PAGE HEADER --}}
                <div class="col-md-12">
                    <header>
                        <h1>REGISTER</h1>
                    </header>
                </div>
            </div>
            @if(Session::has('form-success'))
                <p class="alert alert-success">{{ session('form-success') }}</p>
            @endif
            <div class="errors">
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="register-forms">

                        {{-- FORM SECTION BANKING DETAILS  --}}
                        <h2 class="text-left bg-green">BANKING DETAILS</h2>

                        {{-- REGISTER FORM START--}}
                        <form method="post" action="{{ url('register-bank-and-login-details-store') }}" class="form">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">

                                    {{-- FORM INPUTS --}}
                                    <div class="form-group">
                                        <label for="acc_name">Account Name <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                        <input type="text" name="acc_name" id="acc_name" class="full-input"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <label for="acc_number">Account Number (no spaces) <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                        <input type="text" name="acc_number" id="acc_number" class="full-input"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <label for="institution_id">Institution <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                        <select name="institution_id" id="institution_id" class="full-input">
                                            <option value="0">-- Please Select --</option>
                                            @foreach($institutions as $institution)
                                                <option name="institution_id"
                                                        value="{{ $institution->id }}">{{ $institution->name }}-
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="acc_type_id">Account Type <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                        <select name="acc_type_id" id="acc_type_id" class="full-input">
                                            <option value="0">-- Please Select --</option>
                                            @foreach($account_types as $account_type)
                                                <option name="acc_type_id"
                                                        value="{{ $account_type->id }}">{{ $account_type->name }}-
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch_code">Branch Name <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                        <input type="text" name="branch_code" id="branch_code" class="full-input"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <label for="branch_name">Branch Code <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                        <input type="text" name="branch_name" id="branch_name" class="full-input"
                                               required>
                                    </div>
                                </div>

                                {{-- PLEASE NOTE GREEN - RIGHT COLUMN --}}
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="panel panel-default please-note">
                                        <h3>Please Note:</h3>

                                        <p>
                                            The banking details will be emailed to you once your registration has been
                                            completed.
                                        </p>

                                        <img src="{{ asset('images/purplelogo.png') }}"
                                             alt="Purple Accountability Logo">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            {{-- FORM SECTION LOGIN DETAILS--}}
                            <h2 class="text-left bg-green">LOGIN DETAILS</h2>

                            <div class="form-group">
                                <label for="first_name">Primary User First Name <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="first_name" id="first_name" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="last_name" id="last_name" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="security_question">Security Question <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="security_question" id="security_question" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="security_answer">Security Question Answer <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="security_answer" id="security_answer"
                                       class="full-input"
                                       required>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password<i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="email">Private Email Address:</label>

                                <input type="text" name="email" id="email" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="agent_id">Assign Agent to this Company <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <select name="agent_id" id="agent_id" class="full-input">
                                    <option value="0">-- Please Select --</option>
                                    @foreach($agents as $agent)
                                        <option name="agent_id" value="{{ $agent->id }}">{{ $agent->name }}-</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="profession_id">Profession:</label>

                                <select name="profession_id" id="profession_id" class="full-input">
                                    <option value="0">-- Please Select --</option>
                                    @foreach($professions as $profession)
                                        <option name="profession_id"
                                                value="{{ $profession->id }}">{{ $profession->name }}-
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="newsletter">
                                    Would you like to receive regular product information &
                                    updates from Accountability?:
                                </label>

                                <select name="newsletter" id="newsletter" class="full-input">
                                    <option value="1">Yes</option>
                                    <option value="0">no</option>
                                </select>
                            </div>

                            {{-- PLEASE NOTE --}}
                            <div class="panel panel-default login-please-note">
                                <h3>Please Note:</h3>

                                <ul>
                                    <li>Your account will be activated upon receipt of:</li>

                                    <li>
                                        1. The Activation fee of R255.00
                                        (Incl. VAT)
                                    </li>
                                    <li>2. Verification of your details by Accountability doing either a
                                        Business or Consumer Search on your company*, will be available for you to view
                                        on
                                        Saved Reports. The cost of this report will be charged to your account.
                                    </li>
                                    <li>3.Completion
                                        of the Accountability Signatory and Instructions page.
                                    </li>
                                    <li>4.Upon activation, your User
                                        Name and Password will be sent to your nominated e-mail address
                                    </li>
                                </ul>

                                <p>The Accountability membership contract is for a 12 month period at R255.00 (Incl.
                                   VAT) per month excluding monthly instruction activity on our site. Should you wish
                                   to cancel, you should do so a month prior to your anniversary date. Failure to do so
                                   will result in a renewal of your contract for a further 12 months.</p>

                                <p>
                                    Further invoices for the monthly premium and services rendered will be collected by
                                    debit order, no earlier than the 25th of the month and by no later than the last
                                    working day of that month. This will also apply to collections during December. *
                                    Should you be joining as a sole proprietor, a consumer credit report will be done.
                                </p>

                                <p>
                                    To read our Terms & Conditions <a href="">click here</a><br>
                                    To read our Disclaimer <a href="">click here</a>
                                </p>

                            </div>

                            {{-- SUBMIT --}}
                            <div class="form-group clearfix">
                                <input type="hidden" name="company_detail_id" value="{{ $company_id }}">
                                <input type="submit" value="SUBMIT" class="btn btn-purple text-black pull-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="register-page-no">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li class="active-page">3</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection

