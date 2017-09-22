<?php

namespace Apptotem\Http\Controllers;
use Illuminate\Http\Request;
use Apptotem\Atractivo as Atractivo;
use Apptotem\Galeria as Galeria;

class AtrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        //$categorias = Categoria::find(1)->atractivos;
        //$atractivos = $categorias->atractivos;
        //$atractivos =  Atractivo::where('ubicacion','Mariscal Nieto')->get();
        //return view('pages.pages1')->with('categorias', $categorias);
        //return view('pages.pages1')->with('atractivos', $atractivos);
        $atractivos = Atractivo::all();
        return view('pages.pages1', compact('atractivos'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dentro()
    {
        $atractivos = Atractivo::SearchCategoria(1)->SearchUbicacion('Mariscal Nieto')->get();
        return view('pages.pages1', compact('atractivos'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fuera()
    {
        $atractivos = Atractivo::where([
            ['categoria_id', '=', '1'],
            ['ubicacion', '=', 'Fuera'],
        ])->get();
        //$atractivos = Atractivo::SearchCategoria(1)->SearchUbicacion('Fuera')->get();
        return view('pages.pages2', compact('atractivos'));
    }
    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        $atractivos = Atractivo::find($id);
        $atractivos = $atractivos->load('fotos')->load('categorias');
        return view('pages.detalle', compact('atractivos'));
        //dd($atractivos);
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
