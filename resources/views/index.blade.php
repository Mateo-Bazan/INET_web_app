<!doctype html>
<html>
<head>
    <title>inet</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="{{ asset('/css/index-style.css') }}">
    <link rel="javaScript" href="{{ asset('/js/app.js') }}">
    <script src="{{ asset('/js/userUbication.js') }}"></script>
</head>
<body class="col-12">

  <!--encabezado-->
  <header class="container-fluid  d-flex header">
      <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-dark botonmenu">
        <div class="container-fluid">
            <a href="" class="navbar-brand text-info fw-semibold fs-4"></a>
            <button class="navbar-toggler mx-3 " type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!--offcanva-->
            <section class="offcanvas offcanvas-start" id="menuLateral" tabindex="-1">
                <div class="offcanvas-header" data-bs-themes="dark">
                  <h5 class="offcanvas-title text-info titulo-menu">inet</h5>
                  <button class="btn-close" type="button" arial-label="Close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justifi-content-between px-0">
                  <ul class="navbar-nav fs-5 justify-content-evenly">
                    <li class="nav-item p-3 py-md-1 texto-menu"><a>Tema</a></li>
                    <li class="nav-item p-3 py-md-1 texto-menu"><a>Albergues cercanos</a></li>
                    <li class="nav-item p-3 py-md-1 texto-menu"><a>Acerca de</a></li>
                    <li class="nav-item p-3 py-md-1 texto-menu"><a>Ayuda</a></li>
                    <li class="nav-item p-3 py-md-1 texto-menu"><a>Salir</a></li>
                  </ul>
                  <!--imgdelministerio-->
                  <div> 
                    <img src="{{ asset('images/hamburguer-menu/img-ministerio.png') }}" class="img-movil mx-7">
                  </div>
                </div>
            </section>
            <!--finoffcanva-->
        </div>
    </nav>
        <h1 class="titulo">inet</h1>
 </header>
<!--MAPA-->
  
<div class="mapa-container">
  <ul id="ubicaciones" class="col-0 list-group"></ul>
  <div id="contenedor-mapa" class="contenedor-mapa"></div>
  <div class="form-dropdown-container">
    <form class="d-flex mt-3" role="search">
      <input class="form-control me-2 btn-lg mx-1" type="search" placeholder="Buscar albergues" aria-label="Search">
      <button class="boton btn-lg mx-0" type="submit">Buscar</button>
    </form>
    <div class="container">
      <div class="dropdown filtro">
        <button onclick="toggleDropdown()" class="dropbtn">Institución</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#" onclick="selectOption(this)">FP</a>
            <a href="#" onclick="selectOption(this)">Secundario Tecnico</a>
            <a href="#" onclick="selectOption(this)">Nivel Superior</a>
        </div>
        <div class="dropdown2">
            <button onclick="toggleDropdown2()" class="dropbtn2">Orientación</button>
            <div id="myDropdown2" class="dropdown-content2">
                <a href="#" onclick="selectOption2(this)">orientaciones1</a>
                <a href="#" onclick="selectOption2(this)">orientaciones2</a>
                <a href="#" onclick="selectOption2(this)">orientaciones3</a>
                <a href="#" onclick="selectOption2(this)">orientaciones</a>
                <a href="#" onclick="selectOption2(this)">orientaciones5</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--lista-->
  <div class="lista" id="lista">
    <button class="menu" id="menu">
      <span class="arrow">&#9650;</span>
    </button>
    <div class="options">
      <div class="option">
        <div class="square"></div>
        <div class="divsito">
          <p>Dirección</p>
          <p>Nombre Institución</p>
          <p>Teléfono</p>
        </div>
      </div>
      <div class="option">
        <div class="square"></div>
        <div class="divsito">
          <p>Dirección</p>
          <p>Nombre Institución</p>
          <p>Teléfono</p>
        </div>
      </div>
      <div class="option">
        <div class="square"></div>
        <div class="divsito">
          <p>Dirección</p>
          <p>Nombre Institución</p>
          <p>Teléfono</p>
        </div>
      </div>
    </div>
  </div>
  <!--finlista-->
</div>


<!--MAPA-->
<!--SCRIPTS-->
<Div class="script-mapa">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="{{ asset('/js/mapa.js') }}"></script>
</Div>
<script src="{{ asset('/js/desplegable.js') }}"></script>
<script src="{{ asset('/js/userUbication.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!--SCRIPTS-->  
</body>
</html>