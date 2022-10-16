<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Showtimes extends Controller
{
    public function index(){
        $showtimes = ShowTime::all();
        $movies = Movie::all();
       

        // dd($movies);
        return view('admin.showtimes.index', [
            'showtimes'=>$showtimes,
            'movies'=> $movies
   
        ]);
    }   

    public function create(){
        $movies = Movie::all();
        return view('admin.showtimes.create-showtimes', compact('movies'));
    }

    public function store(Request $request){
        // dd($request->request);
        $showtime = new ShowTime;
        $showtime->opening = $request->opening;
        $showtime->closing = $request->closing;
        $showtime->movieId = $request->movie;



        $showtime->save();
        return redirect('admin/showtimes')->with('status', 'Showtime Data Has Been inserted');
    }

    public function show($id){
        //
    }
 

    public function edit($id){
        $updatedshowtime= ShowTime::find($id);
        $movies = Movie::all();
        return view('admin.showtimes.edit-showtimes', compact('updatedshowtime', 'movies'));  // -> resources/views/stocks/edit.blade.php
    }

    public function update(Request $request, $id){   
        $showtime =  ShowTime::find($id);
        $movieId = DB::table('movies')->where('title', $request->movie)->first();
        $showtime->opening = $request->opening;
        $showtime->closing = $request->closing;
        $showtime->movieId =$movieId->id;




         $showtime->save();
        return redirect('admin/showtimes')->with('status', ' showtime Data Has Been updated');
    }

    public function destroy($id){
        $showtime = ShowTime::find($id);
        $showtime->delete(); // Easy right?
 
        return redirect('/admin/showtimes')->with('success', ' showtime removed.');  // -> resources/views/stocks/index.blade.php
    } 
}
