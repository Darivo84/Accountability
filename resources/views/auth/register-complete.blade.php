@extends('layouts.app')

@section('content')
    <section class="terms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="clearfix">
                        <img src="{{ asset('images/purplelogo.png') }}" alt="">
                        <hr>
                        <div class="clearfix">
                            <h1 class="pull-left">REGISTRATION COMPLETE</h1>
                            <a href="{{ asset('login') }}" class="btn btn-purple pull-right">LOGIN</a>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <p>We wish to thank you for becoming a valued member of Accountability</p>
                            <p>Your membership application has been forwarded to our offices for processing</p>
                        </div>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2>PAYMENT</h2>
                    <p>Please select a payment method</p>

                    <input type="radio" name="payment-type" class="pm-eft"><span> EFT</span><br>
                    <input type="radio" name="payment-type" class="pm-cd"><span> Credit Card (PayFast)</span><br>
                    <input type="radio" name="payment-type" class="pm-cash"><span> Cash</span>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="eft-area display-none">
                        <h2>EFT PAYMENT</h2>
                        <p>Activation fee: R 255.00 (Incl. VAT)</p>
                        <p> Your account will be activated once proof of payment has been received and the amount of
                            R255.00 (Incl. VAT) reflects on our bank statements.
                        </p>
                        <span><strong>Accountability Banking Details</strong></span><br>
                        <span>Bank : Nedbank</span><br>
                        <span>Account Name : Accountability</span><br>
                        <span>Branch : Tygerberg Winelands</span><br>
                        <span>Branch code : 118-602</span><br>
                        <span>Account no : 1186 084 901</span><br>
                        <br>
                        <span>Please forward proof of payment to:</span><br>
                        <span>Email - admin@accountability.co.za or</span><br>

                    </div>

                    <div class="credit-card-area display-none">
                        <h2>CREDIT CARD PAYMENT</h2>
                        <p>Activation fee: R 255.00 (Incl. VAT)</p>
                        <p> Click on the button below to make you payment via the secure PayFast system
                        </p>
                        <a href="" class="btn btn-purple">MAKE PAYMENT</a>
                    </div>

                    <div class="cash-area display-none">
                        <h2>CASH PAYMENT</h2>
                        <p>Activation fee: R 255.00 (Incl. VAT)</p>
                        <p> Please ensure to have the correct amount of cash available in order for us to finalize the activation process
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <br>
                <br>

                <div class="col-md-12">
                    <a href="{{ url('/') }}" class="btn btn-purple pull-right">HOME PAGE</a>
                </div>
            </div>
        </div>
    </section>
@endsection

