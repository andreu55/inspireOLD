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

Route::get('/', function () {

    // $frases = App\Output::cuantasDeTipo(1, 3);

    $aux = ["Patrick actúa de forma ilegal a causa de un adulterio.",
            "Sucede algo mágico en el patio de una casa.",
            "brown"
          ];
    $rand = array_rand($aux, 3);

    $frases = [$aux[$rand[0]], $aux[$rand[1]], $aux[$rand[2]]];

    return view('landing')->with('frases', $frases);
});

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('admin/{id?}', 'AdminController@index');

Route::post('tipo/new', 'AdminController@newInput');
Route::post('output/new', 'AdminController@newOutput');
Route::post('input/delete', 'AdminController@borraInput');
Route::post('output/delete', 'AdminController@borraOutput');
