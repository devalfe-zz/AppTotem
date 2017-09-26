<aside class="leftmenu">
    <nav class="nav-menu">
        <a class="leftmenu__item" href="{{route('detalle',$atractivos->id)}}">
            <span class="title">A pie</span>
            <span class="icon"><i class="fa fa-male" aria-hidden="true"></i></span>
        </a>
        <a class="leftmenu__item" href="{{ route ('map', $atractivos->id) }}">
            <span class="title">En coche</span>
            <span class="icon"><i class="fa fa-car" aria-hidden="true"></i></span>
        </a>
        <a class="leftmenu__item" href="{{ route ('map', $atractivos->categorias->id) }}">
            <span class="title">Restaurantes</span>
            <span class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i></span>
        </a>
        <a class="leftmenu__item" href="{{ route ('map', $atractivos->id) }}">
            <span class="title">Alojamientos</span>
            <span class="icon"><i class="fa fa-bed" aria-hidden="true"></i></span>
        </a>
        <a class="leftmenu__item" href="{{ route ('map', $atractivos->id) }}">
            <span class="title">Transportes</span>
            <span class="icon"><i class="fa fa-bus" aria-hidden="true"></i></span>
        </a>
    </nav>
</aside>
