


    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
                <img src="<?php echo base_url('assets/img/logotipoTrading.jpg')?>" alt="marca" width="90" height="50" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li></li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="acerca_de">Acerca De</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Más
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="InicioDeSesion">Inicio De Sesión</a></li>
                            <li><a class="dropdown-item" href="Registro">Registro</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
