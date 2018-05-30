@extends('layouts.app')

@section('content')
    <section class="judgement-request">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <img src="{{ asset('images/purplelogo.png') }}" alt="">
                        <h1>JUDGEMENT REMOVAL REQUESTS</h1>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="your-details">
                        <h2 class="text-left">YOUR DETAILS</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="full-input" required>
                            </div>
                            <div class="form-group">
                                <label for="trading-as">Trading As</label>
                                <input type="text" name="trading-as" id="trading-as" class="full-input" required>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" name="telephone" id="telephone" class="full-input" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="full-input" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date" class="full-input" required>
                            </div>
                            <h2 class="text-left">JUDGEMENT DETAILS</h2>
                            
                            <div class="form-group">
                                <select name="judgement-against" id="judgement-against" class="full-input">
                                    <option value="">-- Please Select --</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <br>
                                <input type="submit" value="SUBMIT" class="btn btn-purple">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="what-is-this-form">
                        <h2 class="text-left">WHAT IS THIS FORM</h2>
                        <p>The Judgement Removal process allows Accountability members to instruct affiliated Attorneys BLV
                           to start the process of Judgement removals for either Commercial or Consumers. There are 7
                           different ways of approaching the judgement removals process. BLV will evaluate each case to
                           determine which type of process is required, in order to get the judgement properly removed via
                           the Court system. They will then forward a quotation against the exact process to the person via
                           email.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection 