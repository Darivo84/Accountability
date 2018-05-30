@extends('layouts.app')
{{-- PAGE: OUR COMPANY --}}
@section('content')

    {{-- PAGE HEADER/BANNER --}}
    <section class="section-header header-company">
        <div class="container">
            <header>
                <h1>OUR COMPANY</h1>
            </header>
        </div>
    </section>

    {{-- SECTION OUR COMPANY--}}
    <section class="our-company">
        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <h2>INTRODUCTION TO ACCOUNTABILITY</h2>
                        <p class="text-center">
                            Accountability is a web-based service that was created by founder members Howard and Wendy
                            Kemp. Birthed from their own personal frustration, Accountability was created with the aim
                            of protecting businesses through reducing the risk caused by outstanding payments.
                        </p>
                    </header>
                </div>
            </div>

            <div class="row">
                <article>
                    <div class="col-md-12">
                        <p class="text-center">
                            By partnering with the major credit bureaus, our members have access to an active credit
                            database of 22 million consumers and 3 million businesses. Accountability members are able
                            to access our user-friendly website 24 hours a day, 365 days of the year. A simple login
                            process affords our members the opportunity to vet prospective clients whenever the need
                            strikes, thereby accurately determining their credit worthiness before extending them the
                            required trade credit.
                            Accountability is a TransUnion Credit Bureau Channel Partner. As such, our actions are
                            determined by the provisions of the National Credit Act, No 34 of 2005 and the National
                            Credit Regulations.
                        </p>
                    </div>


                </article>
            </div>
        </div>
    </section>

    {{-- SECTION VALUE PROPOSITION --}}
    <section class="value-proposition">
        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="row">
                <div class="col-md-12">
                    <h2>OUR VALUE PROPOSITION</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <article>
                        <p>
                            We aim to give our members the option to manage their debtors according to the status of
                            their relationship. Listing their customer with the Credit Bureaus is most often the last
                            resort for our members.
                        </p>

                        <p>
                            Our collection facility is not only user friendly, but is also highly effective. Generally,
                            a letter of demand is perceived to be an empty threat as most defaulters know that amounts
                            below R20 000 are unlikely to be pursued via the legal process.
                        </p>

                        <p>
                            Our Letter of Demand differs from the idle threat in as much that there is recourse. We
                            clearly state that should the amount not be paid by the stipulated date (which is 28
                            calendar days from the initial letter of demand as per the National Credit Act), we will
                            list the business, directors or in the case of a consumer, the individual, as a default
                            payer with the major Credit Bureaus, no matter the amount owing.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION MISSION STATEMENT--}}
    <section class="mission-statement">
        <div class="container">

            {{-- SECTION HEADER --}}
            <div class="row">
                <header class="col-md-12">
                    <h2>MISSION STATEMENT</h2>

                    <p class="text-center white-text">
                        We aim to be the dominant web-based partner of South African SME and corporate business clients
                        by assisting them to derive maximum value from business and consumer data that is held by credit
                        bureaus. We strive to attain...
                    </p>
                </header>
            </div>

            {{-- MISSION FEATURES --}}
            <div class="mission-features">
                <div class="row">

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-6">
                        <article>
                            <h3><img src="{{ asset('images/ms-icon1.png') }}" alt="" class="img-pad">FOR OUR CLIENTS
                            </h3>

                            <ul>
                                <li>Fast and effective Letters of Demand</li>
                                <li>Increased cash-flow in 98% of the cases, through swift recovery of collections</li>
                                <li>
                                    Unrivalled, direct access to information through the major national Credit
                                    Bureaus - anytime, anywhere
                                </li>
                            </ul>
                        </article>
                    </div>

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-6">
                        <article>
                            <h3><img src="{{ asset('images/ms-icon-2.png') }}" alt="Person holding a big clock">FOR OUR
                                                                                                                EMPLOYEES
                            </h3>

                            <ul>
                                <li>An opportunity to share in our growth</li>
                                <li>A professional performance driven culture</li>
                                <li>
                                    Job satisfaction based on equitable remuneration, personal development and respect
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>

                {{-- FEATURE SINGLE --}}
                <div class="row">
                    <div class="col-md-6">
                        <article>
                            <h3><img src="{{ asset('images/ms-icon4.png') }}" alt="African Continent">FOR OUR COUNTRY
                            </h3>

                            <ul>
                                <li>Upholding high moral and ethical standards</li>
                                <li>Ensuring better accountability of the nation</li>
                                <li>
                                    Social development programs addressing the plight of the needy
                                </li>
                            </ul>
                        </article>
                    </div>

                    {{-- FEATURE SINGLE --}}
                    <div class="col-md-6">
                        <article>
                            <h3><img src="{{ asset('images/ms-icon3.png') }}"
                                     alt="Three people standing next to each other">FOR OUR CREDIT BUREAU PARTNERS</h3>

                            <ul>
                                <li>Constant updates of business and consumer credit data</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection