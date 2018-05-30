@extends('layouts.app')
{{-- PAGE: REGISTER-2 --}}
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

                        {{-- FORM SECITON HEADER --}}
                        <h2 class="text-left bg-green">CONTACT DETAILS</h2>

                        {{-- REGISTER FORM START--}}
                        <form action="{{ url('register-contact-details-store') }}" method="post" class="form">

                            {{ csrf_field() }}

                            {{-- FORM INPUTS --}}
                            <div class="form-group">
                                <label for="telephone">Telephone <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="telephone" id="telephone" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="mobile" id="mobile" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="fax">Fax <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="fax" id="fax" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="group_email">Group Email Address <i class="fa fa-asterisk" aria-hidden="true"></i></label>

                                <input type="text" name="group_email" id="group_email" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="web_address">Web Address/URL:</label>

                                <input type="text" name="web_address" id="web_address" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="products">Products (comma separated):</label>

                                <input type="text" name="products" id="products" class="full-input"
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>

                                <textarea name="description" id="description" rows="6" class="full-input"
                                          required></textarea>
                            </div>

                            <div class="clearfix">
                                {{-- PHYSICAL ADDRESS DETAILS - LEFT COLUMN --}}
                                <div class="col-md-6 no-padding padding-right">
                                    <div class="form-group">
                                        <label for="physical-address">Physical Address:</label>

                                        <input type="text" name="physical_address_1" id="physical_address_1"
                                               class="full-input" placeholder="Address Line 1" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="physical_address_2" id="physical_address_2"
                                               class="full-input" placeholder="Address Line 2" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="physical_address_3" id="physical_address_3"
                                               class="full-input" placeholder="Address Line 3" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="postal_code" id="postal_code" class="full-input"
                                               placeholder="Postal/ZIP Code" required>
                                    </div>
                                </div>

                                {{-- POSTAL ADDRESS DETAILS -RIGHT COLUMN --}}
                                <div class="col-md-6 no-padding clearfix">
                                    <p>Postal Address:</p>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label class="text-black">
                                                <input type="checkbox" name="postal=physical" id="postal=physical"> <span>Same as physical</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="postal_address_1" id="postal_address_1" class="full-input"
                                               placeholder="Address Line 1">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="postal_address_2" id="postal_address_2" class="full-input"
                                               placeholder="Address Line 2">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="postal_address_3" id="postal_address_3" class="full-input"
                                               placeholder="Address Line 3">
                                    </div>
                                </div>
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

                            {{-- NEXT/SUBMIT --}}
                            <div class="form-group clearfix">
                                <input type="hidden" value="{{ $company_id }}" name="company_detail_id">
                                <input type="submit" value="NEXT" class="btn btn-purple text-black pull-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="register-page-no">
                    <ul>
                        <li>1</li>
                        <li class="active-page">2</li>
                        <li>3</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection


{{--

<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


--}}