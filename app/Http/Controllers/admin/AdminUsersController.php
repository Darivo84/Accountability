<?php

namespace App\Http\Controllers\admin;
use App\CompanyDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\User;
use App\UserRole;
use App\Photo;

class AdminUsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);


        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = UserRole::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {

        $user = new User();

        $user->password = bcrypt($request->password);
        $user->first_name = ucwords($request->first_name);
        $user->last_name = ucwords($request->last_name);
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->security_question = 'na';
        $user->security_answer = 'na';
        $user->agent_id = 0;
        $user->profession_id = 0;
        $user->company_detail_id = 0;

        $user->save();

        $users = User::orderBy('created_at', 'asc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = UserRole::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, $id)
    {


        $user = User::findOrFail($id);

        // if pw field is empty, extract all form data except password to $form_data
        if( $request->password == '' ) {

            $input = $request->except([ 'password', 'password_confirmation' ]);

        } else {

            $input = $request->all();
            // encrypt password for db
            $input['password'] = bcrypt($request->password);

        }

        $user->update($input);

        $user->status = $request->status;
        $user->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Session::flash('user_deleted','The user has been deleted');

        return redirect('/admin/users');
    }
}
