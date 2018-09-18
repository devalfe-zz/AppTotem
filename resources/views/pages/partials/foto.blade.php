<section class="fotos">
	<div class="gallerias">
		<h2 class="well text-center titulo-g">Galería</h2>
		@foreach($atractivos->fotos as $foto)
		<article class="col-lg-3 col-sm-3 col-6" style="float: left;">
			<a data-fancybox="images"  class="link" href="{{ env('APP_URL')}}{{$foto->foto_url}}" data-caption="{{ $foto->titulo }}">
				<img class="foto-g w-100 img-thumbnail" data-position="{{ $foto->id }}" src="{{ env('APP_URL')}}{{$foto->foto_url}}" alt="{{ $foto->titulo }}">
			</a>
		</article>
		@endforeach
	</div>
</section>
