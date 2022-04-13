<div class="bg-white shadow-lg rounded-lg px-5 py-6 text-center">
    <a href="{{ route('ShowCourse', $curso->slug) }}">
        <img src="{{ $curso->image }}" class="rounded-md mb-2">
        <h2 class="text-lg text-gray-600 truncate uppercase">{{ $curso->name }}</h2>
        <h3 class="text-md text-gray-500">{{ $curso->excerpt }}</h3>
  
        <img src="{{ $curso->user->avatar }}" class="rounded-full mt-4 mx-auto h-16 w-16" alt="">
    </a>
</div>