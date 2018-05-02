create database if not exists bd_contatos
default character set utf8
default collate utf8_general_ci;

CREATE TABLE if not exists contatos 
(
  idcontatos int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  endereco varchar(50) NOT NULL,
  telefone varchar(13) NOT NULL unique,
  sexo char(1) DEFAULT NULL,
  data date NOT NULL,
  PRIMARY KEY (`idcontatos`)
)DEFAULT CHARSET=utf8;

create table if not exists cadastro(
  iduser int(11) not null auto increment,
  nome_usuario varchar(50) not null unique, 
  email_usuario varchar(50) not null unique,
  senha_usuario varchar(8) not null,
  primary key(iduser)
)DEFAULT CHARSET = utf8;;

    





