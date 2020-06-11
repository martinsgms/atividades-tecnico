create database projeto_php;
use projeto_php;

create table cliente(
	cod_cliente int auto_increment primary key,
    nome varchar(50),
    endereco varchar(50),
    telefone varchar(50),
    email varchar(50),
    idade int,
    salario double
);

select * from usuario;


create table usuario(
	user varchar(50),
    senha varchar(50)
);

insert into usuario (user, senha)
values ('gabriel', '123');