<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    // 1 => Personajes // 2 => Escenarios // 3 => Objetos // 4 => Situaciones // 5 => Temas
    public static function deTipo($tipo) {
      return \DB::table('outputs')->where('frase', 'like', "%#".$tipo."%")->inRandomOrder()->value('frase');
    }

    public static function cuantasDeTipo($tipo, $cuantas) {
      return \DB::table('outputs')->select('frase')->where('frase', 'like', "%#".$tipo."%")->inRandomOrder()->take($cuantas)->get();
    }    
}
