<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Clients;
use App\Email;
use App\Telephone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Support\Facades\DB;
use App\Home;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
        return view('index', compact('home'));
    }

    public function about()
    {
        $about = AboutUs::all();
        $client = Clients::all();
        $telephone = Telephone::all();
        $email = Email::all();
        return view('about', compact('about','client','telephone','email'));
    }

    public function portfolio()
    {
        $visual = DB::table('portfolio')->where('type','=','3D visualization')->get();
        return view ('portfolio',compact('visual'));
    }

    public function graphic()
    {
        $graphic = DB::table('portfolio')->where('type','=','Graphic Design')->get();
        return view ('graphic',compact('graphic'));
    }

    public function animation()
    {
        $animation = DB::table('portfolio')->where('type','=','animation')->get();
        return view ('animation',compact('animation'));
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
        //
    }

}
