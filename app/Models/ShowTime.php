<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;

    // protected $fillable = ['name'];

    public function movie(){
        return $this->hasOne(Movie::class);
     }
}
  