@extends('layouts.app')

@section('content')
    <section class="terms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="clearfix">
                        <div class="clearfix">
                            <img src="{{ asset('images/purplelogo.png') }}" alt="">
                            <a href="{{ url('login') }}" class="btn btn-purple pull-right" target="_blank">LOGIN</a>
                        </div>
                        <hr>
                        <div class="clearfix">
                            <h1 class="pull-left">SURVEY</h1>
                        </div>
                        <hr>

                        <div class="col-md-6 pull-right">
                            <h3  style="color: #3E3184;" >INSTRUCTIONS FOR THIS SURVEY</h3>
                            <p>Thank you for taking the time to provide your valuable feedback to Accountability.</p>
                            <p>Please be sure to fill out all the forms before submitting the survey</p>
                        </div>
                        <div class="col-md-6">
                            <h2 style="color:#666;" >VIA ONLINE</h2>
                            <form action="">

                                <div class="question_box">
                                    <h3>QUESTION 1</h3>
                                    <p>Could you please take a minute to answer a few questions for us? Click the word
                                       below that best describes your online registration experience.</p>

                                    <input type="radio" name="q1" value="a1"> Excellent <br>
                                    <input type="radio" name="q1" value="a2"> Good <br>
                                    <input type="radio" name="q1" value="a3"> Acceptable <br>
                                    <input type="radio" name="q1" value="a4"> Poor <br>
                                </div>

                                <div class="question_box">
                                    <h3>QUESTION 2</h3>
                                    <p>How wlong did it take you to register online?</p>

                                    <input type="radio" name="q2" value="a1"> 5 Mins <br>
                                    <input type="radio" name="q2" value="a2"> 10 Mins <br>
                                    <input type="radio" name="q2" value="a3"> 20 Mins <br>
                                    <input type="radio" name="q2" value="a4"> 30 Mins <br>
                                    <input type="radio" name="q2" value="a5"> 40 Mins <br>
                                    <input type="radio" name="q2" value="a6"> 40+ mins <br>
                                </div>

                                <div class="question_box">
                                    <h3>QUESTION 3</h3>
                                    <p>Did you understand the terms and conditions at the bottom of the registratin page?</p>

                                    <input type="radio" name="q3" value="a1"> Yes <br>
                                    <input type="radio" name="q3" value="a2"> No <br>
                                </div>

                                <div class="question_box">
                                    <h3>QUESTION 4</h3>
                                    <p>Would you recommend the online registration to a firned or company?</p>

                                    <input type="radio" name="q4" value="a1"> Yes <br>
                                    <input type="radio" name="q4" value="a2"> No <br>
                                </div>

                                <div class="question_box">
                                    <h3>QUESTION 5</h3>
                                    <p>How did you come to hear about us?</p>

                                    <input type="radio" name="q4" value="a1"> News <br>
                                </div>
                                <hr>

                                <div class="question_box clearfix">
                                    <a href="#" class="btn btn-purple pull-right">SUBMIT</a>
                                </div>
                            </form>
                        </div>
                    </header>
                </div>
            </div>

        </div>
    </section>
@endsection
