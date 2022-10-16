<?php

namespace App\Http\Controllers;

use App\Models\Attendees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Attendee extends Controller
{
    public function index(){

        $eventday_attendees  =  DB::table('eventday_attendees')->get();
        return view('admin.attendees.index', ['attendees'=>$eventday_attendees]);

    }
    public function destroy($id){
        $attendee = Attendees::find($id);
        $attendee->delete(); // Easy right?
 
        return redirect('/admin/attendees')->with('success', ' Attendee removed.');  // -> resources/views/stocks/index.blade.php
    } 
}
