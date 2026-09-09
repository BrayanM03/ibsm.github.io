<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencia Misionera - IBSM Matamoros</title>
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c955c6e98.js" crossorigin="anonymous"></script>
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
    <header class=" text-white pt-32 pb-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-60 z-0"></div>
        <img src="assets/img/guayaberas.jpg" class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
            <i class="ph ph-globe-hemisphere-west text-8xl mb-4 inline-block"></i><br>
            <span class="bg-brand-yellow text-white px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest mb-4 inline-block">19 al 22 de Noviembre 2026</span>
            <h1 class="text-5xl font-serif font-bold mb-4">XXXV Conferencia Misionera 2026</h1>
            <h2 class="text-3xl font-bold italic text-brand-light">"Sabiendo que harás aun más"</h2>
            <span class="text-white/70 italic text-sm mt-2 inline-block">Filemón 1:21</span>

        </div>
    </header>

        <!-- Mensaje de Bienvenida del Pastor -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-brand-yellow opacity-10 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-72 h-72 bg-brand-dark opacity-5 rounded-full translate-x-1/3 translate-y-1/3"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <span class="text-brand-yellow font-bold uppercase tracking-widest text-sm">Palabras de bienvenida</span>
                <h2 class="text-4xl font-serif font-bold text-gray-900 mt-2">Un mensaje para ustedes, misioneros</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-12 items-start">

                <!-- Foto y datos del Pastor -->
                <div class="md:col-span-1 flex flex-col items-center text-center md:sticky md:top-24">
                    <div class="relative">
                        <div class="absolute inset-0 bg-brand-yellow rounded-2xl rotate-3"></div>
                        <img src="assets/img/Pastor.jpg" alt="Pastor Oscar F. Díaz Cruz" class="relative rounded-2xl shadow-xl w-64 h-72 object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mt-6">Pastor Oscar F. Díaz Cruz</h3>
                    <p class="text-gray-500 font-medium">Iglesia Bautista del Sur de Matamoros</p>
                    <i class="ph ph-quotes text-5xl text-brand-yellow mt-4"></i>
                </div>

                <!-- Mensaje -->
                <div class="md:col-span-2 bg-white rounded-2xl shadow-lg p-8 md:p-10 border-t-4 border-brand-yellow">
                    <p class="text-gray-700 text-lg font-semibold mb-4">Amados siervos de Dios:</p>

                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <p>Es un verdadero gozo para nosotros poder saludarles y, en nombre de la Iglesia Bautista del Sur de Matamoros, darles la más cordial bienvenida a nuestra XXXV Conferencia Misionera.</p>

                        <p>Desde que comenzamos a preparar esta conferencia, hemos orado para que cada uno de ustedes pueda sentirse en casa y que estos días sean mucho más que una reunión más en su agenda. Nuestro deseo es que puedan disfrutar de un tiempo especial de comunión, compañerismo, enseñanza, predicación y, sobre todo, de recordar juntos el gran privilegio que tenemos de participar en la obra misionera de nuestro Señor Jesucristo.</p>

                        <p>Nos llena de alegría saber que podremos recibir nuevamente a siervos que han entregado su vida al servicio de Dios y que, con sacrificio, fe y perseverancia, han decidido llevar el Evangelio a diferentes lugares y personas.</p>

                        <p>La obra misionera sigue siendo la gran comisión que Cristo ha dejado a Su Iglesia. Todavía existen pueblos que necesitan escuchar el Evangelio, familias que necesitan conocer a Cristo y corazones que necesitan recibir el mensaje de salvación. Por eso creemos que cada esfuerzo que hacemos por impulsar, sostener y animar las misiones tiene un propósito eterno.</p>

                        <p>Este año nos reuniremos bajo el tema:</p>
                    </div>

                    <div class="my-6 py-4 border-y-2 border-dashed border-gray-200 text-center">
                        <p class="text-2xl font-serif font-bold text-brand-dark italic">"Sabiendo que harás aún más"</p>
                    </div>

                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <p>Y esa es precisamente nuestra esperanza. Sabemos que Dios ya ha hecho grandes cosas, pero también sabemos que Él no ha terminado su obra. Confiamos en que hará aún más en nuestras iglesias, en nuestros misioneros, en nuestras ciudades y hasta lo último de la tierra.</p>

                        <p>Nuestro deseo es que cuando llegue el momento de regresar a sus iglesias, hogares y campos de servicio, no solamente se lleven buenos recuerdos de Matamoros, sino que regresen más animados, más fortalecidos, más comprometidos y profundamente retados a seguir haciendo la obra que Dios les ha encomendado.</p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <p class="text-xl font-bold text-brand-dark">¡Bienvenidos a Matamoros, Tamaulipas!</p>
                        <p class="text-xl font-bold text-brand-dark mb-4">¡Bienvenidos a nuestra XXXV Conferencia Misionera!</p>
                        <p class="font-serif italic text-gray-600">— Pastor Oscar F. Díaz Cruz</p>
                    </div>
                </div>

            </div>
        </div>
    </section> 
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
<!--                         <li class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg"><i class="ph ph-gift text-brand-yellow text-2xl"></i> <span class="font-medium">Regalos y apoyos económicos</span></li>
 -->                    </ul>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="assets/img/Pastor_2.jpg" class="rounded-xl shadow-lg w-full h-full object-cover">
                    <img src="assets/img/confe_pastores.jpg" class="rounded-xl shadow-lg w-full h-full object-cover mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- Misioneros -->
    <section class="py-16 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Algunos Misioneros que apoyamos</h2>
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
                    <img src="assets/img/familia_gallardo.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Gallardo</h4>
                    <p class="text-brand-dark text-sm font-bold">Bolivia 🇧🇴</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia-maranon.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Marañon</h4>
                    <p class="text-brand-dark text-sm font-bold">Tamazunchale, SLP - México 🇲🇽</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia_lopez_ramirez.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Lopez Ramirez</h4>
                    <p class="text-brand-dark text-sm font-bold">Maputo, Mozambique - Africa 🇲🇿</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:-translate-y-1 transition">
                    <img src="assets/img/familia-cardoso.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-brand-yellow">
                    <h4 class="font-bold text-lg">Fam. Cardoso Fuentes</h4>
                    <p class="text-brand-dark text-sm font-bold">Hidalgo - México 🇲🇽</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Conferencia Misionera de Niños y Niñas -->
    <section class="py-20 bg-brand-dark relative overflow-hidden">
        <img src="assets/img/ninos_bg.jpg" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/90 to-brand-dark/70"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Título estilo flyer -->
            <div class="text-center mb-14">
                <span class="bg-white/10 text-brand-yellow px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest inline-block mb-4">19 al 22 de Noviembre 2026</span>
                <p class="text-white text-2xl font-bold">1<sup>er</sup> Conferencia Misionera</p>
                <h2 class="text-4xl md:text-5xl font-serif font-extrabold uppercase leading-tight mt-1">
                    <span class="text-white">de </span><span class="text-green-400">Niños</span><span class="text-white"> y </span><span class="text-brand-yellow">Niñas</span>
                </h2>
                <p class="text-white/60 text-sm uppercase tracking-widest mt-1">2026</p>

                <div class="mt-8">
                    <p class="text-3xl md:text-4xl font-serif font-black uppercase leading-none">
                        <span class="text-sky-400">Sabiendo que</span><br>
                        <span class="text-emerald-400">harás aún</span>
                        <span class="text-brand-yellow">más</span>
                    </p>
                    <span class="text-white/70 italic text-sm mt-2 inline-block">Filemón 1:21</span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="assets/img/ninos-misioneros-2.jpg" alt="Niños misioneros" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">Dios sigue llamando, tú puedes ser parte de la misión</h3>
                    <p class="text-white/80 text-lg leading-relaxed mb-6">
                        Este año, por primera vez, abrimos un espacio especial para que los más pequeños de la iglesia vivan también su propia conferencia misionera: un tiempo lleno de enseñanza, juegos, dinámicas y actividades diseñadas para que los niños y niñas descubran, desde temprana edad, el gran privilegio de servir a Dios y participar en Su obra.
                    </p>
                    <div class="flex items-center gap-3 text-white/90">
                        <i class="ph ph-calendar-check text-brand-yellow text-2xl"></i>
                        <span class="font-medium">19 al 22 de Noviembre, 2026</span>
                    </div>
                </div>
            </div>

            <!-- Invitados especiales -->
            <div class="text-center mb-10">
                <span class="text-brand-yellow font-bold uppercase tracking-widest text-sm">Invitados especiales</span>
                <h3 class="text-3xl font-serif font-bold text-white mt-2">Estarán enseñando</h3>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center">
                    <img src="assets/img/speakers/Hno-Juan-Hernandez.jpeg" alt="Hno. Juan Hernández y Hna. Azul" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900">Hno. Juan Hernández y Hna. Azul</h4>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center">
                    <img src="assets/img/speakers/Hno-Isaii-Herflo.jpeg" alt="Hno. Isaii Herflo" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900">Hno. Isaii Herflo</h4>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center">
                    <img src="assets/img/speakers/Hno-Miguel-Martinez.jpeg" alt="Hno. Miguel Martínez y Hna. Paulita" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-gray-900">Hno. Miguel Martínez y Hna. Paulita</h4>
                    </div>
                </div>

            </div>

        </div>
    </section>

        <!-- Rondalla Juvenil El Jordán -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <div class="absolute top-1/2 left-0 w-96 h-96 bg-brand-yellow opacity-5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Foto grupal -->
                <div class="relative">
                    <div class="absolute -inset-3 bg-brand-dark rounded-2xl -rotate-2"></div>
                    <img src="assets/img/rondalla-jordan.jpeg" alt="Rondalla Juvenil El Jordán" class="relative rounded-2xl shadow-2xl w-full h-full object-cover">
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-xl shadow-xl p-3 hidden sm:block">
                        <img src="assets/img/logo-jordan.jpg" alt="Rondalla Juvenil El Jordán" class="h-16 w-auto">
                    </div>
                </div>

                <!-- Texto -->
                <div>
                    <span class="text-brand-yellow font-bold uppercase tracking-widest text-sm">Alabanza y música</span>
                    <h2 class="text-4xl font-serif font-bold text-gray-900 mt-2 mb-6">Rondalla Juvenil El Jordán</h2>
                    <p class="text-gray-700 text-lg leading-relaxed mb-4">
                        Nos acompañará durante toda la conferencia la <strong>Rondalla Juvenil El Jordán</strong>, un grupo de jóvenes originarios de <strong>Nuevo León</strong> que, a través de la música, han hecho de su talento un instrumento para glorificar a Dios.
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed mb-8">
                        Cada noche de la conferencia estarán ministrando con su música, creando un ambiente de adoración que preparará nuestros corazones para recibir la Palabra.
                    </p>

                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="bg-brand-dark text-white rounded-full w-12 h-12 flex items-center justify-center shrink-0">
                            <i class="ph ph-guitar text-2xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Cantando cada noche</p>
                            <p class="text-sm text-gray-500">Nuevo León, México</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

        <!-- Predicadores y Expositores -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <span class="text-brand-yellow font-bold uppercase tracking-widest text-sm">Voces de la conferencia</span>
                <h2 class="text-4xl font-serif font-bold text-gray-900 mt-2">Predicadores y Expositoras</h2>
                <p class="text-gray-600 text-lg mt-4 max-w-2xl mx-auto">
                    Siervos que Dios ha usado en diferentes lugares del mundo y que compartirán con nosotros durante estos días de conferencia.
                </p>
            </div>

            <!-- Pastor Anfitrión destacado -->
            <div class="flex justify-center mb-16">
                <div class="flex flex-col items-center text-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-brand-yellow rounded-full rotate-3"></div>
                        <img src="assets/img/speakers/Pastor-Oscar.jpg" alt="Pastor Oscar F. Díaz" class="relative w-40 h-40 rounded-full object-cover shadow-xl border-4 border-white">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Pr. Oscar F. Díaz</h3>
                    <span class="bg-brand-dark text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mt-2">Pastor Anfitrión</span>
                </div>
            </div>

            <!-- Grid de predicadores -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-James-Merlo.png" alt="Pr. James Merlo" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. James Merlo</h4>
                    <p class="text-sm text-gray-500">Oklahoma City, USA</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Jesus-Alanis.png" alt="Pr. Jesús Alanís" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Jesús Alanís</h4>
                    <p class="text-sm text-gray-500">Ecuador</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Hector-Avila.jpeg" alt="Pr. Héctor Ávila" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Héctor Ávila</h4>
                    <p class="text-sm text-gray-500">Escobedo, Nuevo León, MEX</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Ramiro-Avila.jpg" alt="Pr. Ramiro Ávila" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Ramiro Ávila</h4>
                    <p class="text-sm text-gray-500">Isla Mujeres, Quintana Roo, MEX</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Victor-Gallo.png" alt="Pr. Víctor Gallo" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Víctor Gallo</h4>
                    <p class="text-sm text-gray-500">Riobamba, Ecuador</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Enrique-Coizeau.jpeg" alt="Pr. Enrique Coizeau" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Enrique Coizeau</h4>
                    <p class="text-sm text-gray-500">Pompano, Florida, USA</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Gerardo-Andrade.png" alt="Pr. Gerardo Andrade" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Gerardo Andrade</h4>
                    <p class="text-sm text-gray-500">Rockford, Illinois, USA</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Luis-Ochoa.png" alt="Pr. Jose Luis Ochoa" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Jose Luis Ochoa</h4>
                    <p class="text-sm text-gray-500">Matamoros, Tamps, MEX</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Jaime-Palacios.jpeg" alt="Pr. Jaime Palacios" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Jaime Palacios</h4>
                    <p class="text-sm text-gray-500">Matamoros, Coahuila</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Emiliano-Pelayo.png" alt="Pr. Emiliano Pelayo" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Emiliano Pelayo</h4>
                    <p class="text-sm text-gray-500">Dallas, Texas, USA</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Gante-Pastor.jpeg" alt="Pr. Gante Pastor" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Gante Pastor</h4>
                    <p class="text-sm text-gray-500">Acapulco, Guerrero</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Juan-Sarabia.jpg" alt="Pr. Juan Sarabia" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Juan Sarabia</h4>
                    <p class="text-sm text-gray-500">Kanasín, Yucatán</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Ricardo-Viganas.png" alt="Pr. Ricardo Vigañas" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Ricardo Vigañas</h4>
                    <p class="text-sm text-gray-500">Matamoros, Tamps, MEX</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Pastor-Victor-Alvarez.jpeg" alt="Pr. Victor Alvarez" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Pr. Victor Alvarez</h4>
                    <p class="text-sm text-gray-500">Harlingen, Texas, USA</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Hna-Ana-Echevarria.png" alt="Hna. Ana Echeverría" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Hna. Ana Echeverría</h4>
                    <p class="text-sm text-gray-500">Iztapalapa, Ciudad de México</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="assets/img/speakers/Hna-Cony-De-Avila.jpeg" alt="Hna. Cony De Ávila" class="w-32 h-32 rounded-full object-cover shadow-lg mb-4">
                    <h4 class="font-bold text-gray-900">Hna. Cony De Ávila</h4>
                    <p class="text-sm text-gray-500">Escobedo, Nuevo León, MEX</p>
                </div>

            </div>
        </div>
    </section>

        <?php require 'includes/formulario.php'; ?>


    <?php include 'includes/footer.php'; ?>
</body>
<script src="assets/js/registro-misiones.js"></script>
</html>
