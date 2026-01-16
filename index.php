<?php 
$page_title = "NØWADAYS Studio | Sitios Web de Alto Rendimiento";
include 'includes/header.php'; 
?>

    <section class="relative pt-40 pb-8 md:pt-32 md:pb-12 px-6 overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-red rounded-full filter blur-[180px] opacity-[0.08] animate-pulse"></div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="flex items-center justify-center gap-1.5 mb-4 reveal">
                <div class="flex text-brand-red">
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                    <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                </div>
                <span class="text-sm font-medium text-gray-400">Excelencia en Diseño & Desarrollo</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.1] mb-5 reveal delay-100">
                Sitios web que <span class="text-brand-red">venden.</span><br>
                Diseño estratégico para negocios modernos.
            </h1>

            <p class="text-base md:text-lg text-gray-400 max-w-2xl mx-auto mb-6 leading-relaxed reveal delay-200">
                Transformamos visitantes en clientes mediante arquitecturas digitales optimizadas para conversión y velocidad.
            </p>

            <div class="flex flex-col items-center gap-6 reveal delay-300">
                <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                    <a href="#contacto" class="px-8 py-4 bg-brand-red text-white rounded-full font-bold hover:bg-red-700 transition-all flex items-center justify-center gap-2 shadow-[0_0_30px_rgba(220,38,38,0.4)] hover:shadow-[0_0_50px_rgba(220,38,38,0.6)]">
                        Empezar Proyecto
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    
                    <a href="#proyectos" class="px-8 py-4 border border-white/10 bg-white/5 rounded-full font-medium hover:bg-white hover:text-black transition-all flex items-center justify-center shadow-[0_0_20px_rgba(255,255,255,0.05)] hover:shadow-[0_0_40px_rgba(255,255,255,0.4)]">
                        Ver Resultados
                    </a>
                </div>
                
                <div class="flex items-center gap-2 text-gray-500 text-sm mt-2">
                    <i data-lucide="map-pin" class="w-4 h-4 text-brand-red"></i>
                    <span>Monterrey, Nuevo León, MX</span>
                </div>
            </div>
        </div>
    </section>

    <section class="border-y border-white/5 bg-brand-dark py-8 overflow-hidden relative">
        <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-brand-black to-transparent z-10"></div>
        <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-brand-black to-transparent z-10"></div>
        
        <div class="animate-marquee" style="width: max-content;">
            
            <div class="flex shrink-0 items-center text-gray-500 font-bold text-xl uppercase tracking-widest whitespace-nowrap">
                <span class="mx-12">Botanero Limón</span>
                <span class="mx-12">Nue Lingerie</span>
                <span class="mx-12">Gabrielo's Pizza</span>
                <span class="mx-12">Boimsa</span>
            </div>
            
            <div class="flex shrink-0 items-center text-gray-500 font-bold text-xl uppercase tracking-widest whitespace-nowrap">
                <span class="mx-12">Botanero Limón</span>
                <span class="mx-12">Nue Lingerie</span>
                <span class="mx-12">Gabrielo's Pizza</span>
                <span class="mx-12">Boimsa</span>
            </div>

        </div>
    </section>

    <section id="servicios" class="py-24 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-6 reveal">
                <div>
                    <h2 class="text-4xl md:text-4xl font-bold mb-4 text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.5)]">
                        Soluciones de Negocio
                    </h2>
                    <p class="text-gray-400 max-w-md">No solo entregamos "diseño", entregamos herramientas que hacen crecer tu facturación.</p>
                </div>
                
                <div class="h-0.5 bg-gradient-to-r from-brand-red via-brand-red/60 to-transparent flex-grow ml-8 hidden md:block rounded-full shadow-[0_0_15px_rgba(220,38,38,0.5)]"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="reveal delay-100 h-full">
                    <div class="group bg-brand-gray border border-white/5 p-8 rounded-2xl hover:border-brand-red/50 transition-colors duration-300 h-full">
                        <div class="w-12 h-12 bg-black rounded-lg border border-white/10 flex items-center justify-center mb-6 text-brand-red group-hover:scale-110 transition-transform">
                            <i data-lucide="layout-template" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Diseño Web</h3>
                        <p class="text-sm text-gray-400 mb-6 leading-relaxed">Páginas diseñadas para mostrar al mundo la esencia de su empresa. Eliminamos fricción y maximizamos la retención visual.</p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Excelente diseño móvil</li>
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Profesionalidad digital</li>
                        </ul>
                    </div>
                </div>

                <div class="reveal delay-200 h-full">
                    <div class="group bg-brand-gray border border-white/5 p-8 rounded-2xl hover:border-brand-red/50 transition-colors duration-300 h-full">
                        <div class="w-12 h-12 bg-black rounded-lg border border-white/10 flex items-center justify-center mb-6 text-brand-red group-hover:scale-110 transition-transform">
                            <i data-lucide="shopping-bag" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">E-Commerce Escalable</h3>
                        <p class="text-sm text-gray-400 mb-6 leading-relaxed">Tiendas diseñadas para guiar al usuario hacia la compra. Gestión óptima de inventario y formas de pago seguras.</p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Integración de pasarelas de pago</li>
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Alta conversión de ventas</li>
                        </ul>
                    </div>
                </div>

                <div class="reveal delay-300 h-full">
                    <div class="group bg-brand-gray border border-white/5 p-8 rounded-2xl hover:border-brand-red/50 transition-colors duration-300 h-full">
                        <div class="w-12 h-12 bg-black rounded-lg border border-white/10 flex items-center justify-center mb-6 text-brand-red group-hover:scale-110 transition-transform">
                            <i data-lucide="code-2" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Desarrollo a Medida</h3>
                        <p class="text-sm text-gray-400 mb-6 leading-relaxed">Programación web desde cero. Funcionalidad avanzada, automatización y sistemas de gestión interna.</p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Programación a la medida</li>
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Gestión de usuarios y contraseñas</li>
                        </ul>
                    </div>
                </div>

                <div class="reveal delay-400 h-full">
                    <div class="group bg-brand-gray border border-white/5 p-8 rounded-2xl hover:border-brand-red/50 transition-colors duration-300 h-full">
                        <div class="w-12 h-12 bg-black rounded-lg border border-white/10 flex items-center justify-center mb-6 text-brand-red group-hover:scale-110 transition-transform">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Correo Empresarial</h3>
                        <p class="text-sm text-gray-400 mb-6 leading-relaxed">Proyecta confianza inmediata con direcciones de correo electrónico personalizadas (@tuempresa.com).</p>
                        <ul class="text-sm text-gray-500 space-y-2">
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Dominio propio</li>
                            <li class="flex gap-2 items-center"><span class="w-1 h-1 bg-brand-red rounded-full"></span>Asesoría para migración</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="proyectos" class="py-16 bg-brand-dark px-6 border-y border-white/5">
        <div class="max-w-7xl mx-auto">
            
            <div class="mb-12 text-center reveal"> 
                <span class="text-brand-red font-bold tracking-widest text-sm uppercase mb-4 block">Resultados Reales</span>
                
                <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.5)]">
                    Casos de Éxito
                </h2>
                
                <p class="text-gray-400">Proyectos que redefinieron la presencia digital de nuestros clientes.</p>
            </div>

            <div class="space-y-16 reveal">
                
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative group max-w-lg mx-auto lg:mr-0 w-full"> 
                        <div class="absolute inset-0 bg-lime-500/20 blur-3xl opacity-20 rounded-full group-hover:opacity-30 transition-opacity"></div>
                        <div class="bg-gray-900 border border-white/10 rounded-2xl aspect-video overflow-hidden relative shadow-2xl">
                            <img src="assets/img/botanero.png" 
                                 alt="Botanero Limón Interfaz" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="space-y-6 max-w-lg mx-auto lg:ml-0 w-full text-center lg:text-left"> 
                        <div>
                            <h3 class="text-3xl font-bold mb-3">Botanero Limón</h3>
                            <p class="text-gray-400 leading-relaxed mb-6">Diseño total de la experiencia digital de un spot icónico de Monterrey. Transformamos un menú estático en una herramienta interactiva que facilita la decisión del comensal.</p>
                            
                            <div class="flex flex-wrap gap-3 justify-center lg:justify-start">
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">UX/UI Design</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">WordPress</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">CTAs</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">SEO Local</span>
                            </div>
                        </div>

                        <a href="https://botanerolimon.com/" target="_blank" class="inline-flex items-center text-white font-bold hover:text-brand-red transition-colors group">
                            Visitar Sitio Web 
                            <i data-lucide="external-link" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6 order-2 lg:order-1 max-w-lg mx-auto lg:mr-0 w-full text-center lg:text-left">
                        <div>
                            <h3 class="text-3xl font-bold mb-3">Nue Lingerie</h3>
                            <p class="text-gray-400 leading-relaxed mb-6">Plataforma E-commerce minimalista enfocada en la conversión. Diseño Mobile-First para convertir eficientemente el tráfico de redes sociales.</p>
                            
                            <div class="flex flex-wrap gap-3 justify-center lg:justify-start">
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">Shopify</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">E-commerce</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">Pasarela de Pagos</span>
                                <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-bold text-gray-300">Meta Ads</span>
                            </div>
                        </div>

                        <a href="https://nuelingeriemx.com/" target="_blank" class="inline-flex items-center text-white font-bold hover:text-brand-red transition-colors group">
                            Visitar Sitio Web 
                            <i data-lucide="external-link" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    
                    <div class="relative group order-1 lg:order-2 max-w-lg mx-auto lg:ml-0 w-full"> 
                        <div class="absolute inset-0 bg-rose-500/20 blur-3xl opacity-20 rounded-full group-hover:opacity-30 transition-opacity"></div>
                        <div class="bg-gray-900 border border-white/10 rounded-2xl aspect-video overflow-hidden relative shadow-2xl">
                            <img src="assets/img/nue.png" 
                                 alt="Nue Lingerie Interfaz" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="proceso" class="py-16 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto text-center">
            
            <h2 class="text-4xl md:text-4xl font-bold mb-12 reveal text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.5)]">
                Proceso sin fricción
            </h2>
            
            <div class="grid md:grid-cols-4 gap-8 relative">
                <div class="hidden md:block absolute top-8 left-0 w-full h-0.5 bg-gradient-to-r from-transparent via-brand-red/50 to-transparent"></div>

                <div class="relative z-10 group reveal delay-100">
                    <div class="w-16 h-16 mx-auto bg-black border border-white/10 rounded-full flex items-center justify-center mb-6 group-hover:border-brand-red transition-colors shadow-lg">
                        <i data-lucide="search" class="w-6 h-6 text-white group-hover:text-brand-red transition-colors"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Descubrimiento</h3>
                    <p class="text-sm text-gray-500 px-4">Análisis de objetivos, competencia y arquitectura de la información.</p>
                </div>

                <div class="relative z-10 group reveal delay-200">
                    <div class="w-16 h-16 mx-auto bg-black border border-white/10 rounded-full flex items-center justify-center mb-6 group-hover:border-brand-red transition-colors shadow-lg">
                        <i data-lucide="pen-tool" class="w-6 h-6 text-white group-hover:text-brand-red transition-colors"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Diseño UI/UX</h3>
                    <p class="text-sm text-gray-500 px-4">Prototipado visual enfocado en la experiencia de usuario.</p>
                </div>

                <div class="relative z-10 group reveal delay-300">
                    <div class="w-16 h-16 mx-auto bg-black border border-white/10 rounded-full flex items-center justify-center mb-6 group-hover:border-brand-red transition-colors shadow-lg">
                        <i data-lucide="code" class="w-6 h-6 text-white group-hover:text-brand-red transition-colors"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Desarrollo</h3>
                    <p class="text-sm text-gray-500 px-4">Codificación limpia, integración de funcionalidades y optimización SEO.</p>
                </div>

                <div class="relative z-10 group reveal delay-400">
                    <div class="w-16 h-16 mx-auto bg-black border border-white/10 rounded-full flex items-center justify-center mb-6 group-hover:border-brand-red transition-colors shadow-lg">
                        <i data-lucide="rocket" class="w-6 h-6 text-white group-hover:text-brand-red transition-colors"></i>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Lanzamiento</h3>
                    <p class="text-sm text-gray-500 px-4">Pruebas finales, conexión de dominio y despliegue global.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-brand-gray border-y border-white/5 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-stretch">
            
            <div class="reveal h-full flex flex-col justify-center">
                <span class="text-brand-red font-bold text-sm uppercase mb-2 block">Sobre Nosotros</span>
                
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.5)]">
                    Expertos en Código y Negocios.
                </h2>
                
                <p class="text-gray-400 leading-relaxed mb-8">
                    En NØWADAYS Studio, no somos solo diseñadores. Somos consultores técnicos con una visión orientada a objetivos comerciales. 
                    Entendemos que un sitio web es una inversión que debe generar retorno, ya sea en leads, ventas directas o posicionamiento de marca.
                </p>

                <div class="mb-10">
                    <h4 class="text-white font-bold text-sm mb-4 flex items-center gap-2">
                        <i data-lucide="cpu" class="w-4 h-4 text-brand-red"></i>
                        Nuestro Arsenal Digital
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-black border border-white/10 rounded-md text-xs font-medium text-gray-300">Wordpress / Elementor</span>
                        <span class="px-3 py-1.5 bg-black border border-white/10 rounded-md text-xs font-medium text-gray-300">Python / Django</span>
                        <span class="px-3 py-1.5 bg-black border border-white/10 rounded-md text-xs font-medium text-gray-300">Google Analytics</span>
                        <span class="px-3 py-1.5 bg-black border border-white/10 rounded-md text-xs font-medium text-gray-300">Shopify</span>
                        <span class="px-3 py-1.5 bg-black border border-white/10 rounded-md text-xs font-medium text-gray-300">SQL</span>
                        <span class="px-3 py-1.5 bg-black border border-white/10 rounded-md text-xs font-medium text-gray-300">IA</span>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-8 sm:items-center border-t border-white/5 pt-8 mt-auto md:mt-0">
                    <div class="flex gap-8">
                        <div>
                            <span class="block text-3xl font-bold text-white mb-0.5">+2</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wide">Años Exp.</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-bold text-white mb-0.5">Top 1%</span>
                            <span class="text-xs text-gray-500 uppercase tracking-wide">Talento Tech</span>
                        </div>
                    </div>
                    
                    <a href="nosotros.php" class="px-6 py-3 bg-brand-red text-white rounded-full font-bold hover:bg-red-700 transition-all flex items-center gap-2 shadow-[0_0_20px_rgba(220,38,38,0.4)] hover:shadow-[0_0_30px_rgba(220,38,38,0.6)] group">
                        ¡Conócenos!
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="reveal delay-100 flex flex-col justify-between h-full gap-6">
                
                <div class="bg-black border border-white/10 p-8 rounded-xl relative h-full flex flex-col justify-center">
                    <i data-lucide="quote" class="w-8 h-8 text-brand-red/20 absolute top-4 right-4"></i>
                    <p class="text-gray-300 italic mb-6 leading-relaxed">"Son unos emprendedores increíbles, las respuestas a las necesidades de la pagina las resuelven en tiempo y forma; ya casi dos años con ellos y nos sentimos muy agradecidos por su profesionalismo, honestidad y la versatilidad del diseño."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center font-bold text-sm text-white border border-white/10">MG</div>
                        <div>
                            <p class="font-bold text-white">Miriam García</p>
                            <p class="text-sm text-gray-500">Dir. Administrativa, Botanero Limón</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-black border border-white/10 p-8 rounded-xl relative h-full flex flex-col justify-center">
                    <i data-lucide="quote" class="w-8 h-8 text-brand-red/20 absolute top-4 right-4"></i>
                    <p class="text-gray-300 italic mb-6 leading-relaxed">"Me encantó la página web, le dieron el toque minimalista que justo estaba buscando. Además, la atención que tuvieron conmigo fue 10/10."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center font-bold text-sm text-white border border-white/10">BS</div>
                        <div>
                            <p class="font-bold text-white">Betzaida Sumano</p>
                            <p class="text-sm text-gray-500">CEO, Nue Lingerie</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 px-6 max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12 reveal">Preguntas Frecuentes</h2>
        
        <div class="space-y-4 reveal">
            <details class="group bg-brand-dark border border-white/5 rounded-2xl p-6 cursor-pointer hover:border-brand-red/30 transition-colors">
                <summary class="flex justify-between items-center font-bold text-white list-none">
                    <span>¿Cuánto cuesta un proyecto web?</span>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-gray-400 mt-4 text-sm leading-relaxed">
                    Creemos en la transparencia. Nuestros planes inician desde $3,000 MXN para Landing Pages (Web Express) y $5,000 MXN para sitios profesionales completos. Sin costos ocultos.
                </p>
            </details>

            <details class="group bg-brand-dark border border-white/5 rounded-2xl p-6 cursor-pointer hover:border-brand-red/30 transition-colors">
                <summary class="flex justify-between items-center font-bold text-white list-none">
                    <span>¿Cuál es el tiempo de entrega?</span>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-gray-400 mt-4 text-sm leading-relaxed">
                    Priorizamos la agilidad. Un proyecto Web Express toma de 2 a 3 semanas. Proyectos Profesionales requieren entre 4 y 6 semanas para asegurar la máxima calidad.
                </p>
            </details>

            <details class="group bg-brand-dark border border-white/5 rounded-2xl p-6 cursor-pointer hover:border-brand-red/30 transition-colors">
                <summary class="flex justify-between items-center font-bold text-white list-none">
                    <span>¿Ofrecen soporte después del lanzamiento?</span>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-gray-500 group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-gray-400 mt-4 text-sm leading-relaxed">
                    Sí. Incluimos 1 mes de soporte gratuito en todos los planes. Posteriormente, ofrecemos planes de mantenimiento mensual desde $1,500 MXN que incluyen hosting, seguridad y actualizaciones.
                </p>
            </details>
        </div>
    </section>

    <section id="contacto" class="py-24 px-6 relative bg-black overflow-hidden border-t border-brand-red">
        <div class="absolute inset-0 bg-brand-red/10 animate-pulse"></div>
        <div class="max-w-4xl mx-auto relative z-10 text-center bg-brand-dark/80 backdrop-blur-xl p-8 md:p-16 rounded-3xl border border-white/10 shadow-2xl">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">¿Listo para escalar?</h2>
            <p class="text-gray-400 mb-10 text-lg max-w-2xl mx-auto">
                No dejes que tu competencia te gane el clic. Agenda una consultoría gratuita y descubramos cómo podemos potenciar tu negocio hoy mismo.
            </p>
            
                <form action="send_mail.php" method="POST" class="max-w-xl mx-auto space-y-4 mb-8 text-left">
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label for="name" class="text-xs text-gray-500 font-bold uppercase tracking-wider ml-1">Nombre</label>
                            <input type="text" name="name" id="name" required placeholder="Tu nombre" 
                                class="w-full bg-black border border-white/20 rounded-lg px-4 py-3 text-white focus:border-brand-red focus:ring-1 focus:ring-brand-red outline-none transition-all placeholder-gray-700">
                        </div>
                        <div class="space-y-1">
                            <label for="email" class="text-xs text-gray-500 font-bold uppercase tracking-wider ml-1">Email Corporativo</label>
                            <input type="email" name="email" id="email" required placeholder="nombre@empresa.com" 
                                class="w-full bg-black border border-white/20 rounded-lg px-4 py-3 text-white focus:border-brand-red focus:ring-1 focus:ring-brand-red outline-none transition-all placeholder-gray-700">
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label for="service" class="text-xs text-gray-500 font-bold uppercase tracking-wider ml-1">Interés</label>
                        <div class="relative">
                            <select name="service" id="service" required
                                    class="w-full bg-black border border-white/20 rounded-lg px-4 py-3 text-white focus:border-brand-red focus:ring-1 focus:ring-brand-red outline-none transition-all appearance-none cursor-pointer">
                                <option value="" disabled selected>Selecciona una solución</option>
                                <option value="Landing Page">Web Express / Landing Page</option>
                                <option value="E-commerce">E-commerce / Tienda Online</option>
                                <option value="Desarrollo a Medida">Desarrollo a Medida (Python/Django)</option>
                                <option value="Consultoria">Consultoría / Auditoría</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                                <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label for="message" class="text-xs text-gray-500 font-bold uppercase tracking-wider ml-1">Detalles del Proyecto</label>
                        <textarea name="message" id="message" rows="4" required placeholder="Cuéntanos sobre tu negocio..." 
                                class="w-full bg-black border border-white/20 rounded-lg px-4 py-3 text-white focus:border-brand-red focus:ring-1 focus:ring-brand-red outline-none transition-all placeholder-gray-700 resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-brand-red text-white font-bold py-4 rounded-lg hover:bg-red-700 transition-all shadow-[0_4px_14px_0_rgba(220,38,38,0.39)] flex items-center justify-center gap-2 group">
                        Enviar Solicitud
                        <i data-lucide="send" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            
            <p class="text-xs text-gray-600">
                Respuesta garantizada en menos de 24 horas. <span class="text-gray-500">Privacidad asegurada.</span>
            </p>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>