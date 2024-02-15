DROP DATABASE IF EXISTS armas;
CREATE DATABASE IF NOT EXISTS armas;
USE armas;

CREATE TABLE Armamentos (
	ID INT PRIMARY KEY,
    Tamanho VARCHAR(50),
    Magica TINYINT,
    TipodeMunicao VARCHAR(50),
    Estoque INT
);

CREATE TABLE DescricaoArmamento(
	ID int,
    Tipo VARCHAR(100),
    Descricao VARCHAR(200),
    EstiloDano VARCHAR(50),
    FOREIGN KEY (ID) REFERENCES Armamentos(ID)
);

CREATE TABLE Agente (
	ID INT PRIMARY KEY,
    Nome VARCHAR(150),
    Senha VARCHAR(100),
    Patente varchar(40)
);

INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (1, "Olav", "Olivia", "General de Operações");
INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (2, "Matteo", "Pamella", "Agente de Elite");
INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (3, "Pamella", "Matteo", "Agente de Elite");
INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (4, "Guinevere", "Lancelot", "Agente de Elite");
INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (5, "Tristan", "M4", "Agente de Elite");
INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (6, "Ivan", "Jorik", "Operador");
INSERT INTO Agente (ID, Nome, Senha, Patente) VALUES (7, "Jorik", "Fin", "Operador");


INSERT INTO Armamentos (ID, Tamanho, Magica, TipodeMunicao, Estoque) VALUES (1, "Grande", 0, "Grande", 10);
INSERT INTO Armamentos (ID, Tamanho, Magica, TipodeMunicao, Estoque) VALUES (2, "Pequena", 0, "Pequena", 20);
INSERT INTO Armamentos (ID, Tamanho, Magica, TipodeMunicao, Estoque) VALUES (3, "Média", 0, "Média", 5);
INSERT INTO Armamentos (ID, Tamanho, Magica, TipodeMunicao, Estoque) VALUES (4, "Pequena", 1, "Nada", 2);

INSERT INTO DescricaoArmamento (ID, Tipo, Descricao, EstiloDano) VALUES (1, "Fuzil de Precisão", "Fuzil de Precisão como Snipers","Balistico");
INSERT INTO DescricaoArmamento (ID, Tipo, Descricao, EstiloDano) VALUES (2, "Pistola", "Pistola Pequena como Glock","Balistico");
INSERT INTO DescricaoArmamento (ID, Tipo, Descricao, EstiloDano) VALUES (3, "Fuzil de Assalto", "Fuzil Médio de Assalto como M4","Balistico");
INSERT INTO DescricaoArmamento (ID, Tipo, Descricao, EstiloDano) VALUES (4, "Faca de Ritual", "Faca Ritualistica encontrada em locais paranormais","?");

