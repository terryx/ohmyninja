CREATE TABLE IF NOT EXIST `ninja`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `gender` VARCHAR(45) NULL,
  `external_id` VARCHAR(255) NULL,
  `link` VARCHAR(255) NULL,
  `picture` VARCHAR(255) NULL,
  `locale` VARCHAR(45) NULL,
  `timezone` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
