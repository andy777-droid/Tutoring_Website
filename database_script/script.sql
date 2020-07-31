SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';


CREATE SCHEMA IF NOT EXISTS `tutoring_website` DEFAULT CHARACTER SET utf8 ;
USE `tutoring_website` ;

-- -----------------------------------------------------
-- Table `mydb`.`User_Login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tutoring_website`.`User_Login` (
  `Email` VARCHAR(45) NOT NULL,
  `Username` VARCHAR(45) NULL,
  `FirstName` VARCHAR(45) NULL,
  `LastName` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`Email`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tutoring_website`.`Subjects` (
  `idSubjects` INT NOT NULL,
  `Name` VARCHAR(45) NULL,
  PRIMARY KEY (`idSubjects`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Gender`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tutoring_website`.`Gender` (
  `idGender` INT NOT NULL,
  `Type` VARCHAR(45) NULL,
  PRIMARY KEY (`idGender`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Suburbs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tutoring_website`.`Suburbs` (
  `idSuburbs` INT NOT NULL,
  `Location` VARCHAR(45) NULL,
  PRIMARY KEY (`idSuburbs`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`AgeRanges`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tutoring_website`.`AgeRanges` (
  `idAgeRanges` INT NOT NULL,
  `Range` VARCHAR(45) NULL,
  PRIMARY KEY (`idAgeRanges`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tutor_Post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tutoring_website`.`Tutor_Post` (
  `idtutor` INT NOT NULL,
  `User_Email` VARCHAR(45) NOT NULL,
  `DateOfBirth` DATE NULL,
  `TutoringExperience` INT NULL,
  `Qualification` VARCHAR(45) NULL,
  `PlaceOfEducation` VARCHAR(45) NULL,
  `YearComplete` VARCHAR(45) NULL,
  `OwnTransport` TINYINT NULL,
  `MinimumRate` DECIMAL NULL,
  `MaximumRate` DECIMAL NULL,
  `MaxDrivingRange` VARCHAR(45) NULL,
  `Image` VARCHAR(45) NULL,
  `Subjects_idSubjects` INT NOT NULL,
  `Gender_idGender` INT NOT NULL,
  `Suburbs_idSuburbs` INT NOT NULL,
  `AgeRanges_idAgeRanges` INT NOT NULL,
  PRIMARY KEY (`idtutor`),
  INDEX `fk_tutor_User_idx` (`User_Email` ASC) ,
  INDEX `fk_tutor_Subjects1_idx` (`Subjects_idSubjects` ASC) ,
  INDEX `fk_Tutor_Post_Gender1_idx` (`Gender_idGender` ASC) ,
  INDEX `fk_Tutor_Post_Suburbs1_idx` (`Suburbs_idSuburbs` ASC) ,
  INDEX `fk_Tutor_Post_AgeRanges1_idx` (`AgeRanges_idAgeRanges` ASC) ,
  CONSTRAINT `fk_tutor_User`
    FOREIGN KEY (`User_Email`)
    REFERENCES `mydb`.`User_Login` (`Email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tutor_Subjects1`
    FOREIGN KEY (`Subjects_idSubjects`)
    REFERENCES `mydb`.`Subjects` (`idSubjects`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tutor_Post_Gender1`
    FOREIGN KEY (`Gender_idGender`)
    REFERENCES `mydb`.`Gender` (`idGender`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tutor_Post_Suburbs1`
    FOREIGN KEY (`Suburbs_idSuburbs`)
    REFERENCES `mydb`.`Suburbs` (`idSuburbs`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tutor_Post_AgeRanges1`
    FOREIGN KEY (`AgeRanges_idAgeRanges`)
    REFERENCES `mydb`.`AgeRanges` (`idAgeRanges`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
