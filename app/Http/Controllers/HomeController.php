<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Input;
use App\Tipo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();

      $personaje = Input::deTipo(1);
      $escenarios = Input::deTipo(2);
      $objetos = Input::deTipo(3);
      $situaciones = Input::deTipo(4);
      $temas = Input::deTipo(5);

      $output = $this->traduce("Cómo le gustaría a #1 que fuera #5");

      return view('home')->with('output', $output)
                         ->with('user', $user);
    }

    public function traduce($output) {

      $result = '';

      $palabras = explode(' ', $output);

      // dd($palabras);

      foreach ($palabras as $palabra) {

        // Si el campo empieza por # tenemos que cargar el correspondiente tipo (si es #1 habrá que cargar Input::deTipo(1))
        if (substr($palabra, 0, 1) == '#') {
          $tipo = substr($palabra, 1);
          $palabra = Input::deTipo($tipo)->name; // Faltará traducir
          $palabra = strtolower($palabra);
        }
        $result .= $palabra . " "; // Volvemos a generar la url
      }

      // Quitamos el ultimo espacio
      $result = substr($result, 0, -1);

      return $result;
    }

}
