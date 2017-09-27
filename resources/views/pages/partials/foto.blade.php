<section class="fotos">
    <div class="container gallerij">
        <h2 class="well text-center titulo-g">Galería</h2>
            @foreach($atractivos->fotos as $foto)
            <article class="col-lg-3 col-sm-3 col-6" style="float: left;">
                <a class="link" href="{{ $foto->foto_url }}">
                    <img class="foto-g w-100 img-thumbnail img-rounded"data-position="{{ $foto->id }}" src="{{ $foto->foto_url }}" alt="{{ $foto->titulo }}">
                </a>
            </article>
             @endforeach
    </div>
</section>

