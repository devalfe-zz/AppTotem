<div class="col-md-9">
    <div class="menu">
        <ul class="d-flex justify-content-around mt-3">
            <li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Datos útiles</a></li>
            <li><a href="{{ route('dentro') }}"><i class="fa fa-map" aria-hidden="true"></i>Atractivos dentro de la Ciudad</a></li>
            <li><a href="{{ route('fuera') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Atractivos fuera de la ciudad</a></li>
            <li><a href="{{ url('/plan_viaje') }}"><i class="fa fa-plane" aria-hidden="true"></i>Servicios turísticos</a></li>
            <li><a  href="{{ url('/servicios') }}"><i class="fa fa-hotel" aria-hidden="true"></i> Multimedia </a></li>
            {{--  onClick = "navSection('menu-5')"  --}}
        </ul>
    </div>
</div>
        