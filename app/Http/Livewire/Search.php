<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Search extends Component
{
    
    
    public $search = '';
    public $searchMovies = [];

    public function render()
    {
            /* $index = Http::get("https://api.themoviedb.org/3/search/movie?api_key=679d83deff1141a5a45a529f48b1887c&query=$this->search")
                    ->json()['total_results']; */
            
            if (strlen($this->search) >= 2 ) {
                $this->searchMovies = Http::get("https://api.themoviedb.org/3/search/movie?api_key=679d83deff1141a5a45a529f48b1887c&query=$this->search")
                    ->json()['results'];
            }
            
        return view('livewire.search');
    }
}
