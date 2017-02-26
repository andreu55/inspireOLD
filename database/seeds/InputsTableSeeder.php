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

        ['tipo_id' => 2, 'name' => 'castillo', 'name_trans' => 'castillo', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'jardín', 'name_trans' => 'jardin', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'patio de una casa', 'name_trans' => 'patio_casa', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'calle', 'name_trans' => 'calle', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'observatorio', 'name_trans' => 'observatorio', 'generico' => 1],
        ['tipo_id' => 2, 'name' => 'cocina', 'name_trans' => 'cocina', 'generico' => 1],

        ['tipo_id' => 3, 'name' => 'espada', 'name_trans' => 'espada', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'brújula', 'name_trans' => 'brujula', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'baúl', 'name_trans' => 'baul', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'cofre', 'name_trans' => 'cofre', 'generico' => 1],
        ['tipo_id' => 3, 'name' => 'llave', 'name_trans' => 'llave', 'generico' => 1],

        ['tipo_id' => 4, 'name' => 'súplica', 'name_trans' => 'suplica', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'persecución', 'name_trans' => 'persecucion', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'rescate', 'name_trans' => 'rescate', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'desastre', 'name_trans' => 'desastre', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'infortunio', 'name_trans' => 'infortunio', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'escape', 'name_trans' => 'escape', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'revuelta', 'name_trans' => 'revuelta', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'iniciativa', 'name_trans' => 'iniciativa', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'metamorfosis', 'name_trans' => 'metamorfosis', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'invalidez', 'name_trans' => 'invalidez', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'coincidencia', 'name_trans' => 'coincidencia', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'mala suerte', 'name_trans' => 'mala_suerte', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'buena suerte', 'name_trans' => 'buena_suerte', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'impotencia', 'name_trans' => 'impotencia', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'secuestro', 'name_trans' => 'secuestro', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'enigma', 'name_trans' => 'enigma', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'recuperación de una posesión', 'name_trans' => 'recuperacion_de_una_posesion', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'búsqueda', 'name_trans' => 'busqueda', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'venganza', 'name_trans' => 'venganza', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'enemistad', 'name_trans' => 'enemistad', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'aventura', 'name_trans' => 'aventura', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'imprudencia', 'name_trans' => 'imprudencia', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'sufrimiento', 'name_trans' => 'sufrimiento', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'descubrimiento', 'name_trans' => 'descubrimiento', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'sacrificio', 'name_trans' => 'sacrificio', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'maduración', 'name_trans' => 'maduracion', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'ausencia', 'name_trans' => 'ausencia', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'transformación', 'name_trans' => 'transformacion', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'prohibición', 'name_trans' => 'prohibicion', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'pérdida', 'name_trans' => 'perdida', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'juicio erróneo', 'name_trans' => 'juicio_erroneo', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'ambición', 'name_trans' => 'ambicion', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'deshonor'_ 'name_trans' => 'deshonor', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'ruptura de un tabú', 'name_trans' => 'ruptura_de_un_tabu', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'locura', 'name_trans' => 'locura', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'adulterio', 'name_trans' => 'adulterio', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'rivalidad', 'name_trans' => 'rivalidad', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'pago de una deuda', 'name_trans' => 'pago_deuda', 'generico' => 1],
        ['tipo_id' => 4, 'name' => 'crimen', 'name_trans' => 'crimen', 'generico' => 1],

        ['tipo_id' => 5, 'name' => 'el conocimiento', 'name_trans' => 'conocimiento', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la supervivencia', 'name_trans' => 'supervivencia', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la raza', 'name_trans' => 'raza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el hambre', 'name_trans' => 'hambre', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el racismo', 'name_trans' => 'racismo', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el sexo', 'name_trans' => 'sexo', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el ser humano', 'name_trans' => 'ser_humano', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el bien', 'name_trans' => 'bien', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la deidad', 'name_trans' => 'deidad', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la decepción', 'name_trans' => 'decepcion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el conformismo', 'name_trans' => 'conformismo', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el deber', 'name_trans' => 'deber', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el mal', 'name_trans' => 'mal', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la muerte', 'name_trans' => 'muerte', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la búsqueda', 'name_trans' => 'busqueda', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la felicidad', 'name_trans' => 'felicidad', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la constancia', 'name_trans' => 'constancia', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la religión', 'name_trans' => 'religion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la fe', 'name_trans' => 'fe', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la lucha', 'name_trans' => 'lucha', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la creación', 'name_trans' => 'creacion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el odio', 'name_trans' => 'odio', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el nacimiento', 'name_trans' => 'nacimiento', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el fracaso', 'name_trans' => 'fracaso', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el pecado', 'name_trans' => 'pecado', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el sacrificio', 'name_trans' => 'sacrificio', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el precio de algo', 'name_trans' => 'precio_de_algo', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el descenso', 'name_trans' => 'descenso', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el sufrimiento', 'name_trans' => 'sufrimiento', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el heroismo', 'name_trans' => 'heroismo', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el deshonor', 'name_trans' => 'deshonor', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el gobierno', 'name_trans' => 'gobierno', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el desastre', 'name_trans' => 'desastre', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el patriotismo', 'name_trans' => 'patriotismo', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el caos', 'name_trans' => 'caos', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el juicio', 'name_trans' => 'juicio', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el prejuicio', 'name_trans' => 'prejuicio', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el hogar', 'name_trans' => 'hogar', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el aislamiento', 'name_trans' => 'aislamiento', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el engaño', 'name_trans' => 'engano', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el sentido de la vida', 'name_trans' => 'sentido_de_la_vida', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el éxito', 'name_trans' => 'exito', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la culpa', 'name_trans' => 'culpa', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la alienación', 'name_trans' => 'alienacion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la traición', 'name_trans' => 'traicion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la amistad', 'name_trans' => 'amistad', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la fama', 'name_trans' => 'fama', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la madurez', 'name_trans' => 'madurez', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la niñez', 'name_trans' => 'ninez', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la adolescencia', 'name_trans' => 'adolescencia', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la paz', 'name_trans' => 'paz', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la esperanza', 'name_trans' => 'esperanza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la desesperanza', 'name_trans' => 'desesperanza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la vejez', 'name_trans' => 'vejez', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la existencia', 'name_trans' => 'existencia', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la ausencia', 'name_trans' => 'ausencia', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la ascensión', 'name_trans' => 'ascension', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la nación', 'name_trans' => 'nacion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la existencia de Dios', 'name_trans' => 'existencia_de_Dios', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la familia', 'name_trans' => 'familia', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la soledad', 'name_trans' => 'soledad', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el cautiverio', 'name_trans' => 'cautiverio', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la redención', 'name_trans' => 'redencion', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el autoconocimiento', 'name_trans' => 'autoconocimiento', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el amor', 'name_trans' => 'amor', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la venganza', 'name_trans' => 'venganza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'el poder', 'name_trans' => 'poder', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la riqueza', 'name_trans' => 'riqueza', 'generico' => 1],
        ['tipo_id' => 5, 'name' => 'la enfermedad', 'name_trans' => 'enfermedad', 'generico' => 1],
      ]);
    }
}
