create database green_it;
use green_it;
create table usuario
(
id int primary key auto_increment,
nome varchar(50) not null,
email varchar(50) not null,
telefone char(13) not null,
senha varchar(32) not null
);