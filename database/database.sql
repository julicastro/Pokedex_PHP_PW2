CREATE TABLE `db_pokedex`.`pokemon` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `numero` INT NULL,
  `tipo` VARCHAR(45) NULL,
  `imagen` VARCHAR(225) NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `db_pokedex`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
