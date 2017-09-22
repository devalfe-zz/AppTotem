@extends('template')
@section ('title', '¿Dónde ir?')
@section('class','dondeir')
@section('lema')
Atractivos dentro de la ciudad
@endsection
@section ('content')
@if(sizeof($atractivos) > 0)
    @foreach($atractivos as $atractivo)
    <div class="col-md-3 d-flex">
    <div class="item card">
        <img class ="box" src="{{ $atractivo->foto_url }}">
        <p><a href="{{ route ('detalle', $atractivo->id) }}">{{ $atractivo->titulo }}</a></p>
    </div>
    </div>
    @endforeach
@else
    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong>
    </div>
@endif
@endsection