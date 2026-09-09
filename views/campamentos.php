<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campamentos - IBSM Matamoros</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
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

    <?php include 'includes/navbar.php'; ?>

    <!-- Header Campamentos -->
    <header class="text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <img src="<?=BASE_URL ?>assets/img/camp-ado.jpg" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <i class="ph ph-tent text-8xl mb-4 inline-block"></i>
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
                <img src="<?=BASE_URL ?>assets/img/camp.jpg" class="rounded-xl shadow-2xl rotate-2 hover:rotate-0 transition duration-500">
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
                <img src="<?=BASE_URL ?>assets/img/camp.webp" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/ado.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/ado-2.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/asado.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/preacher.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/oanza.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/bat.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="<?=BASE_URL ?>assets/img/josue.jpg" class="h-60 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
