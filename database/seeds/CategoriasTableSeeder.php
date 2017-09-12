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
        categoria::create(['name' => 'Eventos','activo' => 1]);
        categoria::create(['name' => 'Articulos', 'activo' => 0]);
    }
}
