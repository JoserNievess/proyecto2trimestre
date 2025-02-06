<x-app-layout>
    <div class="mt-12 container mx-auto px-6 ">
        <!-- Encabezado -->
        <div class="text-center mb-12">
            <h1 class="text-6xl font-extrabold text-yellow-500 drop-shadow-md ">South Wines Academy</h1>
        </div>
        
  <!-- Slider de imágenes -->
<div class="relative w-full h-96 mt-12 overflow-hidden rounded-xl shadow-lg">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 z-10">
        <h2 class="text-6xl font-extrabold text-yellow-500 drop-shadow-md ">Sumérgete en la Cultura del Vino</h2>
        <p class="text-lg text-white mt-4 max-w-2xl">
            Descubre los sabores, aromas y secretos detrás de cada copa con nosotros.
        </p>
    </div>
    <div class="relative w-full h-full">
        <img id="slider-img" src="{{ asset('/images/vinoslay3.png') }}" alt="Slider Vino" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 ease-in-out">
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = [
            "{{ asset('images/vinoslay3.png') }}",
            "{{ asset('images/vinoslay2.png') }}"
        ];
        let currentIndex = 0;
        const sliderImg = document.getElementById('slider-img');

        function changeSlide() {
            currentIndex = (currentIndex + 1) % images.length; 
            sliderImg.style.opacity = '0';
            setTimeout(() => {
                sliderImg.setAttribute('src', images[currentIndex]);
                sliderImg.style.opacity = '1';
            }, 500);
        }

        setInterval(changeSlide, 3500); 
    });
</script>




    <!-- Secciones de contenido -->
    <div class="space-y-12 mt-12">
        <!-- Primera Sección -->
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2 bg-gradient-to-br from-white to-gray-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <h2 class="text-3xl font-bold text-yellow-500 mb-4">Más Que Vino</h2>
                <p class="text-gray-800 text-lg leading-relaxed">
                    En el mundo del vino, cada botella cuenta una historia y cada sorbo es una experiencia única. Creemos firmemente que el conocimiento es la clave para disfrutar plenamente de esta fascinante cultura.
                </p>
                <p class="mt-4 text-gray-800 text-lg leading-relaxed">
                    Te invitamos a explorar nuestro sitio, donde encontrarás información detallada sobre nuestros cursos y recursos para enriquecer tu aprendizaje.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('/images/vino2.png') }}" alt="Botella de vino" class="w-full max-w-md rounded-xl shadow-lg">
            </div>
        </div>
        
        

        <!-- Segunda Sección -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-8">
            <div class="md:w-1/2 bg-gradient-to-br from-white to-gray-100 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <h2 class="text-3xl font-bold text-yellow-500 mb-4">Nuestra Filosofía</h2>
                <p class="text-gray-800 text-lg leading-relaxed">
                    En South Wines Academy, estamos comprometidos con la educación y divulgación del mundo del vino. Queremos brindarte las herramientas necesarias para explorar y disfrutar esta experiencia de manera excepcional.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('/images/vino1.png') }}" alt="Copa de vino" class="w-full max-w-md rounded-xl shadow-lg">
            </div>
        </div>
    </div>

<!-- Tercera Sección -->
<div class="flex flex-col h-96 md:flex-row items-center gap-8">
    
    <div class="md:w-1/2 flex justify-center">
        <img src="{{ asset('/images/vino3.png') }}" alt="Botella de vino" class="w-full max-w-md rounded-xl shadow-lg">
    </div>
</div>

 <!-- Imagen de fondo con texto superpuesto -->
<div class="relative w-full h-96 mt-24 rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('/images/vino4.png') }}" alt="Copa de vino" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
        <h2 class="text-4xl font-bold text-yellow-500 drop-shadow-md">Explora el Mundo del Vino</h2>
        <p class="text-lg text-white mt-4 max-w-2xl">
            En South Wines Academy te ofrecemos conocimientos y experiencias únicas para adentrarte en la cultura del vino.
        </p>
    </div>
</div>
</div>
</x-app-layout>