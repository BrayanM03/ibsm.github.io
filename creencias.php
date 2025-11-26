<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Qué Creemos? - IBS Matamoros</title>
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

    <!-- Header Creencias -->
    <header class="bg-brand-gray text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gray-900 opacity-95 z-0"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <i class="ph ph-book-open text-8xl text-brand-yellow mb-4 inline-block"></i>
            <h1 class="text-5xl font-serif font-bold mb-4">Nuestra Fe</h1>
            <p class="text-xl max-w-2xl mx-auto">"Lámpara es a mis pies tu palabra, y lumbrera a mi camino." - Salmos 119:105</p>
        </div>
    </header>

    <!-- Doctrina -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Doctrina Fundamental</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow">
                    <h3 class="font-bold text-xl mb-2">La Biblia</h3>
                    <p class="text-gray-600">Creemos que la Biblia es la palabra inspirada de Dios, infalible e inerrante, y la única autoridad para nuestra fe y práctica.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow">
                    <h3 class="font-bold text-xl mb-2">Dios</h3>
                    <p class="text-gray-600">Creemos en un solo Dios verdadero, eternamente existente en tres personas: Padre, Hijo y Espíritu Santo.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow">
                    <h3 class="font-bold text-xl mb-2">Jesucristo</h3>
                    <p class="text-gray-600">Creemos en su deidad, su nacimiento virginal, su vida sin pecado, su muerte expiatoria, su resurrección corporal y su segunda venida.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-brand-yellow">
                    <h3 class="font-bold text-xl mb-2">Salvación</h3>
                    <p class="text-gray-600">Creemos que la salvación es un regalo de Dios ofrecido al hombre por gracia y recibido por la fe personal en el Señor Jesucristo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Plan de Salvación -->
    <section class="py-16 bg-brand-yellow text-white">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">El Plan de Salvación</h2>
            <div class="space-y-8">
                <div class="bg-white text-gray-900 p-8 rounded-2xl shadow-xl flex flex-col md:flex-row gap-6 items-center">
                    <div class="bg-gray-200 text-gray-700 font-bold w-16 h-16 rounded-full flex items-center justify-center text-2xl flex-shrink-0">1</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Todos hemos pecado</h3>
                        <p class="text-lg italic">"Por cuanto todos pecaron, y están destituidos de la gloria de Dios." (Romanos 3:23)</p>
                        <p class="mt-2 text-gray-600">Nadie es perfecto. Todos hemos fallado y eso nos separa de un Dios Santo.</p>
                    </div>
                </div>

                <div class="bg-white text-gray-900 p-8 rounded-2xl shadow-xl flex flex-col md:flex-row gap-6 items-center">
                    <div class="bg-gray-200 text-gray-700 font-bold w-16 h-16 rounded-full flex items-center justify-center text-2xl flex-shrink-0">2</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">La paga del pecado es muerte</h3>
                        <p class="text-lg italic">"Porque la paga del pecado es muerte..." (Romanos 6:23a)</p>
                        <p class="mt-2 text-gray-600">El resultado de nuestro pecado es la separación eterna de Dios.</p>
                    </div>
                </div>

                <div class="bg-white text-gray-900 p-8 rounded-2xl shadow-xl flex flex-col md:flex-row gap-6 items-center border-4 border-white">
                    <div class="bg-brand-yellow text-white font-bold w-16 h-16 rounded-full flex items-center justify-center text-2xl flex-shrink-0">3</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Cristo pagó por ti</h3>
                        <p class="text-lg italic">"Mas Dios muestra su amor para con nosotros, en que siendo aún pecadores, Cristo murió por nosotros." (Romanos 5:8)</p>
                        <p class="mt-2 text-gray-600">Jesús tomó tu lugar en la cruz. Él pagó la deuda que tú no podías pagar.</p>
                    </div>
                </div>

                <div class="bg-white text-gray-900 p-8 rounded-2xl shadow-xl flex flex-col md:flex-row gap-6 items-center border-4 border-white">
                    <div class="bg-brand-yellow text-white font-bold w-16 h-16 rounded-full flex items-center justify-center text-2xl flex-shrink-0">4</div>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Debes creer y confesar</h3>
                        <p class="text-lg italic">"Que si confesares con tu boca que Jesús es el Señor, y creyeres en tu corazón que Dios le levantó de los muertos, serás salvo." (Romanos 10:9)</p>
                        <p class="mt-2 text-gray-600">No es por obras, es por fe. Acepta hoy el regalo de Dios.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-xl mb-6">¿Has tomado esta decisión? ¡Nos gustaría saber de ti!</p>
                <button class="bg-white text-brand-dark px-8 py-3 rounded-full font-bold text-lg hover:bg-gray-100 transition shadow-lg">
                    Contactar a un Consejero
                </button>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
