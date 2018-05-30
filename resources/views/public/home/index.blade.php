@extends('layouts.app')
{{-- PAGE: HOME --}}
@section('content')

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

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('images/bluebuilding.jpg') }}">
                <div class="carousel-heading">
                    <img src="{{ asset('images/logoicon.png') }}" alt="Accountablity Logo Icon">
                    <h1>YOUR GATEWAY TO SAFER BUSINESS</h1>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/slider-2.jpg') }}">
                <div class="carousel-heading">
                    <h1 class="text-left">EFFECTIVE LETTERS OF DEMAND</h1>
                    <a href="{{ url('quality-services/2') }}" class="btn btn-green pull-right">FIND OUT MORE</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/slider-6.jpg') }}">
                <div class="carousel-heading">
                    <h1 class="text-left">IN-DEPTH BUSINESS AND CONSUMER REPORTS</h1>
                    <a href="{{ url('quality-services/3') }}" class="btn btn-green pull-left">FIND OUT MORE</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('images/slider-4.jpg') }}">
                <div class="carousel-heading">
                    <h1 class="text-left">BANK CODES AND ID VERIFICATION AT
                                          THE CLICK OF A MOUSE</h1>
                    <a href="{{ url('quality-services/3') }}" class="btn btn-green pull-left">FIND OUT MORE</a>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
    </div>
    {{-- PAGE HEADER/BANNER --}}
    {{--<section class="section-header header-home">
        --}}{{--<div class="container">
            <header>
                <img src="{{ asset('images/logoicon.png') }}" alt="Accountablity Logo Icon">
                <h1>YOUR GATEWAY TO SAFER BUSINESS</h1>
            </header>
        </div>--}}{{--

    </section>--}}

    {{-- SECTION HOW WE GUARD --}}
    <section class="how-we-guard">
        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="row">
                <article>
                    <div class="col-md-12">
                        <h2>HOW WE GUARD YOUR BUSINESS</h2>

                        <p class="medium-copy">
                            Accountability is a web-based service that aims to protect your business by providing
                            you with the tools to reduce credit risk. Whether you are a start-up, SME or a large
                            corporate, by becoming a valued member of Accountability you will have access to a variety
                            of services, as well as the real-life support of our highly-trained team, that will assist
                            you in making credit risk a thing of the past.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- SECTION VALUE ADDED PRODUCTS--}}
    <section class="v-a-p">
        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="row">
                <div class="col-md-12">
                    <h2 class="purple">QUALITY SERVICES</h2>
                </div>
            </div>

            {{-- V.A.P FEATURES --}}

            <div class="text-center v-a-p-features">
                <div class="row">
                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-4 col-sm-6 v-a-p-feature-single clearfix">
                        <article>
                            <span class="fa-stack fa-4x">
                                <img src="{{ asset('images/MB-Icon-01.png') }}" alt="Membership Benefits Icon">
                            </span>

                            <h3 class="service-heading">Membership Benefits</h3>

                            <div class="text-muted">
                                <ul>
                                    <li>Intra-member networking</li>
                                    <li>Downloads and advice</li>
                                    <li>Accountability stickers</li>
                                    <li>Accountability security alerts</li>
                                </ul>
                            </div>

                            <a href="{{ url('quality-services/1' ) }}" class="btn btn-circle">READ MORE</a>
                        </article>
                    </div>

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-4 col-sm-6 v-a-p-feature-single clearfix">
                        <article>
                            <span class="fa-stack fa-4x">
                                <img src="{{ asset('images/Collections-Icon-01.png') }}" alt="Membership Benefits Icon">
                            </span>

                            <h3 class="service-heading">Collection Services</h3>

                            <div class="text-muted">
                                <ul>
                                    <li>Letters of Demand</li>
                                    <li>Add to database form</li>
                                    <li>Update database form</li>
                                    <li>Debt collection facilitation</li>
                                    <li>Engage legal collections</li>
                                </ul>
                            </div>

                            <a href="{{ url('quality-services/2') }}" class="btn btn-circle">READ MORE</a>
                        </article>
                    </div>

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-4 col-sm-6 v-a-p-feature-single clearfix">
                        <article>
                            <span class="fa-stack fa-4x">
                                <img src="{{ asset('images/CM-Icon-01.png') }}" alt="Membership Benefits Icon">
                            </span>

                            <h3 class="service-heading">Credit Management</h3>

                            <div class="text-muted">
                                <ul>
                                    <li>Business information reports</li>
                                    <li>Consumer information reports</li>
                                    <li>Industry flagging – default listing</li>
                                    <li>Bank codes</li>

                                </ul>
                            </div>

                            <a href="{{ url('quality-services/3') }}" class="btn btn-circle">READ MORE</a>
                        </article>
                    </div>
                </div>
                <div class="row">
                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-4 col-sm-6 v-a-p-feature-single clearfix">
                        <article>
                            <span class="fa-stack fa-4x">
                                <img src="{{ asset('images/DS-Icon-01.png') }}" alt="Membership Benefits Icon">
                            </span>

                            <h3 class="service-heading">Deed Searches</h3>

                            <p class="text-muted">Our members have access to search for information about properties in
                                                  South Africa that belong to a certain person...</p>

                            <a href="{{ url('quality-services/4') }}" class="btn btn-circle">READ MORE</a>
                        </article>
                    </div>

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-4 col-sm-6 v-a-p-feature-single clearfix">
                        <article>
                            <span class="fa-stack fa-4x">
                                <img src="{{ asset('images/JR-Icon-01.png') }}" alt="Membership Benefits Icon">
                            </span>

                            <h3 class="service-heading">Judgment Removal Request</h3>

                            <p class="text-muted">The Judgement Removal process allows Accountability members to
                                                  instruct affiliated attorneys, BLV, to start the process of
                                                  judgement…</p>

                            <a href="{{ url('quality-services/5') }}" class="btn btn-circle">READ MORE</a>
                        </article>
                    </div>

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-4 col-sm-6 v-a-p-feature-single clearfix">
                        <article>
                            <span class="fa-stack fa-4x">
                                <img src="{{ asset('images/CH-Icon-01.png') }}" alt="Membership Benefits Icon">
                            </span>

                            <h3 class="service-heading"><img src="{{ asset('images/credit-health.png') }}" alt=""></h3>

                            <p class="text-muted">Register to receive your Credit Health Report on all credit
                                                  information held with three major Credit Bureaus in South Africa and
                                                  gain access to a personalised action plan.</p>

                            <a href="{{ url('credit-health-register') }}" class="btn btn-circle">REGISTER</a>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SECTION PROTECT YOUR FUTURE --}}
    <section class="protect-the-future">
        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="row">
                <div class="col-md-12">
                    <h2>PROTECT THE FUTURE OF YOUR BUSINESS BY REDUCING THE RISK.</h2>
                    <figure>
                        <iframe src="https://www.youtube.com/embed/IAylfu_YGL0" frameborder="0"
                                allowfullscreen></iframe>
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 ">
                    <a href="{{ url('register') }}" class="btn btn-purple">REGISTER NOW</a>

                    <a href="{{ url('our-company') }}#" class="btn btn-green">FIND OUT MORE</a>
                </div>
            </div>
        </div>
    </section>



    {{-- SECTION HOME CONTACT--}}
    <section class="home-contact">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 contact-left"></div>
                <div class="col-md-6 contact-right">

                    {{-- SECTION TITLE --}}
                    <h2>CONTACT US</h2>

                    {{-- HOME CONTACT FORM START--}}
                    <form action="{{ url('sendMail') }}" method="post" class="form">

                        {{ csrf_field() }}

                        {{-- NAME-PHONE-EMAIL-CURRENT --}}
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="full-input" placeholder="Name and Surname"
                                   required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="contact_no" id="contact_no" class="full-input"
                                   placeholder="Contact Number"
                                   required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="full-input" placeholder="Email Address"
                                   required>
                        </div>

                        <div class="form-group">
                            <select name="member_status" id="member_status" class="full-input" required>
                                <option value="not_member">I Am Not A Member</option>
                                <option value="member">I Am A Member</option>
                            </select>
                        </div>

                        {{-- CHECKBOXES BUTTONS --}}
                        <div class="home-radio">

                            <p class="white-text">I would like assistance with the following</p>

                            <div id="not-a-member-cats">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Collections">
                                            <span
                                                    class="white-text">Collections</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Credit Checks">
                                            <span
                                                    class="white-text">Credit Checks</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Risk Aversion">
                                            <span
                                                    class="white-text">Risk Mitigation</span>
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
                                                    class="white-text">Forms</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Bank Codes">
                                            <span
                                                    class="white-text">Bank Codes</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="MBD">
                                            <span
                                                    class="white-text">MBD</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Searches">
                                            <span
                                                    class="white-text">Searches</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Disputes">
                                            <span
                                                    class="white-text">Disputes</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="category" id="category" value="Web Training">
                                            <span
                                                    class="white-text">Web Training</span>
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
            </div>
        </div>
    </section>

    <section class="advisory">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="add-p">ADVISORY: Users are advised that, by clicking on any "submit" button on this site,
                                     the user thereby submits
                                     an electronic signature, as contemplated in Section 11 of the Electronic
                                     Communications and Transactions Act,
                                     No. 25 of 2002. Such signature carries with it all the weight of all contractual
                                     and legal obligations which
                                     may arise from the submission of such signature.</p>
                </div>
            </div>
        </div>

    </section>
@endsection