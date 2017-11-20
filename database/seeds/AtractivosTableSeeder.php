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
       //1 
        atractivo::create([
            'titulo' => 'CASA DEL REGIDOR PERPETUO',//verificar nombre de atractivo
            'descripcion' => 'Este solar perteneció a los Condes de Alastaya.',
            'detalle' => 'Este solar perteneció a los Condes de Alastaya. De esta casa sólo se conserva la fachada y la magnífica portada de piedra profusamente labrada. En la inscripción que adorna la parte superior se lee: “Nuestra nobleza blasona que en la santidad encierra de un gran Señor de la tierra cabeza que los corone. Año 1750”. Se lucen tres escudos heráldicos y dos medallones con perfiles aristocráticos. A un extremo de la amplia portada está la espléndida ventana colonial de fierro forjado coronada por dos candeleros. La casa tuvo dos pisos y contaba con un balcón de madera labrada, pero se destruyó con el terremoto de 1948.',
            'direccion' => 'Calle Moquegua N° 404-414',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9356523',
            'latitud' => '-17.194194',
            'horarios' => '',
            'foto_url' => 'images/atractivos/regidor_perpetuo1.jpg',
            'video_url' => 'videos/mp4/CASADELREGIDORPERPETUO.mp4',
            'activo' => 1,
            'categoria_id' => 1]); 
        //2
        atractivo::create([
            'titulo' => 'PLAZA DE ARMAS',
            'descripcion' => 'Considerada como la más bella del sur peruano. ',
            'detalle' => 'Considerada como la más bella del sur peruano. Esta pequeña plaza está rodeada de imponentes ficus que le proporcionan sombra. En el centro se irgue la fuente ornamental de la ciudad, diseñada por el arquitecto francés Gustave Eiffel y construida en hierro. La fuente presenta tres cuerpos y tazas, en el nivel inferior se observan graciosos querubines, en el segundo, las tres gracias de la mitología griega: Aglaya, Eufrósine y Talía; el cuerpo superior es un ánfora griega. La base de la fuente está confeccionada de granito. Alrededor de la plaza se levantan algunos solares representativos de la ciudad.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9346494',
            'latitud' => '-17.1938378',
            'horarios' => '',
            'foto_url' => 'images/atractivos/plaza1.jpg',
            'video_url' => 'videos/mp4/PLAZADEARMAS.mp4',
            'activo' => 1,
            'categoria_id' => 1]);

        //3
        atractivo::create([
            'titulo' => 'CASA CHOCANO',
            'descripcion' => 'Esta casa fue reconstruida en el siglo XIX por don Nicolás Jacinto Chocano.',
            'detalle' => 'Esta casa fue reconstruida en el siglo XIX por don Nicolás Jacinto Chocano. Está ubicada en una esquina de la plaza de armas. Inicialmente fue más amplia pues abarcaba la casa contigua. Su fachada es enteramente de piedra. La recia portada da acceso al patio principal, empedrado, y en cuyo interior se presentan amplias y frescas habitaciones, terminadas en techo de mojinete.',
            'direccion' => 'Calle Ancash N° 417',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9347765',
            'latitud' => '-17.1943247',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_chocano.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);
        //4
        atractivo::create([
            'titulo' => 'CASA DE LOS FERNÁNDEZ DE CÓRDOBA O LOS DE LA FLOR',
            'descripcion' => 'Este solar fue propiedad de los Fernández de Córdoba.',
            'detalle' => 'Este solar fue propiedad de los Fernández de Córdoba, familia fundadora de la ciudad en 1623. Fue reconstruido en repetidas oportunidades perdiendo en cada una su esencia virreinal. Fue propiedad de doña Estela Fernández de Córdoba quien termina vendiendo el inmueble a su yerno don Ricardo de la Flor y de la Flor. Posee una sobria pero elegante portada de piedra flanqueada por dos ventanas coloniales con hierro forjado. En su fachada se puede observar el imponente balcón de cajón de cedro cochabambino. Posee dos patios alrededor de los cuales se ubican las habitaciones con amplios techos en mojinete.',
            'direccion' => 'Calle Ayacucho N° 540.',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.934372',
            'latitud' => '-17.194114',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_tradicional1.jpg',
            'video_url' => 'videos/mp4/CASADELOSFERNANDEZDECORDOVAODELAFLOR.mp4',
            'activo' => 1,
            'categoria_id' => 1]);        
        //5
        atractivo::create([
            'titulo' => 'CASA DE LOS FERNÁNDEZ CORNEJO Y FERNÁNDEZ DE CÓRDOBA',
            'descripcion' => 'Solar construido en dos plantas, con balcón corrido al frente de la plaza.',
            'detalle' => 'Solar construido en dos plantas, con balcón corrido al frente de la plaza, a lo largo de toda la fachada. Por el lado de la esquina, que da a la iglesia posee cinco ventanas en el primer nivel y cuatro en el segundo, además de un pequeño balcón. Posee techos amplios en mojinete con madera machimbrada. Ingresando por el zaguán, observamos un patio central muy amplio, antes todo empedrado, con un jardín en el centro del mismo. Hoy le pertenece a SERPOST.',
            'direccion' => 'Calle Ayacucho N° 550 - 570',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9341261',
            'latitud' => '-17.1940844',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_diez_ventanas.jpg',
            'video_url' => 'videos/mp4/CASADELOSFERNANDEZCORNEJOYFERNANDEZDECORDOBA.mp4',
            'activo' => 1,
            'categoria_id' => 1]);
        //6
        atractivo::create([
            'titulo' => 'MURO DE LA IGLESIA MATRIZ',
            'descripcion' => 'Se emplaza al lado norte de la plaza de armas de la ciudad.',
            'detalle' => 'Se emplaza al lado norte de la plaza de armas de la ciudad. Fue la antigua catedral de Moquegua y que constó de tres naves, dos campanarios y una torre donde se ubicó el primer reloj público de la ciudad. ',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9347544',
            'latitud' => '-17.1934791',
            'horarios' => '',
            'foto_url' => 'images/atractivos/muro_matriz2.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);  
        //7
        atractivo::create([
            'titulo' => 'LA ANTIGUA CÁRCEL Y EL CABILDO',
            'descripcion' => 'Ambas edificaciones se emplazan al lado sur de la plaza de armas.',
            'detalle' => 'Ambas edificaciones se emplazan al lado sur de la plaza de armas. Está construido íntegramente en piedra, con anchos muros y resguardado con macizas rejas. Sus techos son abovedados y el piso enteramente es de piedra. Posee zaguán y un patio interior alrededor de los cuales se encuentran los pequeños cuartos que sirvieron para alojar a los reos. El Cabildo, hoy Casa Mariátegui, fue edificado siguiendo los parámetros de la arquitectura civil moqueguana; con patio principal e interior y habitaciones que los circundan.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9345291',
            'latitud' => '-17.19436',
            'horarios' => '',
            'foto_url' => 'images/atractivos/carcel1.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);  
        //8
        atractivo::create([
            'titulo' => 'COMPLEJO SAN FRANCISCO Y LAS CATACUMBAS',
            'descripcion' => 'Se ubica en la calle Lima, a una cuadra de la plaza de armas.',
            'detalle' => 'Se ubica en la calle Lima, a una cuadra de la plaza de armas. El antiguo complejo de San Francisco fue edificado por los Jesuitas y luego de su expulsión fue ocupado por los Franciscanos. Desde su inicio funcionó para actividades docentes y misioneras y posteriormente como convento de varones. Fue sede del antiguo colegio Propaganda Fide. Destruido y levantado después de desastrosos sismos, aún mantiene la mayor parte de su estructura de piedra y el ingreso a las Catacumbas. De la antigua iglesia de San Francisco hoy solo quedan viejas paredes derruidas. Es una edificación de piedra, confeccionada en tres niveles, aunque en la actualidad se puedan observar el primero y parte de los corredores subterráneos. Estuvo compuesto de colegio, hospedaje para estudiantes, convento e iglesia de tres naves. Al ingresar podemos observar un sobrio patio de piedra. Bajo la vieja urbe de Moquegua, en lo que era la villa de Santa Catalina de Guadalcázar, se halla un conjunto de primer orden llamado Catacumbas, dispuesto en torno a los complejos eclesiásticos del virreinato (C. San Francisco, C. Betlemítico y C. Santo Domingo), iglesia Matriz, el antiguo corregimiento y los solares de las principales familias con poder político de la antigua villa.  Las Catacumbas, bóvedas subterráneas confeccionadas en piedra, son de simple manufactura y con pequeños nichos. Son pasillos subterráneos que tuvieron doble fin: la comunicación interna entre las órdenes religiosas y políticas, y los enterramientos habituales, no sólo de religiosos, sino también de personajes prominentes. Algo similar, aunque en menor tamaño, se puede observar en la villa heroica de San Agustín de Torata, sus catacumbas, están confeccionadas en piedra provenientes de las canteras circundantes.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.934804',
            'latitud' => '-17.191672',
            'horarios' => '',
            'foto_url' => 'images/atractivos/complejo_san_francisco_catacumbas.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);
        //9
        atractivo::create([
            'titulo' => 'COMPLEJO SANTO DOMINGO',
            'descripcion' => 'Ubicada en la esquina sur este de la plaza de armas.',
            'detalle' => 'Ubicada en la esquina sur este de la plaza de armas. Fue construida para que sirviera como iglesia, convento, hospicio y escuela de primeras letras. Hoy sólo se observa el templo elevado a co-catedral. Una de las pocas iglesias en el mundo donde se venera una santa en cuerpo presente. Santa Fortunata, cuya fiesta se celebra el 14 de octubre. Llegó a Moquegua desde el Vaticano en 1798. ',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9336815',
            'latitud' => '-17.1939819',
            'horarios' => '',
            'foto_url' => 'images/atractivos/iglesia3.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);
        //10
        atractivo::create([
            'titulo' => 'CASA DE LOS CABELLO',
            'descripcion' => 'En este antiguo solar nació la escritora Mercedes Cabello de la Llosa en 1842.',
            'detalle' => 'En este antiguo solar nació la escritora Mercedes Cabello de la Llosa en 1842. La vivienda fue restaurada después del terremoto de 1868, manteniendo su anterior diseño. Goza de cuartos adyacentes a la puerta principal y una ventana de hierro forjado a la calle. La fachada luce un muro de piedra. Se ingresa por un zaguán con techo abovedado que conduce a un patio empedrado y en el cual había una pileta de piedra. Una amplia escalera al lado izquierdo del patio conduce al segundo piso. Las habitaciones del segundo nivel son de quincha, con techos en mojinete de caña y barro; un corredor de madera y tres balcones.',
            'direccion' => 'Calle Moquegua N° 838',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.932889',
            'latitud' => '-17.192434',
            'horarios' => '',
            'foto_url' => 'images/atractivos/solar_de_cabellos.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);  
        //11
        atractivo::create([
            'titulo' => 'CASA DE LOS BARRIOS O CASA DE LA CULTURA',
            'descripcion' => 'Esta casa fue construida por don Pedro de Arguedas en 1791, luce su tradicional balcón de madera.',
            'detalle' => 'Esta casa fue construida por don Pedro de Arguedas en 1791, luce su tradicional balcón de madera. En 1824 fue adquirida por don Camilo Barrios Nieto, en completo estado de deterioro; se ocupó de restaurarla y ampliarla. Su nieto don Domingo Barrios y su esposa doña Adelaida Hurtado de Mendoza donan la propiedad a la municipalidad para que en ella funcionen las oficinas. Tiene dos patios alrededor de los cuales se distribuyen las amplias habitaciones con techos altos en mojinete. Hoy el Municipio la ha convertido en un elegante centro cultural.',
            'direccion' => 'Calle Moquegua N° 851',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9330874',
            'latitud' => '-17.1921543',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_cultura.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);   
        //12    
        atractivo::create([
            'titulo' => 'CASA DE LOS FERNÁNDEZ MALDONADO',
            'descripcion' => 'Fue reconstruida por Mariano Fernández Maldonado, cuyas iniciales aparecen grabadas en la parte superior de la portada.',
            'detalle' => 'Fue reconstruida por Mariano Fernández Maldonado, cuyas iniciales aparecen grabadas en la parte superior de la portada. Más conocida como Casa de la serpiente, sus antiguos propietarios la llamaban Casa de la Culebra, a causa de la cabeza de serpiente tallada debajo de una pequeña ventana de la fachada. En un principio la vivienda fue de dos niveles, el terremoto de 1868 destruyó este antiguo solar y el segundo piso no se volvió a levantar. Las espaciosas habitaciones tienen vigas de madera artísticamente talladas y es el único caso de una vivienda que presenta actualmente dichas características. Sirvió de cuartel durante la guerra con Chile.',
            'direccion' => 'Calle Tarapacá N° 398',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.932466',
            'latitud' => '-17.19273',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_serpiente.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);   
        //13    
        atractivo::create([
            'titulo' => 'CASA DE LOS DIEZ CANSECO Y FERNÁNDEZ DÁVILA',
            'descripcion' => 'De este importante solar hoy sólo puede observarse la bella portada de piedra ricamente tallada personalizada con querubines, plantas, animales y figuras heráldicas.',
            'detalle' => 'De este importante solar hoy sólo puede observarse la bella portada de piedra ricamente tallada personalizada con querubines, plantas, animales y figuras heráldicas.',
            'direccion' => 'Calle Ayacucho N 868',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9323',
            'latitud' => '-17.192902',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_diezcanseco.jpg',
            'video_url' => 'videos/mp4/CASADELOSDIEZCANSECOYFERNANDEZDAVILA.mp4',
            'activo' => 1,
            'categoria_id' => 1]); 
        //14
        atractivo::create([
            'titulo' => 'CASA DE LOS JIMÉNEZ DE LA FLOR',
            'descripcion' => 'Hoy funciona el hogar de ancianos.',
            'detalle' => 'Hoy funciona el hogar de ancianos. Es un solar característico de Moquegua, con techos en mojinete, portada de piedra y rejas sevillanas. El antiguo zaguán nos conduce a un amplio patio empedrado, rodeado de habitaciones, algunas de las cuales aún lucen habitaciones enchapadas en madera; el segundo patio luce una fuente de piedra, a su vez, rodeado de habitaciones.',
            'direccion' => 'Calle Tarapacá N',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.93223',
            'latitud' => '-17.192675',
            'horarios' => '',
            'foto_url' => 'images/atractivos/casa_ancianos.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);

        //15
        atractivo::create([
            'titulo' => 'COMPLEJO BETLEMÍTICO Y EL BARRIO BELÉN',
            'descripcion' => 'Ubicado a cuatro cuadras de la plaza de armas, con dirección este',
            'detalle' => 'Ubicado a cuatro cuadras de la plaza de armas, con dirección este. Fue una imponente edificación que contó con una iglesia sencilla, pero de bella arquitectura. Convento y hospital con campanario, sacristía, botica y portería. Fundado en 1743, fue uno de los hospitales más antiguos del Perú virreinal. El barrio que circunda al antiguo complejo es conocido como Barrio Belén. Encantador contorno que guarda la arquitectura virreinal y republicana de Moquegua, sus solares exhiben balcones, portadas, ventanas sevillanas y techos de mojinete.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9310187',
            'latitud' => '-17.1912383',
            'horarios' => '',
            'foto_url' => 'images/atractivos/iglesia_belen.jpg',
            'video_url' => 'videos/mp4/COMPLEJOBETLEMITICOYELBARRIOBELEN.mp4',
            'activo' => 1,
            'categoria_id' => 1]);
        //BODEGAS 6///////////////////////////////////////////////////
        //16
        //6-1
        atractivo::create([
            'titulo' => 'BODEGAS ANTIGUAS',
            'descripcion' => 'Moquegua ofrece una experiencia turística a través de los sentidos; resaltando la oferta gastronómica, visita a centenarias y tradicionales bodegas de pisco y vino, en medio de paisajes incomparables, disfrutando bajo un soleado y cálido clima.',
            'detalle' => 'La ruta del pisco te invita a disfrutar de la campiña moquegua, recorrer sus diversos rincones y pasajes, donde se elevan una cantidad generosa de bodegas coloniales y tradicionales, que entre parajes rurales hacen su aparición que para felicidad nuestra, acogidas bajo su sombra podemos disfrutar vinos, piscos y diversos licores que son la expresión enaltecida de tradicionales fórmulas y saberes de antiguos viñateros, que han atrevesado los tiempos graciasa su descendencia, a la que supieron contagiar el amor por la elaboración del pisco y demás bebidas, Así, pues, Moquegua es cuna de los más exquisitos Piscos del Perú',
            'direccion' => 'Mariscal Nieto - El valle',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.995075', 
            'latitud' => '-17.317464',
            'horarios' => '',
            'foto_url' => 'images/bodegas/1.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);
        //17
        //6-2
        atractivo::create([
            'titulo' => 'BODEGAS GHERSI',
            'descripcion' => 'Moquegua ofrece una experiencia turística a través de los sentidos; resaltando la oferta gastronómica, visita a centenarias y tradicionales bodegas de pisco y vino, en medio de paisajes incomparables, disfrutando bajo un soleado y cálido clima.',
            'detalle' => 'La ruta del pisco te invita a disfrutar de la campiña moquegua, recorrer sus diversos rincones y pasajes, donde se elevan una cantidad generosa de bodegas coloniales y tradicionales, que entre parajes rurales hacen su aparición que para felicidad nuestra, acogidas bajo su sombra podemos disfrutar vinos, piscos y diversos licores que son la expresión enaltecida de tradicionales fórmulas y saberes de antiguos viñateros, que han atrevesado los tiempos graciasa su descendencia, a la que supieron contagiar el amor por la elaboración del pisco y demás bebidas, Así, pues, Moquegua es cuna de los más exquisitos Piscos del Perú',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto - El valle',
            'longitud' => '-70.983176',
            'latitud' => '-17.271867', 


            'horarios' => '',
            'foto_url' => 'images/bodegas/1.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);
        //18
        //6-3
        atractivo::create([
            'titulo' => 'BODEGAS BIONDI',
            'descripcion' => 'Moquegua ofrece una experiencia turística a través de los sentidos; resaltando la oferta gastronómica, visita a centenarias y tradicionales bodegas de pisco y vino, en medio de paisajes incomparables, disfrutando bajo un soleado y cálido clima.',
            'detalle' => 'La ruta del pisco te invita a disfrutar de la campiña moquegua, recorrer sus diversos rincones y pasajes, donde se elevan una cantidad generosa de bodegas coloniales y tradicionales, que entre parajes rurales hacen su aparición que para felicidad nuestra, acogidas bajo su sombra podemos disfrutar vinos, piscos y diversos licores que son la expresión enaltecida de tradicionales fórmulas y saberes de antiguos viñateros, que han atrevesado los tiempos graciasa su descendencia, a la que supieron contagiar el amor por la elaboración del pisco y demás bebidas, Así, pues, Moquegua es cuna de los más exquisitos Piscos del Perú',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto - El valle',
            'longitud' => '-70.9832829',
            'latitud' => '-17.2393657', 

            'horarios' => '',
            'foto_url' => 'images/bodegas/632.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);
        //19
        //6-4
        atractivo::create([
            'titulo' => 'BODEGAS ZAPATA',
            'descripcion' => 'Moquegua ofrece una experiencia turística a través de los sentidos; resaltando la oferta gastronómica, visita a centenarias y tradicionales bodegas de pisco y vino, en medio de paisajes incomparables, disfrutando bajo un soleado y cálido clima.',
            'detalle' => 'La ruta del pisco te invita a disfrutar de la campiña moquegua, recorrer sus diversos rincones y pasajes, donde se elevan una cantidad generosa de bodegas coloniales y tradicionales, que entre parajes rurales hacen su aparición que para felicidad nuestra, acogidas bajo su sombra podemos disfrutar vinos, piscos y diversos licores que son la expresión enaltecida de tradicionales fórmulas y saberes de antiguos viñateros, que han atrevesado los tiempos graciasa su descendencia, a la que supieron contagiar el amor por la elaboración del pisco y demás bebidas, Así, pues, Moquegua es cuna de los más exquisitos Piscos del Perú',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto - El valle',
            'longitud' => '-70.9838462',
            'latitud' => '-17.2373483', 
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/641.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);
        //
        
        atractivo::create([
            'titulo' => 'GEOGLIFOS DE CHEN CHEN',
            'descripcion' => 'Se encuentran a unos 10 min. al sureste de la ciudad, tomando la ruta a Toquepala, a unos 1500 m.s.n.m. El grupo de representaciones más interesante se emplaza en el centro de una cadena de colinas situados en Chen Chen. ',
            'detalle' => 'Se encuentran a unos 10 min. al sureste de la ciudad, tomando la ruta a Toquepala, a unos 1500 m.s.n.m. El grupo de representaciones más interesante se emplaza en el centro de una cadena de colinas situados en Chen Chen. Son representaciones zoomorfas (auquénidos), fitomorfas y antropomorfas que fueron construidas en las laderas de los cerros por la cultura Tiwanacu quienes emplearon dos técnicas: retirando la capa superficial del terreno o bien, adicionando piedras con diferente tonalidad al suelo, a manera de mosaico.',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.926285',
            'latitud' => '-17.223654',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/geoglifos1.jpg',
            'video_url' => 'videos/mp4/LOSGEOGLIFOSDECHENCHEN.mp4',
            'activo' => 1,
            'categoria_id' => 1]); 
        //21
        atractivo::create([
            'titulo' => 'BODEGA ATENCIO TAPIA',
             'descripcion' => 'Moquegua ofrece una experiencia turística a través de los sentidos; resaltando la oferta gastronómica, visita a centenarias y tradicionales bodegas de pisco y vino, en medio de paisajes incomparables, disfrutando bajo un soleado y cálido clima.',
            'detalle' => 'La ruta del pisco te invita a disfrutar de la campiña moquegua, recorrer sus diversos rincones y pasajes, donde se elevan una cantidad generosa de bodegas coloniales y tradicionales, que entre parajes rurales hacen su aparición que para felicidad nuestra, acogidas bajo su sombra podemos disfrutar vinos, piscos y diversos licores que son la expresión enaltecida de tradicionales fórmulas y saberes de antiguos viñateros, que han atrevesado los tiempos graciasa su descendencia, a la que supieron contagiar el amor por la elaboración del pisco y demás bebidas, Así, pues, Moquegua es cuna de los más exquisitos Piscos del Perú',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto - Chen Chen',
            'longitud' => '-70.924259',
            'latitud' => '-17.215572',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/1.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);   

        //22
        atractivo::create([
            'titulo' => 'MIRADOR CRISTO BLANCO',
            'descripcion' => 'MIRADOR CRISTO BLANCO',
            'detalle' => 'MIRADOR CRISTO BLANCO',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9297997',
            'latitud' => '-17.1975564',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/cristo_blanco1.jpg',
            'video_url' => 'videos/mp4/CRISTOBLANCO.mp4',
            'activo' => 1,
            'categoria_id' => 1]); 

        atractivo::create([
            'titulo' => 'TERMINAL TERRESTRE',
            'descripcion' => 'TERMINAL TERRESTRE',
            'detalle' => 'TERMINAL TERRESTRE',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9482136',
            'latitud' => '-17.1911595',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/terminal.JPG',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]); 

        atractivo::create([
            'titulo' => 'PARQUE ECOLÓGICO',
            'descripcion' => 'PARQUE ECOLÓGICO',
            'detalle' => 'PARQUE ECOLÓGICO',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9484048',
            'latitud' => '-17.1877323',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/ecologico.JPG',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);  

        atractivo::create([
            'titulo' => 'BODEGA PARRAS & REYES',
            'descripcion' => 'BODEGA PARRAS & REYES',
            'detalle' => 'BODEGA PARRAS & REYES',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9412494',
            'latitud' => '-17.184134',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/parrasyreyes.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);  

        atractivo::create([
            'titulo' => 'BODEGA RAYITO DE SOL',
            'descripcion' => 'BODEGA RAYITO DE SOL',
            'detalle' => 'BODEGA RAYITO DE SOL',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9451412',
            'latitud' => '-17.1835814',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/rayito.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);

        atractivo::create([
            'titulo' => 'BODEGA PAREDES',
            'descripcion' => 'BODEGA PAREDES',
            'detalle' => 'BODEGA PAREDES',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9481885',
            'latitud' => '-17.1824169',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/paredes.JPG',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);

        atractivo::create([
            'titulo' => 'BODEGA EL MOCHO',
            'descripcion' => 'BODEGA EL MOCHO',
            'detalle' => 'BODEGA EL MOCHO',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9258193',
            'latitud' => '-17.1607121',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/mocho.JPG',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]); 

        atractivo::create([
            'titulo' => 'BODEGA CFAM',
            'descripcion' => 'BODEGA CFAM',
            'detalle' => 'BODEGA CFAM',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.92896',
            'latitud' => '-17.177246',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/1.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);  

        atractivo::create([
            'titulo' => 'BODEGA DON CAMILO',
            'descripcion' => 'BODEGA DON CAMILO',
            'detalle' => 'BODEGA DON CAMILO',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9249966',
            'latitud' => '-17.1803916',
            
            'horarios' => '',
            'foto_url' => 'images/bodegas/1.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 6]);  

        atractivo::create([
            'titulo' => 'ESTADIO 25 DE NOVIEMBRE',
            'descripcion' => 'ESTADIO 25 DE NOVIEMBRE',
            'detalle' => 'ESTADIO 25 DE NOVIEMBRE',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9297962',
            'latitud' => '-17.1862302',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/estadio.JPG',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);  

        atractivo::create([
            'titulo' => 'MIRADOR INMACULADA CONCEPCIÓN',
            'descripcion' => 'MIRADOR INMACULADA CONCEPCIÓN',
            'detalle' => 'MIRADOR INMACULADA CONCEPCIÓN',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.8956552',
            'latitud' => '-17.1794529',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/estadio.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 1]);      

         atractivo::create([
            'titulo' => 'Hotel Moquegua',
            'descripcion' => 'Hotel Moquegua',
            'detalle' => 'Hotel Moquegua',
            'direccion' => '',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '70.93951195',
            'latitud' => '-17.19008065',
            
            'horarios' => '',
            'foto_url' => 'images/atractivos/hotel.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 3]);                              
                    
        atractivo::create([
            'titulo' => 'Ledelca Tours',
            'descripcion' => 'Ledelca Tours',
            'detalle' => 'Agencia de viajes en Moquegua, Perú',
            'direccion' => 'Calle Ayacucho N° 625',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9339868',
            'latitud' => '-17.1937281',

            'horarios' => '',
            'foto_url' => 'images/agencias/agencia.png',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 10]);                              
        
        atractivo::create([
            'titulo' => 'DM Hoteles Moquegua',
            'descripcion' => 'DM Hoteles Moquegua',
            'detalle' => 'Haciendo gala de su nombre, El Mirador de Moquegua, tiene la mejor vista de la ciudad y es el principal balcón para apreciar y contemplar la tranquilidad de este Valle.',
            'direccion' => 'Calle Ayacucho N° 625',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9322392',
            'latitud' => '-17.1836055',

            'horarios' => '',
            'foto_url' => 'images/hoteles/dmoquegua.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 3]);         

        atractivo::create([
            'titulo' => 'Taxigol Moquegua',
            'descripcion' => 'Taxigol Moquegua',
            'detalle' => 'Nuestra misión es prestar un excelente servicio,teniendo como principio la mejor atención al cliente un servicio eficiente honorable, ético y responsable',
            'direccion' => 'Mariscal Nieto',
            'ubicacion' => 'Mariscal Nieto',
            'longitud' => '-70.9322392',
            'latitud' => '-70.9322392',
            
            'horarios' => '',
            'foto_url' => 'images/transporte/taxigol.jpg',
            'video_url' => '',
            'activo' => 1,
            'categoria_id' => 5]);      

        
    }
}
