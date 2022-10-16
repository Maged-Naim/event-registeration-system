<?php

namespace App\Http\Controllers;

use App\Models\Attendees;
use App\Models\EventDay;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Front extends Controller
{
    public function index()
    {
        $eventdays = EventDay::all();
        $movies = Movie::all();
        $showtimes = ShowTime::all();

        $eventday_showtimes = DB::table('eventday_showtime')->pluck('showtimesId');
        // dd($eventday_showtime);
        // $showtimes = [];
        // foreach ($eventday_showtimes as $eventday_showtime) {
        //     array_push($showtimes,ShowTime::find($eventday_showtime));
        // }
        // dd($showtimes);
        // $eventday_showtime = DB::table('eventday_showtime')->get();
        // foreach($eventday_showtime as $key) {
        //     $showtimesId = $key->showtimesId;
        //     $showtimes = ShowTime::find($showtimesId); //DB::table('show_times')->where('id',$showtimesId);
        //     $film = Movie::find($showtimes->movieId);
        //     dd($film->title);
            
        // }
        // $eventdayId = $eventday_showtime[0]->eventdayId;
        // dd(EventDay::find($eventdayId));

        // $attendees = Attendees::all();

        return view('welcome', [
            'movies'=>$movies,
            'showtimes'=>$showtimes,
            'eventdays' => $eventdays
        ]);
    }

    public function save(Request $request){
        // dd($request->input('movies'));
        $showtimesId = $request->input('movies');
        $showtimes = ShowTime::find($showtimesId);
        // dd($showtimes);
        // $attendee = new Attendees;
        // $attendee->name = $request->name;
        // $attendee->email = $request->email;
        // $attendee->number = $request->phone;

        $attendeeId = Attendees::insertGetId([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'number' => $request->input('phone'),
       ]);
       $data = array('eventdaysId'=> $request->input('eventday') ,"AttendeesId"=>$attendeeId);
       $data2 = array('eventdayId'=> $request->input('eventday') ,"showtimesId"=>$request->input('showtimes'));
       $data3 = array('opening'=> $showtimes->opening ,'closing'=> $showtimes->closing, 'movieId' =>$showtimesId);
       DB::table('eventday_attendees')->insert($data);
       DB::table('eventday_showtime')->insert($data2);
       DB::table('show_times')->insert($data3);




        // $validated = $request->validate([
        //     'phone' => 'required|regex:/^01[012][0-9]{8}$/',
        //     'email' => 'required|regex:/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/'
        //     ]);

            // $chamberinfo = Attendees::create($request->validated());

        // $attendee->save();
        return redirect('/')->with('status', 'Event Form Data Has Been inserted');
    }
}
