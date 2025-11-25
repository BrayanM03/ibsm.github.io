<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencia Misionera - IBS Matamoros</title>
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
                <a href="conferencia.php" class="block px-3 py-2 text-base font-medium text-brand-dark bg-brand-light rounded-md">Conferencia Misionera</a>
                <a href="campamentos.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Campamentos</a>
                <a href="infantil.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Niños y Cuna</a>
                <a href="jovenes.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Jóvenes</a>
                <a href="rutas.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Rutas</a>
            </div>
        </div>
    </nav>

    <!-- Header Conferencia -->
    <header class="bg-brand-dark text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <img src="https://placehold.co/1920x600/B45309/white?text=Conferencia+Misionera" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <span class="bg-brand-yellow text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest mb-4 inline-block">Evento Anual</span>
            <h1 class="text-5xl font-serif font-bold mb-4">34ª Conferencia Misionera</h1>
            <h2 class="text-3xl font-bold italic text-brand-light">"Unidos en un mismo sentir"</h2>
        </div>
    </header>

    <!-- Resumen del Evento -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Un tiempo de bendición</h3>
                    <p class="text-gray-700 text-lg mb-6">
                        Acabamos de celebrar nuestra 34ª conferencia anual. Fue un tiempo de avivamiento donde Dios desafió nuestros corazones a seguir apoyando la obra misionera mundial.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-t-shirt text-brand-yellow text-2xl"></i> <span class="font-medium">Camisas conmemorativas de fútbol</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-ticket text-brand-yellow text-2xl"></i> <span class="font-medium">Juegos mecánicos en el campamento</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-hamburger text-brand-yellow text-2xl"></i> <span class="font-medium">Almuerzos, comidas y cenas gratis</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-house text-brand-yellow text-2xl"></i> <span class="font-medium">Hospedaje en hoteles para misioneros</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-gift text-brand-yellow text-2xl"></i> <span class="font-medium">Regalos y apoyos económicos</span></li>
                    </ul>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://placehold.co/400x500/F59E0B/white?text=Predicacion" class="rounded-xl shadow-lg w-full h-full object-cover">
                    <img src="https://placehold.co/400x500/B45309/white?text=Convivencia" class="rounded-xl shadow-lg w-full h-full object-cover mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- Misioneros -->
    <section class="py-16 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestros Misioneros</h2>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Mock Missionaries -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Perez" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Pérez</h4>
                    <p class="text-brand-dark text-sm font-bold">Sierra de Oaxaca</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Gomez" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Gómez</h4>
                    <p class="text-brand-dark text-sm font-bold">India</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Smith" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Smith</h4>
                    <p class="text-brand-dark text-sm font-bold">Chiapas, MX</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Lopez" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. López</h4>
                    <p class="text-brand-dark text-sm font-bold">Plantación Local</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Ruiz" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Ruiz</h4>
                    <p class="text-brand-dark text-sm font-bold">Veracruz</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Chen" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Chen</h4>
                    <p class="text-brand-dark text-sm font-bold">China</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Silva" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Silva</h4>
                    <p class="text-brand-dark text-sm font-bold">Brasil</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Jones" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Jones</h4>
                    <p class="text-brand-dark text-sm font-bold">África</p>
                </div>
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
