@extends('layouts.app')
{{-- PAGE: SERVICES --}}
@section('content')

    {{-- PAGE HEADER/BANNER --}}
    <section class="section-header header-services">
        <div class="container">
            <header>
                <h1>QUALITY SERVICES</h1>
            </header>
        </div>
    </section>

    {{-- SERVICES ACCORDIAN --}}
    <section class="services-accordian">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion">

                        {{-- ACCORDIAN 1 SINGLE TRIGGER --}}
                        <div class="accordion-section">
                            <a class="accordion-section-title 1" href="#accordion-1">
                                <img src="{{ asset('images/icons-01.png') }}" alt="Three Connected Computers">
                                MEMBER BENEFITS
                                <img src="{{ asset('images/dropdown.png') }}" alt="Arrow Pointing Down"
                                     class="pull-right">
                            </a>

                            {{-- DROPDOWN --}}
                            <div id="accordion-1" class="accordion-section-content">
                                <header>
                                    <p class="text-center">We keep our members connected and informed by encouraging
                                                           networking, providing important legal documents and advice,
                                                           equipping them with the tools for recovering aged receivables
                                                           and keeping them posted with the latest scam and defaulter
                                                           alerts. Membership to Accountability comes with unique
                                                           benefits over and above the unique services that we offer to
                                                           our clients.</p>
                                    <hr>
                                </header>

                                <div class="accordian-inner">
                                    <article>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-paperclip acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-paperclip acc-i-desktop" aria-hidden="true"></i>
                                                    INTRA-MEMBER NETWORKING
                                                </h3>

                                                <p>We refer to this service as Accessibility. Our members agree to make
                                                   themselves available to be contacted by other businesses for
                                                   marketing purposes and in return have the opportunity to contact
                                                   other members to promote their own products and services.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-download acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-download acc-i-desktop" aria-hidden="true"></i>
                                                    DOWNLOADS AND ADVICE
                                                </h3>

                                                <p>Our members have access to several downloadable legal documents, such
                                                   as Credit Application Forms, Acknowledgement of Debt and Criminal
                                                   Consent Forms. Where possible, we assist members by providing limited
                                                   advice pertaining to their particular actions or legal standing.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-tasks acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-tasks acc-i-desktop" aria-hidden="true"></i>
                                                    ACCOUNTABILITY STICKERS
                                                </h3>

                                                <p>Members may purchase colour Accountability stickers to attach to
                                                   invoices or statements. Stickers are also available in a digital
                                                   format, enabling them to be added to electronic invoices. Our
                                                   graphics are usually instantly recognizable and they indicate that
                                                   our members are also equipped for recovering aged receivables.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-exclamation-triangle acc-i-mobile"
                                                   aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-exclamation-triangle acc-i-desktop"
                                                       aria-hidden="true"></i>
                                                    ACCOUNTABILITY SECURITY ALERT
                                                </h3>

                                                <p>We inform our membership base of the scams currently circulating in
                                                   addition to highlighting habitual defaulters.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 clearfix">
                                                <a href="{{ url('information-request') }}"
                                                   class="btn btn-purple info-request-btn pull-right">REQUEST MORE
                                                                                                      INFO!</a>
                                            </div>
                                        </div>
                                    </article>

                                    <footer class="row">
                                        <div class="col-md-12 clearfix">
                                            <p class="purple pull-left">YOUR GATEWAY TO SAFER BUSINESS</p>

                                            <a href="{{ url('register') }}" class="btn btn-purple pull-right">REGISTER
                                                                                                              NOW</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>

                        {{-- ACCORDIAN 2 SINGLE TRIGGER --}}
                        <div class="accordion-section">
                            <a class="accordion-section-title 2" href="#accordion-2">
                                <img src="{{ asset('images/icons-02.png') }}" alt="Open Envelope">
                                COLLECTION SERVICES
                                <img src="{{ asset('images/dropdown.png') }}" alt="Arrow Pointing Down"
                                     class="pull-right">
                            </a>

                            {{-- DROPDOWN --}}
                            <div id="accordion-2" class="accordion-section-content">
                                <header>
                                    <p class="text-center">The idea behind the service is that Accountability members
                                                           are able to collect their own debts, but in certain cases
                                                           where they are not successful, members can access the
                                                           services of independently registered debt collectors by using
                                                           the Accountability system. We ensure that our members remain
                                                           in control of this process and assure that collection times
                                                           are generally much shorter than traditional forms of debt
                                                           collection.</p>
                                    <hr>
                                </header>

                                <div class="accordian-inner">
                                    <article>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-envelope acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-envelope acc-i-desktop" aria-hidden="true"></i>
                                                    LETTERS OF DEMAND (FORM-A)
                                                </h3>

                                                <p>Our statistics show a 98% response from debtors to our members'
                                                   initial Letters of Demand. The fundamental reason for the high
                                                   response rate is a result of the letter's warning that our member
                                                   intends to list their debtor on the databases of the largest Credit
                                                   Bureaus as a defaulter. This action will result in the debtor losing
                                                   credit worthiness.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-plus-circle acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-plus-circle acc-i-desktop" aria-hidden="true"></i>
                                                    ADD TO DATABASE FORM (FORM-B)
                                                </h3>

                                                <p>Should the defaulter not have responded or paid according to the
                                                   stipulations of the Letter of Demand, our member completes the "Add
                                                   to Database Form" whereby Accountability is instructed to list the
                                                   member's debtor as a defaulter on the databases of the Credit
                                                   Bureaus. Once listed, a second letter is sent to the debtor
                                                   confirming that they have been listed and in order to rectify the
                                                   situation, they should pay our member in full. Not all credit
                                                   grantors, such as banks, clothing stores, chain stores and any other
                                                   companies that extend credit, may consider an active defaulter.
                                                   Should they provide credit, they open themselves to a case of
                                                   reckless lending and the National Credit Regulator can impose a fine
                                                   of up to 10% of their annual turnover upon them.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-minus-circle acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-minus-circle acc-i-desktop" aria-hidden="true"></i>
                                                    UPDATE DATABASE FORM (FORM-C)
                                                </h3>

                                                <p>If the defaulter pays our member after being listed, our member
                                                   informs Accountability to update the listing in terms of section 71A
                                                   of the NCA no 34 of 2005 as amended.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-check-square-o acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-check-square-o acc-i-desktop"
                                                       aria-hidden="true"></i>
                                                    DEBT COLLECTION FACILITATION
                                                </h3>

                                                <p>Accountability is not a debt-collecting agency. However, in some
                                                   cases, members recognise that either their debtor is unable to pay
                                                   them or the debtor is too valuable to lose in that they make up a
                                                   significant portion of the member's business and loss of that
                                                   customer would be fatal to their business. In order to maintain their
                                                   relationship with their customer, members may be willing to arrange
                                                   favourable payment terms for their debtor instead of listing them
                                                   with the Credit Bureaus. We have entered into strategic partnerships
                                                   with registered debt collectors to act upon our member’s instruction
                                                   to collect as much of the outstanding amount from a debtor as
                                                   possible. No legal action will commence until this service has run
                                                   its course.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-university acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-university acc-i-desktop" aria-hidden="true"></i>
                                                    ENGAGE LEGAL COLLECTIONS
                                                </h3>

                                                <p>Utilising litigation to recover unpaid accounts should be the last
                                                   option for our members, because it entails a high cost and is a long,
                                                   drawn out process. For this reason, we propose that members engage
                                                   attorneys for collections only once they have listed their debtors.
                                                   We have identified a number of independent legal firms throughout
                                                   South Africa who are able to assist our members in the event that
                                                   litigation becomes necessary.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 clearfix">
                                                <a href="{{ url('information-request') }}"
                                                   class="btn btn-purple pull-right info-request-btn">REQUEST MORE
                                                                                                      INFO!</a>
                                            </div>
                                        </div>
                                    </article>

                                    <footer class="row">
                                        <div class="col-md-12 clearfix">
                                            <p class="purple pull-left">YOUR GATEWAY TO SAFER BUSINESS</p>
                                            <a href="{{ url('register') }}" class="btn btn-purple pull-right">REGISTER
                                                                                                              NOW</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>

                        {{-- ACCORDIAN 3 SINGLE TRIGGER --}}
                        <div class="accordion-section">
                            <a class="accordion-section-title 3" href="#accordion-3">
                                <img src="{{ asset('images/icons-03.png') }}" alt="Purple Coins Stacked">
                                CREDIT MANAGEMENT
                                <img src="{{ asset('images/dropdown.png') }}" alt="Arrow Pointing Down"
                                     class="pull-right">
                            </a>

                            {{-- DROPDOWN --}}
                            <div id="accordion-3" class="accordion-section-content">
                                <header>
                                    <p class="text-center">Our members are in a position to make more informed decisions
                                                           due to having access to information they can trust. Through
                                                           our relationships with the major credit bureaus in South
                                                           Africa, members have access to credit-active databases of
                                                           more than 22 million consumers and 3 million businesses.
                                                           Accountability assists members from diverse industries in
                                                           managing their risk and relationships better throughout their
                                                           customers' credit lifecycles.</p>
                                    <hr>
                                </header>

                                <div class="accordian-inner">
                                    <article>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-info-circle acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-info-circle acc-i-desktop" aria-hidden="true"></i>
                                                    BUSINESS INFORMATION REPORTS
                                                </h3>

                                                <p>Reduce the risk of taking on new business clients, partners or
                                                   suppliers by obtaining in-depth information on both businesses and
                                                   their principals from respective Credit Bureaus through the
                                                   Accountability portal. This information regarding current and future
                                                   debtors helps our members to assess the risk associated with trading
                                                   with them.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-info-circle acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-info-circle acc-i-desktop" aria-hidden="true"></i>
                                                    CONSUMER INFORMATION REPORTS
                                                </h3>

                                                <p>Our members have access to current, comprehensive information on
                                                   virtually every credit-active adult in South Africa. Depending on
                                                   your needs, you can supplement these reports with additional consumer
                                                   information.
                                                </p>

                                                <h4>Consumer Trace</h4>

                                                <p>Find missing debtors - even those who have been difficult to reach.
                                                   We can help you take early action by tracing and locating individuals
                                                   quickly with the latest contact information available.</p>

                                                <h4>Identity Verification</h4>

                                                <p>This solution compares the input ID to an ID verification database to
                                                   confirm the validity of the ID number and associated forename and
                                                   surname. The ID verification database confirms

                                                   when it detects information that does not match the ID status
                                                   verified by the Department of Home Affairs.</p>

                                                <h4>Trace Alerts</h4>

                                                <p>If you have not been able to locate an individual, you may place a
                                                   Trace Alert which means you will be notified instantly when new
                                                   contact information is received by the Credit Bureaus. Trace Alerts
                                                   are issued on changes in residential address, postal address,
                                                   telephone numbers (home, work or cellular) and employer.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-flag acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-flag acc-i-desktop" aria-hidden="true"></i>
                                                    INDUSTRY FLAGGING - DEFAULT LISTING
                                                </h3>

                                                <p>This is a pro-active, detailed summary found on the main dashboard,
                                                   reporting the businesses that we have listed and updated on the
                                                   National Database.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-credit-card acc-i-mobile" aria-hidden="true"></i>
                                                <h3>
                                                    <i class="fa fa-credit-card acc-i-desktop" aria-hidden="true"></i>
                                                    BANK CODES
                                                </h3>

                                                <p>A bank code is a report that establishes the financial position of an
                                                   individual or business for a specific amount. Their banks' branch
                                                   manager provides this code, which is valid for a period of 24 hours
                                                   from issue. The BANK CODE 24 takes 24 working hours. The FULL AND
                                                   GENERAL report provides further information on the account, such as
                                                   the date opened and conduct. This can take up to 3 working days.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 clearfix">
                                                <a href="{{ url('information-request') }}"
                                                   class="btn btn-purple pull-right info-request-btn">REQUEST MORE
                                                                                                      INFO!</a>
                                            </div>
                                        </div>
                                    </article>

                                    <footer class="row">
                                        <div class="col-md-12 clearfix">
                                            <p class="purple pull-left">YOUR GATEWAY TO SAFER BUSINESS</p>
                                            <a href="{{ url('register') }}" class="btn btn-purple pull-right">REGISTER
                                                                                                              NOW</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>

                        {{-- ACCORDIAN 4 SINGLE TRIGGER --}}
                        <div class="accordion-section">
                            <a class="accordion-section-title 4" href="#accordion-4">
                                <img src="{{ asset('images/icons-04.png') }}" alt="Magnifying Glass">
                                DEED SEARCHES
                                <img src="{{ asset('images/dropdown.png') }}" alt="Arrow Pointing Down"
                                     class="pull-right">
                            </a>

                            {{-- DROPDOWN --}}
                            <div id="accordion-4" class="accordion-section-content">
                                <div class="accordian-inner">
                                <article>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Our members have access to search for information about properties in South Africa
                                               that belong to a certain person, company or Trust. This includes property
                                               information, owner information, property and municipal valuation, comparative sales,
                                               bond and transfer information, area maps, amenities and suburb trends.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 clearfix">
                                            <a href="{{ url('information-request') }}"
                                               class="btn btn-purple pull-right info-request-btn">REQUEST MORE
                                                                                                  INFO!</a>
                                        </div>
                                    </div>
                                </article>
                                <footer class="row">
                                    <div class="col-md-12 clearfix">
                                        <p class="purple pull-left">YOUR GATEWAY TO SAFER BUSINESS</p>
                                        <a href="{{ url('register') }}" class="btn btn-purple pull-right">REGISTER
                                                                                                          NOW</a>
                                    </div>
                                </footer>
                                </div>
                            </div>
                        </div>

                        {{-- ACCORDIAN 5 SINGLE TRIGGER --}}
                        <div class="accordion-section">
                            <a class="accordion-section-title 5" href="#accordion-5">
                                <img src="{{ asset('images/icons-04.png') }}" alt="">
                                JUDGMENT REMOVAL REQUEST
                                <img src="{{ asset('images/dropdown.png') }}" alt="" class="pull-right">
                            </a>

                            {{-- DROPDOWN --}}
                            <div id="accordion-5" class="accordion-section-content clearfix">
                                <div class="accordian-inner">
                                    <div class="article">
                                        <div class="row">
                                            <p>The Judgement Removal process allows Accountability members to instruct affiliated
                                               attorneys, BLV, to start the process of judgement removals for either commercial or
                                               consumers. There are 7 different ways of approaching the judgement removals process.
                                               BLV will evaluate each case to determine which type of process is required in order
                                               to get the judgement properly removed via the court system. They will then forward a
                                               quotation against the exact process to the person via email.</p>


                                            <div class="accordion-judgement-footer clearfix">
                                                <a href="{{ url('/judgement-removal-request') }}" class="btn btn-purple pull-right">REQUEST
                                                                                                                                    REMOVAL</a>
                                            </div>


                                        </div>
                                        <footer class="row">
                                            <div class="col-md-12 clearfix">
                                                <p class="purple pull-left">YOUR GATEWAY TO SAFER BUSINESS</p>
                                                <a href="{{ url('register') }}" class="btn btn-purple pull-right">REGISTER
                                                                                                                  NOW</a>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection