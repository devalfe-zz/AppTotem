<div class="header-top py-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-6 d-flex"> 
                <!-- Default Welcome Message -->
                <div class="welcome-msg ">Bienvenidos a Moquegua! </div>
                <span class="phone mx-3">Telefóno<i class="fa fa-phone" aria-hidden="true"></i> +123.456.789</span> 
            </div>
            <div class="headerlinkmenu col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-around">
                <div class="links d-flex justify-content-around">
                    <div class="myaccount px-3">
                        <a title="My Account" href="account_page.html">
                            <i class="fa fa-user"></i>
                            <span class="hidden-xs">Mi cuenta</span>
                        </a>
                    </div>
                    <div class="wishlist px-3">
                        <a title="My Wishlist" href="wishlist.html">
                            <i class="fa fa-heart"></i>
                            <span class="hidden-xs">Lista de deseos</span>
                        </a>
                    </div>
                    <div class="blog px-3">
                        <a title="Blog" href="blog.html">
                            <i class="fa fa-rss"></i>
                            <span class="hidden-xs">Blog</span>
                        </a>
                    </div>
                    <div class="login px-3">
                        <a href="account_page.html">
                            <i class="fa fa-unlock-alt"></i>
                            <span class="hidden-xs">Iniciar sesión</span>
                        </a>
                    </div>
                </div>
                <div class="language-currency-wrapper">
                    <div class="inner-cl">
                        <div class="block block-language form-language">
                            <div class="lg-cur">
                                <a class="selected" href="#" data-toggle="collapse" data-target="#lang" aria-expanded="false">
                                    <img class="mb-1" src="{{asset('images/es-pe.gif')}}" alt="Español">
                                    <span class="es-pe px-2">Español</span>
                                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                </a>
                            </div>
                        <ul class="collapse lang" id="lang">
                            <li>
                                <a href="#">
                                    <img class="mb-1" src="{{asset('images/en-us.gif')}}" alt="English">
                                    <span class="en-us px-2">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="mb-1" src="{{asset('images/pt-br.gif')}}" alt="Portuges">
                                    <span class="pt-br px-2">Portuges</span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- End Default Welcome Message --> 
              </div>
            </div>
        </div>
    </div>
</div>