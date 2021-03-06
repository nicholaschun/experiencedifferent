<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use App\Http\Requests\AddUserRequest;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //to protect all routes within this controller

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $name = Auth::user()->name;
        $users = User::all();

        foreach($users as $user):
            $user->status = "Active";

            endforeach;
        return view('admin.users.index', compact('users','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function addUser(AddUserRequest $request)
    {
        $confirmation_code =  str_random(30);
        $input = Input::all();
        $input['password'] = bcrypt($input['password']);
        $input['confirmation_code'] = $confirmation_code;

        $user = new User();
        $user->save();

        return redirect()->back()->with('message','User Created');
    }

    public function deleteUser($id){
        if(!User::findorFail($id)->delete()){
            return redirect('admin.users.index')->with('message','Unable to delete user');
        }
        return redirect()->back()->with('message','User Delete');
    }

}
