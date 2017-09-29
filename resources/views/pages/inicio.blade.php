@extends('template')
@section ('title', 'inicio')
@section('class','inicio')
@section('lema')
    Sobre Moquegua
@endsection
@section ('content')
<div class="inicio mb-4">
    <div class="card p-2">
        <img class="card-img-top w-100 h-100" src="/images/clima.jpg" alt="Card image cap">
        <h4 class="card-title mt-2">Clima</h4>
        <div class="card-body">La ciudad de Moquegua tiene un clima seco, semicálido y soleado durante todo el año.</div>
        <p class="h7">Seco, semicálido y soleado</p>
        <span class="datoNum">Temperatura máxima <em class="blue">27°C</em><sub>81°F</sub></span>
        <span class="datoNum">Temperatura mínima <em class="blue">10°C</em><sub>50°F</sub></span>
    </div>
</div>
<div class="lado " style="width: 500px"; >
    <div class="flex">
  <div class="card p-3">
    <div class="header">
        <div class="title">
          <div>
            <h1>5 ways to create inspiring articles</h1>
           
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="inicio mb-4" >
    <div class="card p-2" style="
    top: -650px;
    width: 630px;
">
        <img class="card-img-top w-100 h-100" src="/images/acceso.jpg" alt="Card image cap">
        <h4 class="card-title mt-2">Vias de acceso</h4>
        <p class="h7">Vía de acceso terrestre</p>
       <span class="datoNum">Lima-Moquegua: <em class="red">1.146 Km</em> <sub>por la Carretera Panamericana Sur (14 horas en auto)</sub></span>
        <span class="datoNum">Arequipa-Moquegua: <em class="red">227 Km</em> <sub>por la Carretera Panamericana Sur (3 horas en auto)</sub></span>
       <span class="datoNum">Tacna-Moquegua: <em class="red">159 Km</em> <sub>por la Carretera Panamericana Sur (1 hora y 30 minutos en auto)</sub></span>
    </div>
</div>

<div class="inicio mb-4">
    <div class="card p-2" style="
    top: -650px;
    width: 630px;">
        <img class="card-img-top w-100 h-100" src="/images/distancia.jpg" alt="Card image cap">
        <h4 class="card-title mt-2">Distancias desde la ciudad de Moquegua</h4>
        <span class="datoNum"><em class="green">Omate</em> (Provincia de General Sánchez Cerro) <sub>141 Km / 3 horas</sub></span>
        <span class="datoNum"><em class="green">Ilo </em> (Provincia de Ilo) <sub>99 Km / 40 minutos</sub></span>
    </div>
</div>

<div class="inicio  mb-4" >
    <div class="card p-2" style="
    top: -650px;
    width: 630px;">
        <img class="card-img-top w-100 h-100" src="/images/altitud.jpg" alt="Card image cap">
        <h4 class="card-title mt-2">Altitud</h4>
        <span class="datoNum purple"><em>Mínima</em> <sub>5 msnm (Pueblo Nuevo)</sub></span>
        <span class="datoNum purple"><em>Máxima</em> <sub> 3.756 msnm (Ichuña)</sub></span>
    </div>
</div>

<div class="inicio mb-4">
    <div class="card p-2" style="
    top: -650px;
    width: 630px;">
        <img class="card-img-top w-100 h-100" src="/images/estancia.jpg" alt="Card image cap">
        <h4 class="card-title mt-2">Tiempo de Estancia</h4>
        <p class="datoinfo">Un día permitirá visitar la ciudad y sus atractivos cercanos. Para disfrutar de la naturaleza de la región necesitará 2 días.</p>
        <p class="h7">Rutas y Tiempos</p>
        <ul class="datoNum"> <li><em class="yellow">½ día</em></li> <li>Centro histórico: City Tour Paquete 1: 4 horas.</li> <li>Ruta del Pisco 3 Km / 10 minutos.</li> <li>Geoglifos de Chen Chen 1.5 Km / 10 minutos.</li> </ul>
        <ul class="datoNum"> <li><em class="yellow">1 día</em></li> <li>Distrito de Samegua 5 Km / 10 minutos.</li> <li>Sitio arqueológico de Cerro Baúl 18 Km / 20 minutos.</li> <li>Yacimiento de Cuajone 32 Km / 30 minutos.</li> <li>Valles de Carumas - Cuchumbaya y San Cristóbal – Calacoa 129 Km / 5 horas.</li> <li>Aguas Termales – Putina 141 Km / 4 horas.</li> <li>Punta de Coles 111 Km / 1 hora.</li> <li>Playas del norte 132 Km / 1 hora 10 minutos.</li> <li>Playas del Sur 128 Km / 1 hora.</li> </ul>
        <ul class="datoNum"> <li><em class="yellow">2 días</em></li> <li>Valle de Omate 147 Km / 6 horas. Incluye:</li> <li>Señor de las Piedades</li> <li>Molinos hidráulicos de Omate</li> </ul>
    </div>
</div>

@endsection
