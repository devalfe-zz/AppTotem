<div class="col-md-9">
    <div class="menu">
        <ul class="d-flex justify-content-around mt-3">
            <li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Sobre Moquegua </a></li>
            <li><a href="{{ route('atractivos') }}"><i class="fa fa-map" aria-hidden="true"></i> ¿Dónde ir? </a></li>
            <li><a href="{{ url('/quehacer') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>¿Qué hacer?</a></li>
            <li><a href="{{ url('/plan_viaje') }}"><i class="fa fa-plane" aria-hidden="true"></i> Planifica tu viaje </a></li>
            <li><a  href="{{ url('/servicios') }}"><i class="fa fa-hotel" aria-hidden="true"></i> Servicios y ofertas </a></li>
            {{--  onClick = "navSection('menu-5')"  --}}
        </ul>
    </div>
</div>
        