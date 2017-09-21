<?php

use Illuminate\Database\Seeder;
use Apptotem\categoria;
use Apptotem\atractivo;
use Apptotem\galeria;

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
        categoria::truncate();
        atractivo::truncate();
        galeria::truncate();            
         $this->call(CategoriasTableSeeder::class);
         $this->call(AtractivosTableSeeder::class);
         $this->call(GaleriasTableSeeder::class);
    }
}
