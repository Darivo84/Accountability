@extends('layouts.members')
{{-- LANDING PAGE AFTER LOGIN --}}
@section('content')
    <section class="section-dashboard-top">
        <div class="container">
            <div class="row">
                <header>
                    <div class="col-md-7">
                        <img src="{{ asset('images/logovar.png') }}" alt="Accountability White Logo">
                    </div>

                    <div class="col-md-5 clearfix d-b-login-desktop">
                        <a href="{{ url('/logout') }}" class="btn btn-default pull-right text-black">LOGOUT</a>
                        <p class="white-text pull-right">LOGGED IN AS {{ strtoupper(Auth::user()->first_name) }}</p>
                    </div>
                </header>
            </div>

            <div class="dashboard-welcome">
                <div class="row">
                    <div class="col-md-12">
                        <h1>DASHBOARD</h1>
                    </div>
                </div>

                <div class="row">
                    <article class="clearfix">
                        <div class="col-md-7">
                            <p>
                                Welcome to the Accountability Group This is a web-based service that was created by
                                founder
                                members Howard and Wendy Kemp, birthed by pure frustration, with the aim of "protecting"
                                businesses through reducing the risk caused by outstanding payments.
                            </p>
                        </div>

                        <div class="col-md-5">
                            <img src="{{ asset('images/dashboard.jpg') }}" alt="">
                        </div>
                    </article>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr class="hr-white">
                    </div>
                </div>

                <div class="row quick-links clearfix">
                    <div class="col-md-6 quick-links-single">
                        <div class="q-l-s-container clearfix">
                            <h2>BUSINESS FORMS QUICK LINKS</h2>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">NON PAYMENTS FORM A</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">NON PAYMENTS FORM B</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">NON PAYMENTS FORM C</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">DEBT COLLECTION REGISTRATION</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">FORM HISTORY</button>
                            </div>
                        </div>

                        <div class="q-l-s-container clearfix">
                            <h2>BUSINESS REPORTS QUICK LINKS</h2>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">TRANSITION COMMERCIAL REPORTS</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">STATUTORY COMMERCIAL SEARCH</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">BANK CODE REQUEST</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">TRANSUNION BUSINESS MONITORING</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">DEED SEARCH</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">INTERNATIONAL REPORTS</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">BANK ACCOUNT VERIFICATION</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">REPORT HISTORY</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 quick-links-single">
                        <div class="q-l-s-container clearfix">
                            <h2>CONSUMER FORMS QUICK LINKS</h2>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">NON PAYMENTS FORM A</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">NON PAYMENTS FORM B</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">NON PAYMENTS FORM C</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">DEBT COLLECTION REGISTRATION</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">FORM HISTORY</button>
                            </div>
                        </div>

                        <div class="q-l-s-container clearfix">
                            <h2>CONSUMER REPORTS QUICK LINKS</h2>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">ID VERIFICATION</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">CONSUMER TRACE</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">TRANSUNION CONSUMER REPORT</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">REGISTER CONSUMER ALERT</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">DEED SEARCH</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">PRINCIPAL LINK</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">CRIMINAL CHECK</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">BANK ACCOUNT VERIFICATION</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">CREDIT HEALTH</button>
                            </div>

                            <div class="col-md-4">
                                <button href="" class="btn btn-purple">REPORT HISTORY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dashboard-latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>LATEST NEWS</h1>
                </div>

                <div class="col-md-6 clearfix">
                    <article>
                        <h2>DEFAULT LISTING 17-21 OCTOBER 2016</h2>
                        <p>2016-10-21</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book...</p>
                        <a href="#" class="btn btn-purple pull-right">READ MORE</a>
                    </article>
                </div>

                <div class="col-md-6 clearfix">
                    <article>
                        <h2>DEFAULT LISTING 17-21 OCTOBER 2016</h2>
                        <p>2016-10-21</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book...</p>
                        <a href="#" class="btn btn-purple pull-right">READ MORE</a>
                    </article>
                </div>

                <div class="col-md-6 clearfix">
                    <article>
                        <h2>DEFAULT LISTING 17-21 OCTOBER 2016</h2>
                        <p>2016-10-21</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book...</p>
                        <a href="{{ url('newSingleTest') }}" class="btn btn-purple pull-right">READ MORE</a>
                    </article>
                </div>

                <div class="col-md-6 clearfix">
                    <article>
                        <h2>DEFAULT LISTING 17-21 OCTOBER 2016</h2>
                        <p>2016-10-21</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                           been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                           galley of type and scrambled it to make a type specimen book...</p>
                        <a href="#" class="btn btn-purple pull-right">READ MORE</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
