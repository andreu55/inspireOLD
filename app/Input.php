<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    public function tipo() { return $this->hasOne('App\Tipo'); }
    public function user() { return $this->belongsTo('App\User'); }

    // 1 => Personajes // 2 => Escenarios // 3 => Objetos // 4 => Situaciones // 5 => Temas
    public static function deTipo($tipo_id) { return \DB::table('inputs')->where('tipo_id', $tipo_id)->where('generico', 1)->inRandomOrder()->first(); }
}
