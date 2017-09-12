<?php

use Illuminate\Database\Seeder;
use Apptotem\galeria;
class GaleriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        categoria::create(['Titulo' => 'Eventos','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 2'activo' => 1]);
        categoria::create(['Titulo' => 'Eventos','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 3'activo' => 1]);
        categoria::create(['Titulo' => 'Eventos','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 4'activo' => 1]);
        categoria::create(['Titulo' => 'Eventos','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 5'activo' => 1]);

    }
}
