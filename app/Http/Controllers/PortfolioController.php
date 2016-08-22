<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreatePortfolioRequest;
use Illuminate\Support\Facades\Auth;




class PortfolioController extends Controller
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
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio','name'));
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
    public function store(CreatePortfolioRequest $request)
    {

        //$input= Request::all();
        //$input['created_at'] = Carbon::now();

        $files = Input::file('file_path');

        if (isset($files)) {
            foreach ($files as $file):
                foreach (Input::get('type') as $types):
                    if($file !==null):
                $imageName = uniqid(5);
                $name = $imageName . '.' . $file->getClientOriginalExtension();

                $input['file_path'] = $name;
                $file->move(public_path() . '/assets/img/portfolio/', $name);
                $portfolio = new Portfolio();
                $portfolio->type = $types;
                $portfolio->file_path = $name;
                $portfolio->save();
                        else:return redirect()->back()->withErrors('Nothing Selected');
                            endif;
                endforeach;
                endforeach;
            }
        return redirect()->back()->with('message', 'Portfolio created Sucessfully');

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

    public function deletePortfolio($id){
        Portfolio::findOrFail($id)->delete();
        return redirect()->back()->with('message','Portfolio Deleted');
    }
}
