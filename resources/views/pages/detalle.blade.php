@extends('template')
@section ('title', '')
@section('class','quehacer')
@section('lema')
{{ $atractivos->titulo }}
@endsection
@section('content')
    @foreach($atractivos->fotos as $foto)
        <p>{{ $foto->foto_url }}</p>
    @endforeach
    <div class="movie-card">
        <div class="container">
            <a href=""><img src="{{ $atractivos->foto_url }}" alt="{{ $atractivos->titulo }}" class="cover" /></a>
            <div class="hero">  
                <a href=""><img src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover" /></a> 
                <div class="details">
                    <div class="title1">{{ $atractivos->titulo }}
                        <span>{{ $atractivos->categorias->titulo }}</span>
                    </div>
                    <div class="title2">{{ $atractivos->descripcion }}</div>     
                </div> <!-- end details -->
            </div> <!-- end hero -->
            <div class="description">
                <div class="column1">
                    <span class="tag"></span>
                    <span class="tag"></span>
                    <span class="tag"></span>
                </div> <!-- end column1 -->
                <div class="column2">
                    <p>{{ $atractivos->detalle }}</p>
                </div> <!-- end column2 -->
            </div> <!-- end description -->
        </div> <!-- end container -->
    </div> <!-- end movie-card -->
@endsection