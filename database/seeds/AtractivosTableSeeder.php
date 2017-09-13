<?php

use Illuminate\Database\Seeder;
use Apptotem\atractivo;
class AtractivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        atractivo::create(['titulo' => 'Casa Del Regidor Perpetuo','descripcion' => 'Este solar perteneció a los Condes de Alastaya','detalle' => 'Este solar perteneció a los Condes de Alastaya. De esta casa sólo se conserva la fachada y la magnífica portada de piedra profusamente labrada. En la inscripción que adorna la parte superior se lee:','direccion' => 'Calle Moquegua N° 404-414','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','categoria_id' => 1,'activo' => 1]);
        
        atractivo::create(['titulo' => 'Plaza De Armas','descripcion' => 'Considerada como la más bella del sur peruano','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => '','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','categoria_id' => 1,'activo' => 1]);
        atractivo::create(['titulo' => 'Casa Chocano','descripcion' => 'Esta casa fue reconstruida en el siglo XIX por don Nicolás Jacinto Chocano','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => 'Calle Ancash N° 417','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','categoria_id' => 1,'activo' => 1]);
        atractivo::create(['titulo' => 'Casa De Los Fernández De Córdova O Los De La Flor','descripcion' => 'Este solar fue propiedad de los Fernández de Córdoba, familia fundadora de la ciudad en 1623.','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => 'Calle Ayacucho N° 540','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','categoria_id' => 1,'activo' => 1]);
        atractivo::create(['titulo' => 'Casa De Los Fernández Cornejo Y Fernández De Córdova','descripcion' => 'Solar construido en dos plantas, con balcón corrido al frente de la plaza','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => 'Calle Ayacucho N° 550 - 570','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','categoria_id' => 1,'activo' => 1]);


    }
}
