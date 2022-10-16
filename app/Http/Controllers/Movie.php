<?php

namespace App\Http\Controllers;

use App\Models\Movie as ModelsMovie;
use Illuminate\Http\Request;

class Movie extends Controller
{
    public function index(){
        $movies = ModelsMovie::all();
       

        // dd($movies);
        return view('admin.movies.movies', [
            'movies'=>$movies,
   
        ]);
    }

    public function create(){
        return view('admin.movies.create-movie');
    }

    public function store(Request $request){
        $movie = new ModelsMovie;
        $movie->title = $request->title;
        $movie->genere = $request->genere;
        $movie->year = $request->year;
        $movie->language = $request->language;
        $movie->description = $request->description;


        $movie->save();
        return redirect('admin/movies')->with('status', 'Movie Data Has Been inserted');
    }

    public function show($id){
        //
    }
 

    public function edit($id){
        $updatedMovie = ModelsMovie::find($id);
        return view('admin.movies.edit-movie', compact('updatedMovie'));  // -> resources/views/stocks/edit.blade.php
    }

    public function update(Request $request, $id){
        $movie =  ModelsMovie::find($id);
        $movie->title = $request->title;
        $movie->genere = $request->genere;
        $movie->year = $request->year;
        $movie->language = $request->language;
        $movie->description = $request->description;


        $movie->save();
        return redirect('admin/movies')->with('status', 'Movie Data Has Been updated');
    }

    public function destroy($id){
        $stock = ModelsMovie::find($id);
        $stock->delete(); // Easy right?
 
        return redirect('/admin/movies')->with('success', 'Movie removed.');  // -> resources/views/stocks/index.blade.php
    } 
}
