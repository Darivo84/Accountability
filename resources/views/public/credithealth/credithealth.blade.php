@extends('layouts.app')

@section('content')
    <section class="credit-health">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header >
                        <img class="credit-img" src="{{ asset('images/purplelogo.png') }}" alt="">
                        <div class="row credit-health-header-content">
                            <div class="col-md-6 clearfix">
                                <img src="{{ asset('images/credit-health.png') }}" alt="" >
                            </div>
                           <div class="col-md-6 clearfix">
                               <a href="{{ asset('images/credit-health-sample-report.pdf') }}" class="btn btn-purple pull-right" target="_blank">DOWNLOAD SAMPLE</a>
                           </div>

                        </div>

                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="your-details">
                        <h2 class="text-left">REGISTRATION</h2>
                        <p>Register to receive your Credit Health Report on all credit information held with three major
                           Credit Bureaus in South Africa, namely: Experian, TransUnion and XDS, gain access to a
                           personalised action plan, and receive helpful tips on how to improve your credit health for a
                           fee of R89.00 per search.</p>

                        <form action="">
                            <div class="form-group">
                                <label for="id_number">ID Number</label>
                                <input type="text" name="id_number" id="id_number" class="full-input" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" name="password" id="password" class="full-input" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirm">Confirm Password</label>
                                <input type="text" name="password_confirm" id="password_confirm" class="full-input"
                                       required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="full-input" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="full-input" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="full-input">
                                    <option value="0">-- Please Select --</option>
                                    <option value="1">-- Male --</option>
                                    <option value="2">-- Female --</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" name="mobile" id="mobile" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="landline">Home Number</label>
                                <input type="text" name="landline" id="landline" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="work_number">Work Number</label>
                                <input type="text" name="work_number" id="work_number" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="fax_number">Fax Number</label>
                                <input type="text" name="fax_number" id="fax_number" class="full-input" required>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" class="full-input" required>
                            </div>
                            <hr>
                            <label for="">Contact Preference</label>
                            <div class="form-group">
                                <input type="radio" name="contact_preference" value="home" required>
                                <label for="contact_preference">Home</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="contact_preference" value="work" required>
                                <label for="contact_preference">Work</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="contact_preference" value="mobile" required>
                                <label for="contact_preference">Mobile</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="contact_preference" value="email" required>
                                <label for="contact_preference">Email</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="contact_preference" value="fax" required>
                                <label for="contact_preference">Fax</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="contact_preference" value="alternative_email" required>
                                <label for="contact_preference">Alternative Email Address</label>
                            </div>
                            <hr>
                            <div class="form-group">

                                <input type="checkbox" name="newsletter_confirm" value="yes" required>
                                <label for="newsletter_confirm">I want to receive the Credit Health newsletter</label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <input type="submit" name="submit" value="SUBMIT" class="btn btn-purple">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-this-form">
                        <h2 class="text-left">LOGIN</h2>
                        <div class="credit-health-login">
                            <p>Log into Credit Health and monitor your credit worthiness.</p>
                            <form action="">
                                <div class="form-group">
                                    <label for="id_number">ID Number</label>
                                    <input type="text" name="id_number" id="id_number" class="full-input">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" id="password" class="full-input">
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-purple">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection