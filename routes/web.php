<?php

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



// Route::get('boardgame', "boardgame@list");

Route::get('boardgames', "Boardgame@list");
Route::get('search', "Search@index");
Route::get('game', "Game@data");
Route::get('random', "Random@data");
Route::get('/', "Home@list");
