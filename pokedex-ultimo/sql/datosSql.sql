--CREAMOS TABLA POKEMON
CREATE TABLE `pokemon` (
  `id` INT  AUTO_INCREMENT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `numero` VARCHAR(45) NULL,
  `tipo` varchar(45) NULL,
   `imagen` varchar(225) NULL,
  `descripcion` varchar(225) NULL
)

--INSERTAMOS DATOS A LA TABLA POKEMON
INSERT INTO `pokemon` (`id`, `nombre`, `numero`, `tipo`, `imagen`, `descripcion`) VALUES
(1, 'charmander', 1, 'fuego', ,  'charmander.png', 'Charmander es un Pokemon de tipo fuego muy interes'),
(2, 'bulbasaur',  2,  'planta',  'bulbasaur.png', 'Increible'),
(3, 'charmeleon', 3, 'fuego', 'charmeleon.png', 'Genial'),

--CREAMOS TABLA USUARIO
CREATE TABLE `db_pokedex` . `usuario` (
  `id` int NOT NULL,
  `name` varchar(45) NOT  DEFAULT NULL,
  `password` varchar(45) NOT  DEFAULT NULL,
  `role` varchar(45) NOT  DEFAULT NULL
)

--INSERTAMOS DATOS A TABLA USUARIO
INSERT INTO `usuario` (`id`, `name`, `password`, `role`) VALUES
(1, 'alguien', 'alguien',  'usuario'),
(2, 'admin', 'admin', 'ADMIN');

--AGREGAMOS PKS
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

