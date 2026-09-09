<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencia Misionera - IBSM Matamoros</title>
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

    <!-- Header Conferencia -->
    <header class="bg-brand-dark text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
        <img src="https://placehold.co/1920x600/B45309/white?text=Conferencia+Misionera" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <i class="ph ph-globe-hemisphere-west text-8xl mb-4 inline-block"></i><br>
            <span class="bg-brand-yellow text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest mb-4 inline-block">19 al 23 de Noviembre 2026</span>
            <h1 class="text-5xl font-serif font-bold mb-4">35ª Conferencia Misionera</h1>
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
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-t-shirt text-brand-yellow text-2xl"></i> <span class="font-medium">Camisas conmemorativas de fútbol y Guayaberas</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-ticket text-brand-yellow text-2xl"></i> <span class="font-medium">Juegos mecánicos en el campamento</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-hamburger text-brand-yellow text-2xl"></i> <span class="font-medium">Almuerzos, comidas y cenas gratis</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-house text-brand-yellow text-2xl"></i> <span class="font-medium">Hospedaje en hoteles para misioneros</span></li>
                        <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-gift text-brand-yellow text-2xl"></i> <span class="font-medium">Regalos y apoyos económicos</span></li>
                    </ul>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="assets/img/Pastor_2.jpg" class="rounded-xl shadow-lg w-full h-full object-cover">
                    <img src="assets/img/guayaberas.jpg" class="rounded-xl shadow-lg w-full h-full object-cover mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- Misioneros -->
    <section class="py-16 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Nuestros Misioneros que apoyamos</h2>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Mock Missionaries -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia_gallo.jpg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Gallo</h4>
                    <p class="text-brand-dark text-sm font-bold">Rio Bamba, Chimborazo - Ecuador 🇪🇨</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia_mata.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Mata</h4>
                    <p class="text-brand-dark text-sm font-bold">Salto de los Salados, Aguascalientes - México 🇲🇽</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia_romero.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Romero</h4>
                    <p class="text-brand-dark text-sm font-bold">Tunja, Boyaca - Colombia 🇨🇴</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia_lopez.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. López</h4>
                    <p class="text-brand-dark text-sm font-bold">Cadereyta, Nuevo León - México 🇲🇽</p>
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
                    <img src="assets/img/familia_lopez_ramirez.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Lopez Ramirez</h4>
                    <p class="text-brand-dark text-sm font-bold">Maputo, Mozambique - Africa 🇲🇿</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="https://placehold.co/150x150/gray/white?text=Fam.+Jones" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Jones</h4>
                    <p class="text-brand-dark text-sm font-bold">África</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
<script src="assets/js/registro-misiones.js"></script>
</html>
