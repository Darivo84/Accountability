{{-- FOOTER START --}}
<footer class="footer1">
    <div class="container">
        <div class="row">

            <div class="footer-left col-lg-9 col-md-9 col-sm-8">
                <ul class="list-unstyled clear-margins">
                    <li class="widget-container widget_recent_news">

                        {{-- LOGO --}}
                        <h1 class="title-widget">
                            <img src="{{ asset('images/logovar.png') }}" alt="White Accountability Logo">
                        </h1>

                        <address class="footerp">
                            <p>29 Bella Rosa Street </p>
                            <p>Rosenpark </p>
                            <P>Bellville</P>
                            <P>7530</P>
                            <p>Cape Town, South Africa</p>
                            <p class="footer-mail">
                                <a href="mailto:sales@accountablity.co.za">sales@accountablity.co.za</a>
                            </p>
                        </address>

                        {{-- SOCIAL MEDIA LINKS --}}
                        <div class="social-icons">
                            <ul class="nomargin footer-social">
                                <a href="https://www.facebook.com/accountabilityGroup" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="https://twitter.com/AccyGroup" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/accountability-group-pty-ltd" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="copyright">
                    <small>
                        Copyrights © 2016 Accountability |
                        Powered by <a href="http://optimalonline.co.za" target="_blank">Optimal Online</a>.
                        All rights reserved. | <a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a> |
                        <a href="{{ url('/disclaimer') }}">Disclaimer</a>
                    </small>
                </div>
            </div>

            {{-- FOOTER RIGHT SIDE NAVIGATION --}}
            <div class="footer-right col-lg-3 col-md-3 col-sm-4">
                <ul class="list-unstyled clear-margins">
                    <li class="widget-container widget_nav_menu">
                        <ul>
                            <li><a href="{{ url('/our-company') }}">Our Company</a></li>
                            <li><a href="{{ url('/quality-services') }}">Quality Services</a></li>
                            <li><a href="{{ url('/news') }}">News</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            <li>Not a member? <a href="{{ url('/register') }}" class="underline">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{-- FOOTER BOTTOM --}}
<div class="footer-bottom">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="copyright-bottom">
                    <small>Copyrights © 2016 Accountability | Powered by
                        <a href="http://optimalonline.co.za" target="_blank">Optimal Online</a>.
                           All rights reserved. | <a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a> |
                        <a href="{{ url('/disclaimer') }}">Disclaimer</a>
                    </small>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-2 col-lg-3">
                <div class="design pull-right">
                    <img src="{{ asset('images/sancert.png') }}" alt="Certified By Cancert Logo">
                    <img src="{{ asset('images/norton.png') }}" alt="Norton Secured, Powered By VeriSign">
                </div>
            </div>
        </div>
    </div>
</div>