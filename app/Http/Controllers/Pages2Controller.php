<?php

namespace Apptotem\Http\Controllers;

use Apptotem\pages2;
use Illuminate\Http\Request;

class Pages2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.pages2');

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
     * @param  \Apptotem\pages2  $pages2
     * @return \Illuminate\Http\Response
     */
    public function show(pages2 $pages2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Apptotem\pages2  $pages2
     * @return \Illuminate\Http\Response
     */
    public function edit(pages2 $pages2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Apptotem\pages2  $pages2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pages2 $pages2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Apptotem\pages2  $pages2
     * @return \Illuminate\Http\Response
     */
    public function destroy(pages2 $pages2)
    {
        //
    }
}
