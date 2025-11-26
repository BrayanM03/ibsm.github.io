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

    <?php include 'includes/navbar.php'; ?>

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

    <?php include 'includes/footer.php'; ?>
</body>
</html>
