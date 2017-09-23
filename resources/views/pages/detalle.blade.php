@extends('template')
@section ('title', '')
@section('class','quehacer')
@section('lema')
{{ $atractivos->titulo }}
@endsection
@section('content')
{{--  {{ $atractivos->fotos as $foto }}  --}}
     @foreach($atractivos->fotos as $foto)
    @endforeach
    <div class="movie-card">
        <div class="container">
            {{--  <a href=""><img src="{{ $atractivos->foto_url }}" alt="{{ $atractivos->titulo }}" 
            class="cover" /></a>  --}}
            <img src="{{ $atractivos->foto_url }}" alt="{{ $atractivos->titulo }}" class="cover" />
            <div class="logo_detalle">  
                {{--  <a href=""><img src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover" /></a>   --}}
                <img class="img-detalle img-fluid w-100 h-100" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover-bar" /> 
                <div class="details">
                    <div class="title1">{{ $atractivos->titulo }}
                        <span>{{ $atractivos->categorias->titulo }}</span>
                    </div>
                    <div class="title2">{{ $atractivos->descripcion }}</div>     
                </div> <!-- end details -->
            </div> <!-- end logo -->
            <div class="description">
                <div class="col-3 column1">
                    <span class="tag"></span>
                </div> <!-- end column1 -->
                <div class="col-9 column2">
                    <p>{{ $atractivos->detalle }}</p>
                </div> <!-- end column2 -->
            </div> <!-- end description -->
            
        </div> <!-- end container -->
    </div> <!-- end movie-card --> 
@include('pages.partials.map')
@endsection
