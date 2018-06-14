@extends('template') @section ('title', 'multimedia') @section('class','servicos') @section ('content') {{--
<ul class="galeria d-flex flex-wrap mb-2">
	@foreach($galerias as $foto)
	<li class="col-3 mb-2">
		<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">
			<img class="w-100 h-100 img-thumbnail" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
		</a>
	</li>
	@endforeach --}} {{-- @foreach($galerias as $foto)
	<div class="col-lg-3 col-sm-3 col-6">
		<a href="#" class="thumbnail">
			<img class="w-100 h-100 img-thumbnail" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
		</a>
	</div>
	@endforeach --}} @foreach($galerias as $foto)
	<div class="col-lg-3 col-sm-3 col-6 my-2" style="float: left;">
		<a class="link" href="{{ asset($foto->foto_url) }}" data-fancybox="images" data-caption="{{ $foto->titulo }}">
			<img class="foto-g w-100 h-100 img-thumbnail" data-position="{{ $foto->id }}" src="{{ asset($foto->foto_url) }}" alt="{{ $foto->titulo }}">
		</a>
	</div>
	@endforeach @endsection