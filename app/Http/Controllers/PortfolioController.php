<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreatePortfolioRequest;



class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolio'));
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

        $input= Request::all();
        $input['created_at'] = Carbon::now();

        $file = Input::file('image');
        $imageName = uniqid(5);


        $name = $imageName.'.'. $file->getClientOriginalExtension();

        $input['file_path'] = $name;
        $file->move(public_path().'/img/portfolio/', $name);

        Portfolio::create($input);
        return redirect()->back()->with('message','Portfolio created Sucessfully');

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
