<!-- header begin -->
<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex align-items-center">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                            <div class="logo">
                                <a href="/">
                                    <h4 class="text-light">CineMatrix</h4>
                                </a>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-none d-block col-6">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="mainmenu">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Iniciar sesión</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Crear Cuenta</a>
                                    </li>
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/sign_out">Cerrar Sesión</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/booking">Reservar</a>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->