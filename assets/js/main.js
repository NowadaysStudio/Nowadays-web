// Inicializar Iconos Lucide
lucide.createIcons();

// Lógica de Reveal on Scroll
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150; // Ajusta qué tan pronto aparece

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}

window.addEventListener("scroll", reveal);
// Llamar una vez al inicio para mostrar elementos que ya están en pantalla
reveal();