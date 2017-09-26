@section('map')
    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
@endsection
<div id="map" class="col-12"> 
    <a class="accesoMapa" href="">mapa</a><!-- Map -->
    <div class="map">
        {!!$map['html']!!}
       	<div id="directionsDiv"></div>
    </div>   
    @include('pages.partials.menu-lateral')
</div>
