@extends('template')
@section ('title', 'inicio')
@section('class','inicio')
@section('map')
    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
@endsection
@section('lema')
    mapa
@endsection
@section ('content')
<div id="map" class="col-12"> 
    <div class="map">
        {!!$map['html']!!}
       	<div id="directionsDiv"></div>
    </div>  
</div>
@endsection
