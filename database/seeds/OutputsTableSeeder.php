<?php

use Illuminate\Database\Seeder;

class OutputsTableSeeder extends Seeder
{
    public function run()
    {
      // #1 => Personajes
      // #2 => Escenarios
      // #3 => Objetos
      // #4 => Situaciones
      // #5 => Temas
      DB::table('outputs')->insert([
        ['frase' => '#1 recuerda un momento triste de su infancia.'],
        ['frase' => '¿Cuál es el mayor triunfo de #1?'],
        ['frase' => 'Las ideas de #1 sobre #5 son dadas la vuelta.'],
        ['frase' => '#1 y #1 se ven envueltos en una situación de #4'],
        ['frase' => '#1 se encuentra en una situación de #4'],
        ['frase' => '#1 y #1 se encuentran por primera vez.'],
        ['frase' => '#1 y #1 se enfrentan.'],
        ['frase' => '#1 y #1 se despiden.'],
        ['frase' => 'Lo que #1 piensa sobre #1 realmente.'],
        ['frase' => 'Cómo le gustaría a #1 que fuera el mundo.'],
        ['frase' => 'Cómo le gustaría a #1 que fuera #5'],
        ['frase' => '#1 va a un/una #2'],
        ['frase' => 'Algo sobre sí mism@ que avergüenza a #1'],
        ['frase' => '¿Cómo le gustaría a la familia de #1 que fuera él/ella?'],
        ['frase' => '¿Qué objetos puedes encontrar en #2?'],
        ['frase' => 'Sucede algo mágico en un/una #2'],
        ['frase' => '#1 y #2 se encuentran en #2'],
        ['frase' => '#1 tiene una habilidad especial.'],
        ['frase' => '¿Qué hace #1 para divertirse?'],
        ['frase' => '#1 actúa de forma ilegal a causa de un/una #4.'],
        ['frase' => '¿Qué lenguas habla #1?'],
        ['frase' => '#1 tiene una discapacidad.'],
        ['frase' => '¿Qué resentimientos guarda #1?'],
        ['frase' => '¿Se adhiere #1 a los esterotipos de género?'],
        ['frase' => 'Una lección de vida que #1 no haya aprendido (aún)'],
        ['frase' => 'Un amigo de #1'],
        ['frase' => 'Una característica psicológica de #1'],
        ['frase' => 'Una característica física de #1'],
        ['frase' => '¿Cuál es el anhelo más profundo de #1?'],
        ['frase' => '¿Qué motiva a #1 a levantarse todos los días?'],
        ['frase' => '¿Qué sueño de la infancia de #1 nunca se cumplió?'],
        ['frase' => '¿Cuáles son las creencias de #1?'],
        ['frase' => '¿Qué es lo peor que #1 ha hecho jamás?'],
        ['frase' => 'Un secreto de #1'],
        ['frase' => '¿Qué desconoce #1 sobre #1?'],
        ['frase' => '¿Qué desconoce #1 sobre #5?'],
        ['frase' => '¿Qué rechaza #1 sobre #5?'],
        ['frase' => '¿Qué ha retenido a #1 toda su vida?'],
        ['frase' => 'Un hábito de #1'],
        ['frase' => 'Una manía de #1'],
        ['frase' => 'Una rareza de #1'],
        ['frase' => '¿Cuál es la decisión más difícil que ha tomado #1?'],
        ['frase' => '¿Cómo reacciona #1 bajo presión?'],
        ['frase' => '¿Qué opina #1 de #5?'],
        ['frase' => '¿Qué sabe #1 sobre #4?'],
        ['frase' => '¿Qué le ocasiona rechazo a #1?'],
        ['frase' => 'Una contradicción de #1'],
        ['frase' => '¿Ha estado #1 en #2?'],
        ['frase' => '¿Tiene #1 un/a #3?'],
        ['frase' => '¿Es #3 el objeto preferido de #1?'],
      ]);
    }
}
