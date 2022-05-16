-- CREAMOS ESQUEMA
CREATE SCHEMA `db_pokedex`;


-- CREAMOS TABLA POKEMON
CREATE TABLE `db_pokedex`.`pokemon` (
                                        `id` INT NOT NULL AUTO_INCREMENT,
                                        `nombre` VARCHAR(45) NULL DEFAULT NULL,
                                        `numero` VARCHAR(45) NULL DEFAULT NULL,
                                        `tipo` VARCHAR(45) NULL DEFAULT NULL,
                                        `imagen` VARCHAR(255) NULL DEFAULT NULL,
                                        `descripcion` VARCHAR(45) NULL DEFAULT NULL,
                                        PRIMARY KEY (`id`));
USE db_pokedex;
-- INSERTAMOS DATOS A LA TABLA POKEMON
INSERT INTO `pokemon` (`id`, `nombre`, `numero`, `tipo`, `imagen`, `descripcion`) VALUES
                                                                                      ('charmander', 1, 'fuego',  'charmander.png', 'Charmander es un Pokemon de tipo fuego muy interes'),
                                                                                      ('bulbasaur',  2,  'planta',  'bulbasaur.png', 'Increible'),
                                                                                      ('charmeleon', 3, 'fuego', 'charmeleon.png', 'Genial');

-- CREAMOS TABLA USUARIO
CREATE TABLE `db_pokedex`.`usuario` (
                                        `id` INT NOT NULL AUTO_INCREMENT,
                                        `name` VARCHAR(45) NULL DEFAULT NULL,
                                        `password` VARCHAR(45) NULL DEFAULT NULL,
                                        `role` VARCHAR(45) NULL DEFAULT NULL,
                                        PRIMARY KEY (`id`));

-- INSERTAMOS DATOS A TABLA USUARIO
INSERT INTO `usuario` (`id`, `name`, `password`, `role`) VALUES
                                                             (1, 'juli', '1234',  'ADMIN'),
                                                             (2, 'Len', '1234',  'ADMIN'),
                                                             (3, 'Bru', '1234',  'ADMIN'),
                                                             (4, 'Ara', '1234',  'ADMIN');

