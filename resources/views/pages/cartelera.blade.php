@extends('template')
@section ('title', 'cartelera')
@section('class','cartelera')

@section ('content')
<main class="container d-flex flex-wrap justify-content-center align-content-center align-items-center text-justify">
<section class="movies" id="movies">
    <h2>Featured Movies</h2>
	<div class="row">
@foreach($carteleras as $cartelera)
  
		<div class="col-lg-3 col-md-4 col-sm-6 d-flex mb-2">
			<article class="card">
				<header class="title-header">
					<h3>{{ $cartelera->title }}</h3>
				</header>
				<div class="card-block">
					<div class="img-card">
						<img src="{{ $cartelera->images->poster }}" alt="{{ $cartelera->title }}" class="w-100" />
					</div>
					<p class="tagline card-text text-xs-center">{{ $cartelera->synopsis }}</p>
					<a href="#" class="btn btn-primary btn-block"><i class="fa fa-eye"></i> Watch Now</a>
				</div>
			</article>
		</div>
@endforeach
	</div>
</section>
</main>

 {{--  <div class="example-2 card">
    <div class="wrapper">
    <img src="{{ $cartelera->images->poster }}" alt="{{ $cartelera->title }}">
      <div class="header">
        <div class="date">
            <span class="year">{{ $cartelera->year }}</span>
        </div>
        <ul class="menu-content">
          <li>
            <a href="#" class="fa fa-bookmark-o">{{ $cartelera->rating->votes }}</a>
          </li>
          <li><a href="#" class="fa fa-heart-o"><span>{{ $cartelera->rating->loved }}</span></a></li>
          <li><a href="#" class="fa fa-comment-o"><span>{{ $cartelera->rating->hated }}</span></a></li>
        </ul>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">{{ $cartelera->certification }}</span>
          <h1 class="title"><a href="#">{{ $cartelera->title }}</a></h1>
          <p class="text">{{ $cartelera->synopsis }}</p>
          <a href="#" class="button">Read more</a>
        </div>
      </div>
    </div>
  </div>  --}}
         

@endsection
