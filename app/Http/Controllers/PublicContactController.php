<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class PublicContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.contact-us.index');
    }

    public function judgementRemovalShow(){
        return view('public.judgementremoval.judgement-request');
    }

    public function informationRequest(){
        return view('public.informationrequest.information-request');
    }

    protected function contactForm(Request $request) {

        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);

        $contact = (object)array();

        if(isset($request->name) && !empty($request->name))
            $contact->name = $request->name;

        if(isset($request->name) && !empty($request->name))
            $contact->category = $request->category;

        if(isset($request->email) && !empty($request->email))
            $contact->email = $request->email;

        if(isset($request->contact_no) && !empty($request->contact_no))
            $contact->contact_no = $request->contact_no;
        else
            $contact->contact_no = null;

        if(isset($request->member_status) && !empty($request->member_status))
            $contact->member_status = $request->member_status;
        else
            $contact->member_status = null;

        if(isset($request->message) && !empty($request->message))
            $contact->contact_message = $request->message;
        else
            $contact->contact_message = null;

        Mail::send('emails/message', ['contact'=>$contact], function($message){
            $message->from('sales@accountability.co.za','Accountability');
            $message->to('sales@accountability.co.za')
                ->subject('Contact Form Submission');
        });

        return Redirect::to('contact-us')->with('success','Thank you - your message has been sent!');

    }

    protected function infoRequest(Request $request) {

        $this->validate($request, [
            'name'=>'required',
            'company_name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'postal_code'=>'required'
        ]);

        $contact = (object)array();

        if(isset($request->name) && !empty($request->name))
            $contact->name = $request->name;

        if(isset($request->company_name) && !empty($request->company_name))
            $contact->company_name = $request->company_name;

        if(isset($request->email) && !empty($request->email))
            $contact->email = $request->email;

        if(isset($request->telephone) && !empty($request->telephone))
            $contact->telephone = $request->telephone;
        else
            $contact->telephone = null;

        if(isset($request->postal_code) && !empty($request->postal_code))
            $contact->postal_code = $request->postal_code;
        else
            $contact->postal_code = null;

        Mail::send('emails/info-request', ['contact'=>$contact], function($message){
            $message->from('sales@accountability.co.za','Accountability');
            $message->to('sales@accountability.co.za')
                ->subject('Information Request');
        });

        return Redirect::to('information-request')->with('success','Thank you - your message has been sent!');

    }

}
