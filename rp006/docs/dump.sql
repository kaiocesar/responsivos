SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mapeamento` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mapeamento` ;

-- -----------------------------------------------------
-- Table `mapeamento`.`authors`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mapeamento`.`authors` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(90) NULL ,
  `email` VARCHAR(156) NULL ,
  `status` CHAR(1) NULL DEFAULT 0 ,
  `created_at` DATETIME NULL ,
  `modify_at` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mapeamento`.`posts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mapeamento`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` TEXT NULL ,
  `body` TEXT NULL ,
  `created_at` DATETIME NULL ,
  `modify_at` DATETIME NULL ,
  `authors_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_posts_authors_idx` (`authors_id` ASC) ,
  CONSTRAINT `fk_posts_authors`
    FOREIGN KEY (`authors_id` )
    REFERENCES `mapeamento`.`authors` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mapeamento` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
