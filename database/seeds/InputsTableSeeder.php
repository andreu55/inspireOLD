<?php

use Illuminate\Database\Seeder;

class InputsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // 1 => Personajes
    // 2 => Escenarios
    // 3 => Objetos
    // 4 => Situaciones
    // 5 => Temas
    public function run()
    {
      DB::table('inputs')->insert([
        ['tipo_id' => 1, 'name' => 'Un anciano', 'name_trans' => 'anciano', 'generico' => 1],
        ['tipo_id' => 1, 'name' => 'Una anciana', 'name_trans' => 'anciana', 'generico' => 1],
        ['tipo_id' => 1, 'name' => 'Un bebé', 'name_trans' => 'bebe', 'generico' => 1],
        ['tipo_id' => 1, 'name' => 'Una mujer', 'name_trans' => 'mujer', 'generico' => 1],
        ['tipo_id' => 1, 'name' => 'Un hombre', 'name_trans' => 'hombre', 'generico' => 1],

        ['tipo_id' => 2, 'name' => 'Un castillo', 'name_trans' => 'castillo', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'Un jardín', 'name_trans' => 'jardin', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'El patio de una casa', 'name_trans' => 'patio_casa', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'Una calle', 'name_trans' => 'calle', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'Un observatorio', 'name_trans' => 'observatorio', 'generico' => 1],

        ['tipo_id' => 3, 'name' => 'espada', 'name_trans' => 'espada', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'brújula', 'name_trans' => 'brujula', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'baúl', 'name_trans' => 'baul', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'cofre', 'name_trans' => 'cofre', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'llave', 'name_trans' => 'llave', 'generico' => 1],

        ['tipo_id' => 4, 'name' => 'súplica', 'name_trans' => 'suplica', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'rescate', 'name_trans' => 'rescate', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'venganza', 'name_trans' => 'venganza', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'pago de una deuda', 'name_trans' => 'pago_deuda', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'crimen', 'name_trans' => 'crimen', 'generico' => 1],

        ['tipo_id' => 5, 'name' => 'el amor', 'name_trans' => 'amor', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la venganza', 'name_trans' => 'venganza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el poder', 'name_trans' => 'poder', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la riqueza', 'name_trans' => 'riqueza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la enfermedad', 'name_trans' => 'enfermedad', 'generico' => 1],
      ]);
    }
}
