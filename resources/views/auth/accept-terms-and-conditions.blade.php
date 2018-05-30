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
                            <h1 class="pull-left">TERMS & CONDITIONS</h1>
                            <a href="{{ asset('images/terms-and-conditions-jul2015.pdf') }}" class="btn btn-purple pull-right" target="_blank">DOWNLOAD</a>
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
                    <h2>Accountability Group (Pty)Ltd Subscriber Terms and Conditions of Use</h2>
                    <p>By clicking on the "Submit" option or by using this Web Site, you agree to be bound by these
                       Terms and Conditions of Use, as amended from time to time. If you do not agree, you may not make
                       use of the Accountability Services.</p>

                    <h2>Definitions</h2>

                    <ul class="terms-list">
                        <li>
                            <span>1.1</span>
                            <p>In these Terms and Conditions of Use, the following terms have the meanings assigned to
                               them hereunder, unless the context clearly indicates otherwise:</p>
                        </li>

                        <li>
                            <span>1.1.1</span>
                            <p>"Commencement Date" means the date on which you clicked on Submit on the Registration
                               Page;</p>
                        </li>

                        <li>
                            <span>1.1.2</span>
                            <p>"Confidential Information" means that information belonging to or known by the parties to
                               this Agreement which is not generally in the public domain and which came into being as a
                               result of this Agreement;</p>
                        </li>

                        <li>
                            <span>1.1.3</span>
                            <p>"Consent" means any freely given, specific and informed expression of will whereby
                               natural people agree to the processing of personal information relating to them;</p>
                        </li>

                        <li>
                            <span>1.1.4</span>
                            <p>"Consumer" means a consumer as defined in section 1 of the NCA;</p>
                        </li>

                        <li>
                            <span>1.1.5</span>
                            <p>"Consumer Credit Information" means that information as more fully set out in s70 of the
                               NCA;</p>
                        </li>

                        <li>
                            <span>1.1.6</span>
                            <p>"Credit Bureau" means a credit bureau as defined in s43 of the NCA and registered as such
                               with the National Credit Regulator of South Africa;</p>
                        </li>

                        <li>
                            <span>1.1.7</span>
                            <p>"Accountability" means Accountability Group (Pty) Ltd, a company incorporated in terms of
                               the laws of South Africa, registration number 2008/012163/07, having its main place of
                               business at 29 Bella Rosa Road, Rosen Park, Bellville, 7530 which it hereby elects as its
                               domicilium citandi et executandi in terms of these Terms and Conditions of Use. The
                               directors of Accountability and further information can be found on the contact us
                               page.</p>
                        </li>

                        <li>
                            <span>1.1.8</span>
                            <p>"Accountability Services" are those information-related services as provided to
                               Subscribers by Accountability of the Web Site, as amended from time to time and includes
                               both those services provided for consideration and those services that are free and
                               further includes those information- related services where the source of the information
                               is not a Credit Bureau. Please consult the Web Site for more details;</p>
                        </li>
                        <li>
                            <span>1.1.9</span>
                            <p>"Credit Repair" shall bear the meaning set out in Notice 169 published in terms of the
                               Consumer Affairs Act, 71 of 1988 (published in Government Gazette No. 18646);</p>
                        </li>
                        <li>
                            <span>1.1.10</span>
                            <p>"ECT Act" means the Electronic Communications and Transactions Act no25 of 2002;</p>
                        </li>
                        <li>
                            <span>1.1.11</span>
                            <p>"Force Majeure" means any act of God, strike, riot, war (whether declared or not)
                               embargo, international restriction, shortage of transport facilities, any order of a
                               regulatory authority and the downtime of a communications medium which is not under the
                               control of the party concerned.</p>
                        </li>
                        <li>
                            <span>1.1.12</span>
                            <p>"NCA" means the National Credit Act no.34 of 2005, as amended;</p>
                        </li>
                        <li>
                            <span>1.1.13</span>
                            <p>"Prescribed Purpose" or "Enquiry Reason" shall mean those reasons for which Consumer
                               Credit Information may be obtained as set out in the NCA and Regulations as amended from
                               time to time and as explained in the "help on prescribed purposes" web page at
                                <a href="http://www.creditdata.co.za/CreditData/Public/enquiryreasons.aspx;">http://www.creditdata.co.za/CreditData/Public/enquiryreasons.aspx</a>;
                            </p>
                        </li>

                        <li>
                            <span>1.1.14</span>
                            <p>"Primary Contact" means a single natural person that has been appointed by the Subscriber
                               to represent the Subscriber to Accountability;</p>
                        </li>
                        <li>
                            <span>1.1.15</span>
                            <p>"Regulations" means those regulations promulgated in terms of the National Credit Act no.
                               34 of 2005, as amended;</p>
                        </li>
                        <li>
                            <span>1.1.16</span>
                            <p>"Subscriber" means the legal entity/individual/s that completed the Registration Page and
                               includes its agents, employees and assigns;</p>
                        </li>
                        <li>
                            <span>1.1.17</span>
                            <p>"Terms and Conditions" or "Agreement" means these Subscriber Terms and Conditions of Use
                               as amended from time to time, and includes by reference all other terms and conditions
                               that are contained in other documents or electronic references as mentioned in these
                               Subscriber Terms and Conditions of Use in terms of s11(2) and s11(3) of the ECT Act;</p>
                        </li>
                        <li>
                            <span>1.1.18</span>
                            <p>"Transaction" means each separate time a Subscriber accesses a specific Accountability
                               Service by means of the Web Site. For the sake of clarity it is recorded that repeated
                               access of the same Accountability Service will result in multiple Transactions;</p>
                        </li>
                        <li>
                            <span>1.1.19</span>
                            <p>"User" means each natural person who has access to Accountability's Services as enabled
                               by the Subscriber;</p>
                        </li>
                        <li>
                            <span>1.1.20</span>
                            <p>"Username and Password" means that combination of alphanumeric characters that are unique
                               to each User and are intended to provide a safe and secure way of accessing the
                               Accountability Services in a manner where the use of the Accountability Services can be
                               tracked to each User;</p>
                        </li>
                        <li>
                            <span>1.1.21</span>
                            <p>"Web Site" means http://www.accountability.co.za and includes any derivatives thereof,
                               such as, but not limited to, <a href="http://www.accountability.co.za.">http://www.accountability.co.za.</a>
                            </p>
                        </li>
                    </ul>

                    <h2>Preamble</h2>
                    <ul class="terms-list">
                        <li>
                            <span>2.1</span>
                            <p>Accountability provides the Accountability services to Subscribers for consideration in
                               terms of these Terms and Conditions.</p>
                        </li>
                        <li>
                            <span>2.2</span>
                            <p>The Subscriber wishes to appoint Accountability as its agent in order to obtain the
                               Accountability services and agrees to abide by these Terms and Conditions.</p>
                        </li>
                    </ul>
                    <h2>Appointment</h2>
                    <ul class="terms-list">
                        <li>
                            <span>3.1</span>
                            <p>By completing and clicking on "submit" on the Registration Page - which incorporates
                               these Terms and Conditions - the Subscriber appoints Accountability as its agent to
                               procure the Accountability Services. By providing the Primary Contact with a Username and
                               Password, Accountability accepts this appointment.</p>
                        </li>
                    </ul>
                    <h2>Commencement and Duration</h2>
                    <ul class="terms-list">
                        <li>
                            <span>4.1</span>
                            <p>Membership is subject to vetting and security checks. Upon receipt of an application for
                               membership, a full credit report will be performed on the applicant and/or his company.
                               The cost of the credit report will be for the account of the applicant. Membership will
                               not be activated until such time as all contractual documentation has been received and
                               the payment of the first month's subscription reflects on the Accountability bank
                               statement. In the event that an application for membership is rejected, the amount paid
                               in respect of the first month's subscription is non-refundable.</p>
                        </li>
                        <li>
                            <span>4.2</span>
                            <p>The agreement shall commence on the date that the account is activated upon receipt and
                               verification of the first month's membership fee ("the commencement date") and shall
                               continue thereafter for a period of one year. Thereafter, this agreement shall
                               automatically be renewed on each anniversary of the commencement date for periods of not
                               less than one year each, unless terminated by the applicant by giving Accountability one
                               month's written notice to that effect, provided that such notice is received by
                               Accountability not less than one month prior to the next anniversary of the commencement
                               date. Should membership be terminated prematurely by the member, for whatever reason,
                               Accountability will be entitled to levy on such member a cancellation fee equal to the
                               balance of that particular year's contractual obligations. Annual price increases will be
                               applied every year in November.</p>
                        </li>
                    </ul>
                    <h2> CANCELLATION PROCEDURES DURING COLLECTIONS PROCESS</h2>
                    <ul class="terms-list">
                        <li>

                            <p>Should a member have instructed MBDCS (Messrs Munnik Basson Da Gama Collection Services)
                               and/or Lexmed prior to the submission of a cancellation request, such cancellation
                               request will only become effective once the collections process by MBD has been completed
                               and a further 60 day period has elapsed in order to allow for the finalisation of all
                               invoicing and accounting procedures. Actively paying matters will not be cancelled under
                               any circumstances.</p>
                        </li>
                    </ul>
                    <h2>Fees</h2>
                    <ul class="terms-list">
                        <li>
                            <span>5.1</span>
                            <p>Fees are charged in arrears each month with the exception of the first month's membership
                               fees, which incorporates an activation fee equal to our monthly subscription fee.</p>
                        </li>
                        <li>
                            <span>5.2</span>
                            <p>Each Transaction processed through the Accountability Site is subject to a fee, which is
                               paid on presentation of the month end statement, paid by any means as set out on the
                               Registration Page.</p>
                        </li>
                        <li>
                            <span>5.3</span>
                            <p>All fees that are payable per Transaction for the Accountability services by the
                               Subscriber can be obtained on the Web Site and are incorporated herein by reference.</p>
                        </li>
                        <li>
                            <span>5.4</span>
                            <p>From time to time Accountability may increase the fees payable for the Accountability
                               Services and will provide the Subscriber with 14 (fourteen) calendar days notice of the
                               increase in fees, which notice may be provided electronically.</p>
                        </li>
                        <li>
                            <span>5.5</span>
                            <p>The Subscriber undertakes to pay all amounts due to Accountability, without deduction or
                               set-off, on presentation of the month end statement provided by Accountability to the
                               Subscriber.</p>
                        </li>
                        <li>
                            <span>5.6</span>
                            <p>In the event that the Subscriber is a Juristic Person as defined in s1 of the NCA then
                               the following provisions apply:</p>
                        </li>
                        <li>
                            <span>5.6.1</span>
                            <p>If the payment tendered by the Subscriber is not honoured by the financial institution
                               concerned, the Subscriber shall be liable for an administration fee of R200.00 (two
                               hundred rand) in addition to the fees then due to Accountability; and</p>
                        </li>
                        <li>
                            <span>5.6.2</span>
                            <p>If the Subscriber does not pay the amount due in terms of the invoice mentioned in clause
                               5.5, interest at the rate of 4% (four percent) per month will be levied on overdue
                               amounts and this interest will be calculated daily and compounded monthly.</p>
                        </li>
                        <li>
                            <span>5.7</span>
                            <p>For the sake of clarity if the Subscriber is a natural person then no interest will be
                               levied on overdue amounts, unless legal action has commenced to recover any monies due to
                               Accountability. If legal action has commenced then the prescribed rate of interest in
                               terms of the Prescribed Rate of Interest Act no.55 of 1975 will apply.</p>
                        </li>
                        <li>
                            <span>5.8</span>
                            <p>In the event of a change in the rate of Value Added Tax (VAT) or any other charge that is
                               imposed on the Accountability Services by the South African government or an organ
                               thereof, Accountability will be immediately entitled to increase the fee per Transaction
                               by the amount that the charge was increased.</p>
                        </li>
                        <li>
                            <span>5.9</span>
                            <p>The Subscriber hereby agrees that it wishes to receive invoices electronically.</p>
                        </li>
                        <li>
                            <span>5.10</span>
                            <p>Membership promotions may be run by Accountability from time to time. In the event that
                               promotional memberships are offered, only such members that have signed on during that
                               specific promotional period shall qualify for discounts or relaxations as determined
                               during that particular promotional period. Members that sign on outside of any particular
                               promotional period will not qualify for any discount or relaxation on their monthly
                               subscription.</p>
                        </li>
                    </ul>
                    <h2>Written Authority and Mandate for Debit Payment Instructions</h2>
                    <ul class="terms-list">
                        <li>
                            <span>6.1</span>
                            <p> The signed Authority and Mandate refers to our contract as per the date of our
                                registration and signed registration documents. ("The Agreement").</p>
                        </li>
                        <li>
                            <span>6.1</span>
                            <p>The signed Authority and Mandate refers to our contract as per the date of our
                               registration and signed registration documents. ("The Agreement").<br><br>
                               I/We hereby authorise you to issue and deliver payment instructions to your Banker for
                               collection against my/our account at my/our Bank (or any other bank or branch to which
                               I/we may transfer my/our account) on condition that the sum of such payment instructions
                               will never exceed my/our obligations as agreed to in the Agreement and commencing on
                               registration and continuing until this Authority and Mandate is terminated by me/us by
                               giving you notice in writing of not less than 20 ordinary working days, and sent by
                               prepaid registered post or delivered to your address as indicated above. <br><br>
                               The individual payment instructions so authorised to be issued, must be issued and
                               delivered monthly. <br><br>
                               In the event that the payment day falls on a Sunday, or recognised South African public
                               holiday, the payment day will automatically be the very next ordinary business day.
                               Furthermore, if there are insufficient funds in my account to meet the obligation, you
                               are entitled to track my account and represent the instruction for payment as soon as
                               sufficient funds are available in my account. <br><br>
                               I/We understand that the withdrawals hereby authorised will be processed through a
                               computerised system provided by the South African Banks. I also understand that details
                               of each withdrawal will be printed on my bank statement. Such must contain a number,
                               which must be included in the said payment instruction and if provided to me should
                               enable me to identify the Agreement. In order to further identify the debit collection,
                               the short name "ACCOUNTABI" will be displayed on my bank statement</p>
                        </li>
                        <li>
                            <span>6.2</span>
                            <p>Mandate <br><br>
                               I/We acknowledge that all payment instructions issued by you shall be treated by my/our
                               abovementioned Bank as if the instructions have been issued by me/us personally.</p>
                        </li>
                        <li>
                            <span>6.3</span>
                            <p>Mandate<br><br>
                               I/We acknowledge that all payment instructions issued by you shall be treated by my/our
                               abovementioned Bank as if the instructions have been issued by me/us personally.</p>
                        </li>
                        <li>
                            <span>6.4</span>
                            <p>Assignment<br><br>
                               I/We acknowledge that this Authority may be ceded or assigned to a third party if the
                               Agreement is also ceded or assigned to that third party, but in the absence of such
                               assignment of the Agreement, this Authority and Mandate cannot be assigned to any third
                               party.</p>
                        </li>
                    </ul>
                    <h2>Cooling-Off Period</h2>
                    <ul class="terms-list">
                        <li>
                            <span>7.1</span>
                            <p>A cooling-off period for the cancellation of this contract shall be determined in
                               accordance with the provisions of Section 44 of the ECT and shall be five working days (7
                               calendar days) from the date of conclusion of this contract, with the proviso that any
                               services utilised by the member during the said cooling-off will be immediately due and
                               payable. Any default on the settling of the amount in respect of utilised services may
                               result therein that the default will be reported to credit bureaux in accordance with the
                               provisions of Section 70 of the National Credit Act, No 34 of 2005, as amended.</p>
                        </li>
                    </ul>
                    <h2>Submission and use of Data sent to Accountability</h2>
                    <ul class="terms-list">
                        <li>
                            <span>8.1</span>
                            <p>The Subscriber undertakes to ensure that data that is submitted by it and its Users
                               contains the following information in respect of a Consumer:</p>
                        </li>
                        <li>
                            <span>8.1.1</span>
                            <p>Initials and surname or full names and surname;</p>
                        </li>
                        <li>
                            <span>8.1.2</span>
                            <p>South African identity number or if the Consumer does not have an identity number, the
                               passport number and date of birth;</p>
                        </li>
                        <li>
                            <span>8.1.3</span>
                            <p>The residential address and telephone number of the Consumer (if known); and</p>
                        </li>
                        <li>
                            <span>8.1.4</span>
                            <p>The details of the employer and place of work of the Consumer (if known) and if
                               self-employed or unemployed, a statement to that effect (if known).</p>
                        </li>
                        <li>
                            <span>8.2</span>
                            <p>The Subscriber undertakes that any data submitted to Accountability shall be accurate,
                               up-to-date, relevant, complete and not duplicated.</p>
                        </li>
                        <li>
                            <span>8.3</span>
                            <p>The Subscriber undertakes that any data submitted to Accountability may be utilised by a
                               Credit Bureau as part of its database in the ordinary course of business of a Credit
                               Bureau.</p>
                        </li>
                    </ul>
                    <h2>Use of Subscriber Data sent to Accountability</h2>
                    <ul class="terms-list">
                        <li>
                            <span>9.1</span>
                            <p>he Subscriber acknowledges and agrees that:</p>
                        </li>
                        <li>
                            <span>9.1.1</span>
                            <p>The data contained in the Subscriber Application Form may be checked by Accountability
                               to ensure the accuracy thereof, and that this process will include the obtaining of a
                               credit report the cost of which will be invoiced to the Subscriber itself;</p>
                        </li>
                        <li>
                            <span>9.1.2</span>
                            <p>Accountability may monitor the Subscriber’s payment behaviour by researching its profile
                               at one or more Credit Bureau;</p>
                        </li>
                        <li>
                            <span>9.1.3</span>
                            <p>Accountability may record and transmit the details of how the Subscriber performs in
                               terms of this Agreement to any Credit Bureau; and</p>
                        </li>
                        <li>
                            <span>9.1.4</span>
                            <p> Accountability may disclose information relating to the Subscriber's use of the
                                Accountability services to any Credit Bureau or to satisfy any requirement in law or as
                                directed by the National Credit Regulator.</p>
                        </li>
                    </ul>
                    <h2>Technical Specifications and Security</h2>
                    <ul class="terms-list">
                        <li>
                            <span>11.1</span>
                            <p>While Accountability uses its best efforts to provide the data related to the
                               Accountability services as quickly as possible it cannot guarantee the period within
                               which the data will be provided. Please contact Accountability if the data that you
                               required was not provided to you within 2 (two) working days.</p>
                        </li>
                        <li>
                            <span>11.2</span>
                            <p>Accountability will provide Subscribers with technical specifications from time to time
                               in order to ensure that the security of its system and related systems are not
                               compromised and for operational reasons. The Subscriber undertakes to abide by these
                               technical specifications and to implement them as soon as possible after they have been
                               released by Accountability. Failure to abide by these technical specifications could
                               result in incorrect data being received and/or submitted by the Subscriber and/or damages
                               sustained by third parties for which the Subscriber will be held strictly liable.</p>
                        </li>
                        <li>
                            <span>11.3</span>
                            <p>In addition to the technical specifications as mentioned above the Subscriber undertakes
                               to ensure that:</p>
                        </li>
                        <li>
                            <span>11.3.1</span>
                            <p>The Username and Password of each User is exclusively used by that particular User;</p>
                        </li>
                        <li>
                            <span>11.3.2</span>
                            <p>Not to provide the Username and Password of any User to any person whatsoever aside from
                               the Primary Contact;</p>
                        </li>
                        <li>
                            <span>11.3.3</span>
                            <p>It will notify Accountability as soon as possible after it becomes aware of any security
                               breach;</p>
                        </li>
                        <li>
                            <span>11.3.4</span>
                            <p>It will notify Accountability either before or when the Primary Contact ceases to be
                               entitled to represent the Subscriber;</p>
                        </li>
                        <li>
                            <span>11.3.5</span>
                            <p>It will not tamper with, reverse-engineer or disclose confidential information about the
                               security systems of Accountability and/or any Credit Bureau; and</p>
                        </li>
                        <li>
                            <span>11.3.6</span>
                            <p>It will be responsible for the actions of any of the Users that it allowed to have access
                               to Accountability Services.</p>
                        </li>
                    </ul>
                    <h2>Intellectual Property</h2>
                    <ul class="terms-list">
                        <li>
                            <span>12.1</span>
                            <p>The Subscriber agrees that:.</p>
                        </li>
                        <li>
                            <span>12.1.1</span>
                            <p>no unauthorised use of Accountability and/or the applicable Credit Bureau's intellectual
                               property - which includes its designs, trademarks, copyrighted works or patents - is
                               permitted; and</p>
                        </li>
                        <li>
                            <span>12.1.2</span>
                            <p>All rights, title and interest in and to the Intellectual Property vests in the Credit
                               Bureau and/or Accountability, respectively, as appropriate. Nothing in this Agreement
                               transfers ownership in any of the Intellectual Property to any party.</p>
                        </li>
                    </ul>
                    <h2>Confidentiality and Privacy</h2>
                    <ul class="terms-list">
                        <li>
                            <span>13.1</span>
                            <p>The parties hereby warrant that they will not disclose the Confidential Information to
                               any unauthorized third party and will use their utmost efforts and diligence to guard and
                               protect the Confidential Information.</p>
                        </li>
                        <li>
                            <span>13.2</span>
                            <p>In the event that any Confidential Information is disclosed, whether intentionally,
                               negligently or otherwise, the party who becomes aware of this disclosure will inform the
                               other party in writing as soon as possible.</p>
                        </li>
                        <li>
                            <span>13.3</span>
                            <p>All payment information and personal information provided to Accountability is stored
                               electronically and is only able to be accessed by Accountability's employees. If
                               specifically required Accountability is obliged to provide personal data to a Credit
                               Bureau/Credit Regulator in order for the Credit Bureau/Credit Regulator to fulfill its
                               functions in terms of the NCA. This information is encrypted and protected by
                               authentication mechanisms to ensure that this information is not disclosed to
                               unauthorized persons..</p>
                        </li>
                    </ul>
                    <h2>Warranties</h2>
                    <ul class="terms-list">
                        <li>
                            <span>14.1</span>
                            <p>Save as specifically set out herein, neither Accountability nor any Credit Bureau make
                               any representations and warranties and/or guarantees of whatever nature, whether express,
                               implied in law, or residual, in respect of this Agreement, the Accountability Services
                               and/or the accuracy or correctness of the reports and/or the recommendations.</p>
                        </li>
                        <li>
                            <span>14.2</span>
                            <p>The Subscriber hereby warrants that:</p>
                        </li>
                        <li>
                            <span>14.2.1</span>
                            <p>It will abide by the terms of this Agreement and particular warrants that it will honour
                               the undertakings as set out in this Agreement.</p>
                        </li>
                        <li>
                            <span>14.2.2</span>
                            <p>It does not and will not at any time conduct and/or be directly or indirectly involved in
                               the business of Credit Repair;</p>
                        </li>
                        <li>
                            <span>14.2.3</span>
                            <p>Any data sent to Accountability is not subject to a duty of confidentiality between the
                               Subscriber and the Consumer; and</p>
                        </li>
                        <li>
                            <span>14.2.4</span>
                            <p>It will at all times abide by all the applicable legal and/or regulatory requirements and
                               constraints in regard to its access to and use of the Credit Bureau information and
                               services.</p>
                        </li>
                    </ul>
                    <h2>Indemnity</h2>
                    <ul class="terms-list">
                        <li>
                            <span>15.1</span>
                            <p>The Subscriber hereby indemnifies Accountability and/or the applicable Credit Bureau from
                               any claims of whatever nature arising as a result of any actions taken or reliance made
                               on information provided by Accountability and the Credit Bureau concerned.</p>
                        </li>
                        <li>
                            <span>15.2</span>
                            <p>Accountability and/or the applicable Credit Bureau will not be liable for an actual or
                               contingent loss, liability, expense, costs or damage of whatsoever nature (whether
                               indirect, direct, consequential or otherwise) suffered by the Subscriber as a result
                               of:</p>
                        </li>
                        <li>
                            <span>15.2.1</span>
                            <p>A breach of this Agreement by the Subscriber;</p>
                        </li>
                        <li>
                            <span>15.2.2</span>
                            <p>The use of any data provided by Accountability after the termination of this
                               Agreement;</p>
                        </li>
                        <li>
                            <span>15.2.3</span>
                            <p>Any mistake, error or omission related to data submitted to or received from
                               Accountability;</p>
                        </li>
                        <li>
                            <span>15.2.4</span>
                            <p>Any delay or failure to communicate with Accountability; and</p>
                        </li>
                        <li>
                            <span>15.2.5</span>
                            <p>An event of Force Majeure.</p>
                        </li>
                        <li>
                            <span>15.3</span>
                            <p>Without prejudice to any of the rights of Accountability or the applicable Credit Bureau
                               at law or in terms of this Agreement, the Subscriber indemnifies Accountability and the
                               applicable Credit Bureau against all actual or contingent losses, liabilities, damages,
                               costs (including legal costs on the scale as between attorney and client and any
                               additional legal costs) and expenses of any nature whatsoever which Accountability and/or
                               the applicable Credit Bureau may suffer or incur as a result of or in connection with the
                               negligent acts or omissions of the Subscriber in carrying out its obligations in terms of
                               this Agreement.</p>
                        </li>
                    </ul>
                    <h2>Disclaimer</h2>
                    <ul class="terms-list">
                        <li>
                            <span>16.1</span>
                            <p>All information provided to the Subscriber is provided on an "as is" basis.
                               Accountability does not have control over the data provided to the Subscriber and will
                               not be held responsible for any error or omission related to the data. In addition,
                               Accountability does not warrant that the Accountability Services will be uninterrupted,
                               error-free, free of viruses or destructive code or that defect's will be corrected..</p>
                        </li>

                    </ul>
                    <h2>Audit</h2>
                    <ul class="terms-list">
                        <li>
                            <span>17.1</span>
                            <p>In order to ensure that the Subscriber complies with the terms of this Agreement,
                               Accountability is required to obtain the Subscriber's consent to audit its books records
                               and systems, which consent the Subscriber hereby provides.</p>
                        </li>
                        <li>
                            <span>17.2</span>
                            <p>Any audit of the Subscriber’s systems will be undertaken solely for the purpose of
                               ensuring compliance with the terms and conditions of this Agreement and such information
                               will be held in confidence unless this information is required to be provided to a Credit
                               Bureau, the National Credit Regulator or to a court of law. Any audit of a member's
                               records will be limited to such records' applicability to specific instructions issued to
                               Accountability.</p>
                        </li>
                        <li>
                            <span>17.3</span>
                            <p>Accountability may appoint third parties as its representatives and/or agents to conduct
                               the said audit and the result of the audit will be provided to the Subscriber
                               concerned.</p>
                        </li>
                        <li>
                            <span>17.4</span>
                            <p> Accountability will pay for the costs of the audit unless the audit reveals that the
                                Subscriber is or was in breach of this Agreement. If the Subscriber is breaching this
                                Agreement or has breached this Agreement then the Subscriber will pay for the full costs
                                of the audit.</p>
                        </li>
                    </ul>
                    <h2>Force Majeure</h2>
                    <ul class="terms-list">
                        <li>
                            <span>18.1</span>
                            <p>In the event that Accountability, the Subscriber or the Credit Bureau is prevented from
                               carrying out its obligations in terms of this Agreement as a result of Force Majeure, the
                               party that is so prevented will be released from its obligations to the extent and for
                               the duration that the event of Force Majeure exists.</p>
                        </li>
                        <li>
                            <span>18.2</span>
                            <p>Any party that is so prevented by Force Majeure as described above will endeavour to
                               contact the other parties as soon as it is able and inform them of the event that gave
                               rise to the Force Majeure, the expected duration of the Force Majeure and thereafter
                               indicate when the Force Majeure has ceased to apply.</p>
                        </li>
                    </ul>
                    <h2>Cession</h2>
                    <ul class="terms-list">
                        <li>
                            <span>19.1</span>
                            <p>The Subscriber shall not be entitled to cede or assign any of the rights contained
                               herein without the express written permission of one of the Directors of Accountability.
                               Accountability may cede this agreement by providing written notice to you, which notice
                               may be communicated electronically.</p>
                        </li>
                    </ul>
                    <h2>Legal Costs</h2>
                    <ul class="terms-list">
                        <li>
                            <span>20.1</span>
                            <p>In the event that the Subscriber breaches this agreement, it shall be liable for any
                               legal, professional and/or other costs and/or disbursements (including the costs of any
                               letter of demand, tracing agents fees and collection commissions), that are incurred due
                               to this breach on the scale as between attorney and own client.</p>
                        </li>
                    </ul>
                    <h2>Termination</h2>
                    <ul class="terms-list">
                        <li>
                            <span>21.1</span>
                            <p>This Agreement may be terminated by the Subscriber or Accountability by giving the other
                               party 30 (Thirty) calendar days notice of the intention to terminate this agreement
                               provided that the subscriber has fulfilled his/her obligation as per 4.2 above or as a
                               result of a breach of this Agreement as described hereunder.</p>
                        </li>
                    </ul>
                    <h2>Breach of Agreement</h2>
                    <ul class="terms-list">
                        <li>
                            <span>22.1</span>
                            <p>In the event that the Subscriber breaches any term of this Agreement, Accountability will
                               be entitled to cancel this Agreement immediately by notice in writing, without prejudice
                               to any of its other rights and remedies, which include any right to claim damages and
                               indemnification.</p>
                        </li>
                    </ul>
                    <h2>Entire Agreement and Variation</h2>
                    <ul class="terms-list">
                        <li>
                            <span>23.1</span>
                            <p>This Agreement constitutes the entire Agreement between Accountability and the Subscriber
                               and supersedes any express or implied oral representation or any advertising by a party.
                               No variation of this Agreement is valid unless reduced to writing and agreed to by a
                               Director of Accountability.</p>
                        </li>
                        <li>
                            <span>23.2</span>
                            <p>Any certificate by a Director of Accountability, whose appointment, qualification and
                               authority need not be proved, indicating the various versions of this Agreement, will be
                               prima facie proof of the current and previous versions of this Agreement. All versions of
                               this Agreement will be provided to the Subscriber by means of the Web Site.</p>
                        </li>
                        <li>
                            <span>23.3</span>
                            <p>Notwithstanding clause 22.1 above, this Agreement may be amended by Accountability
                               posting an amended Agreement on the Web Site, which shall be deemed to be effective and
                               binding on the parties on the date as set out therein, provided that the date as set out
                               within the Agreement is no earlier than 5 (five) calendar days after the amended
                               Agreement is posted to the Web Site. In the event of a conflict between the terms of the
                               current version of the Agreement and the previous versions of the Agreement as posted on
                               the Web Site, the terms of the current version posted on the Web Site shall prevail.</p>
                        </li>
                    </ul>
                    <h2>Waiver and Failure to Enforce Rights</h2>
                    <ul class="terms-list">
                        <li>
                            <span>24.1</span>
                            <p>No extension of time or indulgence granted by either party to the other shall be deemed
                               in any way to affect, prejudice or derogate from the rights of such party in any respect
                               under this Agreement, nor shall it in any way be regarded as a waiver of any rights
                               hereunder, or a novation of this Agreement.</p>
                        </li>
                    </ul>
                    <h2>Governing Law</h2>
                    <ul class="terms-list">
                        <li>
                            <span>25.1</span>
                            <p>This Agreement shall be construed and governed in accordance with the laws of the
                               Republic of South Africa and the parties submit to the non-exclusive jurisdiction of the
                               High Court of South Africa, Cape Town Local Division.</p>
                        </li>
                    </ul>
                    <h2>General</h2>
                    <ul class="terms-list">
                        <li>
                            <span>26.1</span>
                            <p>The parties undertake to ensure that all necessary resolutions are passed and all
                               documents are signed as is necessary to give proper and due effect to the terms of this
                               Agreement, or any matter arising as a result, according to its intent and purpose.</p>
                        </li>
                        <li>
                            <span>26.2</span>
                            <p>The expiration or termination of this Agreement shall not affect such of the provision of
                               this Agreement as expressly provide that they will operate after any such expiration or
                               termination or which of necessity must continue to have effect after such expiration or
                               termination, notwithstanding that the clauses themselves do not expressly provide for
                               this.</p>
                        </li>
                        <li>
                            <span>26.3</span>
                            <p> If any provision of this Agreement is unenforceable or invalid under law, the remaining
                                substance of such provision and remaining provisions of this Agreement shall continue to
                                be binding and in full force and effect provided the essential economic benefits of this
                                Agreement are retained.</p>
                        </li>
                        <li>
                            <span>26.4</span>
                            <p>Accountability is a member of the Credit Bureau Association (CBA). The contact details of
                               the Credit Bureau Association can be obtained from its Web Site at
                                <a href="http://www.cba.co.za or from any Credit Bureau.">http://www.cba.co.za or from
                                                                                          any Credit Bureau.</a></p>
                        </li>
                    </ul>
                    <h2>Contact Information</h2>
                    <ul class="terms-list">
                        <li>
                            <span>27.1</span>
                            <p>The parties choose their contact information and domicilium citandi et executandi as
                               follows:</p>
                        </li>
                        <li>
                            <span>27.1.1</span>
                            <p>The Subscriber –As found in the Registration Form;</p>
                        </li>
                        <li>
                            <span>27.1.2</span>
                            <p>Accountability –As set out in clause 1.17 of the Subscriber Application Form and the Web
                               Site. In the event of a discrepancy between these details, the details as found on the
                               Web Site will prevail. Either party may vary its domicilium citandi et executandi by
                               providing written notice to the other, which may be provided electronically.</p>
                        </li>
                        <li>
                            <span>27.2</span>
                            <p>Notwithstanding clause 27.2 Accountability may require that the Subscriber authenticate
                               this change in domicilium citandi et executandi and contact information by providing
                               proof of the new Subscriber address.</p>
                        </li>
                    </ul>
                    <p>Please note by accepting these terms you in term agree to terms and conditions of the various
                       providers specified below.</p>
                    <p><a href="http://www.creditdata.co.za/CreditData/public/TUTERMS.pdf">TransUnion Credit Bureau
                                                                                           Terms & Conditions</a></p>
                    <p>Accountability Subscriber Terms and Conditions Version 1.0 - Effective 13 May 2009</p>

                    <a href="{{ url('register-disclaimer') }}" class="btn btn-purple pull-right">I AGREE/NEXT STEP</a>
                </div>
            </div>
        </div>


    </section>
@endsection