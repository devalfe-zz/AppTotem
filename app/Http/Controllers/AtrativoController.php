<?php

namespace Apptotem\Http\Controllers;
use Illuminate\Http\Request;
use Apptotem\Atractivo as Atractivo;
use Apptotem\Galeria as Galeria;
use Apptotem\Categoria as Categoria;
use Gmaps;

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
        return view('pages.pages1', compact('atractivos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function servicios()
    {
        //$atractivos = Atractivo::with('categorias')->get();
        
        $atractivos = Atractivo::SearchCategoria(3)->SearchCategoria(4)->SearchCategoria(5)->get();
        return view('pages.pages2', compact('atractivos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function multimedia()
    {
        $galerias = Galeria::all();
        //$atractivos = Atractivo::SearchCategoria(1)->SearchUbicacion('Fuera')->get();
        return view('pages.multimedia', compact('galerias'));
    }
    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {
        //$atractivos = Atractivo::with('fotos')->get();
        
        $atractivos = Atractivo::findOrFail($id);
        $atractivos = $atractivos->load('fotos','categorias');
        $lng = $atractivos->longitud;
        $lat = $atractivos->latitud;
        $des = $atractivos->detalle;
        $tit = $atractivos->titulo;
        $config = array();
        $config['center'] = '-17.1937795,-70.933598';
        $config['zoom'] = 'auto';
        $config['directions'] = TRUE;
        $config['directionsStart'] = '-17.1937795,-70.933598';
        $config['directionsEnd'] = $lat.','. $lng;
        $config['directionsDivID'] = 'directionsDiv';
        //$this->googlemaps->initialize($config);
        //$data['map'] = $this->googlemaps->create_map();

        //$config['center'] = -17.1937795, -70.9335977
        $config['clickable'] = true;
        //$config['zoom'] = '15';
        Gmaps::initialize($config);
        // $marker = array();
        // $marker['position'] = $lat.','. $lng;
        // $marker['title'] = $tit;       
        // $marker['infowindow_content'] = $des;
        // Gmaps::add_marker($marker);
        $map = Gmaps::create_map();
        //dd($map);
        return view('pages.detalle', compact('atractivos','map'));
        //dd($atractivos);
    }
     /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function maps()
    {
        $config = array();
        $config['center'] = '37.4419, -122.1419';
        $config['map_width'] = 400;
        $config['map_height'] = 400;
        $config['zoom'] = 'auto';
        \Gmaps::initialize($config);
         // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        $marker['position'] = '37.429, -122.1419';
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();
        return view('pages.partials.map', compact('map'));
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
