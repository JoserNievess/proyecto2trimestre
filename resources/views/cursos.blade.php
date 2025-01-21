@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1>Nuestros Cursos</h1>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($cursos as $curso)
                <div class="card">
                    <h2>{{ $curso->nombre }}</h2>
                    <p>{{ $curso->descripcion }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection