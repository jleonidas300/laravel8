@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-6">

        <div class="p-5 bg-gray-200 col-span-1 rounded">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">Contenido</li>
            </ul>
            @foreach($SeeCurso->posts as $post)
                <li class="flex items-center text-gray-600 mt-2">
                    {{ $post->name }}
                    @if($post->free)
                        <span
                        class="text-xs text-gray-500 font-semibold bg-gray-300 
                                p-1 rounded-full ml-auto"
                        >Gratis</span>
                    @endif
                </li>
            @endforeach
        </div>

        <div class="text-gray-700 col-span-2">
            <img src="{{ $SeeCurso->image }}" class="rounded">
            <h2 class="text-4xl">{{ $SeeCurso->name }}</h2>
            <p class="text-justify text-purple-800">{{ $SeeCurso->description }}</p>
        
            <div class="flex mt-3">
                <img 
                    class="h-10 w-10 rounded-full mr-2" 
                    src="{{ $SeeCurso->user->avatar }}"
                >
                <div class="col-span-2 text-gray-700">
                    <p class="text-gray-500 text-sm">
                        {{ $SeeCurso->user->name }}
                    </p>
                    <p class="text-gray-300 text-xs">
                        {{ $SeeCurso->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 my-8">
                @foreach ($SeeCurso->similar() as $curso)
                    <x-tarjeta-curso :curso="$curso" /> 
                @endforeach
            </div>

        </div>

    </div>

    <div class="text-center">
        <h1 class="text-gray-700 mb-2 uppercase text-3xl italic">Cursos</h1>
    </div>

    <livewire:listado-curso>
@endsection
