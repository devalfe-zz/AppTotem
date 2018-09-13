<?php

namespace Apptotem\Http\Controllers;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;
use Apptotem\Galeria as Galeria;


class GaleriaApiController extends Controller
{

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
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'atractivo_id' => 'required|integer',
            'titulo' => 'required|string|max:80',
            'foto_url' => 'required|string',
            'activo' => 'required'
        ]);
        return Galeria::create($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int   $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeria::destroy($id);
        //*$galeria = Galeria::find($id);
        //*$galeria->delete();

        //!$galeria->delete();
        // return Response::json([
        //     'success' => true,
        //     'message' => 'Successfully deleted post.'
        // ]);
    }
}
