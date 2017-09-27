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
            'Titulo' => 'PLAZA DE ARMAS',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/plaza2.jpg',
            'atractivo_id' => 2,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'PLAZA DE ARMAS',
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
        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ CORNEJO Y FERNÁNDEZ DE CÓRDOBA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diez_ventanas.jpg',
            'atractivo_id' => 5,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ CORNEJO Y FERNÁNDEZ DE CÓRDOBA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diez_ventanas2.jpg',
            'atractivo_id' => 5,
            'activo' => 1
        ]);
        //6
        galeria::create([
            'Titulo' => 'MURO DE LA IGLESIA MATRIZ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/muro_matriz.jpg',
            'atractivo_id' => 6,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'MURO DE LA IGLESIA MATRIZ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/muro_matriz2.jpg',
            'atractivo_id' => 6,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'MURO DE LA IGLESIA MATRIZ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/muro_matriz3.jpg',
            'atractivo_id' => 6,
            'activo' => 1
        ]);        
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
        galeria::create([
            'Titulo' => 'COMPLEJO SAN FRANCISCO Y LAS CATACUMBAS',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/complejo_san_francisco_catacumbas.jpg',
            'atractivo_id' => 8,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'COMPLEJO SAN FRANCISCO Y LAS CATACUMBAS',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/complejo_san_francisco_catacumbas1.jpg',
            'atractivo_id' => 8,
            'activo' => 1
        ]);
        //9
        galeria::create([
            'Titulo' => 'COMPLEJO SANTO DOMINGO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia1.jpg',
            'atractivo_id' => 9,
            'activo' => 1
        ]);


        galeria::create([
            'Titulo' => 'COMPLEJO SANTO DOMINGO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia2.jpg',
            'atractivo_id' => 9,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'COMPLEJO SANTO DOMINGO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_cultura.jpg',
            'atractivo_id' => 9,
            'activo' => 1
        ]);
        //10

        galeria::create([
            'Titulo' => 'CASA DE LOS CABELLO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/solar_de_cabellos.jpg',
            'atractivo_id' => 10,
            'activo' => 1
        ]);
        galeria::create([
            'Titulo' => 'CASA DE LOS CABELLO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/solar_de_cabellos1.jpg',
            'atractivo_id' => 10,
            'activo' => 1
        ]);

        //11
        galeria::create([
            'Titulo' => 'CASA DE LOS BARRIOS O CASA DE LA CULTURA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_cultura.jpg',
            'atractivo_id' => 11,
            'activo' => 1
        ]);
        galeria::create([
            'Titulo' => 'CASA DE LOS BARRIOS O CASA DE LA CULTURA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_cultura1.jpg',
            'atractivo_id' => 11,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'CASA DE LOS BARRIOS O CASA DE LA CULTURA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_cultura2.jpg',
            'atractivo_id' => 11,
            'activo' => 1
        ]);

        //12
        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ MALDONADO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_serpiente.jpg',
            'atractivo_id' => 12,
            'activo' => 1
        ]);
        galeria::create([
            'Titulo' => 'CASA DE LOS FERNÁNDEZ MALDONADO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_serpiente2.jpg',
            'atractivo_id' => 12,
            'activo' => 1
        ]);

        //13
        galeria::create([
            'Titulo' => 'CASA DE LOS DIEZ CANSECO Y FERNÁNDEZ DÁVILA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diezcanseco.jpg',
            'atractivo_id' => 13,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'CASA DE LOS DIEZ CANSECO Y FERNÁNDEZ DÁVILA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diezcanseco2.jpg',
            'atractivo_id' => 13,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'CASA DE LOS DIEZ CANSECO Y FERNÁNDEZ DÁVILA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_diezcanseco3.jpg',
            'atractivo_id' => 13,
            'activo' => 1
        ]);        
        //14
        galeria::create([
            'Titulo' => 'CASA DE LOS JIMÉNEZ DE LA FLOR ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_ancianos.jpg',
            'atractivo_id' => 14,
            'activo' => 1
        ]);  

        galeria::create([
            'Titulo' => 'CASA DE LOS JIMÉNEZ DE LA FLOR ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/casa_ancianos2.jpg',
            'atractivo_id' => 14,
            'activo' => 1
        ]);  
        //15
        galeria::create([
            'Titulo' => 'COMPLEJO BETLEMÍTICO Y EL BARRIO ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia_belen.jpg',
            'atractivo_id' => 15,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'COMPLEJO BETLEMÍTICO Y EL BARRIO ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia_belen2.jpg',
            'atractivo_id' => 15,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'COMPLEJO BETLEMÍTICO Y EL BARRIO ',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/iglesia_belen3.jpg',
            'atractivo_id' => 15,
            'activo' => 1
        ]);        

        ///BODEGAS///////////////////////////////////////////////////////////
        //16
            //6-2
        //17
            //6-3 
        galeria::create([
            'Titulo' => 'BODEGAS BIONDI',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/bodegas/631.jpg',
            'atractivo_id' => 18,
            'activo' => 1
        ]);
        galeria::create([
            'Titulo' => 'BODEGAS BIONDI',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/bodegas/632.jpg',
            'atractivo_id' => 18,
            'activo' => 1
        ]);  
        galeria::create([
            'Titulo' => 'BODEGAS BIONDI',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/bodegas/633.jpg',
            'atractivo_id' => 18,
            'activo' => 1
        ]);                          
        //19
            //6-4
        galeria::create([
            'Titulo' => 'BODEGAS ZAPATA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/bodegas/641.jpg',
            'atractivo_id' => 19,
            'activo' => 1
        ]); 
        galeria::create([
            'Titulo' => 'BODEGAS ZAPATA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/bodegas/642.jpg',
            'atractivo_id' => 19,
            'activo' => 1
        ]); 
        galeria::create([
            'Titulo' => 'BODEGAS ZAPATA',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/bodegas/643.jpg',
            'atractivo_id' => 19,
            'activo' => 1
        ]);                 
        //20
        galeria::create([
            'Titulo' => 'GEOGLIFOS DE CHEN CHEN',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/geoglifos1.jpg',
            'atractivo_id' => 20,
            'activo' => 1
        ]);  

        galeria::create([
            'Titulo' => 'GEOGLIFOS DE CHEN CHEN',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/geoglifos2.jpg',
            'atractivo_id' => 20,
            'activo' => 1
        ]);

        galeria::create([
            'Titulo' => 'GEOGLIFOS DE CHEN CHEN',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/geoglifos3.jpg',
            'atractivo_id' => 20,
            'activo' => 1
        ]);
        //22
        galeria::create([
            'Titulo' => 'MIRADOR CRISTO BLANCO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/cristo_blanco1.jpg',
            'atractivo_id' => 22,
            'activo' => 1
        ]);  
        galeria::create([
            'Titulo' => 'MIRADOR CRISTO BLANCO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/cristo_blanco2.jpg',
            'atractivo_id' => 22,
            'activo' => 1
        ]);                
        galeria::create([
            'Titulo' => 'MIRADOR CRISTO BLANCO',
            'foto_url' => 'http://moqueguaturismo.gob.pe/images/atractivos/cristo_blanco3.jpg',
            'atractivo_id' => 22,
            'activo' => 1
        ]);   

    }
}
