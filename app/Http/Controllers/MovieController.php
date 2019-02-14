<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        
        // pretend DB usage
        $movie_names = [
            'tt0468569' => 'Dark Knight', 
            'tt0050083' => '12 angry men', 
            'tt0108052' => 'Schindler\'s list',
            'tt0110912' => 'Pulp fiction',
            'tt0167260' => 'Lord of the Rings: Return of the King',
            'tt0111161' => 'The Shawshank redemption',
            'tt0071562' => 'The Godfather II',
            'tt0060196' => 'The good, the bad and the ugly',
            'tt0137523' => 'Fight club',
            'tt0068646' => 'The Godfather',
        ];
        $movie_ratings = [
            'tt0111161' => 9.2,
            'tt0068646' => 9.2,
            'tt0071562' => 9.0,
            'tt0468569' => 8.9, 
            'tt0050083' => 8.9, 
            'tt0108052' => 8.9,
            'tt0110912' => 8.9,
            'tt0167260' => 8.9,
            'tt0060196' => 8.9,
            'tt0137523' => 8.8
        ];

        $top_rated = view('movies/top_rated', [
            'movie_names' => $movie_names,
            'movie_ratings' => $movie_ratings
        ]);

        $weekly_movie = view('movies/weekly_movie');

        $main = view('movies/main', [
            'top_rated' => $top_rated,
            'weekly_movie' => $weekly_movie
        ]);

        $hlavicka = view('movies/header');

        $footer = view('movies/footer');

        $html = view('movies/html', [
            'content' => $main,
            'header' => $hlavicka,
            'footer' => $footer
        ]);

        return $html;
    }


    public function movies()
    {

    }






    public function detail()
    {
        // prepare the data
        $movie_title = 'Venom';

        // display the response
        $info_view = view('movies/detail/info', [
            'title' => $movie_title // creates variable $title in view
        ]);

        $cast_view = view('movies/detail/cast');

        $trailer_view = view('movies/detail/trailer');

        $main_view = view('movies/detail/main', [
            'info' => $info_view,
            'cast' => $cast_view,
            'trailer' => $trailer_view
        ]);

        $html_wrapper = view('movies/html', [
            'content' => $main_view,
            'header' => view('movies/header'),
            'footer' => view('movies/footer')
        ]);

        return $html_wrapper;
    }
}
