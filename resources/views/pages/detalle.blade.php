@extends('template')
@section ('title', '¿Qué hacer?')
@section('class','quehacer')
@section('lema')

@endsection
@section('content')
    
        <p>{{ $atractivos->titulo }}</p>

    @foreach($atractivos->fotos as $foto)
        <p>{{ $foto->foto_url }}</p>
    @endforeach
@endsection