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
        data_fim_florescimento DATE,
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


INSERT INTO Usuario VALUES ("okamoto@gmail.com", "Okamoto", "2023-07-07", "usuario.png", "12345", "okamoto", "ROLE_USUARIO"),
("odake@gmail.com", "Odake", "2023-08-08", "usuario.png", "12345", "odake", "ROLE_USUARIO"), ("hioji@gmail.com", "Hioji", "2023-09-09", "usuario.png", "12345", "hioji", "ROLE_USUARIO");
 
INSERT INTO bugs(descricao, data_contato, data_correcao) VALUES ("Não consigo excluir minha planta!", "2023-01-01", "2023-02-02"), ("Carregamento lento da enciclopédia", "2023-05-05", "2023-06-07"), ("Erro nos sensores", "2023-08-08", "2023-09-12");
 
INSERT INTO interacao(id_bug, email_usuario) VALUES (1, "okamoto@gmail.com"), (2, "odake@gmail.com"), (3, "odake@gmail.com");
 
INSERT INTO irrigacao (quantidade, ligado, tempo) VALUES (10.32, true, "01:30"), (32.10, false, "00:45"), (40.123, false, "01:00");
 
INSERT INTO umidade (ligado, umidade, data_captura) VALUES (true, 30.0, "2023-01-01 06:30"), (true, 31.05, "2023-02-01 09:32"), (true, 32.10, "2023-04-03 10:30");
 
INSERT INTO temperatura (ligado, temperatura, data_captura) VALUES (true, 12.50, "2023-01-01 06:30"), (true, 41.05, "2023-02-01 09:32"), (true, 10.10, "2023-04-03 10:30");
 
INSERT INTO nivel_agua (ligado, nivel_agua, data_captura) VALUES (true, 89.0, "2023-01-01 06:30"), (true, 32.05, "2023-02-01 09:32"), (true, 90.10, "2023-04-03 10:30");
 
INSERT INTO iluminacao (ligado, iluminacao, data_captura) VALUES (true, 21.10, "2023-01-01 06:30"), (true, 19.05, "2023-02-01 09:32"), (true, 30.10, "2023-04-03 10:30");
INSERT INTO plantas_ornamentais VALUES ("Phalaenopsis spp", "Orquídea borboleta", "2023-10-10", "2023-11-14", 5, 30, 25, 15, 23, "orquidea_borboleta.png"), ("Cattleya spp", "Orquídea rainha", "2024-01-10", "2023-03-30", 3, 35, 35, 15, 60, "orquidea_rainha.png"), ("Dendrobium spp", "Orquídea bambu", "2023-12-01", "2024-01-30", 6, 36.2, 56.32, 12.51, 74.23, "orquidea_bambu.png");
 
INSERT INTO dicas (titulo, subtitulo, corpo, imagens_icons, nome_cientifico) VALUES ("Cuidados com a Orquídea Borboleta", "Temperatura", "Cuidado com a temperatura dessa planta, pois ela é muito sensível", "calor.png", "Phalaenopsis spp"), ("Adubagem com a orquídea bambu", "Como realizar a adubação de forma correta", "Para realizar a adubação dessa planta, é necessário a utilização de cascas de ovos e muitos restos de frutas", "adubagem.png", "Dendrobium spp"), 
("Irrigação Excessiva em Orquídeas Rainhas", "Os perígos de utilizar muita água", "As orquídeas rainhas possuem uma alta vulnerabilidade a grandes quantidades de água, podendo ocasionar em problemas de saúde na planta", "agua.png", "Cattleya spp");
 
INSERT INTO minhas_plantas(data_nascimento, apelido, cor, email_usuario, nome_cientifico) VALUES 
("2023-05-01", "Vermelinha", "Vermelha-Rosa", "okamoto@gmail.com", "Cattleya spp"),
("2023-10-10", "Azulzinha", "Azul-Marinho", "hioji@gmail.com", "Phalaenopsis spp"),
("2023-11-10", "Amarelinha", "Amarelo", "odake@gmail.com", "Dendrobium spp");
 
INSERT INTO historico (id_iluminacao, id_nivel_agua, id_temperatura, id_umidade, id_planta) VALUES 
(1, 1, 1, 1, 1),
(2, 2, 2, 2, 2),
(3, 3, 3, 3, 3);