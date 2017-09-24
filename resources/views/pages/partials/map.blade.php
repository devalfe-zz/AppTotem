@section('map')
     <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
@endsection
<div id="map" class="col-12"> <!-- Map -->
    <div class="map">
        {!!$map['html']!!}
    </div>
    <a class="accesoMapa" href="#">mapa</a>
</div>
