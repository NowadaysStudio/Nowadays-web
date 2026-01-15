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
            background: rgba(5, 5, 5, 0.95); /* Un poco más opaco para legibilidad del dropdown */
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
        .gradient-text {
            background: linear-gradient(to right, #ffffff, #a3a3a3);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }
        
        /* Ajuste para el dropdown */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 200px;
            background-color: #0a0a0a;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 0.5rem;
            padding: 0.5rem 0;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.5);
        }
        .group:hover .dropdown-menu {
            display: block;
            animation: fadeInUp 0.2s ease-out forwards;
        }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen"> 
<nav class="fixed w-full z-50 glass-header transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.php" class="text-2xl font-bold tracking-tighter hover:text-brand-red transition-colors flex items-center gap-1 group">
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

            <button class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-brand-black border-b border-gray-800 absolute w-full px-6 py-6 space-y-4 shadow-2xl h-screen overflow-y-auto">
            <a href="proyectos.php" class="block py-2 text-xl font-bold text-gray-300 hover:text-brand-red border-b border-white/5">Proyectos</a>
            
            <div class="py-2 border-b border-white/5">
                <span class="block text-xl font-bold text-gray-300 mb-2">Servicios</span>
                <div class="pl-4 space-y-3 border-l border-white/10 ml-1">
                    <a href="diseno-web.php" class="block text-gray-400 hover:text-brand-red">Diseño Web</a>
                    <a href="ecommerce.php" class="block text-gray-400 hover:text-brand-red">E-Commerce</a>
                    <a href="correos.php" class="block text-gray-400 hover:text-brand-red">Correos Empresariales</a>
                </div>
            </div>

            <a href="nosotros.php" class="block py-2 text-xl font-bold text-gray-300 hover:text-brand-red border-b border-white/5">Nosotros</a>
            
            <a href="contacto.php" class="block mt-6 py-4 text-center bg-brand-red text-white font-bold rounded-lg hover:bg-red-700">
                Empezar Proyecto
            </a>
        </div>
    </nav>