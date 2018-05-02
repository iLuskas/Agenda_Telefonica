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



    





