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
        categoria::create(['name' => 'Lugares','activo' => 1]);
        categoria::create(['name' => 'Rutas', 'activo' => 1]);
        categoria::create(['name' => 'Alojamientos','activo' => 1]);
        categoria::create(['name' => 'Restaurantes', 'activo' => 1]);
        categoria::create(['name' => 'Bodegas','activo' => 1]);
        categoria::create(['name' => 'Festivales', 'activo' => 1]);
        categoria::create(['name' => 'Eventos','activo' => 1]);
        categoria::create(['name' => 'Articulos', 'activo' => 1]);
        categoria::create(['name' => 'Noticias', 'activo' => 0]);      

    }
}
