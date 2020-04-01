<?php

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
use App\Tribe;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('tribes');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
