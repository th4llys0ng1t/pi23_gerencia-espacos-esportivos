CREATE DATABASE IF NOT EXISTS projeto_gerenciamento_espaços_esportivos;

USE projeto_gerenciamento_espaços_esportivos;

CREATE TABLE IF NOT EXISTS espacos( 
	ID int not null auto_increment primary key, 
    NOME VARCHAR(100)
); 

CREATE TABLE IF NOT EXISTS turmas( 
	ID int not null auto_increment primary key, 
    NOME varchar(100)
);  

CREATE TABLE IF NOT EXISTS solicitacoes( 
	ID int not null auto_increment primary key, 
    ID_ESPACO int, 
    ID_TIPO_SOLICITACOES int,  
    NOME varchar(100), 
    MATRICULA varchar(30),  
    DESCRICAO varchar(300), 
    DATA_INICIO date,
    HORA_INICIO time,
    DATA_FIM date,
    HORA_FIM time,
    DATA_HORA_REGISTRO date, time, 
    foreign key (ID_ESPACO) references espacos(ID),  
    foreign key (ID_TIPO_SOLICITACOES) references tipo_solitacao(ID), 
    
);  

CREATE TABLE IF NOT EXISTS tipo_solitacao( 
	ID int not null auto_increment primary key, 
    NOME varchar(100)
); 

CREATE TABLE IF NOT EXISTS administrador( 
    NOME varchar(100),
    MATRICULA varchar(30), 
    USUARIO varchar(90),
    SENHA varchar(90)
); 




