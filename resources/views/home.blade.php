<x-app-layout>
    
    @section('hero')
    <div class="w-full text-center py-32">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            Bienvenido a <span class="text-yellow-500">South Wine</span> <span class="text-gray-900"> Academy</span>
        </h1>
        <p class="text-gray-500 text-lg mt-1">Expertos en vinos</p>
        <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block"
            href="http://127.0.0.1:8000/blog">Explorar
            Cursos</a>
    </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Algunos de nuestros cursos!</h2>
            <div class="w-full">
                @foreach ($featuredPosts as $post)
                <div class="grid grid-cols-3 gap-10 w-full">
                    <x-posts.post-card :post="$post"  />
                </div>    
                @endforeach
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">Más
                Cursos</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="http://127.0.0.1:8000/blog">More
            Posts</a>
    </div>

</x-app-layout>
