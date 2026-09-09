<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas de Transporte - IBSM Matamoros</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
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

    <?php include 'includes/navbar.php'; ?>

    <!-- Header Rutas -->
    <header class="bg-brand-yellow text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <i class="ph ph-bus text-8xl mb-4 inline-block"></i>
            <h1 class="text-5xl font-serif font-bold mb-4">Rutas de Transporte</h1>
            <p class="text-xl max-w-2xl mx-auto">Queremos que estés aquí. Por eso, vamos por ti hasta tu colonia.</p>
        </div>
    </header>

    <!-- Lista de Rutas -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Cobertura Actual</h2>
                <p class="text-gray-600 mt-2">Contamos con 10 rutas activas que cubren gran parte de la ciudad.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">18 de Octubre</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">Brisas</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">Palmares</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">Voluntad y Trabajo</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">La Luz</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">Lomas de San Juan</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">Palanganas</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">San Cristóbal</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">Misiones 2</h3>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow hover:shadow-lg transition flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full shadow-sm"><i class="ph ph-map-pin text-2xl text-brand-dark"></i></div>
                    <h3 class="font-bold text-lg">La Ladrillera</h3>
                </div>
            </div>

            <div class="mt-16 bg-brand-light p-8 rounded-2xl text-center">
                <h3 class="text-2xl font-bold mb-4">¿Necesitas transporte?</h3>
                <p class="mb-6">Contáctanos para informarte sobre los horarios específicos de paso por tu colonia.</p>
                <button class="bg-brand-dark text-white px-8 py-3 rounded-full font-bold hover:bg-gray-800 transition shadow-lg">
                    Contactar Ahora
                </button>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
