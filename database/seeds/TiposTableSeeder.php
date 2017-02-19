<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tipos')->insert([
        ['id' => 1, 'name' => 'Personajes', 'name_trans' => 'personajes'],
        ['id' => 2, 'name' => 'Escenarios', 'name_trans' => 'escenarios'],
        ['id' => 3, 'name' => 'Objetos', 'name_trans' => 'objetos'],
        ['id' => 4, 'name' => 'Situaciones', 'name_trans' => 'situaciones'],
        ['id' => 5, 'name' => 'Temas', 'name_trans' => 'temas']
      ]);
    }
}
