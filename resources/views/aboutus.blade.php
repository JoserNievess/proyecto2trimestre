<x-app-layout>
    <div class="mt-12 container mx-auto px-6 ">
        <!-- Encabezado -->
        <div class="text-center mb-12">
            <h1 class="text-6xl font-extrabold text-yellow-500 drop-shadow-md "></h1>
        </div>
        
  <!-- Slider de imágenes -->
<div class="relative w-full h-96 mt-12 overflow-hidden rounded-xl shadow-lg">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 z-10">
        <h2 class="text-6xl font-extrabold text-white drop-shadow-md ">¿QUÉ ES SOUTH WINE ACADEMY?</h2>
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
        setInterval(changeSlide, 2500); 
    });
</script>



<div class="flex flex-col md:flex-row items-center gap-16 mt-24"> <!-- Añadido mt-24 -->
    <div class="md:w-1/2 bg-white bg-opacity-30 p-8 rounded-lg shadow-lg">
            <h2 class="text-6xl font-extrabold" style="color: #4e0202; mb-8">MÁS QUE VINO</h2> <!-- Cambiado a color #4e0202 y mb-8 -->
            <p class="text-black text-2xl leading-relaxed"> <!-- Cambiado a text-2xl -->
                En el mundo del vino, cada botella cuenta una historia y cada sorbo es una experiencia única. Creemos firmemente que el conocimiento es la clave para disfrutar plenamente de esta fascinante cultura.
                <br>
                Te invitamos a explorar nuestro sitio, donde encontrarás información detallada sobre nuestros cursos y recursos para enriquecer tu aprendizaje.
            </p>
        </div>
        <div class="md:w-1/2 flex justify-center">
        <img src="{{ asset('/images/vinorojo.jpg') }}" alt="Botella de vino" class="w-3/4 mt-16 mb-16"> <!-- Cambiado a w-3/4 -->
    </div>
</div>

<div class="flex justify-center mt-20 mb-24"> <!-- Añadido mb-24 -->
    <div class="md:w-1/2">
            <h2 class="text-6xl font-extrabold" style="color: #4e0202; mb-8">NUESTRA FILOSOFÍA</h2> <!-- Cambiado a color #4e0202 y mb-8 -->
            <p class="text-black text-2xl leading-relaxed"> <!-- Cambiado a text-2xl -->
                En South Wines Academy, estamos comprometidos con la educación y divulgación del mundo del vino. Queremos brindarte las herramientas necesarias para explorar y disfrutar esta experiencia de manera excepcional.
            </p>
            </div>
</div>


 <!-- Imagen de fondo con texto superpuesto -->
<div class="relative w-full h-96 mt-32 mb-24 overflow-hidden shadow-lg">
    <img src="{{ asset('/images/vino4.png') }}" alt="Copa de vino" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
        <h2 class="text-4xl font-bold" style="color: white; drop-shadow-md">Explora el Mundo del Vino</h2>
        <p class="text-lg text-white mt-4 max-w-2xl">
            En South Wines Academy te ofrecemos conocimientos y experiencias únicas para adentrarte en la cultura del vino.
        </p>
    </div>
</div>

</x-app-layout>