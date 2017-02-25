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

        $outputs = Output::get();

        return view('admin/outputs')->with('user', $user)
                                  ->with('tipos', $tipos)
                                  ->with('outputs', $outputs);
      }
    }

    public function newInput(Request $request) {

      if ($request->name && $request->tipo_id) {
        $input = new Input;
        $input->name = $request->name;
        $input->name_trans = "";
        $input->tipo_id = $request->tipo_id;
        $input->user_id = $request->user_id;
        $input->generico = $request->generico;
        $input->save();
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

    public function borraInput(Request $request) {

      if ($input_id = $request->input_id) {

        if ($input = Input::find($input_id)) { $input->delete(); }

        return redirect('admin/' . $request->tipo_id);
      }
    }

}
