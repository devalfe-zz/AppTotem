@extends('template')
@section ('title', 'inicio')
@section('class','inicio')
@section ('content')
<section   class="slide wow slideInRight" data-wow-offset="300"  id="menu-1" >
<h1 class="well pt-2">Sobre Moquegua</h1>
<div class="inicio col-12 d-flex">
    <div class="card-inicio col-12 col-xl-6">
        <p class="p-3 text-justify">La región Moquegua está situada en el sur peruano, en la vertiente occidental de la Cordillera de los Andes.. Limita por el norte con la región Arequipa, por el sur con Tacna, por el noreste con Puno y por el oeste con el Mar de Grau (océano Pacífico correspondiente al Perú). Se emplaza entre los paralelos 15º 58’ y 17º 50’ latitud sur y los meridianos  69º 59’ y 71º 29’, longitud oeste. Posee una superficie territorial de 15, 733,97 Km2, (1,2% del territorio nacional). Abarca dos zonas (costa y sierra) y seis pisos latitudinales (costa, yunga, quechua, suni, jalca y janca) llegando a alcanzar los 6,000 metros sobre el nivel del mar. Moquegua, es la ciudad homónima a la región y capital a su vez de la Provincia Mariscal Nieto, se emplaza sobre los 1410 msnm.
    La región está conformada por tres provincias. La Provincia de Ilo posee uno de los más importantes puertos del país; su industria gira en torno a la pesquería, metalurgia y la agroindustria (procesamiento de la vid y el olivo). La Provincia de Mariscal Nieto posee riqueza minera y agropecuaria, sus dos minas más importantes son Cuajone y Quellaveco; su agroindustria está íntimamente ligada a la vitivinicultura, industria con más de 400 años de tradición, produciendo los mejores piscos de la nación; además de los productos lácteos y la exportación de la palta y el orégano. La Provincia de General Sánchez Cerro es mayoritariamente agrícola, llegando a abastecer a las regiones sureñas del país con sus frutos, su producto bandera es la palta y la vid; así mismo posee riqueza en su suelo, llegándose a explorar el oro y otros minerales.</p>
        
    </div>
    <div class="card-inicio col-12 col-xl-6">
        <div class="card-image">
            <img src="{{asset('images/head.jpg')}}" alt="">
        </div>
    </div>
</div>

<div class="content">
<div class="card-column column-0">
    <div class="card card-color-0">
        <div class="border"></div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-00.jpg" />
        <h1>Hey now, you're an allstar</h1>
    </div>
    <div class="card card-color-2">
        <div class="border"></div>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-02.jpg" />
        <h1>Hey now, you're a rock star</h1>
    </div>
</div>
</div>

<div class="card-column column-1">
<div class="card card-color-1">
<div class="border"></div>
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-01.jpg" />
<h1>Get your game on, go play</h1>
</div>
<div class="card card-color-3">
<div class="border"></div>
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53148/deathtostock-03.jpg" />
<h1>Get the show on, get paid</h1>
</div>
</div>
</div>

<div id="cover" class="cover"></div>
<div id="open-content" class="open-content">
    <a href="#" id="close-content" class="close-content">
        <span class="x-1"></span>
        <span class="x-2"></span>
    </a>
    <img id="open-content-image" src="" />
    <div class="text" id="open-content-text">
    </div>
</div>

</section>
  

@endsection
