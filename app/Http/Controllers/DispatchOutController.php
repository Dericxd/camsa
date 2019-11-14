<?php

namespace App\Http\Controllers;

use App\DispatchOut;
use App\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DispatchOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $out = DispatchOut::all();
        $product = Product::all();

        return view('DispatchOut.index')
            ->with('outs', $out)
            ->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productN = Product::orderBy('id','DESC')->pluck('name', 'id');
        $productP = Product::orderBy('id','DESC')->pluck('presentation', 'id');
        $date = date('Y/m/d');
//        $date->format('D-M-Y 0');

        return view('DispatchOut.create')
            ->with('day', $date)
            ->with('presentation', $productP)
            ->with('name', $productN);
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
        $douts = DispatchOut::find($id);
//        dd($douts);
        return view('DispatchOut.edit')->with('dout',$douts);
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
