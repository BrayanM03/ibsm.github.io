<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jóvenes - IBS Matamoros</title>
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
                            <a href="infantil.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-dark">Depto. Infantil</a>
                            <a href="jovenes.php" class="block px-4 py-2 text-sm text-brand-dark bg-brand-light font-bold">Jóvenes</a>
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
                <a href="infantil.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Niños y Cuna</a>
                <a href="jovenes.php" class="block px-3 py-2 text-base font-medium text-brand-dark bg-brand-light rounded-md">Jóvenes</a>
                <a href="rutas.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Rutas</a>
            </div>
        </div>
    </nav>

    <!-- Header Jóvenes -->
    <header class="bg-gray-900 text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-60 z-0"></div>
        <img src="https://placehold.co/1920x600/333/white?text=Jovenes+Adorando" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl font-serif font-bold mb-4">Ministerio de Jóvenes</h1>
            <p class="text-xl max-w-2xl mx-auto">Una generación apasionada por Cristo, viviendo con propósito y santidad.</p>
        </div>
    </header>

    <!-- Grupos -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg border-t-4 border-brand-yellow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Adolescentes (12-14 años)</h3>
                    <p class="text-gray-600 mb-4">Una etapa crucial de transición. Nos enfocamos en cimentar fundamentos bíblicos sólidos y compañerismo sano.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="ph ph-check text-brand-yellow"></i> Estudios dinámicos</li>
                        <li><i class="ph ph-check text-brand-yellow"></i> Actividades recreativas</li>
                    </ul>
                </div>
                <div class="bg-gray-900 text-white p-8 rounded-xl shadow-lg border-t-4 border-brand-yellow">
                    <h3 class="text-2xl font-bold mb-4">Jóvenes (15+ años)</h3>
                    <p class="text-gray-400 mb-4">Desafiando a los jóvenes a servir, liderar y vivir su fe sin avergonzarse en un mundo cambiante.</p>
                    <ul class="space-y-2 text-gray-300">
                        <li><i class="ph ph-check text-brand-yellow"></i> Retos de servicio</li>
                        <li><i class="ph ph-check text-brand-yellow"></i> Discipulado profundo</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Culto Sabatino -->
    <section class="py-16 bg-brand-yellow text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <i class="ph ph-calendar-check text-6xl mb-4"></i>
            <h2 class="text-4xl font-bold mb-4">Sábados 6:00 PM</h2>
            <p class="text-xl max-w-3xl mx-auto mb-8">
                Nuestra reunión semanal es el punto culminante. Tenemos conferencias juveniles con invitados especiales, tiempos de adoración, y una gran convivencia.
            </p>
            <div class="grid md:grid-cols-3 gap-6 text-brand-dark">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <i class="ph ph-microphone-stage text-4xl mb-2 text-brand-yellow"></i>
                    <h4 class="font-bold text-lg">Conferencias</h4>
                    <p class="text-sm">Temas relevantes para tu vida.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <i class="ph ph-pizza text-4xl mb-2 text-brand-yellow"></i>
                    <h4 class="font-bold text-lg">Comidas</h4>
                    <p class="text-sm">Cenas y convivios frecuentes.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <i class="ph ph-house-line text-4xl mb-2 text-brand-yellow"></i>
                    <h4 class="font-bold text-lg">Hospedaje</h4>
                    <p class="text-sm">Para invitados foráneos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Vida Juvenil</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="https://placehold.co/400x400/333/white?text=Adoracion" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x400/444/white?text=Predicacion" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x400/555/white?text=Juegos" class="rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://placehold.co/400x400/666/white?text=Amigos" class="rounded-lg shadow hover:scale-105 transition duration-300">
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
