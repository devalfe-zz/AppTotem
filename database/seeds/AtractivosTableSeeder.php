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
        atractivo::create([
            'titulo' => 'Casa Del Regidor Perpetuo',
            'descripcion' => 'Este solar perteneció a los Condes de Alastaya',
            'detalle' => 'Este solar perteneció a los Condes de Alastaya. De esta casa sólo se conserva la fachada y la magnífica portada de piedra profusamente labrada. En la inscripción que adorna la parte superior se lee:','direccion' => 'Calle Moquegua N° 404-414',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => -70.9346494,
            'latitud' => -17.1938378,
            'horarios' => '',
            'foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fomate.jpg?alt=media&token=99fe7d6e-a5f0-4b74-828f-5c77149320a8',
            'activo' => 1,
            'categoria_id' => 1]);
        
        atractivo::create([
            'titulo' => 'Plaza De Armas',
            'descripcion' => 'Considerada como la más bella del sur peruano',
            'detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => -70.9346494,
            'latitud' => -17.1938378,
            'horarios' => '',
            'foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2FImagen%20351.jpg?alt=media&token=148188b9-d9d3-4944-91c9-615f803d4eb6',
            'activo' => 1,
            'categoria_id' => 1]);
        atractivo::create(['titulo' => 'Casa Chocano','descripcion' => 'Esta casa fue reconstruida en el siglo XIX por don Nicolás Jacinto Chocano','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => 'Calle Ancash N° 417','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fcerro-baul.jpg?alt=media&token=12cb2b6a-25eb-4b67-8c27-70a90ff11be3','activo' => 1,'categoria_id' => 1]);
        atractivo::create(['titulo' => 'Casa De Los Fernández De Córdova O Los De La Flor','descripcion' => 'Este solar fue propiedad de los Fernández de Córdoba, familia fundadora de la ciudad en 1623.','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => 'Calle Ayacucho N° 540','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fvargas.jpg?alt=media&token=46b784a8-46a3-425d-a59a-eb8108c1980a','activo' => 1,'categoria_id' => 1]);
        atractivo::create(['titulo' => 'Casa De Los Fernández Cornejo Y Fernández De Córdova','descripcion' => 'Solar construido en dos plantas, con balcón corrido al frente de la plaza','detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel','direccion' => 'Calle Ayacucho N° 550 - 570','ubicacion' => 'Mariscal Nieto','longitud' => -70.9346494,'latitud' => -17.1938378,'horarios' => '','foto_url' => 'https://firebasestorage.googleapis.com/v0/b/toursapp-78bac.appspot.com/o/fotos%2Fphotos1-4305-moquegua_catedral_santo_domingo.jpg?alt=media&token=b4c56f3a-759b-466c-9ee0-85d0e437a798','activo' => 1,'categoria_id' => 1]);


    }
}
