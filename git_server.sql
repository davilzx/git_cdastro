-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS git_server;
USE git_server;

-- Tabela cliente
CREATE TABLE IF NOT EXISTS cliente (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  telefone VARCHAR(20) NOT NULL
);

-- Tabela login
CREATE TABLE IF NOT EXISTS login (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_user VARCHAR(50) NOT NULL,
  senha VARCHAR(256) NOT NULL
);

-- Tabela frases
CREATE TABLE IF NOT EXISTS frases (
  id INT AUTO_INCREMENT PRIMARY KEY,
  frase_texto TEXT NOT NULL
);

-- Tabela usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome_usuario VARCHAR(50) NOT NULL,
  senha VARCHAR(256) NOT NULL
);

-- Tabela cliente_login_rel (para relacionar clientes e logins)
CREATE TABLE IF NOT EXISTS cliente_login_rel (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT NOT NULL,
  login_id INT NOT NULL,
  FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE,
  FOREIGN KEY (login_id) REFERENCES login(id) ON DELETE CASCADE
);

-- Tabela cliente_frases_rel (para relacionar clientes e frases)
CREATE TABLE IF NOT EXISTS cliente_frases_rel (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT NOT NULL,
  frase_id INT NOT NULL,
  FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE,
  FOREIGN KEY (frase_id) REFERENCES frases(id) ON DELETE CASCADE
);

-- Tabela cliente_usuarios_rel (para relacionar clientes e usuários)
CREATE TABLE IF NOT EXISTS cliente_usuarios_rel (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT NOT NULL,
  usuario_id INT NOT NULL,
  FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Adicionar administradores
INSERT INTO usuarios (nome_usuario, senha) VALUES ('hh', SHA2('popopipi', 256)), ('jj', SHA2('piriri', 256));

-- Adicionar logins relacionados aos clientes (Exemplo)
INSERT INTO login (nome_user, senha) VALUES
('cliente1_user', SHA2('senha_cliente1', 256)),
('cliente2_user', SHA2('senha_cliente2', 256)),
('cliente3_user', SHA2('senha_cliente3', 256)),
('cliente4_user', SHA2('senha_cliente4', 256)),
('cliente5_user', SHA2('senha_cliente5', 256));

-- Adicionar frases relacionadas aos clientes (Exemplo)
INSERT INTO frases (frase_texto) VALUES
('Frase 1 do cliente 1'),
('Frase 2 do cliente 1'),
('Frase 1 do cliente 2'),
('Frase 1 do cliente 3'),
('Frase 1 do cliente 4');

