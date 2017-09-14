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
        galeria::create(['Titulo' => 'Atractivo 1','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 1,'activo' => 1]);
        galeria::create(['Titulo' => 'Atractivo 2','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 1,'activo' => 1]);
        galeria::create(['Titulo' => 'Atractivo 3','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 2,'activo' => 1]);
        galeria::create(['Titulo' => 'Atractivo 4','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 3,'activo' => 1]);
        galeria::create(['Titulo' => 'Atractivo 5','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 4,'activo' => 1]);
        galeria::create(['Titulo' => 'Atractivo 6','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fchupe.jpg?alt=media&token=a2fcfa18-1127-4d24-aa51-c4e1cd5650c8','atractivo_id' => 5,'activo' => 1]);

    }
}
