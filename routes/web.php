<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
})->name('homepage');

Route::get('/info', function () {
    return view('info');
})->name('info');


Route::get('/servizi', function () {
     $links=[
        [
            "id"=>1,
            "name"=>"Anime Streaming",
            "link"=>"https://aniwaves.ru/",
        ],
        [
            "id"=>2,
            "name"=>"Manga Online",
            "link"=>"https://mangareader.pro/",
        ],
        [
            "id"=>3,
            "name"=>"Anime Shops",
            "link"=>"https://www.emp-online.it/fan-merch/anime/"
        ],
    ];
   
            return view('servizi', ['serviziolink' => $links]);
        
    
})->name('servizi');


