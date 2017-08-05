<!--========================================================
                              HEAD
=========================================================-->
<header>

    <div class="toggle-menu-container">
    <div class="container">
                <a href="{{url('/')}}" class="logo">
                   <img src="{{mix('images/logo.svg')}}" class="img-fluid" alt="logo"></a>
               
                <button type="buttom" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="buttom" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <from action="" id="bloque-buscar" class="collapse">
                    <div class="container-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </from>
        <nav class="nav">
            <div class="nav_title"></div>
            <a class="sf-menu-toggle fa fa-bars" href="{{ url('/') }}"></a>
            <ul class="sf-menu">
                <li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li><a href="index-1.html"><i class="fa fa-address-card" aria-hidden="true"></i>
                About</a>
                    <ul>
                        <li><a href="#">Quisque nulla</a></li>
                        <li><a href="#">Vestibulum libero</a>
                            <ul>
                                <li><a href="#">Lorem</a></li>
                                <li><a href="#">Dolor</a></li>
                                <li><a href="#">Sit amet</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Vivamus eget nibh</a></li>
                    </ul>
                </li>
                <li><a href="index-2.html">What We Do</a></li>
                <li><a href="index-3.html">Menu</a></li>
                <li><a href="index-4.html">Contacts</a></li>
            </ul>
        </nav>         
    </div>
</header>