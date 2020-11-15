
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE tblestado (
  PKCodigo int(11) NOT NULL,
  Descripcion varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO tblestado (PKCodigo, Descripcion) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Disponible'),
(4, 'Agotado'),
(5, 'Pausado');

CREATE TABLE tblpersonas (
  TipoId set('CC','TI','PAS','CE','NIT') COLLATE utf8_spanish2_ci NOT NULL,
  PKIdentificacion varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  Nombres varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  Apellidos varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  FKCodigo_TblSexo int(11) NOT NULL,
  FNacimiento date NOT NULL,
  Correo varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  Telefono varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  Direccion varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO tblpersonas (TipoId, PKIdentificacion, Nombres, Apellidos, FKCodigo_TblSexo, FNacimiento, Correo, Telefono, Direccion) VALUES
('CC', '100', 'Julio', 'Herrera', 1, '2020-05-24', 'Julio.herrerago@amigo.edu.co', '3116022910', 'Crr 69 #62-18'),
('CC', '1000', 'Julio', 'Herrera', 1, '2020-04-28', 'Julio.herrerago@amigo.edu.co', '3116022910', 'Crr 69 #62-18'),
('TI', '1017143509', 'Omari ', 'Duarte Echavarría', 2, '1986-01-09', 'notiene@gmail.com', '3204589632', 'cll 85B #56-12'),
('CC', '1028041010', 'Michelle', 'Ayala', 2, '1999-08-03', 'ayala.michelledi@amigo.edu.co', '3105448516', 'Cll 108 Crr11'),
('CC', '1040382211', 'Julio Cesar', 'Herrera Gonzalez', 1, '0199-10-20', 'julio.herrerago@amigo.edu.co', '3116022910', 'cll 82A #66-16'),
('CC', '43140793', 'Onisa Isabel', 'Flores Ávila', 2, '1962-11-22', 'notiene@gmail.com', '3105160500', 'Crr 69 #62-18'),
('CC', '71947500', 'Cesar', 'Herrera', 1, '1979-09-13', 'cesar.herrera@gmail.com', '3104506942', 'cll 85B #56-12');

CREATE TABLE tblproductos (
  PKCodigo int(11) NOT NULL,
  Nombre varchar(800) COLLATE utf8_spanish2_ci NOT NULL,
  Nombre_Corto varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  Descripcion text COLLATE utf8_spanish2_ci NOT NULL,
  Categoria varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  Precio decimal(20,0) NOT NULL,
  Imagen varchar(800) COLLATE utf8_spanish2_ci NOT NULL,
  Stock int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO tblproductos (PKCodigo, Nombre, Nombre_Corto, Descripcion, Categoria, Precio, Imagen, Stock) VALUES
(0, 'Chasis Gigabyte Auros Ac300w Lite', 'Chasis Gigabyte', 'Factor de forma del caso\r\nTorre media\r\nTipo M / B\r\nmini-ITX / m-ATX / ATX\r\nColor\r\nNegro\r\nMateriales\r\nAcero, plástico\r\nDimensiones\r\nH469 * W211 * D458 mm\r\nBahías de unidad de 5.25 \"\r\nNinguna\r\n3.5 bahías de unidad \"/2.5\"\r\n2\r\nBahías de unidad de 2.5 \"\r\n2 (Detrás de la bandeja MB)\r\nPanel de E / S\r\nEntrada\r\ny salida de audio USB 3.0 x 2 (compatible con audio AC97 / HD)\r\nSoporte para fanáticos\r\nFrente: 120 mm * 3/140 mm * 2?\r\nSuperior: 120 mm * 2/140 mm * 2?\r\nTrasero: 120 mm * 1\r\n(preinstalado: trasero 120 mm * 1)\r\nSoporte de radiador\r\nDelantero: 360 mm / 280 mm / 240 mm\r\nSuperior: 280 mm / 240 mm\r\nTrasero: 120 mm\r\nTipo de fuente de alimentación\r\nATX estándar (no incluido)\r\nMáxima compatibilidad\r\nAltura de CPU: 170 mm?\r\nLongitud VGA: 400 mm\r\nLongitud de la fuente de alimentación: 180 mm\r\nMontaje vertical de GPU\r\nsi\r\nFiltros de polvo\r\nSuperior, frontal, inferior\r\nIluminación RGB\r\nSí (admite RGB Fusion 2.0)\r\nPeso\r\nNO 7 Kg\r\nDimensiones del paquete\r\nH = 521 W = 286 D = 520 mm\r\nAccesorios\r\n1. Manual 2. Kit de accesorios', 'Computación', '350000', 'https://http2.mlstatic.com/chasis-gigabyte-auros-ac300w-lite-D_NQ_NP_634740-MCO41618366523_052020-F.webp', 10),
(1, 'Silla Gamer De Escritorio Core Ex Akracing Color Negro-azul', 'Silla Gamer', 'MVC 5 is the newest update to the popular Microsoft technology that enables you to build dynamic, data-driven websites. Like previous versions, this guide shows you step-by-step techniques on using MVC to best advantage, with plenty of practical tutorials to illustrate the concepts. It covers controllers, views, and models; forms and HTML helpers; data annotation and validation; membership, authorization, and security.', '', '1500000', 'https://http2.mlstatic.com/silla-gamer-de-escritorio-core-ex-akracing-color-negro-azul-D_NQ_NP_810170-MCO40264041827_122019-F.webp', 15),
(2, 'Learning Vue.js 2', 'Libro ', '* Learn how to propagate DOM changes across the website without writing extensive jQuery callbacks code.\r\n* Learn how to achieve reactivity and easily compose views with Vue.js and understand what it does behind the scenes.\r\n* Explore the core features of Vue.js with small examples, learn how to build dynamic content into preexisting web applications, and build Vue.js applications from scratch.', '', '60000', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/7864/9781786469946.jpg', 20),
(3, 'Disco Gigabyte Nvme Ssd 1 Tera M.2 2280', 'Disco SSD M.2', 'Form Factor: M.2 2280\r\nInterface: PCI-Express 3.0 x4, NVMe 1.3\r\nTotal Capacity: 1TB*\r\nWarranty: Limited 5-year or 1600TBW\r\nSequential Read Speed : up to 2500 MB/s**\r\nSequential Write speed : up to 2100 MB/s**\r\nHMB (Host Memory Buffer) supported\r\nTRIM & S.M.A.R.T supported', '', '580000', 'https://http2.mlstatic.com/disco-gigabyte-nvme-ssd-1-tera-m2-2280-D_NQ_NP_807493-MCO40953444275_022020-F.webp', 25),
(4, 'PlayStation VR Start Bundle 5 ItemsVR Headset,Move Controller,PlayStation Camera Motion Sensor,PlayStation 4 Slim 500GB Console Uncharted 4,VR Game Disc Eagle Flight', 'Combo PLAYSTATION', 'incluye auriculares vr, unidad de procesador, cable de conexión de auriculares vr, cable hdmi, cable usb, auriculares estéreo, cable de alimentación de ca, adaptador de ca, disco demo playstation vr, cámara playstation, 2 controles de movimiento playstation 4 y consola playstation 4 slim 500gb uncharted 4 y vr game disc eagle flightbrand nuevo sellado en caja original enviamos desde ee uu para la dirección de entrega fuera de los ee uu el comprador es responsable de los aranceles de importación, iva, impuestos y honorarios del intermediario nuevo sellado en la caja original enviamos desde eeuu pantalla oled 1920 x rgb x 1080, tamaño de la pantalla 57 , frecuencia de actualización 120 hz, 90 hz, latencia menos de 18ms juegos son lo primero teniendo en cuenta a los jugadores, playstation ofrece un nuevo mundo de juegos inesperados experiencias a través de playstation vr simplemente plug and play entrar en playstation vr no podría ser más sencillo simplemente conecte los auriculares playstation vr y su playstation camera en su sistema playstation 4 pantalla vr avanzada imágenes nítidas que lo mantienen conectado al mundo virtual a través de un pantalla oled 1080p expansiva de 57 funcionando a hasta 120 fotogramas por segundo', '', '6400000', 'https://http2.mlstatic.com/playstation-vr-start-bundle-5-itemsvr-headsetmovimiento-cont-D_NQ_NP_670321-MCO40779386128_022020-F.webp', 2),
(5, 'Lenovo Legion Y545 Core I7 9750h-512 Ssd+1tb-gtx1660ti-16gb', 'Portátil', '.GLA TECNOLOGIA... VENDE\r\n\r\nLENOVO GAMER INTEL I7 9750H\r\n\r\nSE ENVÍA EL MISMO DÍA DE LA COMPRA POR SERVIENTREGA A TODAS LAS CIUDADES DEL PAÍS ,EN DÍAS DE CUARENTENA TAMBIÉN SE ENVÍA\r\n\r\nTOMA EL CONTROL\r\n\r\nLleve la productividad de trabajo y la experiencia de entretenimiento al límite con su potencia informática de vanguardia, una impresión duradera Diseñada para ofrecer una experiencia de usuario óptima con una apariencia inolvidable y cautivadora.\r\n\r\nEl Lenovo Y545 ofrece el máximo rendimiento, gracias al procesador de Novena Generación Intel Core i7 9750H (2,6 GHz), Hexa-core (6 núcleos), un disco duro de 512 SSD y 1 TB HDD espacio suficiente para almacenar archivos, música, video e imágenes (tenga en cuenta que el almacenamiento SSD que se ofrece en esta computadora portátil es al menos 4 veces más rápido que el del almacenamiento HDD tradicional) la memoria RAM de 16 GB y la poderosa Tarjeta de Video Nvidia GeForce GTX 1660 Ti de 6 Gb DDR6, es la combinación perfecta al ofrecer mucho más rendimiento, para que se sumerja sin temor en las más extensas partidas de juegos\r\n\r\nIMÁGENES VIBRANTES\r\n\r\nLos colores nítidos y realistas cobran vida en una pantalla con resolución Full HD IPS de 15\'6, comuníquese con claridad. Disfrute de llamadas de video de alta calidad, con amigos y familiares, con la cámara HD y el sistema de micrófonos duales.\r\n\r\nEL ARMA ESENCIAL PARA CADA GAMER\r\n\r\nTodo el mundo merece jugar de forma grandiosa. Es por eso que Nvidia creo la rápida y potente GeForce GTX 1660 Ti de 6 GB. Ahora, puedes convertir tu portátil en una verdadera plataforma de juego, con la tecnología NVIDIA Pascal, esta tecnología ofrece hasta 3 veces más rendimiento. También cuenta con la innovadora tecnología NVIDIA Game Ready que le permite a cada jugador disfrutar los juegos más recientes en todo su esplendor.\r\n\r\nEste laptop brinda todo lo que necesitas para dar rienda suelta a tu dominio de los juegos convirtiendo tu plataforma móvil en un arma de Gaming elegante y poderosa.\r\n\r\n\r\n\r\nEspecificaciones:\r\n\r\nPROCESADOR: Intel Core i7- 9750H 2.60GHZ C/TB 4.50GHz - 9na Generación. 6 físicos 6 virtuales 12 núcleos\r\n\r\nMEMORIA RAM: 16GB DDR4 ampliable hasta 32GB\r\n\r\nDISCO: 1TB + 512GB SSD SOLIDO\r\n\r\nVÍDEO: 6GB NIVIDIA GEFORCE GTX 1660 Ti VR TIPO DE MEMORIA DDR6\r\n\r\nPANTALLA: 15.6\" FHD IPS (1920x1080) 144Hz Refresco\r\n\r\nTECLADO: Retroiluminado (Ingles) Programable\r\n\r\nSISTEMA OPERATIVO : WINDOWS 10', '', '5800000', 'https://http2.mlstatic.com/lenovo-legion-y545-core-i7-9750h-512-ssd-1tb-gtx1660ti-16gb-D_NQ_NP_912689-MCO40642817657_022020-F.webp', 60),
(6, 'Lenovo ThinkPad P50 20EN001HUS portátil (Windows 10, Intel Core i7, 15.6plg de pantalla con tecnología LED de, Almacenamiento: 256 GB, memoria RAM: 8 GB) Negro.', 'Lenovo Thinkpad P50', 'Lenovo ThinkPad P50 20EN001HUS portátil (Windows 10, Intel Core i7, 15.6plg de pantalla con tecnología LED de, Almacenamiento: 256 GB, memoria RAM: 8 GB) Negro.', '', '13645000', 'https://http2.mlstatic.com/lenovo-thinkpad-p50-20en001hus-portatil-windows-10-intel-c-D_NQ_NP_917607-MCO32442981305_102019-F.webp', 25);


CREATE TABLE tblrol (
  PKCodigo int(11) NOT NULL,
  Descripcion varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


INSERT INTO tblrol (PKCodigo, Descripcion) VALUES
(1, 'ADMINISTRADOR'),
(2, 'Vendedor'),
(3, 'Cliente');


CREATE TABLE tblsexo (
  PKCodigo int(11) NOT NULL,
  Descripcion varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


INSERT INTO tblsexo (PKCodigo, Descripcion) VALUES
(1, 'Masculino'),
(2, 'Femenino');


CREATE TABLE tblusuarios (
  PKCodigo int(11) NOT NULL,
  FKId_tblpersona varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  Usuario varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  Contraseña varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  FKCodigo_tblrol int(11) NOT NULL,
  FKCodigo_tblestado int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


INSERT INTO tblusuarios (PKCodigo, FKId_tblpersona, Usuario, Contraseña, FKCodigo_tblrol, FKCodigo_tblestado) VALUES
(1, '1040382211', 'julio.herrerago@amigo.edu.co', '1040382211', 1, 1);


ALTER TABLE tblestado
  ADD PRIMARY KEY (PKCodigo);

ALTER TABLE tblpersonas
  ADD PRIMARY KEY (PKIdentificacion),
  ADD KEY FKCodigo_TblSexo (FKCodigo_TblSexo);

ALTER TABLE tblproductos
  ADD PRIMARY KEY (PKCodigo),
  ADD KEY Categoria (Categoria);

ALTER TABLE tblrol
  ADD PRIMARY KEY (PKCodigo);

ALTER TABLE tblsexo
  ADD PRIMARY KEY (PKCodigo);

ALTER TABLE tblusuarios
  ADD PRIMARY KEY (PKCodigo),
  ADD KEY FKCodigo_tblrol (FKCodigo_tblrol),
  ADD KEY FKId_tblpersona (FKId_tblpersona),
  ADD KEY FKCodigo_tblestado (FKCodigo_tblestado);


ALTER TABLE tblestado
  MODIFY PKCodigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE tblproductos
  MODIFY PKCodigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE tblrol
  MODIFY PKCodigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE tblsexo
  MODIFY PKCodigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE tblusuarios
  MODIFY PKCodigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE tblpersonas
  ADD CONSTRAINT FKCodigo_tblsexo FOREIGN KEY (FKCodigo_TblSexo) REFERENCES tblsexo (PKCodigo);

ALTER TABLE tblusuarios
  ADD CONSTRAINT FKCodigo_tblestado FOREIGN KEY (FKCodigo_tblestado) REFERENCES tblestado (PKCodigo),
  ADD CONSTRAINT FKCodigo_tblrol FOREIGN KEY (FKCodigo_tblrol) REFERENCES tblrol (PKCodigo),
  ADD CONSTRAINT FKId_tblpersona FOREIGN KEY (FKId_tblpersona) REFERENCES tblpersonas (PKIdentificacion);
COMMIT;
