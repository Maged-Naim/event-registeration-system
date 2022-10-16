<?php

namespace App\Http\Controllers;

use App\Models\EventDay;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Eventdays extends Controller
{
    public function index(){
        // $eventdays = EventDay::all();
        $eventdays = DB::table('eventday_showtime')->get();//->pluck('showtimesId');
        // $eventdays = DB::table('eventday_showtime')->pluck('eventdayId');
        // $showtimes = [];
        // foreach($showtimes_in_eventday as $showtime){
        //     array_push($showtimes, ShowTime::find($showtime));
        // }

       

        // dd($movies);
        return view('admin.eventdays.index', [
            'eventdays'=>$eventdays,
            // 'showtimes'=> $showtimes_in_eventday
   
        ]);
    } 
 
    public function create(){
        $showtimes = ShowTime::all();
        return view('admin.eventdays.create-eventdays', compact('showtimes'));
    }

    public function store(Request $request){
        // dd($request->_token);
        // $eventday = new EventDay;
        // // dd($eventday->id);
        // $eventday->name = $request->name;
        // $eventday->ticket_price = $request->ticket_price;


        $eventId = EventDay::insertGetId([
             'name' => $request->input('name'),
             'ticket_price' => $request->input('ticket_price'),
        ]);
       
        $showtimeId = $request->input('showtimes');
        $data = array('eventdayId'=>$eventId ,"showtimesId"=>$showtimeId);
        DB::table('eventday_showtime')->insert($data);


        // $eventday->save();
        return redirect('admin/eventdays')->with('status', 'Eventday Data Has Been inserted');
    }

    public function show($id){
        //
    }
 

    public function edit($id){
        $updatedeventday= EventDay::find($id);
        return view('admin.eventdays.edit-eventdays', compact('updatedeventday'));  // -> resources/views/stocks/edit.blade.php
    }

    public function update(Request $request, $id){
        $eventday =  EventDay::find($id);
        $eventday->name = $request->name;
        $eventday->ticket_price = $request->ticket_price;



        $eventday->save();
        return redirect('admin/eventdays')->with('status', 'Eventday Data Has Been updated');
    }

    public function destroy($id){
        $eventday = EventDay::find($id);
        $eventday->delete(); // Easy right?
 
        return redirect('/admin/eventdays')->with('success', 'Eventday removed.');  // -> resources/views/stocks/index.blade.php
    } 
}
