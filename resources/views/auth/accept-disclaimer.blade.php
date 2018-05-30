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
                            <h1 class="pull-left">DISCLAIMER FOR LIABILITY</h1>
                            <a href="{{ asset('images/disclaimer.pdf') }}" class="btn btn-purple pull-right" target="_blank">DOWNLOAD</a>
                        </div>
                        <hr>
                    </header>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('form-success'))
                        <p class="alert alert-success">{{ session('form-success') }}</p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="terms-list">
                        <li>
                            <span>1</span>
                            <p> The client shall have no claim against Accountability and the client hereby indemnifies
                                and holds Accountability free from liability in respect of any loss, damage or cost
                                caused by or arising from :- or</p>
                        </li>
                        <li>
                            <span>1.1</span>
                            <p> Any fact or circumstance beyond the reasonable control of Accountability; or</p>
                        </li>
                        <li>
                            <span>1.2</span>
                            <p>Any downtime, outage, interruption in or unavailability of any of the services or the
                               Accountability network infrastructure as a result of or attributable to any of the
                               following
                               causes;</p>
                        </li>
                        <li>
                            <span>1.2.1</span>
                            <p>Software or hardware service, repairs, maintenance, upgrades, modification, alterations,
                               replacement or relocation of premises;</p>
                        </li>
                        <li>
                            <span>1.2.2</span>
                            <p> The non-performance or unavailability, of whatever nature and howsoever arising of any
                                of
                                the services provided by Telkom (including, but not limited to, line failure) or in any
                                international services or remote mail servers;</p>
                        </li>
                        <li>
                            <span>1.2.3</span>
                            <p> The non-performance or unavailability, of whatever nature and howsoever arising, of
                                external
                                communications networks to which the client’s server or the Accountability network is
                                connected;</p>
                        </li>
                        <li>
                            <span>1.2.4</span>
                            <p>The service, repairs, maintenance, upgrades, modification, alterations or replacement of
                               any
                               hardware forming part of the client's services or any faults or defects of whatever
                               nature
                               in such hardware;</p>
                        </li>
                        <li>
                            <span>1.3</span>
                            <p>Any infringement of the client's rights of privacy and / or any other like rights
                               (including
                               those of any other person or entity), arising from the services provided in terms of this
                               agreement;</p>
                        </li>
                        <li>
                            <span>1.4</span>
                            <p>Any breach of security by any third party or any breach of confidentiality by a third
                               party
                               or otherwise arising from any access howsoever obtained by a third party to the client's
                               information, data or content</p>
                        </li>
                        <li>
                            <span>1.5</span>
                            <p>The damage, contamination or corruption of any kind of the client's data, material,
                               information and / or content howsoever occasioned;</p>
                        </li>
                        <li>
                            <span>1.6</span>
                            <p> Without limiting the foregoing, any fact, cause or circumstances whatsoever and
                                howsoever
                                arising if Accountability has substantially performed its obligations under this
                                agreement.</p>
                        </li>
                        <li>
                            <span>2.</span>
                            <p>Notwithstanding anything to the contrary contained in this agreement or in any addendum
                               or
                               annexure to this agreement, the client shall have no claim against Accountability and the
                               client hereby indemnifies and holds Accountability free from liability in respect of any
                               loss, damage or cost which is indirect, consequential or incidental in nature.</p>
                        </li>
                        <li>
                            <span>3.</span>
                            <p> Accountability reserves the right to take whatever action it deems necessary at any time
                                to
                                preserve the security and reliable operation of the Accountability network and the
                                client
                                undertakes that it will not do or permit anything to be done which will compromise the
                                security of the Accountability network.</p>
                        </li>
                        <li>
                            <span>4.</span>
                            <p>Although Accountability shall use reasonable endeavours to provide disaster recovery,
                               Accountability does not specify any recovery time, nor shall Accountability be liable for
                               any loss or damage of whatever nature incurred or suffered by the client from any cause
                               whatsoever as a result of Accountability's failure to provide, or delay in providing or
                               providing only partial disaster recovery.</p>
                        </li>

                        <li>
                            <span>5.</span>
                            <p> Whilst attempts to ensure the information made available via the website is accurate and
                                complete, Accountability makes no warranties, representations, statements or guarantees
                                (whether express, implied in law or residual) regarding the website and the service/s
                                and
                                the correctness or the effective delivery of the information contained via the website.
                                The
                                website and service/s and / or information made available via the website are provided
                                "as
                                is" Accountability does not make any warranty or representation that information and
                                service/s advertised on the website are appropriate for use in any jurisdiction.</p>
                        </li>
                    </ul>
                </div>
                <a href="{{ url('register-complete') }}" class="btn btn-purple pull-right">I AGREE/NEXT STEP</a>
            </div>
        </div>
    </section>
@endsection