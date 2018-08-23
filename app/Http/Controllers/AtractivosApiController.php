<?php

namespace Apptotem\Http\Controllers;
use Illuminate\Http\Request;
use Apptotem\Atractivo as Atractivo;
use Apptotem\Categoria as Categoria;
use Apptotem\Galeria as Galeria;
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
        $atractivos = Atractivo::with('fotos')->paginate(12);
        //$atractivos = Atractivo::all();
        $response = Response::json($atractivos,200);
        //return ["results" =>[$response]];
        return $response;
        //return Response::json(['results' => $atractivos],200);
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorias()
    {
        //$categorias = Categoria::get();
        $categorias = Categoria::with(['atractivos','fotos'])->get();
        //$categorias = $categorias->load('cat_atractivos','cat_fotos');
         //$atractivos = Atractivo::all();
        $response = Response::json($categorias,200);
        //return ["results" =>[$response]];
        return $response;
        //return Response::json(['results' => $atractivos],200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoria($id)
    {
        $categoria = Atractivo::with('fotos','categorias')->SearchCategoria($id)->get();
        return Response::json($categoria,200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galerias()
    {
        //$categorias = Categoria::get();
        $galerias = Galeria::with('lugares')->get();
        //$categorias = $categorias->load('cat_atractivos');
         //$atractivos = Atractivo::all();
        //$response = Response::json($galerias,200);
        //return ["results" =>[$response]];
        return Response::json($galerias,200);
        //return Response::json(['results' => $atractivos],200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function galeria($id)
    {
        //$atractivos = Atractivo::with('fotos')->orderBy('id', 'asc')->get();
        $galeria = Galeria::with('lugares')->findOrFail($id);
        // $galeria = $galeria->load('lugares');
       // dd($cat);

        return Response::json($galeria,200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lugares()
    {
        $lugares = Atractivo::with('fotos')->SearchCategoria(1)->get();
        //$lugares = $lugares->load('fotos');
        //$response = Response::json($lugares,200);
        //return ["results" =>[$response]];
        return  Response::json($lugares,200);
        //return Response::json(['results' => $atractivos],200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lugar($id)
    {
        //$atractivos = Atractivo::with('fotos')->orderBy('id', 'asc')->get();
        $lugar = Atractivo::with('fotos')->SearchCategoria(1)->findOrFail($id);
        //$lugar = Atractivo::findOrFail($id);
        //$lugar = $lugar->load('fotos');
       // dd($cat);
        //$response = Response::json($lugar,200);
        return Response::json(['results' => $lugar],200);
        //return $response;
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
        $update = Atractivo::find($request->$id);

        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'detalle' => 'required',
            'direccion' => 'required',
            'ubicacion' => 'required',
            'longitud' => 'required',
            'latitud' => 'required',
            'horarios' => 'required',
        ]);
        return tap($update)->update($request->only('titulo',
         'descripcion','detalle','direccion','ubicacion',
        'longitud','latitud','horarios'));
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
