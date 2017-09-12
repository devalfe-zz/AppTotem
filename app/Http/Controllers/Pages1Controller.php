<?php

namespace Apptotem\Http\Controllers;

use Apptotem\pages1;
use Illuminate\Http\Request;

class Pages1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$lists  = array('Vacation Planning', 'Plaza De Armas', 'Casa Chocano'); 
       
        //return view('pages.pages1')->with('lists', $lists ); 
        return view('pages.pages1', compact('lists'));
        //return view('pages.pages1');

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
     * @param  \Apptotem\pages1  $pages1
     * @return \Illuminate\Http\Response
     */
    public function show(pages1 $pages1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Apptotem\pages1  $pages1
     * @return \Illuminate\Http\Response
     */
    public function edit(pages1 $pages1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Apptotem\pages1  $pages1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pages1 $pages1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Apptotem\pages1  $pages1
     * @return \Illuminate\Http\Response
     */
    public function destroy(pages1 $pages1)
    {
        //
    }
}
