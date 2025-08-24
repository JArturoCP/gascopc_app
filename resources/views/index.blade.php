@extends('layouts.nav')

@section('content')

    <section class="seccion-clientes">
        <div class="contenedor-clientes contenedor">
            <div class="contenedor-imagen">
                <img
                    src="../images/clientes.jpeg"
                    alt="Clientes satisfechos con nuestros servicios"
                    class="imagen-clientes"
                    loading="lazy"
                >
            </div>
            <div class="contenido-clientes">
                <h2 class="titulo-clientes">Nuestros Clientes</h2>
                <p class="texto-clientes">Estamos comprometidos con cada uno de nuestros clientes, en brindar un servicio de calidad dando soluciones inmediatas a sus necesidades.</p>
                <!--
                <a href="#contacto" class="boton">Contáctanos</a>
                -->
            </div>
        </div>
    </section>

    <div class="info-section">
        <article class="info-card">
            <img src="../images/uach1.jpeg" alt="Plática UACH">
            <div class="info-content">
                <h2>Plática UACH</h2>
                <p>conferencia magistral sobre las nuevas tendencias en educación superior. Expertos nacionales e internacionales compartieron estrategias para implementar modelos educativos innovadores que preparen a los estudiantes para los desafíos del siglo XXI.</p>
            </div>
        </article>

        <article class="info-card">
            <img src="../images/uach2.jpeg" alt="Fortaleciendo equipos de trabajo">
            <div class="info-content">
                <h2>Fortaleciendo equipos de trabajo</h2>
                <p>Programa de desarrollo profesional diseñado para mejorar la comunicación, colaboración y eficiencia en equipos multidisciplinarios. A través de talleres prácticos, los participantes aprenden técnicas de liderazgo, resolución de conflictos y metodologías ágiles para maximizar su potencial colectivo.</p>
            </div>
        </article>

        <article class="info-card">
            <img src="../images/team.jpeg" alt="Concienciación sobre la salvaguarda de la vida">
            <div class="info-content">
                <h2>Concienciación sobre la salvaguarda de la vida</h2>
                <p>El programa incluye capacitación en primeros auxilios, protocolos de emergencia y bienestar integral, buscando crear entornos más seguros</p>
            </div>
        </article>
    </div>


@endsection

