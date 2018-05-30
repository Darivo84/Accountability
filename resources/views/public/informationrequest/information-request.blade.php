@extends('layouts.app')

@section('content')
    <section class="judgement-request">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header>
                        <img src="{{ asset('images/purplelogo.png') }}" alt="">
                        <h1>INFORMATION REQUESTS</h1>
                    </header>
                </div>
            </div>

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

            <div class="row">
                <div class="col-md-6">
                    <div class="your-details">
                        <p class="text-left">Please complete the form below if you want more information on Accountability's products & services.</p>

                        <form action="{{ url('infoRequest') }}" method="POST">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="company_name" id="company_name" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="telephone">Contact Number</label>
                                <input type="text" name="telephone" id="telephone" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" name="postal_code" id="postal_code" class="full-input" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-purple" value="SUBMIT">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 