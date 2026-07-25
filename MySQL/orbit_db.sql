CREATE DATABASE orbit_db;
USE orbit_db;
CREATE TABLE usuario(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(12) NOT NULL,
    telefone VARCHAR(20),
    biografia VARCHAR(255)
);
CREATE TABLE tutor (
    id_usuario INT PRIMARY KEY,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);
CREATE TABLE estudante (
    id_usuario INT PRIMARY KEY,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);
CREATE TABLE verificacao_tutor (
    id_verificacao INT AUTO_INCREMENT PRIMARY KEY,
    data_verificacao DATE,
    documentos VARCHAR(100),
    tipo_verificacao VARCHAR(100),
    aprovador VARCHAR(100),
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);
CREATE TABLE curso (
    id_curso INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    descricao VARCHAR(100),
    categoria VARCHAR(50),
    nivel VARCHAR(20) NOT NULL,
    idioma VARCHAR(50),
    carga_horaria INT NOT NULL,
    capa VARCHAR(50),
    banner VARCHAR(50),
    nota_media DECIMAL(3,1),
    data_publicacao DATE,
    status_curso VARCHAR(50),
    quantidade_avaliacoes SMALLINT UNSIGNED DEFAULT 0,
    id_usuario INT,
    preco_curso DECIMAL (10,2) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);
CREATE TABLE progresso_curso (
    id_progresso_curso INT AUTO_INCREMENT PRIMARY KEY,
    porcentagem DECIMAL(5,2),
    data_ultimo_acesso DATE,
    status_progresso_curso VARCHAR(50) DEFAULT 'Em andamento',
    id_usuario INT,
    id_curso INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario),
    FOREIGN KEY (id_curso) REFERENCES curso (id_curso)
    
);
CREATE TABLE certificado (
    id_certificado INT AUTO_INCREMENT PRIMARY KEY,
    codigo_validacao VARCHAR(20),
    data_emissao DATE,
    status_certificado VARCHAR(50),
    id_usuario INT,
    id_curso INT,
 FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario),
 FOREIGN KEY (id_curso) REFERENCES curso (id_curso)
    
);
CREATE TABLE modulo (
    id_modulo INT AUTO_INCREMENT PRIMARY KEY ,
    titulo VARCHAR(50),
    descricao VARCHAR(100),
    ordem SMALLINT,
    id_curso INT,
    FOREIGN KEY (id_curso) REFERENCES curso (id_curso)
);
CREATE TABLE aula (
    id_aula INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(50),
    descricao VARCHAR(100),
    tipo_conteudo VARCHAR(100),
    duracao TIME,
    ordem SMALLINT,
    id_modulo INT,
    FOREIGN KEY (id_modulo) REFERENCES modulo (id_modulo)
);
CREATE TABLE estudante_aula (
    id_usuario INT,
    id_aula INT,
    PRIMARY KEY (id_usuario, id_aula),
 FOREIGN KEY (id_usuario) REFERENCES estudante(id_usuario),
    FOREIGN KEY (id_aula) REFERENCES aula(id_aula)
);
CREATE TABLE estudante_curso (
    id_usuario INT,
    id_curso INT,
    PRIMARY KEY (id_usuario, id_curso),
    FOREIGN KEY (id_usuario) REFERENCES estudante(id_usuario),
    FOREIGN KEY (id_curso) REFERENCES curso(id_curso)
);