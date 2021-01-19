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
                <a class="dropdown-item" href="{{url('/productos')}}">Listado</a>
                <a class="dropdown-item" href="{{url('/productos/registro')}}">Registrar Productos</a>
                <a class="dropdown-item" href="{{url('/productos/consulta')}}">Consultas</a>
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
