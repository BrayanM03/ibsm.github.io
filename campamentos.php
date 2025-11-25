<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campamentos - IBS Matamoros</title>
    <link rel="icon" href="src/logo.png" type="image/png">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter & Roboto Slab -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <!-- Phosphor Icons -->
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
                <!-- Logo y Nombre -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <a href="index.php" class="flex items-center gap-3">
                        <img src="src/logo.png" alt="Logo IBSM" class="h-12 w-12 rounded-full shadow-lg object-cover">
                        <div>
                            <h1 class="font-bold text-gray-900 text-lg leading-tight md:text-xl">IBS Matamoros</h1>
                            <p class="text-xs text-brand-dark uppercase tracking-wider font-semibold">Heroica Matamoros</p>
                        </div>
                    </a>
                </div>

                <!-- Menú Desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="index.php" class="text-gray-600 hover:text-brand-yellow font-medium transition">Inicio</a>
                    <a href="creencias.php" class="text-gray-600 hover:text-brand-yellow font-medium transition">¿Qué Creemos?</a>
                    <div class="relative group">
                        <button class="text-gray-600 hover:text-brand-yellow font-medium transition flex items-center gap-1">
                            Ministerios <i class="ph ph-caret-down"></i>
                        </button>
                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-56 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all transform origin-top-left z-50">
                            <a href="infantil.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Depto. Infantil</a>
                            <a href="jovenes.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Jóvenes</a>
                            <a href="campamentos.php" class="block px-4 py-2 text-sm text-brand-dark bg-brand-light font-bold">Campamentos</a>
                            <a href="rutas.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Rutas de Transporte</a>
                        </div>
                    </div>
                    <a href="conferencia.php" class="bg-brand-yellow text-white px-4 py-2 rounded-md font-bold shadow hover:bg-yellow-500 transition flex items-center gap-2">
                        <i class="ph ph-globe"></i> Misiones
                    </a>
                </div>

                <!-- Botón Menú Móvil -->
                <div class="flex items-center md:hidden">
                    <button onclick="toggleMenu()" class="text-gray-600 hover:text-brand-yellow p-2">
                        <i class="ph ph-list text-3xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="index.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Inicio</a>
                <a href="creencias.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Doctrina & Salvación</a>
                <a href="conferencia.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Conferencia Misionera</a>
                <a href="campamentos.php" class="block px-3 py-2 text-base font-medium text-brand-dark bg-brand-light rounded-md">Campamentos</a>
                <a href="infantil.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Niños y Cuna</a>
                <a href="jovenes.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Jóvenes</a>
                <a href="rutas.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Rutas</a>
            </div>
        </div>
    </nav>

    <!-- Header Campamentos -->
    <header class="bg-green-700 text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
        <img src="https://placehold.co/1920x600/2F855A/white?text=Campamento+IBSM" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl font-serif font-bold mb-4">Nuestros Campamentos</h1>
            <p class="text-xl max-w-2xl mx-auto">Un lugar apartado para desconectarse del mundo y conectarse con Dios. Diversión, amigos y palabra de vida.</p>
        </div>
    </header>

    <!-- Instalaciones y Servicios -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Instalaciones y Actividades</h2>
                <p class="text-gray-600 mt-2">Todo lo necesario para una experiencia inolvidable.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 text-green-600 text-3xl">
                        <i class="ph ph-house-line"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Cabañas</h3>
                    <p class="text-sm text-gray-600">Cómodas cabañas separadas para hombres y mujeres, con literas y baños completos.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 text-orange-600 text-3xl">
                        <i class="ph ph-fire"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Fogatas</h3>
                    <p class="text-sm text-gray-600">Noches especiales alrededor del fuego, con testimonios, cantos y bombones.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-600 text-3xl">
                        <i class="ph ph-soccer-ball"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Juegos y Deportes</h3>
                    <p class="text-sm text-gray-600">Canchas deportivas, rallys, juegos organizados y competencias por equipos.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 text-yellow-600 text-3xl">
                        <i class="ph ph-hamburger"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Comedor</h3>
                    <p class="text-sm text-gray-600">Deliciosa comida casera preparada con higiene y amor. ¡Nadie se queda con hambre!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enfoque Espiritual -->
    <section class="py-16 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/F59E0B/white?text=Predicacion+Campamento" class="rounded-xl shadow-2xl rotate-2 hover:rotate-0 transition duration-500">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Crecimiento Espiritual</h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-brand-yellow text-white rounded-full flex items-center justify-center font-bold text-xl">1</div>
                        <div>
                            <h4 class="font-bold text-lg">Predicaciones Poderosas</h4>
                            <p class="text-gray-700">Mensajes bíblicos enfocados en las necesidades de cada grupo de edad.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-brand-yellow text-white rounded-full flex items-center justify-center font-bold text-xl">2</div>
                        <div>
                            <h4 class="font-bold text-lg">Clases y Talleres</h4>
                            <p class="text-gray-700">Enseñanza práctica para la vida diaria cristiana.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-brand-yellow text-white rounded-full flex items-center justify-center font-bold text-xl">3</div>
                        <div>
                            <h4 class="font-bold text-lg">Tiempo a Solas con Dios</h4>
                            <p class="text-gray-700">Momentos dedicados a la oración y lectura personal en la naturaleza.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Galería de Recuerdos</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="https://placehold.co/400x300/green/white?text=Juegos" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/blue/white?text=Alberca" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/orange/white?text=Comida" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/red/white?text=Fogata" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/purple/white?text=Culto" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/yellow/white?text=Amigos" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/teal/white?text=Naturaleza" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x300/gray/white?text=Foto+Grupal" class="rounded-lg shadow hover:scale-105 transition duration-300">
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
