CREATE DATABASE IF NOT EXISTS detention;
use detention;


CREATE TABLE `teachers` ( 
`teacher_id` INT NOT NULL AUTO_INCREMENT, 
`teacher_name` VARCHAR(100) NOT NULL ,
 `is_active` SMALLINT NOT NULL ,
 PRIMARY KEY (`teacher_id`),
 INDEX (`teacher_name`), 
INDEX `is_active` (`is_active`)
) ENGINE = InnoDB;

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `is_active`) VALUES (NULL, 'Mr Wilson',  '1');


CREATE TABLE `parents` (
`parent_id` INT NOT NULL AUTO_INCREMENT, 
`parent_name` VARCHAR(100) NOT NULL ,
`parent_phone` VARCHAR(100) NOT NULL , 
`is_active` SMALLINT NOT NULL ,
 PRIMARY KEY (`parent_id`),
INDEX `parent_name` (`parent_name`), 
INDEX `parent_phone` (`parent_phone`),
INDEX `is_active` (`is_active`)
) ENGINE = InnoDB;

INSERT INTO `parents` (`parent_id`, `parent_name`, `parent_phone`, `is_active`) VALUES (NULL, 'Johnny Parent', '+91996437413', '1'),
(NULL, 'Wilson Parent', '+91996437413', '1'),
(NULL, 'Dave Parent', '+91996437413', '1');

CREATE TABLE `student` ( 
`student_id` INT NOT NULL AUTO_INCREMENT,
 `student_name` VARCHAR(100) NOT NULL ,
 `parent_id` INT NOT NULL ,
 `is_active` SMALLINT NOT NULL ,
 PRIMARY KEY (`student_id`), 
INDEX `student_name` (`student_name`), 
INDEX `parent_id` (`parent_id`),
INDEX `is_active` (`is_active`)
) ENGINE = InnoDB;

INSERT INTO `student` (`student_id`, `student_name`, `parent_id`, `is_active`) VALUES (NULL, 'Johnny', '1', '1');



CREATE TABLE `offense` (
 `offense_id` INT NOT NULL AUTO_INCREMENT,
 `offense_name` VARCHAR(100) NOT NULL , 
`time` INT NOT NULL ,
 `is_active` SMALLINT NOT NULL ,
 PRIMARY KEY (`offense_id`),
 INDEX `offense_name` (`offense_name`),
 INDEX `time` (`time`),
 INDEX `is_active` (`is_active`)
) ENGINE = InnoDB;

INSERT INTO `offense` (`offense_id`, `offense_name`, `time`, `is_active`) 
VALUES 
(NULL, 'Homework Not Done', '60', '1'),
 (NULL, 'Stealing', '120', '1'),
 (NULL, 'Fighting', '30', '1'), 
(NULL, 'Untidyness', '60', '1'),
 (NULL, 'Lying', '90', '1'), 
(NULL, 'SchoolPropertyDamage', '60', '1');

CREATE TABLE `detentions` (
 `detentions_id` INT NOT NULL AUTO_INCREMENT, 
`student_id` INT NOT NULL ,
 `teacher_id` INT NOT NULL ,
 `date` INT NOT NULL ,
 `detention_type_id` INT NOT NULL ,
 `offence_id` INT NOT NULL ,
 `offence_type_id` INT NOT NULL , 
`total_time` INT NOT NULL , 
`is_active` SMALLINT NOT NULL , 
PRIMARY KEY (`detentions_id`), 
INDEX `student_id` (`student_id`),
 INDEX `teacher_id` (`teacher_id`), 
INDEX `date` (`date`), 
INDEX `detention_type_id` (`detention_type_id`), 
INDEX `offence_id` (`offence_id`), 
INDEX `offence_type_id` (`offence_type_id`),
 INDEX `total_time` (`total_time`), 
INDEX `is_active` (`is_active`)) ENGINE = InnoDB;

CREATE TABLE `offence_type` ( 
`offence_type_id` INT NOT NULL AUTO_INCREMENT, 
`offence_type_name` VARCHAR(100) NOT NULL ,
 `offence_time_value` FLOAT NOT NULL , 
`is_active` SMALLINT NOT NULL , 
PRIMARY KEY (`offence_type_id`), 
INDEX `offence_type_name` (`offence_type_name`), 
INDEX `offence_time_value` (`offence_time_value`), 
INDEX `is_active` (`is_active`)
) ENGINE = InnoDB;

INSERT INTO `offence_type` 
(`offence_type_id`, `offence_type_name`, `offence_time_value`, `is_active`) VALUES 
(NULL, 'Good', '1', '1'), 
(NULL, 'Bad', '1.1', '1');



CREATE TABLE `detention_type` (
 `detention_type_id` INT NOT NULL AUTO_INCREMENT,
 `detention_type_name` VARCHAR(100) NOT NULL ,
 `is_active` SMALLINT NOT NULL , 
PRIMARY KEY (`detention_type_id`),
 INDEX `detention_type_name` (`detention_type_name`), 
INDEX `is_active` (`is_active`)
) ENGINE = InnoDB;

INSERT INTO `detention`.`detention_type` (`detention_type_id`, `detention_type_name`, `is_active`) VALUES 
(NULL, 'consecutive', '1'), 
(NULL, 'concurrent', '1');




