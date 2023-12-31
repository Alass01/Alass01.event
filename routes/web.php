<?php


use App\Http\Controllers\EventsController;
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
Route::get('/',function (){
    return redirect()->route('events.index');
});

Route::get('/', 'App\Http\Controllers\EventsController@index')->name('home');
Route::resource('events', 'App\Http\Controllers\EventsController');