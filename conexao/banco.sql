create database cadastro;

use cadastro;

create table usuario(
idusuario int primary key auto_increment not null,
nome varchar(50),
sobrenome varchar(50),
email varchar(50));

