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
    public function index()
    {
      $user = Auth::user();

      $personajes = Input::allGeneric(1);
      $escenarios = Input::allGeneric(2);
      $objetos = Input::allGeneric(3);
      $situaciones = Input::allGeneric(4);
      $temas = Input::allGeneric(5);

      $tipos = Tipo::all();

      return view('admin/admin')->with('user', $user)
                                ->with('tipos', $tipos)
                                ->with('personajes', $personajes)
                                ->with('escenarios', $escenarios)
                                ->with('objetos', $objetos)
                                ->with('situaciones', $situaciones)
                                ->with('temas', $temas);
    }

    public function tipoNew(Request $request) {
      $input = new Input;
        $input->name = $request->name;
        $input->name_trans = "";
        $input->tipo_id = $request->tipo_id;
        $input->user_id = $request->user_id;
        $input->generico = $request->generico;
      $input->save();

      return back();
    }

}
