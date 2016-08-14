<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use App\Http\Requests\CreateUsersRequest;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        foreach($users as $user):
            if($user->status){
            $user->status = "Active";
            }
            else{
                $user->status = "<span class='disabled'>Inactive</span>";
            }

            endforeach;
        return view('admin.users.index', compact('users'));
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
    public function store(CreateUsersRequest $request)
    {
        $confirmation_code = str_random(30);
        $new_user = Request::all();
        $new_user['created_at'] = Carbon::now();
        $new_user['password'] = bcrypt($new_user['password']);
        $new_user['confirmation_code'] = $confirmation_code;

        User::create($new_user);
        return \Redirect::route('admin.users.index')->with('message','User Created');
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
        User::findOrFail($id)->delete();
        return redirect('admin.users.index')->with('message','User Delete');

    }

    public function addUser(CreateUsersRequest $request)
    {
        $confirmation_code = str_random(30);
        $new_user = Request::all();
        $new_user['created_at'] = Carbon::now();
        $new_user['password'] = bcrypt($new_user['password']);
        $new_user['confirmatin_code'] = $confirmation_code;

        User::create($new_user);
        return \Redirect::route('admin.users.index')->with('message','User Created');
    }
}
