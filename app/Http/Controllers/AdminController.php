<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Input;
use App\Output;
use App\Tipo;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('esAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 0)
    {
      $user = Auth::user();
      $tipos = Tipo::all();

      if ($id) {
        if ($tipo = Tipo::find($id)) {

          $inputs = Input::allGeneric($id);

          return view('admin/input')->with('user', $user)
                                    ->with('tipo', $tipo)
                                    ->with('tipos', $tipos)
                                    ->with('inputs', $inputs);
        }
      } else {

        $aux = Output::get();

        for ($i=1; $i <= 6 ; $i++) {
          $outputs[$i] = [];
        }

        foreach ($aux as $key => $output) {
          if (strpos($output->frase, "#1") !== false) { $outputs["1"][] = $output; }
          if (strpos($output->frase, "#2") !== false) { $outputs["2"][] = $output; }
          if (strpos($output->frase, "#3") !== false) { $outputs["3"][] = $output; }
          if (strpos($output->frase, "#4") !== false) { $outputs["4"][] = $output; }
          if (strpos($output->frase, "#5") !== false) { $outputs["5"][] = $output; }
          if (strpos($output->frase, "#6") !== false) { $outputs["6"][] = $output; }
        }

        return view('admin/outputs')->with('user', $user)
                                    ->with('tipos', $tipos)
                                    ->with('outputs', $outputs);
      }
    }

    public function newInput(Request $request) {

      if ($request->name && $request->tipo_id) {
        $input_id = Input::nuevo($request);
      }
      return back();
    }

    public function newOutput(Request $request) {

      if ($request->frase) {

        $output = new Output;
        $output->frase = $request->frase;
        $output->save();
      }
      return back();
    }

    public function editaInput(Request $request) {

      $input_id = $request->id;
      $nuevo_valor = $request->value;

      if ($input_id && $nuevo_valor) {

        if ($input = Input::find($input_id)) {
          $input->name = $nuevo_valor;
          $input->save();
        }

        return $input->name;
      }
    }

    public function borraInput(Request $request) {

      if ($input_id = $request->input_id) {

        if ($input = Input::find($input_id)) { $input->delete(); }

        return "200 OK";
      }
    }

    public function editaOutput(Request $request) {

      $input_id = $request->id;
      $nuevo_valor = $request->value;

      if ($input_id && $nuevo_valor) {

        if ($input = Output::find($input_id)) {
          $input->frase = $nuevo_valor;
          $input->save();
        }

        return $input->frase;
      }
    }

    public function borraOutput(Request $request) {

      if ($output_id = $request->output_id) {

        if ($output = Output::find($output_id)) { $output->delete(); }

        return "200 OK";
      }
    }

}
