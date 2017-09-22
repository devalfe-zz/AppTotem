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
            'titulo' => 'CASA DEL REGIDOR PERPETUO',
            'descripcion' => 'Este solar perteneció a los Condes de Alastaya.',
            'detalle' => 'Este solar perteneció a los Condes de Alastaya. De esta casa sólo se conserva la fachada y la magnífica portada de piedra profusamente labrada. En la inscripción que adorna la parte superior se lee: “Nuestra nobleza blasona que en la santidad encierra de un gran Señor de la tierra cabeza que los corone. Año 1750”. Se lucen tres escudos heráldicos y dos medallones con perfiles aristocráticos. A un extremo de la amplia portada está la espléndida ventana colonial de fierro forjado coronada por dos candeleros. La casa tuvo dos pisos y contaba con un balcón de madera labrada, pero se destruyó con el terremoto de 1948.',
            'direccion' => 'Calle Moquegua N° 404-414',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => -70.9356523,
            'latitud' => -17.194194,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]); 

        atractivo::create([
            'titulo' => 'PLAZA DE ARMAS',
            'descripcion' => 'Considerada como la más bella del sur peruano. ',
            'detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel y construida en hierro. La fuente presenta tres cuerpos y tazas, en el nivel inferior se observan graciosos querubines, en el segundo, las tres gracias de la mitología griega: Aglaya, Eufrósine y Talía; el cuerpo superior es un ánfora griega. La base de la fuente está confeccionada de granito. Alrededor de la plaza se levantan algunos solares representativos de la ciudad.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => -70.9346494,
            'latitud' => -17.1938378,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);


        atractivo::create([
            'titulo' => 'CASA CHOCANO',
            'descripcion' => 'Esta casa fue reconstruida en el siglo XIX por don Nicolás Jacinto Chocano.',
            'detalle' => 'Esta casa fue reconstruida en el siglo XIX por don Nicolás Jacinto Chocano. Está ubicada en una esquina de la plaza de armas. Inicialmente fue más amplia pues abarcaba la casa contigua. Su fachada es enteramente de piedra. La recia portada da acceso al patio principal, empedrado, y en cuyo interior se presentan amplias y frescas habitaciones, terminadas en techo de mojinete.',
            'direccion' => 'Calle Ancash N° 417',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);

        atractivo::create([
            'titulo' => 'CASA DE LOS FERNÁNDEZ DE CÓRDOVA O LOS DE LA FLOR',
            'descripcion' => 'Este solar fue propiedad de los Fernández de Córdoba.',
            'detalle' => 'Este solar fue propiedad de los Fernández de Córdoba, familia fundadora de la ciudad en 1623. Fue reconstruido en repetidas oportunidades perdiendo en cada una su esencia virreinal. Fue propiedad de doña Estela Fernández de Córdoba quien termina vendiendo el inmueble a su yerno don Ricardo de la Flor y de la Flor. Posee una sobria pero elegante portada de piedra flanqueada por dos ventanas coloniales con hierro forjado. En su fachada se puede observar el imponente balcón de cajón de cedro cochabambino. Posee dos patios alrededor de los cuales se ubican las habitaciones con amplios techos en mojinete.',
            'direccion' => 'Calle Ayacucho N° 540.',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);        

        atractivo::create([
            'titulo' => 'CASA DE LOS FERNÁNDEZ CORNEJO Y FERNÁNDEZ DE CÓRDOVA',
            'descripcion' => 'Solar construido en dos plantas, con balcón corrido al frente de la plaza.',
            'detalle' => 'Solar construido en dos plantas, con balcón corrido al frente de la plaza, a lo largo de toda la fachada. Por el lado de la esquina, que da a la iglesia posee 5 ventanas en el primer nivel y 4 en el segundo, además de 1 pequeño balcón. Posee techos amplios en mojinete con madera machimbrada. Ingresando por el zaguán, observamos un patio central muy amplio, antes todo empedrado, con un jardín en el centro del mismo. Hoy le pertenece a SERPOST.',
            'direccion' => 'Calle Ayacucho N° 550 - 570',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);

        atractivo::create([
            'titulo' => 'MURO DE LA IGLESIA MATRIZ',
            'descripcion' => 'Se emplaza al lado norte de la plaza de armas de la ciudad.',
            'detalle' => 'Se emplaza al lado norte de la plaza de armas de la ciudad. Fue la antigua catedral de Moquegua y que constó de tres naves, dos campanarios y una torre donde se ubicó el primer reloj público de la ciudad. ',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);  

        atractivo::create([
            'titulo' => 'LA ANTIGUA CÁRCEL Y EL CABILDO',
            'descripcion' => 'Ambas edificaciones se emplazan al lado sur de la plaza de armas.',
            'detalle' => 'Ambas edificaciones se emplazan al lado sur de la plaza de armas. Está construido íntegramente en piedra, con anchos muros y resguardado con macizas rejas. Sus techos son abovedados y el piso enteramente es de piedra. Posee zaguán y un patio interior alrededor de los cuales se encuentran los pequeños cuartos que sirvieron para alojar a los reos. El Cabildo, hoy Casa Mariátegui, fue edificado siguiendo los parámetros de la arquitectura civil moqueguana; con patio principal e interior y habitaciones que los circundan.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);  

        atractivo::create([
            'titulo' => 'COMPLEJO SAN FRANCISCO Y LAS CATACUMBAS',
            'descripcion' => 'Se ubica en la calle Lima, a una cuadra de la plaza de armas.',
            'detalle' => 'Se ubica en la calle Lima, a una cuadra de la plaza de armas. El antiguo complejo de San Francisco fue edificado por los Jesuitas y luego de su expulsión fue ocupado por los Franciscanos. Desde su inicio funcionó para actividades docentes y misioneras y posteriormente como convento de varones. Fue sede del antiguo colegio Propaganda Fide. Destruido y levantado después de desastrosos sismos, aún mantiene la mayor parte de su estructura de piedra y el ingreso a las Catacumbas. De la antigua Iglesia de San Francisco hoy solo quedan viejas paredes derruidas.
    Es una edificación de piedra, confeccionada en tres niveles, aunque en la actualidad se puedan observar el primero y parte de los corredores subterráneos. Estuvo compuesto de colegio, hospedaje para estudiantes, convento e iglesia de tres naves. Al ingresar podemos observar un sobrio patio de piedra. 
    Bajo la vieja urbe de Moquegua, en lo que era la Villa de Santa Catalina de Guadalcázar, se halla un conjunto de primer orden llamado Catacumbas, dispuesto en torno a los complejos eclesiásticos del virreinato (C. San Francisco, C. Betlemítico y C. Santo Domingo), Iglesia Matriz, el antiguo corregimiento y los solares de las principales familias con poder político de la antigua villa. 
    Las Catacumbas, bóvedas subterráneas confeccionadas en piedra, son de simple manufactura y con pequeños nichos. Son pasillos subterráneos que tuvieron doble fin: la comunicación interna entre las órdenes religiosas y políticas, y los enterramientos habituales, no sólo de religiosos, sino también de personajes prominentes.
    Algo similar, aunque en menor tamaño, se puede observar en la villa heroica de San Agustín de Torata, sus catacumbas, están confeccionadas en piedra provenientes de las canteras circundantes.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);

        atractivo::create([
            'titulo' => 'COMPLEJO SANTO DOMINGO',
            'descripcion' => 'Ubicada en la esquina sur este de la plaza de armas.',
            'detalle' => 'Ubicada en la esquina sur este de la plaza de armas. Fue construida para que sirviera como iglesia, convento, hospicio y escuela de primeras letras. Hoy sólo se observa el templo elevado a co-catedral. Una de las pocas iglesias en el mundo donde se venera una santa en cuerpo presente. Santa Fortunata, cuya fiesta se celebra el 14 de octubre. Llegó a Moquegua desde el Vaticano en 1798. ',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);

        atractivo::create([
            'titulo' => '',
            'descripcion' => '',
            'detalle' => '',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => ,
            'latitud' => ,
            'horarios' => '',
            'foto_url' => 'img',
            'activo' => 1,
            'categoria_id' => 1]);            
 
    }
}