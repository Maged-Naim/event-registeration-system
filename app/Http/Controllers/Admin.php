<?php

namespace App\Http\Controllers;

use App\Models\Attendees;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use App\Models\User;
class Admin extends Controller
{
    public function index()
    {
        $movies = Movie::all();
       
        $showtimes = ShowTime::all();
        // // dd($showtimes);
        $attendees = Attendees::all();
        // dd($movies);
        return view('admin.overview', [
            'movies'=>$movies->count(),
            'showtimes'=>$showtimes->count(),
            'attendee' => $attendees->count()
        ]);
    }
}
 