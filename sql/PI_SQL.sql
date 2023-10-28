DROP DATABASE PI;

CREATE DATABASE PI;

USE PI;

CREATE TABLE
    Usuario (
        email varchar(255) primary key,
        nome varchar(100) not null,
        data_nascimento date not null,
        foto blob,
        senha varchar(100) not null,
        usuario varchar(100) not null,
        cargo varchar(255)
    );

CREATE TABLE
    Bugs (
        ID_Bug int (5) primary key auto_increment,
        descricao varchar(300) not null,
        data_contato date,
        data_correcao date
    );

CREATE TABLE
    Interacao (
        ID_Interacao int (5) primary key auto_increment,
        ID_Bug int (5),
        email_usuario varchar(255),
        CONSTRAINT fk_interacao_bugs FOREIGN KEY (ID_Bug) REFERENCES Bugs (ID_Bug),
        CONSTRAINT fk_interacao_usuario FOREIGN KEY (email_usuario) REFERENCES Usuario (email)
    );

CREATE TABLE
    Irrigacao (
        ID_Irrigacao int (5) primary key auto_increment,
        quantidade decimal(10, 5),
        ligado boolean,
        tempo time,
        data date
    );

CREATE TABLE
    Umidade (
        ID_Umidade int (5) primary key auto_increment,
        ligado boolean not null,
        umidade decimal(10, 5) not null,
        data_captura timestamp
    );

CREATE TABLE
    Temperatura (
        ID_Temperatura int (5) primary key auto_increment,
        ligado boolean not null,
        temperatura decimal(10, 5) not null,
        data_captura timestamp
    );

CREATE TABLE
    NivelAgua (
        ID_Nivel_Agua int (5) primary key auto_increment,
        ligado boolean not null,
        nivel_agua decimal(10, 5) not null,
        data_captura timestamp
    );

CREATE TABLE
    Iluminacao (
        ID_Iluminacao int (5) primary key auto_increment,
        ligado boolean not null,
        iluminacao decimal(10, 5) not null,
        data_captura timestamp
    );

CREATE TABLE
    PlantasOrnamentais (
        nome_cientifico varchar(200) primary key,
        nome_popular varchar(100),
        data_inicio_florescimento date,
        data_fim_flroescimento date,
        idade_minima_florescimento int (5),
        Quantidade_Agua_Regacao decimal(10, 5),
        temperatura_ideal decimal(10, 5),
        umidade_ideal decimal(10, 5),
        iluminacao_ideal decimal(10, 5),
        foto_planta blob
    );

CREATE TABLE
    Dicas (
        ID_Dicas int (5) primary key auto_increment,
        titulo varchar(100),
        subtitulo varchar(100),
        corpo varchar(300),
        imagens_icons blob,
        nome_cientifico varchar(200),
        CONSTRAINT fk_dicas_plantas_ornamentais FOREIGN KEY (nome_cientifico) REFERENCES PlantasOrnamentais (nome_cientifico)
    );

CREATE TABLE
    MinhasPlantas (
        ID_Planta int (5) primary key auto_increment,
        Data_Nascimento date,
        Apelido varchar(100),
        Cor varchar(50),
        email_usuario varchar(255),
        nome_cientifico varchar(200),
        CONSTRAINT fk_minhas_plantas_usuario FOREIGN KEY (email_usuario) REFERENCES Usuario (email),
        CONSTRAINT fk_minhas_plantas_plantas_ornamentais FOREIGN KEY (nome_cientifico) REFERENCES PlantasOrnamentais (nome_cientifico)
    );

CREATE TABLE
    Historico (
        ID_Historico int (5) primary key auto_increment,
        ID_Iluminacao int (5),
        ID_Nivel_Agua int (5),
        ID_Temperatura int (5),
        ID_Umidade int (5),
        ID_Planta int (5),
        CONSTRAINT fk_historico_iluminacao FOREIGN KEY (ID_Iluminacao) REFERENCES Iluminacao (ID_Iluminacao),
        CONSTRAINT fk_historico_nivel_agua FOREIGN KEY (ID_Nivel_Agua) REFERENCES NivelAgua (ID_Nivel_Agua),
        CONSTRAINT fk_historico_temperatura FOREIGN KEY (ID_Temperatura) REFERENCES Temperatura (ID_Temperatura),
        CONSTRAINT fk_historico_umidade FOREIGN KEY (ID_Umidade) REFERENCES Umidade (ID_Umidade),
        CONSTRAINT fk_historico_minhas_plantas FOREIGN KEY (ID_Planta) REFERENCES MinhasPlantas (ID_Planta)
    );