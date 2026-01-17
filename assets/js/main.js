// 1. Inicializar Iconos Lucide
lucide.createIcons();

// 2. Lógica de Reveal on Scroll
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150; // Ajuste de sensibilidad

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}

window.addEventListener("scroll", reveal);
// Llamada inicial para elementos ya visibles
reveal();

// 3. Lógica del DOM (Notificaciones Toast y Limpieza de URL)
document.addEventListener('DOMContentLoaded', () => {
    
    // --- LÓGICA DE NOTIFICACIONES (TOAST) ---
    const toast = document.getElementById('toast-notification');
    
    // A. Si existe el toast (PHP lo renderizó), lo animamos
    if (toast) {
        // Pequeño delay para permitir que el DOM se pinte antes de animar la entrada
        setTimeout(() => {
            toast.classList.remove('translate-y-20', 'opacity-0');
        }, 100);

        // Auto-cerrar después de 4 segundos
        setTimeout(() => {
            closeToast();
        }, 4000);
    }

    // B. Limpiar parámetros de la URL (para que no salga el toast al recargar la página)
    const url = new URL(window.location.href);
    if (url.searchParams.has('status')) {
        url.searchParams.delete('status');
        url.searchParams.delete('mode');
        window.history.replaceState({}, document.title, url);
    }
});

// 4. Función global para cerrar el toast (llamada desde el onclick en HTML)
window.closeToast = function() {
    const toast = document.getElementById('toast-notification');
    if (toast) {
        // Animación de salida (bajar y desvanecer)
        toast.classList.add('translate-y-20', 'opacity-0');
        
        // Eliminar del DOM después de que termine la transición (500ms)
        setTimeout(() => {
            toast.remove();
        }, 500);
    }
}