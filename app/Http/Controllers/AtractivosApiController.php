<?php

namespace Apptotem\Http\Controllers;

use Illuminate\Http\Request;
use Apptotem\Atractivo as Atractivo;
use Illuminate\Support\Facades\Response;

class AtractivosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atractivos = Atractivo::with('fotos')->orderBy('id', 'asc')->get();
        //$atractivos = Atractivo::all();
        $response = Response::json($atractivos,200);
        //return ["results" =>[$response]];
        return $response; 
        
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
        //$atractivos = Atractivo::with('fotos')->orderBy('id', 'asc')->get();
        $atractivos = Atractivo::findOrFail($id);
        $atractivos = $atractivos->load('fotos','categorias');
        $response = Response::json($atractivos,200);
        return $response; 
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
