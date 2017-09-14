<?php

use Illuminate\Database\Seeder;
use Apptotem\categoria;
class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        categoria::create(['titulo' => 'Lugares','activo' => 1]);
        categoria::create(['titulo' => 'Rutas', 'activo' => 1]);
        categoria::create(['titulo' => 'Alojamientos','activo' => 1]);
        categoria::create(['titulo' => 'Restaurantes', 'activo' => 1]);
        categoria::create(['titulo' => 'Bodegas','activo' => 1]);
        categoria::create(['titulo' => 'Festivales', 'activo' => 1]);
        categoria::create(['titulo' => 'Eventos','activo' => 1]);
        categoria::create(['titulo' => 'Articulos', 'activo' => 1]);
        categoria::create(['titulo' => 'Noticias', 'activo' => 0]);      

    }
}
