@extends('template')
@section ('title', 'cartelera')
@section('class','cartelera')

@section ('content')
<main class="container d-flex flex-wrap justify-content-center align-content-center align-items-center text-justify">
<section class="movies" id="movies">
    <h2></h2>
	<div class="row">
@foreach($carteleras->results as $cartelera)
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex mb-2">
			<article class="card">
				<header class="title-header">
					<h3>{{ $cartelera->title }}</h3>
				</header>
				<div class="card-block">
					<div class="img-card">
						<img src="https://image.tmdb.org/t/p/w500{{ $cartelera->poster_path }}" alt="{{ $cartelera->title }}" class="w-100" />
					</div>
					<p class="tagline card-text text-xs-center">{{ $cartelera->overview }}</p>
					<a href="#" class="btn btn-primary btn-block"><i class="fa fa-eye"></i> Watch Now</a>
				</div>
			</article>
		</div>
@endforeach
	</div>
</section>
</main>

@endsection
