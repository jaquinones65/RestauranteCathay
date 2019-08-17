-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema cathay
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `cathay` ;

-- -----------------------------------------------------
-- Schema cathay
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cathay` DEFAULT CHARACTER SET latin1 ;
USE `cathay` ;

-- -----------------------------------------------------
-- Table `cathay`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cathay`.`roles` (
  `id_rol` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cathay`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cathay`.`usuarios` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `tipo_documento` CHAR(40) NOT NULL,
  `numero_documento` CHAR(15) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `password` VARCHAR(64) NOT NULL,
  `tel_celular` CHAR(45) NOT NULL,
  `direccion` CHAR(45) NOT NULL,
  `id_rol` INT(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id_usuario`, `id_rol`),
  INDEX `fk_usuarios_roles1_idx` (`id_rol` ASC),
  UNIQUE INDEX `numero_documento_UNIQUE` (`numero_documento` ASC),
  UNIQUE INDEX `correo_UNIQUE` (`correo` ASC),
  CONSTRAINT `fk_usuarios_roles1`
    FOREIGN KEY (`id_rol`)
    REFERENCES `cathay`.`roles` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 25
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cathay`.`platos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cathay`.`platos` (
  `id_plato` INT(11) NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(255) NOT NULL,
  `valor` INT(11) NOT NULL,
  `imagen_plato` BLOB NULL DEFAULT NULL,
  PRIMARY KEY (`id_plato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `cathay`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cathay`.`pedidos` (
  `id_pedido` INT(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` INT(11) NOT NULL,
  `id_plato` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pedido`, `id_usuario`, `id_plato`),
  INDEX `fk_Clientes_has_platos_platos1_idx` (`id_plato` ASC),
  INDEX `fk_Clientes_has_platos_Clientes_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_Clientes_has_platos_Clientes`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `cathay`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Clientes_has_platos_platos1`
    FOREIGN KEY (`id_plato`)
    REFERENCES `cathay`.`platos` (`id_plato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `cathay`.`roles`
-- -----------------------------------------------------
START TRANSACTION;
USE `cathay`;
INSERT INTO `cathay`.`roles` (`id_rol`, `nombre`, `descripcion`) VALUES (1, 'ADMIN', 'Administrador En Totalidad');
INSERT INTO `cathay`.`roles` (`id_rol`, `nombre`, `descripcion`) VALUES (2, 'USERS', 'Usuario Comprador.');

COMMIT;

