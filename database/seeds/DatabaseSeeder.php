<?php

use Illuminate\Database\Seeder;
use Apptotem\Categoria as Categoria;
use Apptotem\Atractivo as Atractivo;
use Apptotem\Galeria as Galeria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Categoria::truncate();
        Atractivo::truncate();
        Galeria::truncate();
         $this->call(CategoriasTableSeeder::class);
         $this->call(AtractivosTableSeeder::class);
         $this->call(GaleriasTableSeeder::class);
    }
}
