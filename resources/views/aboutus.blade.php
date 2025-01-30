<x-app-layout>
    <div class="mt-12 container mx-auto px-6">
        <!-- Encabezado -->
        <div class="text-center mb-12">
            <h1 class="text-6xl font-extrabold text-yellow-500 drop-shadow-md">South Wines Academy</h1>
        </div>

        <!-- Secciones de contenido -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <p class="text-gray-800 text-lg leading-relaxed">
                    En el mundo del vino, cada botella cuenta una historia y cada sorbo es una experiencia única. Creemos firmemente que el conocimiento es la clave para disfrutar plenamente de esta fascinante cultura.
                </p>
                <p class="mt-4 text-gray-800 text-lg leading-relaxed">
                    Te invitamos a explorar nuestro sitio, donde encontrarás información detallada sobre nuestros cursos, así como recursos adicionales que enriquecerán tu aprendizaje y pasión por el vino.
                </p>
            </div>

            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <h2 class="text-3xl font-bold text-yellow-500 mb-4">Nuestra filosofía</h2>
                <p class="text-gray-800 text-lg leading-relaxed">
                    En South Wines Academy, estamos profundamente comprometidos con la divulgación del fascinante mundo del vino y la educación en este ámbito. Creemos firmemente que, a través de la enseñanza, podemos cultivar una apreciación más profunda y enriquecedora por los vinos, brindando a nuestros estudiantes las herramientas necesarias para explorar y disfrutar de esta experiencia de manera excepcional.
                </p>
            </div>
        </div>

        <!-- Botón de acción -->
        <div class="mt-16 flex justify-center">
            <a href="/cursos" class="px-8 py-4 bg-yellow-500 text-white text-lg font-semibold rounded-xl shadow-lg hover:bg-yellow-600 transition duration-300 transform hover:scale-105">
                Explorar Cursos
            </a>
        </div>
    </div>
</x-app-layout>
