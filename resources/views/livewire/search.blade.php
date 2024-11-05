  <div  x-data="{ open: false }" @click="open = true" class="second-flex relative mt-2 sm:mt-0 ">
                    <input  @click="open = true" wire:model.debounce.500ms="search"  type="text"  class="bg-gray-700 w-64 px-6 focus:shadow-outline ml-1 py-1 rounded-full focus:outline-none text-sm " placeholder="Search ...">
                    <div class="absolute top-0">
                        <span class="ion-ios-search-strong mt-2 ml-3 text-sm"></span>
                    </div>
                    <div class="absolute top-0 right-0">
                        <div class="spinner sm:mr-0" wire:loading>
                            <div class="double-bounce1"></div>
                            <div class="double-bounce2"></div>
                        </div>
                    </div>
  <div x-show="open" @click.away="open = false" class="absolute bg-gray-800  rounded mt-2 w-64 mr-24">
        <ul>
            
            @if (count($searchMovies) > 0)
                @foreach ($searchMovies as $movie)
                    @if ($loop->index <= 7)
                        <li class="border-b border-gray-600 py-2 px-4 hover:bg-gray-600 flex items-center ">
                            @if (strlen($movie['poster_path']) > 0)
                                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" class="w-10 mr-2" alt="actor">
                            @else
                                 <img src="https://via.placeholder.com/80x120?text=NotFound" class="w-10 mr-2" alt="actor">
                            @endif
                            <a href="{{ route('movie.show', $movie['id']) }}">{{ $movie['title'] }}</a>
                        </li>
                    @endif
                @endforeach
             @else
                    @if (strlen($search)>=2)
                        <li class="border-b border-gray-600 py-4 px-4 hover:bg-gray-600 ">No results For {{ $search }}</li>
                    @endif
            @endif
        </ul>
    </div>
    
  </div>