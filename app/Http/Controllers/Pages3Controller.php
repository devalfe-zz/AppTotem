<?php

namespace Apptotem\Http\Controllers;

use Apptotem\pages3;
use Illuminate\Http\Request;

class Pages3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.pages3');

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
     * @param  \Apptotem\pages3  $pages3
     * @return \Illuminate\Http\Response
     */
    public function show(pages3 $pages3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Apptotem\pages3  $pages3
     * @return \Illuminate\Http\Response
     */
    public function edit(pages3 $pages3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Apptotem\pages3  $pages3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pages3 $pages3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Apptotem\pages3  $pages3
     * @return \Illuminate\Http\Response
     */
    public function destroy(pages3 $pages3)
    {
        //
    }
}
