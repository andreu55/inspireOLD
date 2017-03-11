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

    if (Auth::check()) { return redirect('home'); }

    // $frases = App\Output::cuantasDeTipo(1, 3);

    $aux = ["<span class='input_1'>[Personaje]</span> actúa de forma ilegal a causa de <span class='input_2'>[situación]</span>.",
            "Sucede algo mágico en <span class='input_4'>[lugar]</span>.",
            "¿Tiene <span class='input_1'>[personaje]</span> un <span class='input_3'>[objeto]</span>?"
          ];
    $rand = array_rand($aux, 3);

    $frases = [$aux[$rand[0]], $aux[$rand[1]], $aux[$rand[2]]];

    return view('landing')->with('frases', $frases);
});

Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('admin/{id?}', 'AdminController@index');

Route::get('tipo/{id?}', 'UserController@cambiaTipo');

Route::post('tipo/new', 'AdminController@newInput');
Route::post('output/new', 'AdminController@newOutput');
Route::post('input/delete', 'AdminController@borraInput');
Route::post('input/edita', 'AdminController@editaInput');
Route::post('output/delete', 'AdminController@borraOutput');
Route::post('output/edita', 'AdminController@editaOutput');


Route::post('user/edit', 'UserController@update');
