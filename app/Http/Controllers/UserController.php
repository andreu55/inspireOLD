<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
// use App\Input;
// use App\Output;
// use App\Tipo;

class UserController extends Controller
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

    public function cambiaTipo($tipo_id = 0) {

      $user = Auth::user();

      if ($tipo_id >= 1 && $tipo_id <= 5) { $user->selected_tipo = $tipo_id; }
      else { $user->selected_tipo = 1; }

      $user->save();

      return back();
    }

    public function update(Request $request) {

      $user = Auth::user();
      $campos = $request->except(['_token']);

      foreach ($campos as $key => $value) {
        $user->$key = $value;
      }

      $user->save();

      return "200 OK";
    }

}
