DROP DATABASE IF EXISTS smart_eco;

CREATE DATABASE IF NOT EXISTS smart_eco;

USE smart_eco;

CREATE TABLE
    usuario (
        email VARCHAR(255) PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        data_nascimento DATE NOT NULL,
        foto VARCHAR(255),
        senha VARCHAR(100) NOT NULL,
        usuario VARCHAR(100) NOT NULL,
        cargo VARCHAR(255)
    );

CREATE TABLE
    bugs (
        id_bug INT (5) PRIMARY KEY auto_increment,
        descricao VARCHAR(300) NOT NULL,
        data_contato DATE,
        data_correcao DATE
    );

CREATE TABLE
    interacao (
        id_interacao INT (5) PRIMARY KEY auto_increment,
        id_bug INT (5),
        email_usuario VARCHAR(255),
        CONSTRAINT fk_interacao_bugs FOREIGN KEY (id_bug) REFERENCES bugs (id_bug),
        CONSTRAINT fk_interacao_usuario FOREIGN KEY (email_usuario) REFERENCES usuario (email)
    );

CREATE TABLE
    irrigacao (
        id_irrigacao INT (5) PRIMARY KEY auto_increment,
        quantidade DECIMAL(10, 5),
        ligado BOOLEAN,
        tempo TIME,
        data DATE
    );

CREATE TABLE
    umidade (
        id_umidade INT (5) PRIMARY KEY auto_increment,
        ligado BOOLEAN NOT NULL,
        umidade DECIMAL(5, 5) NOT NULL,
        data_captura TIMESTAMP
    );

CREATE TABLE
    temperatura (
        id_temperatura INT (5) PRIMARY KEY auto_increment,
        ligado BOOLEAN NOT NULL,
        temperatura DECIMAL(10, 5) NOT NULL,
        data_captura TIMESTAMP
    );

CREATE TABLE
    nivel_agua (
        id_nivel_agua INT (5) PRIMARY KEY auto_increment,
        ligado BOOLEAN NOT NULL,
        nivel_agua DECIMAL(10, 5) NOT NULL,
        data_captura TIMESTAMP
    );

CREATE TABLE
    iluminacao (
        id_iluminacao INT (5) PRIMARY KEY auto_increment,
        ligado BOOLEAN NOT NULL,
        iluminacao DECIMAL(10, 5) NOT NULL,
        data_captura TIMESTAMP
    );

CREATE TABLE
    plantas_ornamentais (
        nome_cientifico VARCHAR(200) PRIMARY KEY,
        nome_popular VARCHAR(100),
        data_inicio_florescimento DATE,
        data_fim_flroescimento DATE,
        idade_minima_florescimento INT (5),
        quantidade_agua_regacao DECIMAL(10, 5),
        temperatura_ideal DECIMAL(10, 5),
        umidade_ideal DECIMAL(10, 5),
        iluminacao_ideal DECIMAL(10, 5),
        foto_planta VARCHAR(255)
    );

CREATE TABLE
    dicas (
        id_dicas INT(5) PRIMARY KEY auto_increment,
        titulo VARCHAR(100),
        subtitulo VARCHAR(100),
        corpo VARCHAR(300),
        imagens_icons VARCHAR(255),
        nome_cientifico VARCHAR(200),
        CONSTRAINT fk_dicas_plantas_ornamentais FOREIGN KEY (nome_cientifico) REFERENCES plantas_ornamentais(nome_cientifico)
    );

CREATE TABLE
    minhas_plantas (
        id_planta INT(5) PRIMARY KEY auto_increment,
        data_nascimento DATE,
        apelido VARCHAR(100),
        cor VARCHAR(50),
        email_usuario VARCHAR(255),
        nome_cientifico VARCHAR(200),
        CONSTRAINT fk_minhas_plantas_usuario FOREIGN KEY (email_usuario) REFERENCES usuario(email),
        CONSTRAINT fk_minhas_plantas_plantas_ornamentais FOREIGN KEY (nome_cientifico) REFERENCES plantas_ornamentais(nome_cientifico)
    );

CREATE TABLE
    historico (
        id_historico INT (5) PRIMARY KEY auto_increment,
        id_iluminacao INT (5),
        id_nivel_agua INT (5),
        id_temperatura INT (5),
        id_umidade INT (5),
        id_planta INT (5),
        CONSTRAINT fk_historico_iluminacao FOREIGN KEY (id_iluminacao) REFERENCES iluminacao (id_iluminacao),
        CONSTRAINT fk_historico_nivel_agua FOREIGN KEY (id_nivel_agua) REFERENCES nivel_agua (id_nivel_agua),
        CONSTRAINT fk_historico_temperatura FOREIGN KEY (id_temperatura) REFERENCES temperatura (id_temperatura),
        CONSTRAINT fk_historico_umidade FOREIGN KEY (id_umidade) REFERENCES umidade (id_umidade),
        CONSTRAINT fk_historico_minhas_plantas FOREIGN KEY (id_planta) REFERENCES minhas_plantas (id_planta)
    );