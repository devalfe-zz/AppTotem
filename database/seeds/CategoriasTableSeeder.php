<?php

use Illuminate\Database\Seeder;
use Apptotem\Categoria as Categoria;
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
        Categoria::create(['titulo' => 'Lugares','activo' => 1]);
        Categoria::create(['titulo' => 'Rutas', 'activo' => 1]);
        Categoria::create(['titulo' => 'Alojamientos','activo' => 1]);
        Categoria::create(['titulo' => 'Restaurantes', 'activo' => 1]);
        Categoria::create(['titulo' => 'Transportes', 'activo' => 1]);
        Categoria::create(['titulo' => 'Bodegas','activo' => 1]);
        Categoria::create(['titulo' => 'Festivales', 'activo' => 1]);
        Categoria::create(['titulo' => 'Eventos','activo' => 1]);
        Categoria::create(['titulo' => 'Articulos', 'activo' => 1]);
        Categoria::create(['titulo' => 'Agencias', 'activo' => 1]);
        Categoria::create(['titulo' => 'Noticias', 'activo' => 0]);

    }
}
