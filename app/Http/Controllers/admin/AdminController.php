<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Hash;
use Input;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserRole;

class AdminController extends Controller
{
    protected function loadUserDashboard()
    {
        $user=Auth::user();

        return view('admin.dashboard', ['user' => $user]);

    }

    protected function loadUserProfile()
    {
        $user=Auth::user();

        return view('admin.profile', ['user' => $user]);

    }

    protected function saveUserProfile(Request $request)
    {
        $user=Auth::user();
        // echo $user->first_name;
        $this->validate($request, [
        'first_name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'email' => 'required|max:255',
        'password' => 'min:8'
    	]);

        //First Name
        if(isset($request->first_name))
        	$user->first_name = $request->first_name;
        //Last Name
        if(isset($request->last_name))
        	$user->last_name = $request->last_name;
        //Email
        if(isset($request->email))
        	$user->email = $request->email;
        //Password
        if(isset($request->password) && !empty($request->password))
        	$user->password = hash::make($request->password);

        $user->save();

        return redirect('/dashboard/profile')->with('message', 'Details updated successfully!');
    }

    public function NewGuid() 
	{ 
	    $s = strtolower(md5(uniqid(rand(),true))); 
	    $guidText = 
	    substr($s,0,8) . '-' . 
	    substr($s,8,4) . '-' . 
	    substr($s,12,4). '-' . 
	    substr($s,16,4). '-' . 
	    substr($s,20); 
	    return $guidText;
	}
    
}
