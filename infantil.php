<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento Infantil - IBS Matamoros</title>
    <link rel="icon" href="src/logo.png" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            yellow: '#F59E0B',
                            light: '#FEF3C7',
                            dark: '#B45309',
                            white: '#FFFFFF',
                            gray: '#1F2937'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Roboto Slab', 'serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Navegación -->
    <nav class="bg-brand-white shadow-md fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <a href="index.php" class="flex items-center gap-3">
                        <img src="src/logo.png" alt="Logo IBSM" class="h-12 w-12 rounded-full shadow-lg object-cover">
                        <div>
                            <h1 class="font-bold text-gray-900 text-lg leading-tight md:text-xl">IBS Matamoros</h1>
                            <p class="text-xs text-brand-dark uppercase tracking-wider font-semibold">Heroica Matamoros</p>
                        </div>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="index.php" class="text-gray-600 hover:text-brand-yellow font-medium transition">Inicio</a>
                    <a href="creencias.php" class="text-gray-600 hover:text-brand-yellow font-medium transition">¿Qué Creemos?</a>
                    <div class="relative group">
                        <button class="text-gray-600 hover:text-brand-yellow font-medium transition flex items-center gap-1">
                            Ministerios <i class="ph ph-caret-down"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all transform origin-top-left z-50">
                            <a href="infantil.php" class="block px-4 py-2 text-sm text-brand-dark bg-brand-light font-bold">Depto. Infantil</a>
                            <a href="jovenes.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Jóvenes</a>
                            <a href="campamentos.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Campamentos</a>
                            <a href="rutas.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Rutas de Transporte</a>
                        </div>
                    </div>
                    <a href="conferencia.php" class="bg-brand-yellow text-white px-4 py-2 rounded-md font-bold shadow hover:bg-yellow-500 transition flex items-center gap-2">
                        <i class="ph ph-globe"></i> Misiones
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                    <button onclick="toggleMenu()" class="text-gray-600 hover:text-brand-yellow p-2">
                        <i class="ph ph-list text-3xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="index.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Inicio</a>
                <a href="creencias.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Doctrina & Salvación</a>
                <a href="conferencia.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Conferencia Misionera</a>
                <a href="campamentos.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Campamentos</a>
                <a href="infantil.php" class="block px-3 py-2 text-base font-medium text-brand-dark bg-brand-light rounded-md">Niños y Cuna</a>
                <a href="jovenes.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Jóvenes</a>
                <a href="rutas.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Rutas</a>
            </div>
        </div>
    </nav>

    <!-- Header Infantil -->
    <header class="bg-blue-500 text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20 z-0"></div>
        <img src="https://placehold.co/1920x600/3B82F6/white?text=Niños+Felices" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl font-serif font-bold mb-4">Departamento Infantil</h1>
            <p class="text-xl max-w-2xl mx-auto">Instruyendo al niño en su camino con amor, diversión y la Palabra de Dios.</p>
        </div>
    </header>

    <!-- Clases y Edades -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Escuela Dominical</h2>
                <p class="text-gray-600 mt-2">Clases divididas por edades y género para una enseñanza personalizada.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-blue-50 p-6 rounded-xl text-center border-t-4 border-blue-500 shadow-md">
                    <div class="text-4xl font-bold text-blue-600 mb-2">3-5</div>
                    <p class="font-bold text-gray-700">Años</p>
                    <p class="text-sm text-gray-500 mt-2">Primeros pasos en la fe</p>
                </div>
                <div class="bg-green-50 p-6 rounded-xl text-center border-t-4 border-green-500 shadow-md">
                    <div class="text-4xl font-bold text-green-600 mb-2">6-7</div>
                    <p class="font-bold text-gray-700">Años</p>
                    <p class="text-sm text-gray-500 mt-2">Historias bíblicas</p>
                </div>
                <div class="bg-yellow-50 p-6 rounded-xl text-center border-t-4 border-yellow-500 shadow-md">
                    <div class="text-4xl font-bold text-yellow-600 mb-2">8-9</div>
                    <p class="font-bold text-gray-700">Años</p>
                    <p class="text-sm text-gray-500 mt-2">Creciendo en sabiduría</p>
                </div>
                <div class="bg-red-50 p-6 rounded-xl text-center border-t-4 border-red-500 shadow-md">
                    <div class="text-4xl font-bold text-red-600 mb-2">10-11</div>
                    <p class="font-bold text-gray-700">Años</p>
                    <p class="text-sm text-gray-500 mt-2">Preparación pre-juvenil</p>
                </div>
            </div>

            <div class="mt-12 bg-gray-50 p-8 rounded-2xl flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4">Instalaciones de Primera</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3"><i class="ph ph-thermometer-cold text-blue-500 text-xl"></i> Salones totalmente climatizados</li>
                        <li class="flex items-center gap-3"><i class="ph ph-projector-screen text-blue-500 text-xl"></i> Templo infantil con pantallas y sonido</li>
                        <li class="flex items-center gap-3"><i class="ph ph-users-three text-blue-500 text-xl"></i> Maestros capacitados y dedicados</li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <img src="https://placehold.co/600x400/blue/white?text=Templo+Infantil" class="rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Cuna -->
    <section class="py-16 bg-pink-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row-reverse items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/pink/white?text=Cuna+Bebes" class="rounded-xl shadow-2xl rotate-2 hover:rotate-0 transition duration-500">
            </div>
            <div class="md:w-1/2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-pink-100 p-2 rounded-full"><i class="ph ph-baby text-3xl text-pink-500"></i></div>
                    <h2 class="text-3xl font-bold text-gray-900">Servicio de Cuna</h2>
                </div>
                <p class="text-gray-700 text-lg mb-6">
                    Sabemos que como padres desean escuchar la palabra de Dios con atención. Por eso, contamos con un área especial para bebés donde serán atendidos con amor y seguridad mientras ustedes están en el culto.
                </p>
                <ul class="space-y-2 text-gray-600">
                    <li><i class="ph ph-check text-pink-500"></i> Personal de confianza</li>
                    <li><i class="ph ph-check text-pink-500"></i> Área limpia y segura</li>
                    <li><i class="ph ph-check text-pink-500"></i> Juegos apropiados para su edad</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Momentos Felices</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="https://placehold.co/300x300/blue/white?text=Clase" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/300x300/green/white?text=Manualidades" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/300x300/yellow/white?text=Cantos" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/300x300/red/white?text=Juegos" class="rounded-lg shadow hover:scale-105 transition duration-300">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-white text-lg font-bold mb-4">IBS Matamoros</h4>
                <p class="mb-4">Una iglesia de puertas abiertas, predicando la sana doctrina y el amor de Cristo.</p>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-4">Ubicación</h4>
                <p class="mb-2"><i class="ph ph-map-pin text-brand-yellow mr-2"></i>Las Flores, 87395</p>
                <p class="mb-2">Heroica Matamoros, Tamaulipas</p>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="creencias.php" class="hover:text-brand-yellow">Plan de Salvación</a></li>
                    <li><a href="conferencia.php" class="hover:text-brand-yellow">Misiones</a></li>
                    <li><a href="rutas.php" class="hover:text-brand-yellow">Rutas</a></li>
                    <li><a href="jovenes.php" class="hover:text-brand-yellow">Jóvenes</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-8 pt-8 border-t border-gray-800 text-center text-sm">
            <p>&copy; 2023 Iglesia Bautista del Sur de Matamoros. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
