document.addEventListener('DOMContentLoaded', function() {
    // Menu toggle functionality
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    navbarToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        navbarMenu.classList.toggle('active');

        // Bloquear/desbloquear scroll del body
        document.body.style.overflow = navbarMenu.classList.contains('active') ? 'hidden' : '';
    });

    // Cerrar menú al hacer clic en un enlace (para móviles)
    document.querySelectorAll('.navbar-link').forEach(link => {
        link.addEventListener('click', () => {
            navbarMenu.classList.remove('active');
            navbarToggle.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // Actualizar año en el footer
    if (document.getElementById('current-year')) {
        document.getElementById('current-year').textContent = new Date().getFullYear();
    }
});
