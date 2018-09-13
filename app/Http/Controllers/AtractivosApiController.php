<?php

namespace Apptotem\Http\Controllers;
use Illuminate\Http\Request;
use Apptotem\Atractivo as Atractivo;
use Apptotem\Categoria as Categoria;
use Apptotem\Galeria as Galeria;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AtractivosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //?$atractivos = Atractivo::with('fotos')->paginate(12);
        //*$atractivos = Atractivo::all();
        //?$response = Response::json($atractivos,200);
        //*return ["results" =>[$response]];
        return Atractivo::with('fotos')->paginate(12);;
        //*return Response::json(['results' => $atractivos],200);
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
            'categoria_id' => 'required|integer',
            'titulo' => 'required|string|max:80',
            'descripcion' => 'required|string|max:300'
        ]);
        return Atractivo::create($request->all());
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
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function creategalery(Request $request)
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
     *

     */
    public function update(Request $request, Atractivo $hashid)
    {
        // $update = Atractivo::find($request->$id);

        $this->validate($request, [
            'titulo' => 'required|max:80',
            'descripcion' => 'required|max:300'
        ]);

        $hashid->fill($request->all());
        $hashid->save();
        return tap($hashid)->update($request->only('titulo',
        'descripcion','detalle','direccion','ubicacion',
       'longitud','latitud','horarios','foto_url','video_url','activo'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Apptotem\Atractivo  $atractivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atractivo $atractivo)
    {
        $atractivo->delete();
        return Response::json([
            'success' => true,
            'message' => 'Successfully deleted post.'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = $request->file->getClientOriginalName();

        //?$request->file->move(public_path('images'), $imageName);
        //?return respose()->json(['sucess' =>'successfully upload file']);

        //*$path = public_path().'/uploads/';
        //*$files = $request->file('file');
        //*$fileName = $file->getClientOriginalName();
        //*$file->move($path, $fileName);

    	//?$imageName = '.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('images'), $imageName);
    	return response()->json(['success'=>'You have successfully upload file.']);
    }
}
