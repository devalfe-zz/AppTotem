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
            
            <img src="{{ $atractivos->foto_url }}" alt="{{ $atractivos->titulo }}" class="cover mw-100 mh-100b:" />
            <div class="logo_detalle">  
                {{--  <a href=""><img src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover" /></a>   --}}
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/31-z05RpRZg" allowfullscreen></iframe>
               </div>
                {{--  <img class="img-detalle img-fluid w-100 h-100" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover-bar" />   --}}
                <div class="details">
                    <div class="title1">{{ $atractivos->titulo }}
                        <span>{{ $atractivos->ubicacion}}</span>
                    </div>
                    <div class="title2">{{ $atractivos->descripcion }}</div>     
                </div> <!-- end details -->
            </div> <!-- end logo -->
            <div class="row description">
                <div class="col-3">
                    <span class="tag"></span>
                </div> <!-- end column1 -->
                <div class="col-9">
                    <p>{{ $atractivos->detalle }}</p>
                </div> <!-- end column2 -->
            </div> <!-- end description -->
            
        </div> <!-- end container -->
    </div> <!-- end movie-card --> 
@include('pages.partials.map', ['id' => $atractivos->id])
{{--  @include('pages.partials.map', ['some' => 'DRIVING'])  --}}
<section class="auto-lightbox">
@foreach($atractivos->fotos as $foto)
    <img src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
 @endforeach
</section>
@endsection
