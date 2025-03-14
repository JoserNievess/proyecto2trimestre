<x-app-layout>
    <div class="mt-12 container mx-auto px-6 ">
        <!-- Encabezado -->
        <div class="text-center mb-12">
            <h1 class="text-6xl font-extrabold text-yellow-500 drop-shadow-md "></h1>
        </div>
        <style>
            body {
                background-color: #e8e9e2; /* Fondo color vino claro */
            }
        </style>
  <!-- Slider de imágenes -->
<div class="relative w-full h-96 mt-12 overflow-hidden rounded-xl shadow-lg">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 z-10">
        <h2 class="text-6xl font-extrabold text-white drop-shadow-md ">SOUTH WINE ACADEMY</h2>
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
 
 
<div class="flex flex-col md:flex-row items-center gap-16 mt-24"> <!-- Añadido mt-24 -->
    <div class="md:w-1/2">
        <h2 class="text-4xl font-extrabold ml-2" style="color: #4e0202; margin-bottom: 16px;">MÁS QUE VINO</h2> <!-- Añadido ml-2 -->        <div class="bg-white bg-opacity-30 p-4 rounded-lg shadow-lg h-64 flex items-center"> <!-- Cambiado a h-64 -->
            <p class="text-black text-lg leading-relaxed"> <!-- Cambiado a text-lg -->
                En el mundo del vino, cada botella cuenta una historia y cada sorbo es una experiencia única. Creemos firmemente que el conocimiento es la clave para disfrutar plenamente de esta fascinante cultura.
                <br>
                Te invitamos a explorar nuestro sitio, donde encontrarás información detallada sobre nuestros cursos y recursos para enriquecer tu aprendizaje.
            </p>
        </div>
    </div>
    <div class="md:w-1/2 flex justify-center items-center h-64"> <!-- Añadido items-center h-48 -->
        <img src="{{ asset('/images/vinorojo.jpg') }}" alt="Botella de vino" class="w-1/2 mt-16 mb-16"> <!-- Cambiado a w-3/4 -->
    </div>
</div>
 
<div class="flex justify-center mt-40 mb-24"> <!-- Cambiado mt-20 a mt-40 -->
    <div class="md:w-1/2">
        <h2 class="text-4xl font-extrabold text-center" style="color: #4e0202; margin-bottom: 16px;">NUESTRA FILOSOFÍA</h2> <!-- Cambiado a text-4xl y margin-bottom: 16px -->
        <div class="bg-white bg-opacity-30 p-4 rounded-lg shadow-lg h-64 flex items-center justify-center"> <!-- Añadido justify-center -->
            <p class="text-black text-lg leading-relaxed text-center"> <!-- Añadido text-center -->
                En South Wines Academy, estamos comprometidos con la educación y divulgación del mundo del vino. Queremos brindarte las herramientas necesarias para explorar y disfrutar esta experiencia de manera excepcional.
            </p>
        </div>
    </div>
</div>
 
 
 <!-- Imagen de fondo con texto superpuesto -->
<div class="relative w-full h-96 mt-32 mb-24 overflow-hidden shadow-lg">
    <img src="{{ asset('/images/vino4.png') }}" alt="Copa de vino" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
        <h2 class="text-4xl font-bold" style="color:white; drop-shadow-md">Explora el Mundo del Vino</h2>
        <p class="text-lg text-white mt-4 max-w-2xl">
            En South Wines Academy te ofrecemos conocimientos y experiencias únicas para adentrarte en la cultura del vino.
        </p>
    </div>
</div>
 
</x-app-layout>