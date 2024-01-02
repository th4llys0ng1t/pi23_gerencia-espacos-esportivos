CREATE DATABASE IF NOT EXISTS projeto_gerenciamento_espaços_esportivos;

USE projeto_gerenciamento_espaços_esportivos;

CREATE TABLE IF NOT EXISTS espacos( 
	ID int not null auto_increment primary key, 
    NOME VARCHAR(100)
);  

CREATE TABLE IF NOT EXISTS solicitacoes( 
	ID int not null auto_increment primary key,   
    NOME varchar(100), 
    MATRICULA varchar(30),  
    DESCRICAO varchar(300), 
    DATA_INICIO date,
    HORA_INICIO time,
    DATA_FIM date,
    HORA_FIM time,
    DATA_REGISTRO date, 
    HORA_REGISTRO time,
    ID_ESPACO int, 
    foreign key (ID_ESPACO) references espacos(ID)  
);  

CREATE TABLE IF NOT EXISTS administrador( 
    EMAIL varchar(100),
    MATRICULA varchar(30) primary key, 
    USUARIO varchar(90),
    SENHA varchar(90) 
    
); 



