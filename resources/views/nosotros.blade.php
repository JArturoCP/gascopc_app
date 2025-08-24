@extends('layouts.nav')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <!-- Imagen como fondo absoluto -->
        <div class="hero-bg">
            <img src="../images/seguridad.jpg" alt="Fondo GASCOP"
                 onerror="this.style.display='none'">
        </div>

        <div class="hero-contenido">
            <h1 class="titulo">GASCOPC</h1>
            <h3>Comprometidos día a día con nuestra vocación.</h3>
            <p>Grupo de asesores en seguridad, comunicación y protección civil.</p>
        </div>
    </section>

<!-- Contenido Principal -->
<div class="contenedor">
    <section class="filosofia">
        <div class="filosofia-texto">
            <h2>Nuestra Filosofía</h2>
            <p>Predicamos con la filosofía de realizar un traje a la medida de cada cliente, basado en los estudios de seguridad, análisis de riesgos para brindar un servicio de calidad y calidez a cada uno de ustedes.</p>
            <p>Siendo la filosofía de la mejora continua, uno de los principios de la calidad total y gracias a ella y la aplicación de distintas metodologías para conseguir resultados excepcionales en las organizaciones.</p>
        </div>

        <div class="filosofia-imagenes">
            <img src="../images/extintor.jpg" alt="Filosofía 2">
        </div>
    </section>


    <section class="valores">
        <h2>Nuestros Valores</h2>
        <div class="valores-grid">
            <div class="valor-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#FFC107" stroke-width="2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
                </svg>
                <h3>Compromiso</h3>
                <p>Actuamos con responsabilidad y vocación, entregándonos día a día al cumplimiento de nuestras labores en seguridad, comunicación y protección civil.</p>
            </div>

            <div class="valor-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#FFC107" stroke-width="2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 8l9 6l9-6"/>
                </svg>
                <h3>Servicio</h3>
                <p>Diseñamos soluciones a la medida, enfocadas en las necesidades específicas de cada cliente, basadas en estudios de seguridad y análisis de riesgos.</p>
            </div>

            <div class="valor-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#FFC107" stroke-width="2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"/>
                    <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3"/>
                    <path d="M9.7 17l4.6 0"/>
                </svg>
                <h3>Innovación</h3>
                <p>Nos movemos más allá del presente, administrando componentes para los desafíos del mañana.</p>
            </div>
        </div>
    </section>
</div>

@endsection
