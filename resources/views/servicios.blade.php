@extends('layouts.nav')

@section('content')

<!-- Título Principal -->

<section>
    <h1 class="servicio-titulo">Servicios | GASCOPC</h1>
</section>

<div class="contenedor-blog">
    <!-- Sidebar tipo blog -->
    <aside class="sidebar">
        <div class="sidebar-img">
            <img src="../images/combate%20y%20prevencion.jpg" alt="Imagen lateral 1">
        </div>
        <div class="sidebar-img">
            <img src="../images/conciencia.jpeg" alt="Imagen lateral 2">
        </div>
        <div class="sidebar-img">
            <img src="../images/Copia-de-cctv-camera-flyer-template-Hecho-con-PosterMyWall-2.jpg"></img>
        </div>
    </aside>

    <!-- Entradas del blog -->
    <div class="blog-entradas">
        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/detecciondeincendios.jpg" alt="Detección de incendios">
            </div>
            <div class="entrada-texto">
                <h2>Detección de incendios</h2>
                <p>Diseño, mantenimiento preventivo y correctivo de sistemas de detección de incendios, adaptados a sus necesidades.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/incendios.jpeg" alt="Combate de incendios">
            </div>
            <div class="entrada-texto">
                <h2>Combate y prevención de incendios</h2>
                <p>Brindamos mantenimiento preventivo y recarga de equipos contra incendios, además de capacitación con constancias DC-3.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/mejores%20marcas.jpg" alt="Combate de incendios">
            </div>
            <div class="entrada-texto">
                <h2>Mejores marcas</h2>
                <p>Buscamos lo mejor en tecnología y la mejor opción para sacar el mejor provecho de las novedades en cada una de las marcas del mercado.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/diseñoproy.jpeg" alt="Combate de incendios">
            </div>
            <div class="entrada-texto">
                <h2>Diseño de Proyectos</h2>
                <p>Realizamos estudios de seguridad para brindar la mejor solución en equipos de videovigilancia y monitoreo.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/videovigilancia.jpg" alt="Videovigilancia">
            </div>
            <div class="entrada-texto">
                <h2>Videovigilancia</h2>
                <p>Realizamos estudios de seguridad para ofrecer la mejor solución en equipos de videovigilancia y monitoreo.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/soporte.jpg" alt="Soporte">
            </div>
            <div class="entrada-texto">
                <h2>Soporte 24/7</h2>
                <p>Brindamos soporte las 24 horas del día, los 365 días del año para garantizar su tranquilidad en todo momento.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/recarga.jpg" alt="Extintores">
            </div>
            <div class="entrada-texto">
                <h2>Recarga y venta de extintores</h2>
                <p>Ofrecemos mantenimiento preventivo y recarga de extintores de diferentes tipos y capacidades.</p>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/mantenimiento.jpg" alt="Extintores">
            </div>
            <div class="entrada-texto">
                <h2>Mantenimiento y Recarga</h2>
                <p>Mantenimiento preventivo y recarga de extintores de Agentes Secos, Agentes Limpios, Agentes Húmedos, Agentes Especiales.</p>
            </div>
        </article>
        <article class="entrada">
            <div class="entrada-img">
                <img src="../images/nuevos.jpg" alt="Extintores">
            </div>
            <div class="entrada-texto">
                <h2>Equipos nuevos</h2>
                <p>Venta, Diseño e Instalación de equipos contra incendios, mangueras contra incendios, hidrantes, Gabinetes para Equipos de Bombero.</p>
            </div>
        </article>
    </div>
</div>

@endsection
