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
            <a class="navbar-brand d-b-nav-brand pull-left clearfix" href="{{ url('/') }}"> </a>
            <p class="d-b-user pull-left">{{ strtoupper(Auth::user()->first_name) }}</p>

            {{-- <ul class="login-reg pull-left">
                 @if (Auth::guest())
                     <li><a href="{{ url('/login') }}">Login</a></li>
                     <li><a class="purple" href="{{ url('/register') }}"> | Register</a></li>
                 @else
                     <li><a href="{{ url('/login') }}">Logout</a></li>
                 @endif

             </ul>--}}

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-left">
                <!-- Authentication Links -->
                <li class="dropdown">
                    <a href="{{ url('/home') }}">DASHBOARD</a>
                </li>
                <li class="dropdown">
                    <a href="#">MY ACCOUNT</a>
                </li>
                <li class="dropdown">
                    <a href="#">CONSUMER</a>
                </li>
                <li class="dropdown">
                    <a href="#">BUSINESS</a>
                </li>
                <li class="dropdown">
                    <a href="#">ACCESSIBILITY</a>
                </li>
                <li class="dropdown">
                    <a href="#">QUALITY SERVICES</a>
                </li>
                <li class="dropdown">
                    <a href="#">ARTICLES</a>
                </li>
                <li class="dropdown">
                    <a href="#">DOWNLOAD</a>
                </li>
                <li class="dropdown">
                    <a href="#">CONTACT </a>
                </li>

                <li class="dropdown d-b-logout-mobile">
                    <a href="{{ url('/logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>