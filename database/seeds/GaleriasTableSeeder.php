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
        //1
        galeria::create([
            'Titulo' => 'CASA DEL REGIDOR PERPETUO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/regidor_perpetuo1.jpg',
            'atractivo_id' => 1,
            'activo' => 1
        ]);
        galeria::create([
            'Titulo' => 'CASA DEL REGIDOR PERPETUO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/regidor_perpetuo2.jpg',
            'atractivo_id' => 1,
            'activo' => 1
        ]);        
        //2
        galeria::create([
            'Titulo' => 'PLAZA DE ARMAS',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/plaza1.jpg',
            'atractivo_id' => 2,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/plaza2.jpg',
            'atractivo_id' => 2,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/plaza3.jpg',
            'atractivo_id' => 2,
            'activo' => 1
        ]);
        //3
        galeria::create([
            'Titulo' => 'CASA CHOCANO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_chocano.jpg',
            'atractivo_id' => 3,
            'activo' => 1
        ]);  
        galeria::create([
            'Titulo' => 'CASA CHOCANO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_chocano2.jpg',
            'atractivo_id' => 3,
            'activo' => 1
        ]);   
        galeria::create([
            'Titulo' => 'CASA CHOCANO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_chocano3.jpg',
            'atractivo_id' => 3,
            'activo' => 1
        ]);                     
        //4
        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ DE CÓRDOBA O LOS DE LA FLOR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_tradicional1.jpg',
            'atractivo_id' => 4,
            'activo' => 1
        ]);                   
        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ DE CÓRDOBA O LOS DE LA FLOR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_tradicional2.jpg',
            'atractivo_id' => 4,
            'activo' => 1
        ]);                   
        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ DE CÓRDOBA O LOS DE LA FLOR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_tradicional3.jpg',
            'atractivo_id' => 4,
            'activo' => 1
        ]);                   
        //5
        //6
        //7
        galeria::create([
            'Titulo' => 'LA ANTIGUA CÁRCEL Y EL CABILDO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/carcel1.jpg',
            'atractivo_id' => 7,
            'activo' => 1
        ]);   
        galeria::create([
            'Titulo' => 'LA ANTIGUA CÁRCEL Y EL CABILDO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/carcel2.jpg',
            'atractivo_id' => 7,
            'activo' => 1
        ]); 

        //8
        //9
        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia1.jpg',
            'atractivo_id' => 9,
            'activo' => 1
        ]);


        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia2.jpg',
            'atractivo_id' => 9,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia3.jpg',
            'atractivo_id' => 9,
            'activo' => 1
        ]);
        //10
        //11
        //12
        //13
        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diezcanseco.jpg',
            'atractivo_id' => 10,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diezcanseco2.jpg',
            'atractivo_id' => 10,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'PLAZA DE ARMAR',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diezcanseco3.jpg',
            'atractivo_id' => 10,
            'activo' => 1
        ]);        
        //14
        //15


    }
}
