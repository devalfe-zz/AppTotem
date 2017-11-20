@extends('template') @section ('title', '') @section('class','quehacer') @section('lema') {{ $atractivos->titulo }} @endsection
@section('content') {{-- {{ $atractivos->fotos as $foto }} --}} @foreach($atractivos->fotos as $foto) @endforeach
<div class="row movie-card">

	{{--
	<a href="">
		<img src="{{ $atractivos->foto_url }}" alt="{{ $atractivos->titulo }}" class="cover" />
	</a> --}}
	<img src="{{ asset($atractivos->foto_url) }}" alt="{{ $atractivos->titulo }}" class="cover mw-100 mh-100" />
	<div class="col-xl-8 logo_detalle">
		{{--
		<a href="">
			<img src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover" />
		</a> --}} @if($atractivos->video_url !== "")
		<div class="embed-responsive embed-responsive-16by9">
			<video autoplay loop class="embed-responsive-item" controls="false">
				<source src="{{ asset($atractivos->video_url) }}" allowfullscreen></source>
			</video>
			{{--
			<iframe class="auto play embed-responsive-item" src="{{ $atractivos->video_url }}" allowfullscreen></iframe>
		</div> --}} @else
		<img src="{{ asset($atractivos->foto_url) }}" alt="{{ $atractivos->titulo }}" class="w-100 h-100" /> @endif
	</div>
	{{--
	<img class="img-detalle img-fluid w-100 h-100" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}" class="cover-bar" /> --}}
	<div class="details">
		<div class="title1">{{ $atractivos->titulo }}
			<span>{{ $atractivos->ubicacion}}</span>
		</div>
		<div class="title2">{{ $atractivos->descripcion }}</div>
	</div>
	<!-- end details -->
</div>
<!-- end logo -->
<div class="row col-xl-4 description">
	<div class="col-3">
		<span class="tag"></span>
	</div>
	<!-- end column1 -->
	<div class="col-9">
		<p>{{ $atractivos->detalle }}</p>
	</div>
	<!-- end column2 -->
</div>
<!-- end description -->

<!-- end container -->
</div>
<!-- end movie-card -->

{{--
<object data="http://moqueguaturismo.gob.pe/doc/document.pdf" type="application/pdf">
	<embed src="http://moqueguaturismo.gob.pe/doc/document.pdf" type="application/pdf" />
</object>
--}} {{--
<a href="{{ asset('files/file.pdf') }}">Open the pdf!</a> --}} @include('pages.partials.map') {{-- @include('pages.partials.map', ['some' => 'DRIVING']) --}} @include('pages.partials.foto')
{{--
<section class="auto-lightbox">
	@foreach($atractivos->fotos as $foto)
	<img src="{{ asset($foto->foto_url) }}" alt="{{ $foto->titulo }}"> @endforeach
</section>
--}} @endsection