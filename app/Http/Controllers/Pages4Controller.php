<?php

namespace Apptotem\Http\Controllers;

use Apptotem\pages4;
use Illuminate\Http\Request;

class Pages4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.pages4');

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
     * @param  \Apptotem\pages4  $pages4
     * @return \Illuminate\Http\Response
     */
    public function show(pages4 $pages4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Apptotem\pages4  $pages4
     * @return \Illuminate\Http\Response
     */
    public function edit(pages4 $pages4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Apptotem\pages4  $pages4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pages4 $pages4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Apptotem\pages4  $pages4
     * @return \Illuminate\Http\Response
     */
    public function destroy(pages4 $pages4)
    {
        //
    }
}
