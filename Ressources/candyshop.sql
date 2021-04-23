DROP DATABASE IF EXISTS candyshop;
CREATE DATABASE IF NOT EXISTS candyshop;
USE candyshop;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user`(
`id`int not null auto_increment,
`lastname` varchar(255),
`firstname` varchar(255),
`email` varchar(255) unique,
`password` varchar(255),
PRIMARY KEY(`id`));

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login`(
`id`int not null auto_increment,
`email`varchar(255),
`password` varchar(25),
PRIMARY KEY(`id`));

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product`(
`id`int not null auto_increment,
`designation`varchar(255),
`price` varchar(255),
PRIMARY KEY(`id`));

INSERT INTO `product` (designation, price) 
VALUES('Goldbear' , '2,70'),
('Dragibus', '2,50'),
('Banans', '2,40'),
('Tagada_original' , '2,55'),
('Happy_Life', '1,55'),
('Happy_Cola_Pik', '1,50'),
('Croco', '1,30'),
('Rotella', '2,00'),
('Chamallows', '1,20'),
('Super_Frite_Pik', '1,50');

INSERT INTO `login` (`email`, `password`) 
VALUES ('jane@gmail.com', 'Paris123');

INSERT INTO `user` (`lastname`,`firstname`,`email`, `password`) 
VALUES ('Doe','Jane','jane@gmail.com', 'Paris123');

 

