<x-app-layout>
    @section('hero')
        <div id="hero" class="w-full text-center py-32 bg-cover bg-center flex items-center justify-center" style="background-image: url('/images/home_background.jpg'); height: 100vh;">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                    <span style="color: #2e2527;">Bienvenido a </span><span style="color: #7a1843;">South Wines</span> <span style="color: #2e2527;"> Academy</span>
                </h1>
                <p style="color: #ffffff;">Expertos en vinos</p>
                <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
                    href="http://127.0.0.1:8000/blog">Explorar
                    Cursos</a>
            </div>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Cursos Destacados</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                    @endforeach
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">Más
                Cursos</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Últimos Cursos</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold" href="http://127.0.0.1:8000/blog">Más
            Cursos</a>
    </div>

    <script>
        document.addEventListener('scroll', function() {
            const hero = document.getElementById('hero');
            const scrollTop = window.scrollY;
            const windowHeight = window.innerHeight;
            const opacity = 1 - (scrollTop / windowHeight);
            hero.style.opacity = opacity;
        });
    </script>
</x-app-layout>