<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    public function tipo() { return $this->hasOne('App\Tipo'); }
    public function user() { return $this->belongsTo('App\User'); }

    // 1 => Personajes // 2 => Escenarios // 3 => Objetos // 4 => Situaciones // 5 => Temas
    public static function deTipo($tipo_id) { return \DB::table('inputs')->where('tipo_id', $tipo_id)->where('generico', 1)->inRandomOrder()->value('name'); }

    public static function allGeneric($tipo_id) { return \DB::table('inputs')->where('tipo_id', $tipo_id)->where('generico', 1)->get(); }

    public static function nuevo($request) {

      $values = $request->except('_token');

      $input = new Input;
        foreach ($values as $name => $value) { $input->$name = $value; }
      $input->save();

      return $input->id;
    }

    public static function carga($tipos, $cuantas) {
      $inputs = [];

      foreach ($tipos as $tipo) {
        $inputs[$tipo] = \DB::table('inputs')->select('name', 'name_trans', 'sexo')->where('tipo_id', $tipo)->where('generico', 1)->inRandomOrder()->take($cuantas)->get();
      }

      return $inputs;
    }
}
