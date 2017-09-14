@extends('template')
@section ('title', '¿Dónde ir?')
@section('class','dondeir')
@section ('content')
@foreach($atractivos as $atractivo)
<div class="item card">
<img class ="box" src="{{ $atractivo->foto_url }}">
<p><a href="detalle/{{ $atractivo->titulo }}">{{ $atractivo->titulo }}</a></p>
</div>
@endforeach

@endsection
