<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;


//affiche la liste des films
Route::get('/films', [FilmController::class, 'index'])
    ->name("films.index");

//route pour recherche de film
Route::get('/films/search', [FilmController::class, 'search'])
    ->name('films.search');


//Affiche un film selon id
Route::get('/films/{id}', [FilmController::class, 'show'])
    ->name('films.show');


