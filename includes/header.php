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
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Estilos base */
        ::selection {
            background-color: #DC2626;
            color: #fff;
        }
        body {
            background-color: #050505;
            color: #f5f5f5;
            overflow-x: hidden;
        }
        .glass-header {
            background: rgba(5, 5, 5, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* CORRECCIÓN AQUÍ: Soporte completo para texto gradiente */
        .gradient-text {
            background: linear-gradient(to right, #ffffff, #a3a3a3);
            -webkit-background-clip: text;
            background-clip: text; /* Estándar para quitar warning */
            -webkit-text-fill-color: transparent;
            color: transparent; /* Fallback de seguridad */
        }
    </style>
</head>
<body class="antialiased">

    <nav class="fixed w-full z-50 glass-header transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.php" class="text-2xl font-bold tracking-tighter hover:text-brand-red transition-colors flex items-center gap-1 group">
                NØWADAYS<span class="font-light text-gray-400 group-hover:text-white transition-colors">Studio</span>
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red ml-0.5 animate-pulse"></span>
            </a>
            
            <div class="hidden md:flex space-x-8 text-sm font-medium items-center">
                <a href="index.php#proyectos" class="text-gray-400 hover:text-brand-red transition-colors">Portafolio</a>
                <a href="index.php#servicios" class="text-gray-400 hover:text-brand-red transition-colors">Soluciones</a>
                <a href="index.php#proceso" class="text-gray-400 hover:text-brand-red transition-colors">Método</a>
                <a href="#contacto" class="bg-white text-black px-5 py-2 rounded-full font-bold hover:bg-brand-red hover:text-white transition-all transform hover:scale-105">
                    Empezar Proyecto
                </a>
            </div>

            <button class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-brand-black border-b border-gray-800 absolute w-full px-6 py-6 space-y-4 shadow-2xl">
            <a href="index.php#proyectos" class="block py-2 text-gray-300 hover:text-brand-red">Portafolio</a>
            <a href="index.php#servicios" class="block py-2 text-gray-300 hover:text-brand-red">Soluciones</a>
            <a href="index.php#proceso" class="block py-2 text-gray-300 hover:text-brand-red">Método</a>
            <a href="#contacto" class="block py-3 font-bold text-brand-red">Empezar Proyecto</a>
        </div>
    </nav>