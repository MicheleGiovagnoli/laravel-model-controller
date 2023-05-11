<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Connettiamo il Model
use App\Models\Movie;

//Controller
class PageController extends Controller
{
    //funzione che gestisce la rotta
    public function index(){
        $newMovie = new Movie();
        //metodo statico con il quale prendiamo tutto quello che sta nella tabella Movies
        $movies = Movie::all();
        return view('welcome');
    }
}
