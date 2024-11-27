    create database PROJ_SOFT;

    USE PROJ_SOFT;

    CREATE TABLE USER (
        ID_USER INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        USER_NAME VARCHAR(100),
        EMAIL VARCHAR(100) NOT NULL,
        PASSWORD VARCHAR(20) NOT NULL,
        ORDER_ID INT -- Modificado para INT
    );

    CREATE TABLE RESGATE (
        ID_RESGATE INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        NOME VARCHAR(30) NOT NULL,
        RAÇA VARCHAR(20) NOT NULL,
        SEXO ENUM('Macho', 'Fêmea'),
        LOCALIZACAO VARCHAR(255),
        IMAGEM VARCHAR(255)
    );

    CREATE TABLE PRODUCT (
        ID_PRODUCT INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        PRODUCT_NAME VARCHAR(100),
        PRECO INT NOT NULL
    );

    CREATE TABLE ORDERS (
        ID_ORDER INT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- Identificador único do pedido
        ID_USER INT NOT NULL, -- Referência ao usuário que fez o pedido
        ID_PRODUCT INT NOT NULL, -- Referência ao produto pedido
        QUANTITY INT NOT NULL, -- Quantidade do produto pedido
        ORDER_DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data e hora em que o pedido foi feito
        FOREIGN KEY (ID_USER) REFERENCES USER(ID_USER), -- Chave estrangeira referenciando a tabela USER
        FOREIGN KEY (ID_PRODUCT) REFERENCES PRODUCT(ID_PRODUCT) -- Chave estrangeira referenciando a tabela PRODUCT
    );

