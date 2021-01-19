<!--nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}"><h1><strong>HOTEL LA RIVIERA</strong></h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>HOTEL</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Mision y Vision</a>
                    <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>SERVICIOS</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/servicios/precios')}}">Precios</a>
                    <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>CLIENTES</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/clientes/visualizar')}}">Visualizar</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('reservas')}}"><strong>RESERVAS</strong><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('facturacion/factura')}}"><strong>FACTURACION</strong><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('contactos')}}"><strong>CONTACTOS</strong><span class="sr-only">(current)</span></a>
            </li>
            
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><strong>BUSCAR</strong></button>
        </form>
    </div>
</nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-success bg-gradient font-weight-bold">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="{{url('/')}}"><h1><strong>PAN DE MAIZ LA 13</strong></h1></a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Administrar Productos</strong></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/categoria')}}">Categoria</a>
                <a class="dropdown-item" href="{{url('/productos')}}">Productos</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" href="{{url('clientes')}}"><strong>Clientes</strong><span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{url('ventas')}}"><strong>Vender</strong><span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Usuario</strong></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/hotel/historia')}}">Salir</a>
            </div>
        </li>

      </ul>
    </div>
  </div>
</nav>
