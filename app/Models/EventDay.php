<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDay extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function showtimes(){
        return $this->belongsToMany(ShowTime::class);
    }


      
    public function attendees(){
        return $this->belongsToMany(Attendees::class);
    }
}
