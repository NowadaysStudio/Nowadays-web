<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'NØWADAYS Studio | Sitios Web de Alto Rendimiento'; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            black: '#050505',
                            dark: '#0a0a0a',
                            gray: '#171717',
                            red: '#DC2626', 
                            redDark: '#991b1b',
                            white: '#f5f5f5'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased flex flex-col min-h-screen"> 

    <nav class="fixed w-full z-50 glass-header transition-all duration-300 h-20" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-center md:justify-between relative">
            
            <a href="index.php" class="text-2xl font-bold tracking-tighter hover:text-brand-red transition-colors flex items-center gap-1 group z-50">
                NØWADAYS<span class="font-light text-gray-400 group-hover:text-white transition-colors">Studio</span>
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red ml-0.5 animate-pulse"></span>
            </a>
            
            <div class="hidden md:flex space-x-8 text-sm font-medium items-center">
                <a href="proyectos.php" class="text-gray-400 hover:text-brand-red transition-colors">Proyectos</a>
                
                <div class="relative group h-full flex items-center">
                    <button class="text-gray-400 group-hover:text-brand-red transition-colors flex items-center gap-1">
                        Servicios
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                    </button>
                    
                    <div class="dropdown-menu">
                        <a href="diseno-web.php" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">
                            Diseño Web
                        </a>
                        <a href="ecommerce.php" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">
                            E-commerce
                        </a>
                        <a href="correos.php" class="block px-4 py-3 text-gray-300 hover:bg-white/5 hover:text-brand-red transition-colors">
                            Correos Empresariales
                        </a>
                    </div>
                </div>

                <a href="nosotros.php" class="text-gray-400 hover:text-brand-red transition-colors">Nosotros</a>
                
                <a href="contacto.php" class="bg-white text-black px-5 py-2 rounded-full font-bold hover:bg-brand-red hover:text-white transition-all transform hover:scale-105">
                    Empezar Proyecto
                </a>
            </div>

            </div>
    </nav>

    <nav id="mobile-subnav" class="md:hidden fixed top-20 w-full z-40 bg-brand-dark/95 border-b border-white/5 backdrop-blur-md transition-all duration-500 ease-in-out">
        <div class="flex justify-around items-center h-12 px-4 text-xs font-medium uppercase tracking-wider text-gray-400">
            <a href="proyectos.php" class="hover:text-white transition-colors py-2">Proyectos</a>
            <div class="w-px h-3 bg-white/10"></div>
            <a href="servicios.php" class="hover:text-white transition-colors py-2">Servicios</a>
            <div class="w-px h-3 bg-white/10"></div>
            <a href="nosotros.php" class="hover:text-white transition-colors py-2">Nosotros</a>
        </div>
    </nav>

    <script>
        let lastScrollY = window.scrollY;
        const subnav = document.getElementById('mobile-subnav');

        window.addEventListener('scroll', () => {
            // Si el scroll es mayor a 50px y estamos bajando
            if (window.scrollY > 50 && window.scrollY > lastScrollY) {
                // Movemos la franja hacia arriba (negativo Y) para esconderla detrás del header principal
                subnav.style.transform = "translateY(-100%)";
                subnav.style.opacity = "0";
            } else {
                // Si subimos, la mostramos de nuevo
                subnav.style.transform = "translateY(0)";
                subnav.style.opacity = "1";
            }
            lastScrollY = window.scrollY;
        });
    </script>