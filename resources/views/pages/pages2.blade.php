@extends('template')
@section ('title', '¿Qué hacer?')
@section('class','quehacer')
@section('lema')
Atractivos fuera de la ciudad
@endsection
@section ('content')
@if(sizeof($atractivos) > 0)
    @foreach($atractivos as $atractivo)
        <div class="col-3">      
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><a href=" {{ route('detalle', $atractivo->id) }}">{{ $atractivo->titulo }}</a></p>
                </div>
                <img class="img-card w-100 h-100" src="{{ $atractivo->foto_url }}" alt="{{ $atractivo->titulo }}">
                <div class="card-body">
                    <p class="card-text">{{ $atractivo->descripcion }}</p>
                </div>
            </div>
        </div>
    @endforeach
@else
    
@endif
@endsection