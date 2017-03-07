-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema courses
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema courses
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `courses` DEFAULT CHARACTER SET latin1 ;
-- -----------------------------------------------------
-- Schema secure_login
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema secure_login
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `secure_login` DEFAULT CHARACTER SET latin1 ;
USE `courses` ;

-- -----------------------------------------------------
-- Table `courses`.`section`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`section` (
  `idsection` INT(11) NOT NULL,
  `classNbr` INT(11) NULL DEFAULT NULL,
  `sectionSession` VARCHAR(45) NULL DEFAULT NULL,
  `daysAndTimes` VARCHAR(45) NULL DEFAULT NULL,
  `meetingDays` VARCHAR(45) NULL DEFAULT NULL,
  `roomNumber` VARCHAR(45) NULL DEFAULT NULL,
  `instructor` VARCHAR(45) NULL DEFAULT NULL,
  `courseNumber` VARCHAR(45) NULL DEFAULT NULL,
  `courseName` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idsection`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;

USE `secure_login` ;

-- -----------------------------------------------------
-- Table `secure_login`.`login_attempts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secure_login`.`login_attempts` (
  `user_id` INT(11) NOT NULL,
  `time` VARCHAR(30) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `secure_login`.`members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secure_login`.`members` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` CHAR(128) NOT NULL,
  `salt` CHAR(128) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
