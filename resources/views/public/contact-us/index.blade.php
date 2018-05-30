@extends('layouts.app')
{{-- PAGE: CONTACT US --}}
@section('content')

    {{-- PAGE HEADER --}}
    <section class="section-header header-contact">
        <div class="container">
            <header>
                <h1>CONTACT US</h1>
            </header>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif

                <div class="errors">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION CONTACT --}}
    <section class="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    {{-- HEADING --}}
                    <h2 class="text-left">SEND US A MESSAGE</h2>

                    {{-- CONTACT FORM START--}}
                    <form action="{{ url('sendMail') }}" method="post" class="form">

                        {{ csrf_field() }}

                        {{-- NAME-PHONE-EMAIL-CURRENT --}}
                        <div class="form-group negative-margin">
                            <label for="name"> </label>
                            <input type="text" name="name" id="name" class="full-input"
                                   placeholder="Name and Surname" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_no"></label>
                            <input type="text" name="contact_no" id="contact_no" class="full-input"
                                   placeholder="Contact Number" required>
                        </div>

                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" name="email" id="email" class="full-input"
                                   placeholder="Email Address" required>
                        </div>

                        <div class="form-group home-radio">
                            <label for="member_status">I am currently</label>
                            <select name="member_status" id="member_status" class="full-input" required>
                                <option value="not_member">I Am Not A Member</option>
                                <option value="member">I Am A Member</option>
                            </select>
                        </div>

                        {{-- CHECKBOXES BUTTONS --}}
                        <div class="home-radio">

                            <p>I would like assistance with the following</p>

                            <div id="not-a-member-cats">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Collections">
                                            <span
                                                    class="text-black">Collections</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Credit Checks">
                                            <span
                                                    class="text-black">Credit Checks</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Risk Aversion">
                                            <span
                                                    class="text-black">Risk Mitigation</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="member-cats" class="display-none">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Forms">
                                            <span
                                                    class="text-black">Forms</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Bank Codes">
                                            <span
                                                    class="text-black">Bank Codes</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="MBD">
                                            <span
                                                    class="text-black">MBD</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Searches">
                                            <span
                                                    class="text-black">Searches</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Disputes">
                                            <span
                                                    class="text-black">Disputes</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Web Training">
                                            <span
                                                    class="text-black">Web Training</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- MESSAGE--}}
                        <div class="form-group">
                            <textarea name="message" id=message"" cols="30" rows="5" class="full-input"
                                      placeholder="Message"></textarea>
                        </div>

                        {{-- SUBMIT --}}
                        <div class="form-group clearfix">
                            <input type="submit" value="SUBMIT" class="btn btn-purple text-black pull-right">
                        </div>
                    </form>

                </div>

                {{-- CONTACT DETAILS --}}
                <div class="col-md-5">
                    <article class="contact-details">
                        <h2 class="text-left">OUR DETAILS</h2>

                        <div class="row c-d-single clearfix">
                            <div class="col-md-2 text-center pull-left">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </div>

                            <div class="col-md-10">
                                <p>Head Office</p>
                                <p>Accountability Group (Pty) Ltd</p>
                            </div>
                        </div>

                        <div class="row c-d-single clearfix">
                            <div class="col-md-2 text-center pull-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>

                            <div class="col-md-10">
                                <p>Telephone</p>
                                <p>0861 90 90 90</p>
                            </div>
                        </div>

                        <div class="row c-d-single clearfix">
                            <div class="col-md-2 text-center pull-left">
                                <i class="fa fa-print" aria-hidden="true"></i>
                            </div>

                            <div class="col-md-10">
                                <p>Fax</p>
                                <p>0861 90 90 91</p>
                            </div>
                        </div>

                        <div class="row c-d-single clearfix">
                            <div class="col-md-2 text-center pull-left">
                                <i class="fa fa-mail-forward" aria-hidden="true"></i>
                            </div>

                            <div class="col-md-10">
                                <p>Email</p>
                                <p>sales@accountability.co.za
                                </p>
                            </div>
                        </div>

                        <div class="row c-d-single clearfix">
                            <div class="col-md-2 text-center pull-left">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>

                            <div class="col-md-10">
                                <p>Office Hours</p>
                                <p>Mon-Thurs - 08:0 - 17:00</p>
                                <p>Fri - 08:00 - 15:00</p>
                            </div>
                        </div>

                        <div class="row c-d-single clearfix">
                            <div class="col-md-2 text-center pull-left">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                            </div>

                            <address class="col-md-10">
                                <p>29 Bella Rosa Street, Rosenpark, </p>
                                <p>Bellville, Cape Town, </p>
                                <p>South Africa</p>
                                <p class="grey-underline inline-block "><a
                                            href="https://www.google.com/maps/dir//-33.8641758,18.6414102/@-33.864176,18.64141,16z?hl=en-US"
                                            target="_blank" class="btn btn-purple">GET DIRECTIONS</a>
                                </p>
                            </address>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection