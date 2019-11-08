-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema latieda_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema latieda_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `latieda_db` DEFAULT CHARACTER SET utf8 ;
USE `latieda_db` ;

-- -----------------------------------------------------
-- Table `latieda_db`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `latieda_db`.`admin` (
  `admin_id` INT NOT NULL,
  `admin_email` VARCHAR(45) NULL,
  `admin_pwd` LONGTEXT NULL,
  `admin_description` TEXT(1000) NULL,
  PRIMARY KEY (`admin_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `latieda_db`.`event_book`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `latieda_db`.`event_book` (
  `event_booking_id` INT NOT NULL,
  `event_book_location` VARCHAR(45) NULL,
  `event_book_date` VARCHAR(45) NULL,
  `event_book_desc` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `phone_no` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `request_date` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_booking_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `latieda_db`.`past_events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `latieda_db`.`past_events` (
  `past_event_id` INT NOT NULL AUTO_INCREMENT,
  `past_event_title` VARCHAR(45) NULL,
  `past_event_desc` LONGTEXT NULL,
  `past_event_img` INT NULL,
  PRIMARY KEY (`past_event_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `latieda_db`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `latieda_db`.`images` (
  `img_id` INT NOT NULL AUTO_INCREMENT,
  `img_name` MEDIUMTEXT NULL,
  `past_events_past_event_id` INT NOT NULL,
  PRIMARY KEY (`img_id`),
  INDEX `fk_images_past_events_idx` (`past_events_past_event_id` ASC),
  CONSTRAINT `fk_images_past_events`
    FOREIGN KEY (`past_events_past_event_id`)
    REFERENCES `latieda_db`.`past_events` (`past_event_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `latieda_db`.`feedback`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `latieda_db`.`feedback` (
  `feedback_id` INT NOT NULL,
  `feed_name` VARCHAR(45) NULL,
  `feed_email` VARCHAR(45) NULL,
  `feed_phone` VARCHAR(45) NULL,
  `feed_message` LONGTEXT NULL,
  PRIMARY KEY (`feedback_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
