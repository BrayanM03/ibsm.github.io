<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iglesia Bautista del Sur de Matamoros</title>
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
                            yellow: '#F59E0B', // Amber 500 - Un amarillo cálido y legible
                            light: '#FEF3C7', // Amber 100
                            dark: '#B45309',  // Amber 700
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
    <style>
        /* Estilos personalizados para efectos suaves */
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('src/bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .mission-pattern {
            background-color: #FEF3C7;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23F59E0B' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- Navegación -->
    <nav class="bg-brand-white shadow-md fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo y Nombre -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <img src="src/logo.png" alt="Logo IBSM" class="h-12 w-12 rounded-full shadow-lg object-cover">
                    <div>
                        <h1 class="font-bold text-gray-900 text-lg leading-tight md:text-xl">IBSM Matamoros</h1>
                        <p class="text-xs text-brand-dark uppercase tracking-wider font-semibold">Firmes y constantes</p>
                    </div>
                </div>

                <!-- Menú Desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#inicio" class="text-gray-600 hover:text-brand-yellow font-medium transition">Inicio</a>
                    <a href="creencias.php" class="text-gray-600 hover:text-brand-yellow font-medium transition">¿Qué Creemos?</a>
                    <div class="relative group">
                        <button class="text-gray-600 hover:text-brand-yellow font-medium transition flex items-center gap-1">
                            Ministerios <i class="ph ph-caret-down"></i>
                        </button>
                        <!-- Dropdown -->
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
                <a href="#inicio" onclick="toggleMenu()" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Inicio</a>
                <a href="creencias.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Doctrina & Salvación</a>
                <a href="conferencia.php" class="block px-3 py-2 text-base font-medium text-brand-dark bg-brand-light rounded-md">Conferencia Misionera</a>
                <a href="campamentos.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Campamentos</a>
                <a href="infantil.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Niños y Cuna</a>
                <a href="jovenes.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Jóvenes</a>
                <a href="rutas.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-brand-light rounded-md">Rutas</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-bg h-screen flex items-center justify-center text-center px-4 pt-20">
        <div class="bg-white/90 backdrop-blur-sm p-8 md:p-12 rounded-xl shadow-2xl max-w-4xl border-t-8 border-brand-yellow">
            <img src="src/logo.png" alt="Logo Iglesia" class="w-24 h-24 mx-auto rounded-full mb-6 shadow-md border-4 border-white object-cover">
            <h2 class="text-4xl md:text-6xl font-serif font-bold text-gray-900 mb-4">Iglesia Bautista del Sur de Matamoros</h2>
            <p class="text-xl md:text-2xl text-brand-dark font-medium">"Firmes y constantes siempre"</p>
            <small class="mb-4">1 Cor 15:58</small>
            <p class="text-gray-600 mt-5 mb-8 max-w-2xl mx-auto">Bienvenidos a nuestra familia en Las Flores, Matamoros. Un lugar para crecer, servir y adorar a Dios.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="creencias.php" class="bg-brand-yellow text-white px-8 py-3 rounded-full font-bold text-lg hover:bg-yellow-500 transition shadow-lg transform hover:-translate-y-1">
                    Plan de Salvación
                </a>
                <a href="conferencia.php" class="bg-white text-brand-dark border-2 border-brand-yellow px-8 py-3 rounded-full font-bold text-lg hover:bg-brand-light transition shadow-md">
                    Ver Misiones
                </a>
            </div>
        </div>
    </section>

    <!-- Sección de Horarios y Bienvenida Pastor -->
    <section class="py-16 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Tarjeta del Pastor -->
                <div class="relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-brand-light rounded-full z-0"></div>
                    <img src="src/Pastor.jpg" alt="Pastor" class="relative z-10 rounded-lg shadow-xl w-full object-cover h-80">
                    <div class="mt-6 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-gray-900">Bienvenido a casa</h3>
                        <p class="text-gray-600 mt-2">Nuestras puertas y nuestros corazones están abiertos. Te invitamos a conocer a Cristo y crecer junto a nosotros bajo la guía de nuestro Pastor.</p>
                    </div>
                </div>

                <!-- Horarios -->
                <div class="bg-brand-yellow text-white p-8 rounded-2xl shadow-xl">
                    <h3 class="text-3xl font-serif font-bold mb-6 flex items-center gap-3">
                        <i class="ph ph-clock text-4xl text-white"></i> Horarios de Cultos
                    </h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4 border-b border-yellow-400 pb-4">
                            <span class="font-bold bg-white text-brand-yellow px-3 py-1 rounded text-sm uppercase w-24 text-center">Miércoles</span>
                            <div>
                                <p class="font-bold text-lg">Culto de Oración y Estudio</p>
                                <p class="opacity-90">7:00 pm - 9:00 pm</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 border-b border-yellow-400 pb-4">
                            <span class="font-bold bg-white text-brand-yellow px-3 py-1 rounded text-sm uppercase w-24 text-center">Sábado</span>
                            <div>
                                <p class="font-bold text-lg">Culto de Jóvenes</p>
                                <p class="opacity-90">6:00 pm - 8:30 pm</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="font-bold bg-white text-brand-yellow px-3 py-1 rounded text-sm uppercase w-24 text-center">Domingo</span>
                            <div>
                                <p class="font-bold text-lg">Escuela Dominical y Culto Matutino</p>
                                <p class="opacity-90 mb-1">10:00 am - 12:30 pm</p>
                                <p class="font-bold text-lg mt-2">Culto Vespertino</p>
                                <p class="opacity-90">6:00 pm - 8:00 pm</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Conferencia Misionera (Highlight Section) -->
    <section id="conferencia" class="py-20 mission-pattern border-y border-brand-yellow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="bg-brand-dark text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest">Evento Destacado</span>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mt-4 mb-4">34ª Conferencia Misionera</h2>
                <h3 class="text-2xl text-brand-yellow font-bold italic">"Unidos en un mismo sentir"</h3>
                <p class="max-w-3xl mx-auto mt-6 text-gray-700 text-lg">
                    Acabamos de celebrar nuestra conferencia anual, un tiempo de avivamiento, compromiso y bendición para nuestros misioneros y la iglesia.
                </p>
            </div>

            <!-- Galería y Detalles -->
            <div class="grid lg:grid-cols-3 gap-8 mb-16">
                <!-- Tarjeta de Actividades -->
                <div class="lg:col-span-1 bg-white p-6 rounded-xl shadow-lg border-l-4 border-brand-yellow">
                    <h4 class="text-xl font-bold mb-4 text-gray-800">Lo que vivimos:</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3"><i class="ph ph-t-shirt text-brand-yellow text-xl"></i> Camisas de fútbol conmemorativas</li>
                        <li class="flex items-center gap-3"><i class="ph ph-ticket text-brand-yellow text-xl"></i> Juegos mecánicos en el campamento</li>
                        <li class="flex items-center gap-3"><i class="ph ph-hamburger text-brand-yellow text-xl"></i> Almuerzos, comidas y cenas gratis</li>
                        <li class="flex items-center gap-3"><i class="ph ph-house text-brand-yellow text-xl"></i> Hospedaje en hoteles para misioneros</li>
                        <li class="flex items-center gap-3"><i class="ph ph-gift text-brand-yellow text-xl"></i> Regalos y apoyos económicos</li>
                    </ul>
                </div>
                <!-- Galería Placeholder -->
                <div class="lg:col-span-2 grid grid-cols-2 gap-4">
                    <img src="src/confe_3.jpg" class="rounded-lg shadow-md w-full h-full object-cover">
                    <img src="src/confe_2.jpg" class="rounded-lg shadow-md w-full h-full object-cover">
                    <img src="src/confe_pastores.jpg" class="rounded-lg shadow-md w-full h-full object-cover">
                    <img src="src/confe_1.jpg" class="rounded-lg shadow-md w-full h-full object-cover">
                </div>
            </div>

            <!-- Misioneros Apoyados -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-center mb-8">Misioneros que Apoyamos</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Misionero Mock 1 -->
                    <div class="text-center group">
                        <div class="overflow-hidden rounded-full w-32 h-32 mx-auto mb-4 border-4 border-brand-light group-hover:border-brand-yellow transition">
                            <img src="https://placehold.co/150x150/gray/white?text=Fam.+Perez" alt="Misionero" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-lg">Fam. Pérez</h4>
                        <p class="text-sm text-brand-dark font-medium">Sierra de Oaxaca</p>
                    </div>
                    <!-- Misionero Mock 2 -->
                    <div class="text-center group">
                        <div class="overflow-hidden rounded-full w-32 h-32 mx-auto mb-4 border-4 border-brand-light group-hover:border-brand-yellow transition">
                            <img src="https://placehold.co/150x150/gray/white?text=Fam.+Gomez" alt="Misionero" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-lg">Fam. Gómez</h4>
                        <p class="text-sm text-brand-dark font-medium">India</p>
                    </div>
                    <!-- Misionero Mock 3 -->
                    <div class="text-center group">
                        <div class="overflow-hidden rounded-full w-32 h-32 mx-auto mb-4 border-4 border-brand-light group-hover:border-brand-yellow transition">
                            <img src="https://placehold.co/150x150/gray/white?text=Fam.+Smith" alt="Misionero" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-lg">Fam. Smith</h4>
                        <p class="text-sm text-brand-dark font-medium">Chiapas, MX</p>
                    </div>
                    <!-- Misionero Mock 4 -->
                    <div class="text-center group">
                        <div class="overflow-hidden rounded-full w-32 h-32 mx-auto mb-4 border-4 border-brand-light group-hover:border-brand-yellow transition">
                            <img src="https://placehold.co/150x150/gray/white?text=Fam.+Lopez" alt="Misionero" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-lg">Fam. López</h4>
                        <p class="text-sm text-brand-dark font-medium">Plantación Local</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resumen de Ministerios (Grid de Navegación) -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Nuestros Ministerios</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Infantil -->
                <a href="infantil.php" class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/F59E0B/white?text=Niños" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute bottom-0 left-0 bg-brand-yellow text-white px-3 py-1 font-bold text-sm">3 a 11 Años</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 group-hover:text-brand-yellow transition">Departamento Infantil</h3>
                        <p class="text-gray-600 text-sm mb-4">Clases bíblicas divididas por edades y género, templo especial con multimedia.</p>
                        <span class="text-brand-dark font-bold text-sm flex items-center gap-1">Ver más <i class="ph ph-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Jóvenes -->
                <a href="jovenes.php" class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/333/white?text=Jovenes" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute bottom-0 left-0 bg-gray-800 text-white px-3 py-1 font-bold text-sm">12 Años en adelante</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 group-hover:text-brand-yellow transition">Jóvenes y Adolescentes</h3>
                        <p class="text-gray-600 text-sm mb-4">Cultos sabatinos, conferencias, actividades recreativas y comunión.</p>
                        <span class="text-brand-dark font-bold text-sm flex items-center gap-1">Ver más <i class="ph ph-arrow-right"></i></span>
                    </div>
                </a>

                <!-- Campamentos -->
                <a href="campamentos.php" class="group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/2F855A/white?text=Campamento" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute bottom-0 left-0 bg-green-600 text-white px-3 py-1 font-bold text-sm">Instalaciones</div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 group-hover:text-brand-yellow transition">Campamentos</h3>
                        <p class="text-gray-600 text-sm mb-4">Cabañas, fogatas, juegos y predicación. Un lugar para desconectarse y conectar con Dios.</p>
                        <span class="text-brand-dark font-bold text-sm flex items-center gap-1">Ver más <i class="ph ph-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Doctrina y Plan de Salvación (IMPORTANTE) -->
    <section id="creencias" class="py-20 bg-brand-gray text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gray-900 opacity-95 z-0"></div>
        <div class="max-w-5xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <i class="ph ph-book-open text-6xl text-brand-yellow mb-4"></i>
                <h2 class="text-4xl font-bold mb-4">¿En qué creemos?</h2>
                <p class="text-xl text-gray-300">Nuestra fe se basa únicamente en la Palabra de Dios.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Doctrina -->
                <div>
                    <h3 class="text-2xl font-bold text-brand-yellow mb-4 border-b border-gray-700 pb-2">Doctrina Fundamental</h3>
                    <ul class="space-y-4 text-gray-300">
                        <li class="flex gap-3"><i class="ph ph-check-circle text-brand-yellow mt-1"></i> Creemos que la Biblia es la palabra inspirada de Dios.</li>
                        <li class="flex gap-3"><i class="ph ph-check-circle text-brand-yellow mt-1"></i> Creemos en la Trinidad: Padre, Hijo y Espíritu Santo.</li>
                        <li class="flex gap-3"><i class="ph ph-check-circle text-brand-yellow mt-1"></i> Creemos que la salvación es solo por gracia mediante la fe.</li>
                        <li class="flex gap-3"><i class="ph ph-check-circle text-brand-yellow mt-1"></i> Creemos en el bautismo por inmersión para creyentes.</li>
                    </ul>
                </div>

                <!-- Plan de Salvación -->
                <div class="bg-white text-gray-900 p-8 rounded-xl shadow-2xl transform md:scale-105 border-4 border-brand-yellow">
                    <h3 class="text-2xl font-bold text-center mb-6 uppercase tracking-wider">Plan de Salvación</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="bg-gray-200 text-gray-700 font-bold w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">1</div>
                            <p class="text-sm"><span class="font-bold">Todos hemos pecado:</span> "Por cuanto todos pecaron, y están destituidos de la gloria de Dios." (Romanos 3:23)</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-gray-200 text-gray-700 font-bold w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">2</div>
                            <p class="text-sm"><span class="font-bold">El pago es muerte:</span> "Porque la paga del pecado es muerte..." (Romanos 6:23a)</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-brand-yellow text-white font-bold w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">3</div>
                            <p class="text-sm"><span class="font-bold">Cristo pagó por ti:</span> "Mas Dios muestra su amor para con nosotros, en que siendo aún pecadores, Cristo murió por nosotros." (Romanos 5:8)</p>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-brand-yellow text-white font-bold w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">4</div>
                            <p class="text-sm"><span class="font-bold">Debes creer y confesar:</span> Que si confesares con tu boca que Jesús es el Señor, y creyeres en tu corazón... serás salvo. (Romanos 10:9)</p>
                        </div>
                        <div class="mt-6 text-center">
                            <button class="bg-brand-dark text-white px-6 py-2 rounded-full font-bold hover:bg-gray-800 transition w-full">¡Quiero saber más!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detalles de Ministerios (Secciones completas) -->
    
    <!-- Campamentos -->
    <section id="campamentos" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8 items-center mb-8">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-brand-dark mb-4">Instalaciones del Campamento</h2>
                    <p class="text-gray-600 mb-4">Nuestro campamento es un refugio preparado para la diversión y la espiritualidad. Contamos con áreas verdes extensas y todas las comodidades.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-brand-light p-3 rounded text-center"><i class="ph ph-house-line text-2xl text-brand-dark"></i><p class="font-bold text-sm">Cabañas</p></div>
                        <div class="bg-brand-light p-3 rounded text-center"><i class="ph ph-fire text-2xl text-brand-dark"></i><p class="font-bold text-sm">Fogatas</p></div>
                        <div class="bg-brand-light p-3 rounded text-center"><i class="ph ph-soccer-ball text-2xl text-brand-dark"></i><p class="font-bold text-sm">Juegos</p></div>
                        <div class="bg-brand-light p-3 rounded text-center"><i class="ph ph-hamburger text-2xl text-brand-dark"></i><p class="font-bold text-sm">Comedor</p></div>
                    </div>
                </div>
                <div class="md:w-1/2 grid grid-cols-2 gap-2">
                    <img src="https://placehold.co/400x300/green/white?text=Cabañas" class="rounded-lg shadow">
                    <img src="https://placehold.co/400x300/darkgreen/white?text=Actividades" class="rounded-lg shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Infantil y Cuna -->
    <section id="infantil" class="py-16 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Departamento Infantil y Cuna</h2>
            <p class="text-gray-600 mb-10">Instruyendo al niño en su camino con amor y excelencia.</p>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Cuna -->
                <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-pink-400">
                    <div class="flex items-center justify-center h-12 w-12 bg-pink-100 rounded-full mx-auto mb-4 text-pink-500 text-2xl"><i class="ph ph-baby"></i></div>
                    <h3 class="text-xl font-bold mb-2">Servicio de Cuna</h3>
                    <p class="text-gray-600">Atención especializada para bebés durante todos los cultos, permitiendo que los padres escuchen la palabra con tranquilidad.</p>
                </div>
                
                <!-- Clases -->
                <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-blue-400">
                    <div class="flex items-center justify-center h-12 w-12 bg-blue-100 rounded-full mx-auto mb-4 text-blue-500 text-2xl"><i class="ph ph-smiley"></i></div>
                    <h3 class="text-xl font-bold mb-2">Escuela Dominical</h3>
                    <p class="text-gray-600 mb-4">Salones climatizados y templo especial con pantallas y sonido.</p>
                    <div class="flex flex-wrap justify-center gap-2">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-bold">3-5 años</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-bold">6-7 años</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-bold">8-9 años</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-xs font-bold">10-11 años</span>
                    </div>
                </div>
            </div>
            <!-- Galería niños -->
            <div class="mt-8 flex gap-4 overflow-x-auto pb-4 snap-x">
                 <img src="https://placehold.co/300x200/blue/white?text=Templo+Niños" class="rounded-lg shadow-md snap-center flex-shrink-0">
                 <img src="https://placehold.co/300x200/pink/white?text=Clases" class="rounded-lg shadow-md snap-center flex-shrink-0">
                 <img src="https://placehold.co/300x200/orange/white?text=Actividades" class="rounded-lg shadow-md snap-center flex-shrink-0">
            </div>
        </div>
    </section>

    <!-- Jóvenes -->
    <section id="jovenes" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="bg-gray-900 text-white rounded-2xl overflow-hidden shadow-2xl flex flex-col md:flex-row">
                <div class="md:w-1/2 relative h-64 md:h-auto">
                    <img src="https://placehold.co/800x800/222/white?text=Jovenes+Adorando" class="absolute inset-0 w-full h-full object-cover opacity-70">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h2 class="text-4xl font-bold uppercase tracking-widest border-4 border-white p-4">Jóvenes</h2>
                    </div>
                </div>
                <div class="p-8 md:w-1/2">
                    <h3 class="text-2xl font-bold text-brand-yellow mb-4">Generación con Propósito</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-bold text-lg">Adolescentes (12-14 años)</h4>
                            <p class="text-gray-400 text-sm">Transición y fundamentos bíblicos sólidos.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Jóvenes (15+ años)</h4>
                            <p class="text-gray-400 text-sm">Retos, servicio y liderazgo.</p>
                        </div>
                        <div class="bg-gray-800 p-4 rounded-lg border-l-4 border-brand-yellow">
                            <h4 class="font-bold">Sábados 6:00 PM</h4>
                            <p class="text-sm mt-1">Conferencias juveniles, invitados especiales, comidas, hospedajes y gran convivencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rutas -->
    <section id="rutas" class="py-16 bg-brand-yellow text-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Rutas de Transporte</h2>
            <p class="max-w-2xl mx-auto mb-10 text-white/90">Queremos que vengas. Contamos con transporte gratuito que te lleva y te trae en las siguientes áreas:</p>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">18 de Octubre</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">Brisas</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">Palmares</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm leading-tight">Voluntad y Trabajo</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">La Luz</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">Lomas de San Juan</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">Palanganas</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">San Cristóbal</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">Misiones 2</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md p-4 rounded-lg hover:bg-white hover:text-brand-dark transition cursor-default">
                    <i class="ph ph-bus text-2xl mb-2"></i>
                    <p class="font-bold text-sm">La Ladrillera</p>
                </div>
            </div>
            <p class="mt-8 text-sm italic">¿Necesitas transporte? Contáctanos para saber los horarios de paso.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-white text-lg font-bold mb-4">IBSM Matamoros</h4>
                <p class="mb-4">Una iglesia de puertas abiertas, predicando la sana doctrina y el amor de Cristo.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-brand-yellow transition"><i class="ph ph-facebook-logo text-2xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-brand-yellow transition"><i class="ph ph-instagram-logo text-2xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-brand-yellow transition"><i class="ph ph-youtube-logo text-2xl"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold mb-4">Ubicación</h4>
                <p class="mb-2"><i class="ph ph-map-pin text-brand-yellow mr-2"></i>Las Flores, 87395</p>
                <p class="mb-2">Heroica Matamoros, Tamaulipas</p>
                <a href="https://maps.google.com/?q=Las+Flores+87395+Heroica+Matamoros+Tamps" target="_blank" class="text-brand-yellow hover:underline text-sm mt-2 block">Ver en Google Maps</a>
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
            <p>&copy; <?php echo date('Y'); ?> Iglesia Bautista del Sur de Matamoros. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        }

        // Efecto Navbar al hacer scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
                navbar.classList.add('bg-opacity-95');
            } else {
                navbar.classList.remove('shadow-lg');
                navbar.classList.remove('bg-opacity-95');
            }
        });
    </script>
</body>
</html>