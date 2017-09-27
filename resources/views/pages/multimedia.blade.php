@extends('template')
@section ('title', 'Servicios y ofertas')
@section('class','servicos')

@section ('content')
<section class="fotos">
    <div class="container gallerij">
        <h2 class="well text-center titulo-g">Galería</h2>
            @foreach($galerias as $foto)
            <article class="col-lg-3 col-sm-3 col-6" >
                <a class="link " href="{{ $foto->foto_url }}" style="float: left;">
                    <img class="foto-g w-100 img-thumbnail"data-position="{{$foto->id}}" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
                </a>
            </article>
             @endforeach
    </div>
</section>

@endsection