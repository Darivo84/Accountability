<?php

namespace App\Http\Controllers;

use App\IndustryCategory;
use App\Region;
use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.home.index');
    }

}
