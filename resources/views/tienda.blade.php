@extends('layouts.nav')

@section('content')

<section class="store-section">
    <h1 class="servicio-titulo">Mi Tienda | GASCOPC.</h1>
    <h2>Productos del Mes</h2>

    <div class="product-grid">
        <article class="product-card">
            <img src="../images/Kit-4-DAHUA.png" alt="Producto 1">
            <h3>Kit 4 camaras</h3>
            <p class="product-description">Kit de 4 camaras 2 mp</p>
            <p class="product-description">1 DVR con Disco 1 TB</p>
            <p class="product-description">4 extensiones 18 mts c/u</p>
            <p class="product-description">Fuente de poder y mouse</p>
            <!--<button class="info-button">Mas información</button>-->
        </article>

        <article class="product-card">
            <img src="../images/Kit-8-DAHUA.png" alt="Producto 2">
            <h3>Kit 8 camaras</h3>
            <p class="product-description">Kit de 8 camaras de 2 mp</p>
            <p class="product-description">1 DVR con Disco 2 TB</p>
            <p class="product-description">18 metros de cable por camara</p>
            <p class="product-description">Conectores balum y de energia</p>
            <p class="product-description">Fuente de poder y mouse</p>
            <!--<button class="info-button">Mas información</button>-->
        </article>


        <article class="product-card">
            <img src="../images/Kit-16-DAHUA.jpg" alt="Producto 3">
            <h3>Kit 16 camaras</h3>
            <p class="product-description">Kit de 16 camaras 2mp</p>
            <p class="product-description">1 DVR con Disco 4 TB</p>
            <p class="product-description">18 metros de cable x camara</p>
            <p class="product-description">Conectores de video y energia</p>
            <p class="product-description">Fuente de poder y mouse</p>
            <!--<button class="info-button">Mas información</button>-->
        </article>
    </div>


    <!--Segunda fila de productos-->
    <div class="product-grid">

    </div>


</section>

<section class="gps-section">
    <h2 class="gps-title">Nuestros Servicios GPS</h2>

    <div class="gps-service">
        <img src="../images/gps.jpeg" alt="Rastreo GPS">
        <div>
            <h3>Equipos de Rastreo GPS</h3>
            <p>Rastreo en plataforma libre, sin cargos extra ni rentas mensuales. Usted será el administrador total de su equipo, garantizando control y seguridad.</p>
            <!--<button class="info-button">Mas información</button>-->
        </div>
    </div>

    <div class="gps-service">
        <img src="../images/instalacion%20y%20venta.jpeg" alt="Instalación y Venta">
        <div>
            <h3>Instalación y Venta de GPS</h3>
            <p>Equipos con el mejor precio y servicio, acompañados de una plataforma gratuita para el monitoreo de vehículos, camionetas, motocicletas o uso personal.</p>
            <!--<button class="info-button">Mas información</button>-->
        </div>
    </div>

    <div class="gps-service">
        <img src="../images/monitoreo%20de%20flotillas.jpeg" alt="Monitoreo de Flotillas">
        <div>
            <h3>Monitoreo de Flotillas</h3>
            <p>Servicio de monitoreo 24/7 para flotillas, garantizando seguridad y supervisión continua de sus unidades.</p>
            <!--<button class="info-button">Mas información</button>-->
        </div>
    </div>
</section>

@endsection
