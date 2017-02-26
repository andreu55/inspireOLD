<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Input;
use App\Output;
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

      $selected_tipo = rand(1, 5);
      $cuantas = 10;

      $tipo = Tipo::find($selected_tipo);

      // $frases = Output::deTipo($selected_tipo);
      // $output = $this->traduce($frase);

      $outputs = Output::cuantasDeTipo($selected_tipo, $cuantas);

      $inputs = Input::carga(['1', '2', '3', '4', '5'], $cuantas);

      return view('home')->with('tipo', $tipo)
                         ->with('inputs', $inputs)
                         ->with('outputs', $outputs)
                         ->with('cuantas', $cuantas)
                         ->with('user', $user);
    }

    public function traduce($frase) {

      $output = '';

      $palabras = explode(' ', $frase);

      foreach ($palabras as $palabra) {

        // Si el campo empieza por # tenemos que cargar el correspondiente tipo (si es #1 habrá que cargar Input::deTipo(1))
        if (substr($palabra, 0, 1) == '#') {

          // Puede que algunas frases vayan seguidas de un cierre ?
          if (!is_numeric(substr($palabra, -1))) { $cierre = substr($palabra, -1); }
          else { $cierre = ""; }

          $tipo = substr($palabra, 1, 1);
          $palabra = Input::deTipo($tipo); // TODO: Traducir
          $palabra = mb_strtolower($palabra, 'UTF-8') . $cierre;
        }
        $output .= $palabra . " "; // Volvemos a generar la url
      }

      // Quitamos el ultimo espacio
      $output = substr($output, 0, -1);

      return $output;
    }

}
