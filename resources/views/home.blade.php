
@extends('layouts.app')
@section('content')
    <div class="mt-4 container mx-auto">
        <h1 class="text-secondary ml-16 text-base font-medium">Popular Movies</h1>
        <div class="popular-movies mt-4 text-sm">
            <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-col-1 gap-4 border-t py-4 border-gray-700">
                @foreach ($Movies as $movie)
                    <div class="">
                        <a href="{{ route('movie.show', $movie['id'] ) }}"><img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt=""></a>
                        <div class="title text-gray-700 font-semibold mt-2 ml-3">{{ $movie['title']}}</div>
                        <div class="date mt-1 text-xs ml-3">release_date {{ $movie['release_date']}}</div>
                     </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-4 container mx-auto">
        <h1 class="text-secondary ml-16 text-base font-medium">Upcoming Movies</h1>
        <div class="popular-movies mt-4 text-sm">
            <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-col-1 gap-4 border-b py-4 border-gray-700">
                @foreach ($upcomingMovies as $movie)
                    <div class="">
                        <a href="{{ route('movie.show', $movie['id'] ) }}"><img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt=""></a>
                        <div class="title text-gray-700 font-semibold mt-2 ml-3">{{ $movie['title']}}</div>
                        <div class="date mt-1 text-xs ml-3">release_date {{ $movie['release_date']}}</div>
                     </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection