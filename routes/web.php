<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Attendee;
use App\Http\Controllers\Eventdays;
use App\Http\Controllers\Front;
use App\Http\Controllers\Movie;
use App\Http\Controllers\Showtimes;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Front::class, 'index']);
Route::post('/', [Front::class, 'save']);
// Route::get('login', [UserLogin::class, 'showLoginForm'])->name('login');
Route::get('/admin', [Admin::class, 'index']);
// Route::get('/admin/movies', [Movie::class, 'index']);
// Route::get('/admin/movies/create', [Movie::class, 'create']);
// Route::post('/admin/movies/create', [Movie::class, 'store']);
// Route::get('/admin/movies/{movie}/edit', [Movie::class, 'edit']);
// Route::put('/admin/movies/{movie}', [Movie::class, 'update']);




Route::resource('admin/movies', Movie::class);
Route::resource('admin/eventdays', Eventdays::class);
Route::resource('admin/showtimes', Showtimes::class);
Route::resource('admin/attendees', Attendee::class);

 