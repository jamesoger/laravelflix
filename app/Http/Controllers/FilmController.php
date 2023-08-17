<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * affiche tous les films en ordre alphabétique croissant
     *
     * @return View
     */
    public  function index()
    {
        $films = Film::orderBy('titre', 'asc')
            ->get();

        return view("films.index", [
            "films" => $films
        ]);
    }

    /**
     * Affiche le film selectionné
     *
     * @param int $id
     * @return View
     */
    public function show(int $id)
    {
        $film = Film::findOrFail($id);

        return view('films.show', [
            "film" => $film
        ]);
    }

    /**
     * route pour afficher un film selon une recherche
     *
     * @param Request $request
     * @return View
     */
    public function search(Request $request)
    {
        $query = $request->input('requete');

        if (empty($query)) {

            return redirect()->route('films.index');
        }

        $films = Film::where('titre', 'LIKE', "%{$query}%")->get();

        return view('films.search', ['films' => $films]);
    }
}
