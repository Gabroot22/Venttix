<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventix - Próximamente</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black antialiased">
    <x-navbar />
    {{-- INICIO DE LA SECCION PRINCIPAL --}}
        <div class = "flex flex-row min-h-[90vh] justify-between items-center max-w-7xl mx-auto px-8 lg:px-12 pt-10 gap-16">
            <div class="max-w-xl px-3 py-3 rounded-xl">
                <h1 class="text-4xl font-extrabold">
                     Gestiona tu negocio con <span class="text-[#A63EFB]">Ventix</span>
                </h1>
                <p class="mt-4 text-black text-lg leading-relaxed max-w-lg">
                    La plataforma todo-en-uno que necesitas para impulsar tu negocio.<br>
                    Automatiza procesos, optimiza recursos y toma decisiones basadas en datos.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="mt-3 inline-flex gap-2 items-center justify-center bg-gradient-to-r font-bold from-[#784BFB] via-[#A63EFB] to-[#FA2DF0] shadow-lg transition-all hover:-translate-y-1 hover:shadow-fuchsia-500/50 px-3 py-3 rounded-xl text-white ">
                        Comienza Gratis
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="mt-3 inline-flex gap-2 items-center bg-white px-3 py-3 rounded-md text-black font-bold border border-slate-200 transition-all hover:-translate-y-1 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path d="M6.3 2.84A1.5 1.5 0 0 0 4 4.11v11.78a1.5 1.5 0 0 0 2.3 1.27l9.344-5.891a1.5 1.5 0 0 0 0-2.538L6.3 2.841Z" />
                        </svg>
                        Ver Demo
                    </a>
                </div>
                <div class="mt-12 flex items-center gap-10 border-t border-slate-100 pt-8">
                <div>
                    <p class="text-2xl font-extrabold text-slate-900">50k+</p>
                    <p class="text-sm text-slate-500 font-medium">Usuarios activos</p>
                </div>

                <div class="h-10 border-l border-slate-200"></div>

                <div>
                    <p class="text-2xl font-extrabold text-slate-900">4.9/5</p>
                    <p class="text-sm text-slate-500 font-medium">Calificación</p>
                </div>

                <div class="h-10 border-l border-slate-200"></div>

                <div>
                    <p class="text-2xl font-extrabold text-slate-900">99.9%</p>
                    <p class="text-sm text-slate-500 font-medium">Uptime</p>
                </div>
            </div>
            </div>
            <div class="hidden md:block">
                <img src="/images/ventix.jpg" alt="Laptop Ventix" class="w-[550px] h-auto rounded-3xl shadow-2xl">
            </div>
        </div>
        {{-- SECCION DE CARACTERISTICAS --}}
        <div class="flex flex-col mt-10 items-center antialiased">
                <p class="text-slate-800">
                    Todo lo que necesitas para crecer
                </p>
                <p class="mt-5 text-center text-xl">
                    Ventix incluye todas las herramientas que necesitas para gestionar y <br>
                    escalar tu negocio de manera eficiente
                </p>
        </div>
        {{--CARACTERISTICAS--}}
        <div class="max-w-7xl mx-auto grid grid-cols-1 gap-y-2 md:grid-cols-3 gap-8">
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col items-start rounded-xl border border-slate-400 shadow-sm hover:border-blue-400
             transition-all duration-300 group">
                <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl transition-transform
                duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-atom-icon lucide-atom text-white transition-transform duration-300 group-hover:scale-95"><circle cx="12" cy="12" r="1"/><path d="M20.2 20.2c2.04-2.03.02-7.36-4.5-11.9-4.54-4.52-9.87-6.54-11.9-4.5-2.04 2.03-.02 7.36 4.5 11.9 4.54 4.52 9.87 6.54 11.9 4.5Z"/>
                    <path d="M15.7 15.7c4.52-4.54 6.54-9.87 4.5-11.9-2.03-2.04-7.36-.02-11.9 4.5-4.52 4.54-6.54 9.87-4.5 11.9 2.03 2.04 7.36.02 11.9-4.5Z"/></svg>
                </div>
                <h3 class="font-bold">Automatización Inteligente</h3>
                <p>Automatiza tareas repetitivas y ahorra hasta 20 horas semanales con nuestros flujos de trabajo inteligentes.</p>
            </div>
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col items-start rounded-xl border border-slate-400 shadow-sm hover:border-blue-400
             transition-all duration-300 group">
                <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl transition-transform
                duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                    stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check text-white transition-transform duration-300 group-hover:scale-95"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                    <path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 class="font-bold">Seguridad Avanzada</h3>
                <p>Protección de nivel empresarial con encriptación end-to-end y cumplimiento de estándares internacionales.</p>
            </div>
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col items-start rounded-xl border border-slate-400 shadow-sm hover:border-blue-400
             transition-all duration-300 group">
                <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl transition-transform
                duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                    stroke-linejoin="round" class="lucide lucide-chart-spline-icon lucide-chart-spline text-white transition-transform duration-300 group-hover:scale-95"><path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="M7 16c.5-2 1.5-7 4-7 2 0 2 3 4 3 2.5 0 4.5-5 5-7"/></svg>
                </div>
                <h3 class="font-bold">Analytics en Tiempo Real</h3>
                <p>Visualiza métricas clave y toma decisiones informadas con dashboards poersonalizables.</p>
            </div>
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col items-start rounded-xl border border-slate-400 shadow-sm hover:border-blue-400
             transition-all duration-300 group">
                <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl transition-transform
                duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                    stroke-linejoin="round" class="lucide lucide-user-icon lucide-user text-white transition-transform duration-300 group-hover:scale-95">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h3 class="font-bold">Colaboración en Equipo</h3>
                <p>Trabaja en conjunto con tu equipo con herramientas de colaboración integradas.</p>
            </div>
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col items-start rounded-xl border border-slate-400 shadow-sm hover:border-blue-400
             transition-all duration-300 group">
                <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl transition-transform
                duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                    stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe text-white transition-transform duration-300 group-hover:scale-95"><circle cx="12" cy="12" r="10"/>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                </div>
                <h3 class="font-bold">Acceso Global</h3>
                <p>Accede desde cualquier lugar del mundo con nuestra infraestructura cloud distribuida.</p>
            </div>
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col items-start rounded-xl border border-slate-400 shadow-sm hover:border-blue-400
             transition-all duration-300 group">
                <div class="w-12 h-12 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl transition-transform
                duration-300 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                    stroke-linejoin="round" class="lucide lucide-headset-icon lucide-headset text-white transition-transform duration-300 group-hover:scale-95"><path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"/>
                    <path d="M21 16v2a4 4 0 0 1-4 4h-5"/></svg>
                </div>
                <h3 class="font-bold">Soporte 24/7</h3>
                <p>Nuestro equipo está disponible las 24 horas para ayudarte cuando lo necesites.</p>
            </div>
        </div>
        {{--SECCION PLANES--}}
        <div class="flex flex-col mt-10 items-center antialiased">
            <p class="text-slate-800">
                Planes diseñados para tu crecimiento
            </p>
            <p class="mt-5 text-center text-xl">
                Elige el plan perfecto para tu negocio. Todos los planes incluyes 14 días <br>de prueba gratis.
            </p>
        </div>
        {{--PLANES--}}
        <div class="max-w-7xl mx-auto mt-20 grid grid-cols-1 gap-y-2 md:grid-cols-3 gap-16">
            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col rounded-xl border border-slate-400">
                <h3 class="text-xl">Básico</h3>
                <p>Perfecto para emprendedores y pequeños negocios</p>
                <div class="mt-8 text-3xl flex items-baseline gap-1">
                    <h1>$25.000</h1>
                    <span class="text-sm font-medium">/mes</span>
                </div>
                <a href="#" class="flex justify-center rounded-xl px-3 py-3 text-white text-xl bg-gradient-to-r font-bold 
                from-[#784BFB] via-[#A63EFB] to-[#FA2DF0] transition-all duration-300 hover:scale-105">Comenzar</a>
                <ul class="mt-8 mb-24 space-y-4">
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Hasta 5 usuarios
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        10 GB de almacenamiento
                        </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Soporte por email
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Actualizaciones básicas
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Dashboard básico
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Integraciones limitadas
                    </li>
                </ul>
            </div>

            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col rounded-xl relative border hover:border-white/80 scale-110 z-10 text-white bg-gradient-to-b 
            from-[#784BFB] via-[#A63EFB] to-[#FA2DF0] hover:shadow-purple-500/30 hover:shadow-[0_0_20px_rgba(255,255,255,0.6),0_0_60px_rgba(166,62,251,1)] transition-all duration-500">
                <div class="absolute flex items-center gap-2 -top-4 left-1/2 -translate-x-1/2 bg-[#FFE500] text-black px-3 py-1 rounded-xl font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.25" 
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star-icon lucide-star">
                    <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
                    <p>Más Popular</p>
                </div>
                <h3 class="text-xl">Premium</h3>
                <p>Ideal para equipos en crecimiento</p>
                <div class="mt-8 text-3xl flex items-baseline gap-1">
                    <h1>$50.000</h1>
                    <span class="text-sm font-medium">/mes</span>
                </div>
                <a href="#" class="flex justify-center rounded-xl px-3 py-3 text-white text-xl bg-white relative overflow-hidden transition-all
                hover:scale-105 after:absolute after:top-0 after:-left-full after:w-full after:h-full after:bg-gradient-to-r after:from-transparent after:via-white/50 
                after:to-transparent after:transition-all after:duration-500 hover:after:left-full">
                    <span class="bg-gradient-to-r from-[#784BFB] via-[#A63EFB] to-[#FA2DF0] bg-clip-text text-transparent font-bold">Comenzar Prueba</span></a>
                <ul class="mt-8 mb-24 space-y-4">
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Hasta 25 usuarios
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        100 GB de almacenamiento
                        </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Soporte prioritario 24/7
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Todas las actualizaciones
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Analytics avanzados
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Integraciones ilimitadas
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        API completa
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Reportes personalizados
                    </li>
                </ul>
            </div>

            <div class="mt-14 mb-4 p-8 gap-2 flex flex-col rounded-xl border border-slate-400">
                <h3 class="text-xl">Business</h3>
                <p>Para empresas con necesidades avanzadas</p>
                <div class="mt-8 text-3xl flex items-baseline gap-1">
                    <h1>$75.000</h1>
                    <span class="text-sm font-medium">/mes</span>
                </div>
                <a href="#" class="flex justify-center rounded-xl px-3 py-3 text-white text-xl bg-gradient-to-r font-bold 
                from-[#784BFB] via-[#A63EFB] to-[#FA2DF0] transition-all duration-300 hover:scale-105">Comenzar</a>
                <ul class="mt-8 mb-24 space-y-4">
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Usuarios ilimitados
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Almacenamiento ilimitado
                        </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Gestor de cuenta dedicado
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Todas las actualizaciones
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Integraciones personalizadas
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        API completa
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Capacitación personalizada
                    </li>
                    <li class="flex items-center gap-2">
                        <span>•</span>
                        Onboarding dedicado
                    </li>
                </ul>
            </div>
        </div>
        {{--PRUEBA GRATIS--}}
        <div class="mt-48 mb-4 p-20 gap-2 max-w-5xl mx-auto flex flex-col justify-center items-center rounded-xl relative border hover:border-white/80 text-white bg-gradient-to-r 
            from-[#784BFB] via-[#A63EFB] to-[#FA2DF0]">
            <h2 class="text-xl">¿Listo para transformar tu negocio?</h2>
            <p class="mt-4 text-center text-xl"> Unete a miles de empresas que ya estan creciendo con Ventix. Comienza tu prueba<br>
                gratuita de 14 días hoy mismo, sin tarjeta de crédito.</p>
            <div class="flex justify-center gap-4 mt-8">
                <a href="#" class="inline-flex gap-2 items-center justify-center bg-white px-8 py-4 group rounded-xl text-[#A63EFB] font-bold text-lg transition-all hover:shadow-xl">
                    Comienza prueba gratis
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 group-hover:translate-x-2 duration-300">
                        <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="#" class="inline-flex gap-2 items-center justify-center px-8 py-4 rounded-xl text-white font-bold text-lg border-2 border-white/30 transition-all hover:bg-white/10 hover:border-white">
                Hablar con Ventas
                </a>

            </div>
            <div class="flex flex-wrap justify-center gap-x-4 gap-y-4 mt-12">
                <div class="flex items-center gap-2 text-sm md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                    <span>No requiere tarjeta de crédito</span>
                </div>
                <div class="flex items-center gap-2 text-sm md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                    <span>Cancela cuando quieras</span>
                </div>
                <div class="flex items-center gap-2 text-sm md:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                    <span>Soporte en español</span>
                </div>
            </div>
        </div> 
        <footer class="bg-slate-950 text-white mt-20 pt-40 pb-32">
            <div class="max-w-7xl mx-auto px-8 lg:px-12">
            </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                </div>
                    <div class="flex items-center gap-2">
                        <div class="w-12 h-12 gap-2 flex items-center justify-center bg-gradient-to-b from-[#784BFB] to-[#FA2DF0] rounded-xl">
                            <span class="text-3xl text-white ">V</span>
                        </div>
                        <span class="text-xl font-bold">Ventix</span>
                        <p class="mt-4 text-slate-400">
                        La plataforma SaaS que impulsa el <br>crecimiento de tu negocio con inteligencia.
                        </p>
                    </div>
                    
        </footer>
</body>
</html>