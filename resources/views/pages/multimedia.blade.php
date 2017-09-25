@extends('template')
@section ('title', 'Servicios y ofertas')
@section('class','servicos')
@section ('content')
<section class="auto-lightbox">
	@foreach($galerias as $galeria)
        <img src="{{ $galeria->foto_url }}" alt="{{ $galeria->titulo }}">
    @endforeach
</section>
@endsection