<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicOurCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.our-company.index');
    }


}
