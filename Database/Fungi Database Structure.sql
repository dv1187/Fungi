-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Fungi
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Fungi` ;

-- -----------------------------------------------------
-- Schema Fungi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Fungi` DEFAULT CHARACTER SET utf8 ;
USE `Fungi` ;

-- -----------------------------------------------------
-- Table `Fungi`.`administrator`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`administrator` (
  `Admin_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`Admin_ID`),
  UNIQUE INDEX `Admin_ID_UNIQUE` (`Admin_ID` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`shape`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`shape` (
  `Shape_Category_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NOT NULL,
  `Description` TEXT NOT NULL,
  `Image` TEXT NOT NULL,
  PRIMARY KEY (`Shape_Category_ID`),
  UNIQUE INDEX `Class_ID_UNIQUE` (`Shape_Category_ID` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`characteristic`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`characteristic` (
  `Characteristic_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NOT NULL,
  `Category_FK` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Characteristic_ID`, `Category_FK`),
  UNIQUE INDEX `Characteristic_ID_UNIQUE` (`Characteristic_ID` ASC),
  INDEX `Category_FK` (`Category_FK` ASC),
  CONSTRAINT `Category_FK`
    FOREIGN KEY (`Category_FK`)
    REFERENCES `Fungi`.`shape` (`Shape_Category_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`characteristic_option`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`characteristic_option` (
  `Option_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NULL DEFAULT NULL,
  `Characteristic_FK` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Option_ID`, `Characteristic_FK`),
  UNIQUE INDEX `Options_ID_UNIQUE` (`Option_ID` ASC),
  INDEX `Characteristic_FK` (`Characteristic_FK` ASC),
  CONSTRAINT `Characteristic_FK`
    FOREIGN KEY (`Characteristic_FK`)
    REFERENCES `Fungi`.`characteristic` (`Characteristic_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 108
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`species`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`species` (
  `Species_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Common_Name` VARCHAR(400) NULL DEFAULT NULL,
  `Name_Derivation` VARCHAR(400) NULL DEFAULT NULL,
  `Scientific_Name` VARCHAR(255) NULL DEFAULT NULL,
  `Phylum` VARCHAR(255) NULL DEFAULT NULL,
  `Sp_Order` VARCHAR(255) NULL DEFAULT NULL,
  `Family` VARCHAR(255) NULL DEFAULT NULL,
  `Comments` TEXT NULL DEFAULT NULL,
  `Wood_Substrate` VARCHAR(400) NULL DEFAULT NULL,
  `Dimensions` VARCHAR(400) NULL DEFAULT NULL,
  `Shape_FK` INT(10) UNSIGNED NOT NULL,
  `URL` TEXT NOT NULL,
  PRIMARY KEY (`Species_ID`),
  UNIQUE INDEX `Species_ID_UNIQUE` (`Species_ID` ASC),
  INDEX `Shape_FK` (`Shape_FK` ASC),
  CONSTRAINT `Shape_FK`
    FOREIGN KEY (`Shape_FK`)
    REFERENCES `Fungi`.`shape` (`Shape_Category_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 87
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`description`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`description` (
  `Description_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Desc_Species_ID` INT(10) UNSIGNED NOT NULL,
  `Description` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`Description_ID`, `Desc_Species_ID`),
  UNIQUE INDEX `Description_ID_UNIQUE` (`Description_ID` ASC),
  INDEX `Species_ID` (`Desc_Species_ID` ASC),
  CONSTRAINT `Species_ID`
    FOREIGN KEY (`Desc_Species_ID`)
    REFERENCES `Fungi`.`species` (`Species_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`glossary`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`glossary` (
  `Glossary_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Term` VARCHAR(250) NOT NULL,
  `Description` TEXT NOT NULL,
  PRIMARY KEY (`Glossary_ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 67
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`glossary_image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`glossary_image` (
  `Glossary_Image_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Image_Name` VARCHAR(255) NULL DEFAULT NULL,
  `Caption` TEXT NULL DEFAULT NULL,
  `Glossary_FK` INT(11) NOT NULL,
  PRIMARY KEY (`Glossary_Image_ID`, `Glossary_FK`),
  INDEX `Glosarry_Image_FK` (`Glossary_FK` ASC),
  CONSTRAINT `Glosarry_Image_FK`
    FOREIGN KEY (`Glossary_FK`)
    REFERENCES `Fungi`.`glossary` (`Glossary_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 72
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`photo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`photo` (
  `Photo_ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Photo_Name` VARCHAR(255) NOT NULL,
  `Caption` TEXT NOT NULL,
  `Species_FK` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Photo_ID`, `Species_FK`),
  UNIQUE INDEX `Photo_ID` (`Photo_ID` ASC),
  INDEX `Species_FK` (`Species_FK` ASC),
  CONSTRAINT `Species_Photo_FK`
    FOREIGN KEY (`Species_FK`)
    REFERENCES `Fungi`.`species` (`Species_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 180
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Fungi`.`species_option`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Fungi`.`species_option` (
  `Species_FK` INT(10) UNSIGNED NOT NULL,
  `Option_FK` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`Species_FK`, `Option_FK`),
  INDEX `Option_FK` (`Option_FK` ASC),
  INDEX `Species_FK` (`Species_FK` ASC),
  CONSTRAINT `Option_FK`
    FOREIGN KEY (`Option_FK`)
    REFERENCES `Fungi`.`characteristic_option` (`Option_ID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Species_FK`
    FOREIGN KEY (`Species_FK`)
    REFERENCES `Fungi`.`species` (`Species_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
