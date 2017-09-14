@extends('template')
@section ('title', '¿Dónde ir?')
@section('class','dondeir')
@section ('content')
@if(sizeof($atractivos) > 0)
    @foreach($atractivos as $atractivo)
    <div class="item card">
        <img class ="box" src="{{ $atractivo->foto_url }}">
        <p><a href="/detalle?id={{ $atractivo->id }}">{{ $atractivo->titulo }}</a></p>
    </div>
    @endforeach
@else
    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong>
    </div>
@endif


@endsection
