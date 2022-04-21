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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/run', 'RoverController@index');
Route::get('/begin', 'RoverController@selLang')->name('begin');
Route::get('/howto', 'RoverController@howToPlay')->name('howto');
Route::get('/choose', 'RoverController@chooseMission')->name('choose');
Route::get('/mission1', 'RoverController@selMission1')->name('mission1');
Route::get('/mission2', 'RoverController@selMission2')->name('mission2');
Route::get('/mission3', 'RoverController@selMission3')->name('mission3');
Route::get('/congrats', 'RoverController@congrats')->name('congrats');
Route::get('/return', 'RoverController@returnBack')->name('return');
Route::get('/start/{mission}', 'RoverController@startPerform')->name('start');
