<!doctype html>
<html>
<head>
    <title>Geolocalizacion</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>

<!--PARTE DE JOEL-->

<header>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 6l16 0" />
            <path d="M4 12l16 0" />
            <path d="M4 18l16 0" />
        </svg>
    </header>
    <nav>

    </nav>
    <main>
        <div class="search-bar">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
            <path d="M21 21l-6 -6" />
        </svg>
            <input type="text" class="search-input" placeholder="Buscar...">
        </div>
    </main>
<!--PARTE DE JOEL-->



<!--MAPA-->
<div class="container-xl contenedor">
        <div class="row buscador">
            <input id="buscador-text" type="text" class="buscador-text">
            <button type="button" class="btn btn-primary btn-buscar" id="btn-buscar">Buscar</button>
        </div>
        <div class="row contenedor-mapa-result">
            <ul id="ubicaciones" class="col-3 list-group"></ul>
            <div class="col-9">
                <div id="contenedor-mapa" class="contenedor-mapa"></div>
            </div>
        </div>
    </div>
</div>
<!--MAPA-->

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="{{ asset('/js/mapa.js') }}"></script>
</body>
</html>