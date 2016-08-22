<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateHomeRequest;
use App\Home;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        $home = Home::all();
        return view('admin.home.index', compact('home','name'));
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
    public function store(CreateHomeRequest $request)
    {

        $slides = Input::file('slide_path');
        if(isset($slides)){

            foreach ($slides as $slide):
                if($slide !==null):
                    $slideName = uniqid(8);


                    $name = $slideName . '.' . $slide->getClientOriginalExtension();
                $input['file_path'] = $name;
                $slide->move(public_path() . '/assets/img/home_slider/', $name);
                $newSlider = new Home();
                $newSlider->slide_image_path = $name;
                $newSlider->save();
                else:return redirect()->back()->withErrors('Nothing Selected');

                endif;
                    endforeach;

        }
        return redirect()->back()->with('message', 'Slider created Sucessfully');


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

    public function deleteSlide($id){

        Home::findOrFail($id)->delete();
        return redirect()->back()->with('message','Slide image removed successfully');
    }
}
