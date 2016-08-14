<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use App\Email;
use App\Telephone;
use App\Clients;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUs = AboutUs::all();
        $email = Email::all();
        $telephone = Telephone::all();
        $clients = Clients::all();



        return view ('admin.about.index', compact('aboutUs','email','telephone','clients'));
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
    public function store(Request $request)
    {
        //
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
    public function edit($id=1)
    {
        $aboutUsUpdate = AboutUs::findOrFail($id);
        return view('admin.about.index', compact('aboutUsUpdate'));



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
        $aboutUsUpdate = Request::all();
        $about = AboutUs::findOrFail($id);

        $about->update($aboutUsUpdate);
        return redirect()->back()->with('message','Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteClient($id){
        Clients::findOrFail($id)->delete();
        return redirect()->back()->with('message','Client deleted');
    }

    public function deleteEmail($id){
        Email::findOrFail($id)->delete();
        return redirect()->back()->with('message','Email deleted');
    }

    public function deleteTelephone($id){
        Telephone::findOrFail($id)->delete();
        return redirect()->back()->with('message','Phone number deleted');
    }
}
