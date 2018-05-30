<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand pull-left" href="{{ url('/') }}"> </a>
            <ul class="login-reg pull-left">
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}">Login</a>
                    </li>
                    <li>
                        <a class="purple" href="{{ url('/register') }}"> | Register</a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}">| Logout</a>
                    </li>

                @endif
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="dropdown">
                    <a href="{{ url('/') }}">HOME</a>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/our-company') }}">OUR COMPANY</a>
                </li>
                <li class="dropdown services-dropdown">
                    <a href="{{ url('/quality-services') }}">QUALITY SERVICES</a>
                    <ul>
                        <li>Test Link</li>
                        <li>Test Link</li>
                        <li>Test Link</li>
                        <li>Test Link</li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/news') }}">NEWS</a>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/contact-us') }}">CONTACT US</a>
                </li>
               {{-- <li>
                    <a href="#" class="search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
                </li>--}}
            </ul>
        </div>
    </div>
</nav>

<div class="search-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12 clearfix">
                <form action="" class="'clearfix">
                    <input class="pull-left" type="text" name="search" placeholder="Search Accountability">
                   <button type="submit" class="pull-right"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>

</div>