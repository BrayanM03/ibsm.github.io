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
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow-lg');
                    navbar.classList.add('bg-opacity-95');
                } else {
                    navbar.classList.remove('shadow-lg');
                    navbar.classList.remove('bg-opacity-95');
                }
            }
        });
    </script>
