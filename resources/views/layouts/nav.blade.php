<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GASCOPC | Tu Seguridad, es nuestra Prioridad</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Navbar -->
<header class="header">
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="../images/GASCOPC5.png" alt="Logo GASCOPC" class="logo-img">
        </div>

        <button class="navbar-toggle" aria-label="Menú de navegación">
            <span class="toggle-icon"></span>
        </button>

        <div class="navbar-menu">
            <ul class="navbar-links">
                <li>
                    <a href="{{ url('/') }}"
                       class="navbar-link {{ request()->is('/') ? 'active' : '' }}">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{ url('mi_tienda') }}"
                       class="navbar-link {{ request()->is('mi_tienda') ? 'active' : '' }}">
                        Mi Tienda
                    </a>
                </li>
                <li>
                    <a href="{{ url('nosotros') }}"
                       class="navbar-link {{ request()->is('nosotros') ? 'active' : '' }}">
                        Sobre Nosotros
                    </a>
                </li>
                <li>
                    <a href="{{ url('servicios') }}"
                       class="navbar-link {{ request()->is('servicios') ? 'active' : '' }}">
                        Servicios
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-contact">
            <h3 class="footer-title">Contacto</h3>
            <div class="contact-info">
                <p class="contact-item">
                    <svg class="contact-icon" viewBox="0 0 24 24">
                        <path d="M3 21v-13l9-4l9 4v13h-6v-7h-6v7h-6z"/>
                    </svg>
                    C.P. 51110 Santo Tomas, Edo. Mex.
                </p>
                <p class="contact-item">
                    <svg class="contact-icon" viewBox="0 0 24 24">
                        <path d="M5 4h4l3 5l-4 2l-3-5v-2z"/>
                        <path d="M16 2l3 5l-4 2l-3-5l4-2z"/>
                        <path d="M3 14h18v6h-18z"/>
                    </svg>
                    <a href="tel:+525562210132" class="footer-link">+52 55-62-21-01-32</a>
                </p>
                <p class="contact-item">
                    <svg class="contact-icon" viewBox="0 0 24 24">
                        <path d="M3 8l9 6l9-6"/>
                    </svg>
                    <a href="mailto:carlosgarcia190274@hotmail.com" class="footer-link">carlosgarcia190274@hotmail.com</a>
                </p>
                <p class="contact-item">
                    <svg class="contact-icon" viewBox="0 0 24 24">
                        <path d="M3 8l9 6l9-6"/>
                    </svg>
                    <a href="mailto:gerencia@gascopc.com" class="footer-link">gerencia@gascopc.com</a>
                </p>
            </div>
        </div>

        <div class="footer-social">
            <h3 class="footer-title">Síguenos</h3>
            <div class="social-links">
                <a href="#" class="social-link" aria-label="Facebook">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="Twitter">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"/>
                    </svg>
                </a>
                <a href="https://mx.linkedin.com/in/carlos-vladimir-garc%C3%ADa-5a021b1a9" class="social-link" aria-label="LinkedIn">
                    <svg class="social-icon" viewBox="0 0 24 24">
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/>
                        <path d="M8 11l0 5"/>
                        <path d="M8 8l0 .01"/>
                        <path d="M12 16l0 -5"/>
                        <path d="M16 16v-3a2 2 0 0 0 -4 0"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <p>&copy; <span id="current-year">2025</span> GASCOPC. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>
