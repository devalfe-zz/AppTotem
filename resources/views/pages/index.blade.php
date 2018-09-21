@extends('template')
@section ('title', 'inicio')
@section('class','inicio')
@section('content')
<div class="col-xl-2 col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{url('images/menu/casa_tradicional1.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Información</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/iglesia_belen.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Información</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('lugares') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/carcel1.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box  carousel-caption">Atractivos Turismo</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/plaza2.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Atractivos Turismo</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('home') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/casa_diezcanseco3.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Danzas</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/muro_matriz2.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Danzas</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('telefono') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/call.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Teléfonos de interés</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/call.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Teléfonos de interés</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('home') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/casa_tradicional3.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Diversión</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/iglesia_belen3.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Diversión</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('transporte') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/casa_chocano3.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Transporte</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/casa_diezcanseco3.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Transporte</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('alojamiento') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/dmoquegua.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Alojamientos</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/dmoquegua.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Alojamientos</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('restaurante') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/casa_serpiente2.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Restaurantes</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/casa_diezcanseco3.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Restaurantes</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('cine') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/cine.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Cartelera - Cine</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/cine.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Cartelera - Cine</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('home') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/CUY_FRITO.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Gastronomía</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/CUY_FRITO.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Gastronomía</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('historia') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/historia_moquegua1.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Historía</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/historia_moquegua2.jpg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Historía</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="col-xl-2  col-md-4 d-flex justify-content-center">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<a href="{{ route('mapa') }}">
				<div class="carousel-item active menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/MAPA.jpeg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Mapa de la ciudad</p>
					</div>
				</div>
				<div class="carousel-item menu-box">
					<img class="card-img d-block w-100 h-100" src="{{asset('images/menu/MAPA.jpeg')}}">
					<div class="card-img-overlay menu">
						<p class="card-text label-box carousel-caption">Mapa de la ciudad</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

@endsection
