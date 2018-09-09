<?php

use Illuminate\Database\Seeder;
use Apptotem\Categoria as Categoria;
use Apptotem\Atractivo as Atractivo;
use Apptotem\Galeria as Galeria;
use Apptotem\User as User;

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
        User::truncate();

        $this->call(CategoriasTableSeeder::class);
         $this->call(AtractivosTableSeeder::class);
         $this->call(GaleriasTableSeeder::class);
         $this->call(UsersTableSeeder::class);

    }
}
