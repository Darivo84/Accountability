<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicTermsAndConditionsController extends Controller
{
    public function disclaimer(){
        return view('public.disclaimer.index');
    }

    public function termsAndConditions(){
        return view('public.termsandconditions.index');
    }
}
